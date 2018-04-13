<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * LinkSuggestions Controller
 *
 * @property \App\Model\Table\LinkSuggestionsTable $LinkSuggestions
 *
 * @method \App\Model\Entity\LinkSuggestion[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class LinkSuggestionsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $linkSuggestions = $this->paginate($this->LinkSuggestions);

        $this->set(compact('linkSuggestions'));
    }

    /**
     * View method
     *
     * @param string|null $id Link Suggestion id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $linkSuggestion = $this->LinkSuggestions->get($id, [
            'contain' => []
        ]);

        $this->set('linkSuggestion', $linkSuggestion);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $linkSuggestion = $this->LinkSuggestions->newEntity();
        if ($this->request->is('post')) {
            $linkSuggestion = $this->LinkSuggestions->patchEntity($linkSuggestion, $this->request->getData());
            if ($this->LinkSuggestions->save($linkSuggestion)) {
                $this->Flash->success(__('Thank you for your suggestion. The starting link has been added. Stay tuned...'));

                return $this->redirect(['action' => 'friends', 'controller' => 'words']);
            }
            $this->Flash->error(__('The link suggestion could not be saved. Please, try again.'));
        }
        $this->set(compact('linkSuggestion'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Link Suggestion id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $linkSuggestion = $this->LinkSuggestions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $linkSuggestion = $this->LinkSuggestions->patchEntity($linkSuggestion, $this->request->getData());
            if ($this->LinkSuggestions->save($linkSuggestion)) {
                $this->Flash->success(__('The link suggestion has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The link suggestion could not be saved. Please, try again.'));
        }
        $this->set(compact('linkSuggestion'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Link Suggestion id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $linkSuggestion = $this->LinkSuggestions->get($id);
        if ($this->LinkSuggestions->delete($linkSuggestion)) {
            $this->Flash->success(__('The link suggestion has been deleted.'));
        } else {
            $this->Flash->error(__('The link suggestion could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
