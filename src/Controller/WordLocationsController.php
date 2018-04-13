<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * WordLocations Controller
 *
 * @property \App\Model\Table\WordLocationsTable $WordLocations
 *
 * @method \App\Model\Entity\WordLocation[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class WordLocationsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Words']
        ];
        $wordLocations = $this->paginate($this->WordLocations);

        $this->set(compact('wordLocations'));
    }

    public function findByWordId($id = null) {
        $this->set('locations', $this->WordLocations->find()->where(['word_id' => $id]));
    }

    /**
     * View method
     *
     * @param string|null $id Word Location id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $wordLocation = $this->WordLocations->get($id, [
            'contain' => ['Words']
        ]);

        $this->set('wordLocation', $wordLocation);
    }


    public function deleteurl() {

        if ($this->request->is('post')) {
            if (null != $this->request->getData('url')) {
                $url = $this->request->getData('url');
                $locations = $this->WordLocations->find()->where(['url LIKE' => '%' . $this->request->getData('url') . '%'])->count();
                $this->set('locations', $locations);
                $this->set('url', $url);
            }
            if (null != $this->request->getData('go')) {
                $locationcount = 0;
                $wordcount = 0;

                $locations = $this->WordLocations->find()->where(['url LIKE' => '%' . $this->request->getData('url') . '%'])->contain(['Words']);
                foreach ($locations as $location) {
                    if (!empty ($location['words'])) {
                        foreach ($location['words'] as $word) {
                            $this->WordLocations->Words->delete($word);
                            $wordcount ++;
                        }
                    }
                    $this->WordLocations->delete($location);
                    $locationcount ++;
                }
                $this->Flash->success(__('Deleted %s locations and %s words', [$locationcount, $wordcount]));
            }
        }
    }
    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $wordLocation = $this->WordLocations->newEntity();
        if ($this->request->is('post')) {
            $wordLocation = $this->WordLocations->patchEntity($wordLocation, $this->request->getData());
            if ($this->WordLocations->save($wordLocation)) {
                $this->Flash->success(__('The word location has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The word location could not be saved. Please, try again.'));
        }
        $words = $this->WordLocations->Words->find('list', ['limit' => 200]);
        $this->set(compact('wordLocation', 'words'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Word Location id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $wordLocation = $this->WordLocations->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $wordLocation = $this->WordLocations->patchEntity($wordLocation, $this->request->getData());
            if ($this->WordLocations->save($wordLocation)) {
                $this->Flash->success(__('The word location has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The word location could not be saved. Please, try again.'));
        }
        $words = $this->WordLocations->Words->find('list', ['limit' => 200]);
        $this->set(compact('wordLocation', 'words'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Word Location id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $wordLocation = $this->WordLocations->get($id);
        if ($this->WordLocations->delete($wordLocation)) {
            $this->Flash->success(__('The word location has been deleted.'));
        } else {
            $this->Flash->error(__('The word location could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
