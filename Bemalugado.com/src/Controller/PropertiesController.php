<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Mailer\Email;


/**
 * Properties Controller
 *
 * @property \App\Model\Table\PropertiesTable $Properties
 *
 * @method \App\Model\Entity\Property[] paginate($object = null, array $settings = [])
 */
class PropertiesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function initialize(){
        parent::initialize();
        $this->loadModel('Files');

    }
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users', 'Contracts', 'Files']
        ];
        $properties = $this->paginate($this->Properties);

        $this->set(compact('properties'));
        $this->set('_serialize', ['properties']);
    }

    /**
     * View method
     *
     * @param string|null $id Property id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $property = $this->Properties->get($id, [
            'contain' => ['Users', 'Contracts','Files']
        ]);

        $this->set('property', $property);
        $this->set('_serialize', ['property']);
    }

    public function isAuthorized($user){
        if ($this->request->getParam('action') === 'add') {
                return true;
        }
        if (in_array($this->request->getParam('action'), ['edit', 'delete','activate'])) {
            $propertyid = (int)$this->request->getParam('pass.0');
            if ($this->Properties->isOwnedBy($propertyid, $user['id'])) {
                return true;
            }
        }
        return parent::isAuthorized($user);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */

    public function add()
    {
        $property = $this->Properties->newEntity();
        if ($this->request->is('post')) {
            //Envio de email, para validar o imovel do usuário logado
            $property = $this->Properties->patchEntity($property, $this->request->getData());
            $property->id_user = $this->Auth->user('id');
            $property->status = 1; 
            $property->ativo = 0;
            $user = $this->request->session()->read('Auth.User');
            $property->active_code = md5("123456abcdef");

            //Upload de imagens
            $extension = pathinfo($this->request->data['id_file']['name'], PATHINFO_EXTENSION);
            $image = $this->Files->uploadAndSaveFile($this->request->data['id_file']['tmp_name'],'/uploads/','imovel_'.uniqid(rand(), true).'.'.$extension);
            if($image){
                $property->id_file = $image->id;
            }else{
                $this->Flash->error(__('Problema ao tentar Enviar imagem'));
            }
         

            if ($this->Properties->save($property)) {
                $this->Flash->success(__('Email Enviado para realização de segurança, por favor verificar email'));
                $email = new Email('default');
                $email->from(["bemalugado.com@gmail.com" => "[BEMALUGADO.COM]"])
                            ->emailFormat('html')
                            ->to($user['email'])
                            ->template('default', 'sua_propriedade')
                            ->subject('[Bemalugado.com] Confirmação dono Imovel')
                            ->viewVars(['nome' => $user['name'], 'active_link' => 'http://localhost:8765/properties/activate/'.$property->id.'/'. $property->active_code])
                            ->attachments(array(
                            'logo_email.png' => array(
                                'file' => WWW_ROOT.'img/logo.png',
                                'mimetype' => 'image/png',
                                'contentId' => 'logo')
                            ))
                        ->send();
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('erro teste'));
        }
        $users = $this->Properties->Users->find('list', ['limit' => 200]);
        $this->set(compact('property', 'users'));
        $this->set('_serialize', ['property']);
    }
    public function activate($propertyid = null , $code = null, $email = null){
        $property = $this->Properties->get($propertyid);

        if ($property->ativo == 1) {
                $this->Flash->default(__('A SUA PROPRIEDADE JÁ FOI ATIVA ANTERIORMENTE'));
        }else if($this->Properties->exists($propertyid) && ($code == $property->active_code)){
                $user_id  = $property->id_user;
                $this->Properties->updateAll(['ativo' => 1],['id' => $propertyid]);
                    $this->Flash->success(__("OBRIGADO POR NOS AJUDAR A MANTER A SEGURANÇA"));
        }else{
                $this->Flash->error(__('PROBLEMA AO IDENTIFICAR COM LINK, ENTRE EM CONTATO COM NOSSA EQUIPE --- bemalugado.com@gmail.com'));
        }
            return $this->redirect('/properties/index');
    }

    /**
     * Edit method
     *
     * @param string|null $id Property id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $property = $this->Properties->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $property = $this->Properties->patchEntity($property, $this->request->getData());
            if ($this->Properties->save($property)) {
                $this->Flash->success(__('The property has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The property could not be saved. Please, try again.'));
        }
        $users = $this->Properties->Users->find('list', ['limit' => 200]);
        $contracts = $this->Properties->Contracts->find('list', ['limit' => 200]);
        $this->set(compact('property', 'users', 'contracts'));
        $this->set('_serialize', ['property']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Property id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $property = $this->Properties->get($id);
        if ($this->Properties->delete($property)) {
            $this->Flash->success(__('The property has been deleted.'));
        } else {
            $this->Flash->error(__('The property could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
