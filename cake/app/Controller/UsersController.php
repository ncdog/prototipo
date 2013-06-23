<?php
// app/Controller/UsersController.php
class UsersController extends AppController {

	public function login() {
    if ($this->request->is('post')) {
        if ($this->Auth->login()) {
            $this->redirect($this->Auth->redirect());
        } else {
            $this->Session->setFlash(__('Compruebe su usuario y contraseña'));
        }
    }
}

	public function home() {
		if ($this->request->is('post')) {
            $this->redirect($this->Auth->redirect());
        }
}
	public function logout() {
    $this->redirect($this->Auth->logout());
}

	public function beforeFilter() {
    parent::beforeFilter();
    $this->Auth->allow('add'); // Letting users register themselves
}

	public function isAuthorized($user){
		if ($user['role'] == 'admin'){
			return true;
		}
		if (in_array($this->action, array('edit', 'delete'))){
			if ($user['id'] != $this->request->params['pass'][0]){
			return false;
			}
		}
		return true;
	}

    public function index() {
       	$this->User->recursive = 0;
        $this->set('users', $this->paginate());
    }
    
	public function view($id = null) {
	    $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Usuario no Valido'));
        }
        $this->set('user', $this->User->read(null, $id));
    }

    public function add() {
		if ($this->request->is('post')) {
            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('Usuario Creado Con Exito'));
                $this->redirect(array('action' => 'add'));
            } else {
                $this->Session->setFlash(__('El usuario no pudo ser creado.'));
            }
        }
    }
    
	public function edit($id = null) {
		$this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('usuario no válido'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('El usuario fue modificado con exito'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('El usuario no fue modificado con exito'));
            }
        } else {
            $this->request->data = $this->User->read(null, $id);
            unset($this->request->data['User']['password']);
        }
    }

    public function delete($id = null) {
	    if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Usuario Invalido'));
        }
        if ($this->User->delete()) {
            $this->Session->setFlash(__('Usurario Borrado'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('Usuario no ha sido Borrado'));
        $this->redirect(array('action' => 'index'));
    
		}
	}