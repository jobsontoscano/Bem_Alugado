<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Wishes Controller
 *
 * @property \App\Model\Table\WishesTable $Wishes
 *
 * @method \App\Model\Entity\Wish[] paginate($object = null, array $settings = [])
 */
class WishesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $wishes = $this->paginate($this->Wishes);

        $this->set(compact('wishes'));
        $this->set('_serialize', ['wishes']);
    }

    /**
     * View method
     *
     * @param string|null $id Wish id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
      

        $this->set('wish', $wish);
        $this->set('_serialize', ['wish']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {   
        $wish = $this->Wishes->newEntity();
        $id_user = $_GET['id_user'];
        $id_propertie = $_GET['id_propertie'];
        if (isset($id_user) && isset($id_propertie)) {
          $wish = $this->Wishes->patchEntity($wish, $this->request->getData());
          $wish->id_user = $id_user;
          $wish->id_propertie = $id_propertie;
            if ($this->Wishes->save($wish)) {
                $this->Flash->success(__('The wish has been saved.'));

                return $this->redirect(['controller' => 'Properties', 'action' => 'index']);
            }
            $this->Flash->error(__('The wish could not be saved. Please, try again.'));
        }
        $this->set(compact('wish'));
        $this->set('_serialize', ['wish']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Wish id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $wish = $this->Wishes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $wish = $this->Wishes->patchEntity($wish, $this->request->getData());
            if ($this->Wishes->save($wish)) {
                $this->Flash->success(__('The wish has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The wish could not be saved. Please, try again.'));
        }
        $this->set(compact('wish'));
        $this->set('_serialize', ['wish']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Wish id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $wish = $this->Wishes->get($id);
        if ($this->Wishes->delete($wish)) {
            $this->Flash->success(__('The wish has been deleted.'));
        } else {
            $this->Flash->error(__('The wish could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
