<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Words Controller
 *
 * @property \App\Model\Table\WordsTable $Words
 *
 * @method \App\Model\Entity\Word[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class WordsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Languages']
        ];
        $words = $this->paginate($this->Words);

        $this->set(compact('words'));
    }

    public function deleteNoLocation() {
        $this->autorender = false;
        $words = $this->Words->find()->contain(['WordLocations'])->where('');
    }
    /**
     * View method
     *
     * @param string|null $id Word id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $word = $this->Words->get($id, [
            'contain' => ['Languages', 'WordLocations']
        ]);

        $this->set('word', $word);
    }

    public function setlang($lang) {
        if (in_array($lang, ['en', 'it', 'hu'])) {
            $this->request->session()->write('Language', $lang);
            $this->redirect($this->referer());

        } else {
            $this->Flash->error(__('Currently that language is not supported ;)'));
            $this->redirect($this->referer());
        }
    }

    public function friends () {

        $words = $this->Words->findFriends();
        $wordscount = $words->count();
        $languages = $this->Words->Languages->find();
        $this->set(compact ('words', 'languages', 'flagged', 'wordscount'));
    }

    public function flagged () {

        $words = $this->Words->find()->where(['flag' => true]);
        $languages = $this->Words->Languages->find();
        $this->set(compact ('words', 'languages'));
        $this->render('friends');
    }

    public function friendLocations ($word = null, $language = null) {
        $this->set('locations', $this->Words->findByWordAndLanguageId($word, $language)->contain(['WordLocations'])->first()->extract(['word_locations']));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        if ($this->request->is('post')) {
            $word = $this->Words->newEntity();

            $word = $this->Words->patchEntity($word, $this->request->getData())
            ;
            if ($this->Words->save($word)) {
                $this->Flash->success(__('The word has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The word could not be saved. Please, try again.'));
        }
        if ($this->request->is('put')) {
            $phrase = $this->strip_punctuation($this->request->getData('word'));
            $restext = '';
            foreach ($phrase as $incoming) {
                if ($incoming != '') {
                    $existing = $this->Words->findByWordAndLanguageId($incoming, $this->request->getData('language_id'))->first();
                    if (null != $existing) { // MÁR VAN ILYEN SZÓ
                        $result = $this->Words->WordLocations->addAdditional($existing->id, $this->request->getData('url'));
                        $restext .= $incoming . ' (LANG:'.  $this->request->getData('language_id') .') ' .  $result . '
';
                    } else { // hurrá, új szó az adott nyelven
                        $word = $this->Words->patchEntity($this->Words->newEntity(), ['word' => $incoming, 'language_id' => $this->request->getData('language_id'), 'url' =>  $this->request->getData('url')]);
                        if ($result = $this->Words->save($word)) {
                            $this->Words->WordLocations->addAdditional($result->id, $this->request->getData('url'));
                            $restext .= $result->word . ': NEW () ' . $result->id .'
';
                        } else {
                            $restext .= '\''. $incoming .'\'' .  ': Could not save
';
                        }
                    }
                }

            }
            return $this->response->withStringBody($restext);
        }
    }

    private function strip_punctuation($string) {
        $string = strtolower($string);
        $pattern_page = array("0","1","2","3","4","5","6","7","8","9","“","”","+", "  ", "   ", "	" ,",",".","-","'","\"","&","!","?",":",";","#","~","=","/","$","£","^","(",")","_","<",">");
        $string = str_replace($pattern_page, "", $string);
        $phrase = explode(" ", $string);
        return $phrase;
    }

    public function deleteWithPairs() {
        if ($this->request->is('post')) {
            $word = $this->Words->get($this->request->getData('id'));
            $friends = $this->Words->find()->where(['word' => $word['word']])->toArray();
            foreach ($friends as $friend) {
                $this->Words->delete($friend);
            }
        }
        return $this->response->withStringBody('deleted');
    }
    public function hideWithPairs() {
        if ($this->request->is('post')) {
            $word = $this->Words->get($this->request->getData('id'));
            $friends = $this->Words->find()->where(['word' => $word['word']])->toArray();
            foreach ($friends as $friend) {
                $this->Words->hide($friend['id']);
            }
        }
        return $this->response->withStringBody('hidden');
    }
    /**
     * Edit method
     *
     * @param string|null $id Word id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $word = $this->Words->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $word = $this->Words->patchEntity($word, $this->request->getData());
            if ($this->Words->save($word)) {
                $this->Flash->success(__('The word has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The word could not be saved. Please, try again.'));
        }
        $languages = $this->Words->Languages->find('list', ['limit' => 200]);
        $this->set(compact('word', 'languages'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Word id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $word = $this->Words->get($id);
        if ($this->Words->delete($word)) {
            $this->Flash->success(__('The word has been deleted.'));
        } else {
            $this->Flash->error(__('The word could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
