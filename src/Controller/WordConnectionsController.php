<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * WordConnections Controller
 *
 * @property \App\Model\Table\WordConnectionsTable $WordConnections
 *
 * @method \App\Model\Entity\WordConnection[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class WordConnectionsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $wordConnections = $this->WordConnections->find()->contain( ['FromWords', 'ToWords', 'Classifications'])->where(['from_meaning IS NULL', 'classification_id IS NULL']);

        $this->set(compact('wordConnections'));
    }

    public function addconnection() {
        if ($this->request->is('post')) {
            $connection = $this->WordConnections->newEntity();
            $from = $this->WordConnections->Words->findById($this->request->getData('id'))->first();
            $to = $this->WordConnections->Words->findByWord($from['word'])->where(['language_id !=' => $from['language_id'] ])->first();
            $connection->from_id = $from['id'];
            $connection->to_id = $to['id'];
            if($result = $this->WordConnections->save($connection)) {
                $this->WordConnections->Words->flag($from['id']);
                $this->WordConnections->Words->flag($to['id']);
                return $this->response->withStringBody($result->id);
            }
        }
    }


    /**
     * View method
     *
     * @param string|null $id Word Connection id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $wordConnection = $this->WordConnections->get($id, [
            'contain' => ['FromWords', 'ToWords', 'Classifications']
        ]);

        $this->set('wordConnection', $wordConnection);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $wordConnection = $this->WordConnections->newEntity();
        if ($this->request->is('post')) {
            $wordConnection = $this->WordConnections->patchEntity($wordConnection, $this->request->getData());
            if ($this->WordConnections->save($wordConnection)) {
                $this->Flash->success(__('The word connection has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The word connection could not be saved. Please, try again.'));
        }
        $fromWords = $this->WordConnections->FromWords->find('list', ['limit' => 200]);
        $toWords = $this->WordConnections->ToWords->find('list', ['limit' => 200]);
        $classifications = $this->WordConnections->Classifications->find('list', ['limit' => 200]);
        $this->set(compact('wordConnection', 'fromWords', 'toWords', 'classifications'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Word Connection id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $wordConnection = $this->WordConnections->get($id, [
            'contain' => ['fromWords.Languages', 'toWords.Languages']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $wordConnection = $this->WordConnections->patchEntity($wordConnection, $this->request->getData());
            if (($wordConnection['from_meaning'] != null) || ($wordConnection['to_meaning'] != null)) {$wordConnection->completed = true;} else {$wordConnection->completed = false;}
            if ($this->request->session()->check('Name') && empty($wordConnection->completed_by) )
                {
                        $wordConnection->completed_by = $this->request->session()->read('Name');
                        $this->loadModel('Scores');
                        $this->Scores->addpoints($this->request->session()->read('Name'), 'explain');
                }
            if ($this->WordConnections->save($wordConnection)) {
                $this->addPoints(4);

                $this->Flash->success(__('The word connection has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The word connection could not be saved. Please, try again.'));
        }
        $classifications = $this->WordConnections->Classifications->find('list', ['limit' => 200]);
        $this->set(compact('wordConnection', 'fromWords', 'toWords', 'classifications'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Word Connection id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $wordConnection = $this->WordConnections->get($id);
        $this->WordConnections->fromWords->unflag($wordConnection->from_id);
        $this->WordConnections->toWords->unflag($wordConnection->to_id);
        if ($this->WordConnections->delete($wordConnection)) {
            $this->Flash->success(__('The word connection has been deleted.'));
        } else {
            $this->Flash->error(__('The word connection could not be deleted. Please, try again.'));
        }

        return $this->redirect($this->referer());
    }
}
