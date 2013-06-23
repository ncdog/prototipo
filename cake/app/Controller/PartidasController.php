

<?php
App::uses('AppController', 'Controller');
/**
 * Partidas Controller
 *
 * @property Partida $Partida
 */
class PartidasController extends AppController {

/**
 * index method
 *
 * @return void
 */
 
 	
	public function index() {
				$this->Partida->recursive = 0;
				$this->set('partidas',$this->paginate());
}

	public function imprimir() {
				$this->Partida->recursive = 0;
				$this->set('partidas',$this->paginate());
}
	public function printadmn() {
				$this->Partida->recursive = 0;
				$this->set('partidas',$this->paginate());
}
/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
			if (!$this->Partida->exists($id)) {
			throw new NotFoundException(__('Invalid partida'));
		}
		$options = array('conditions' => array('Partida.' . $this->Partida->primaryKey => $id));
		$this->set('partida', $this->Partida->find('first', $options));
}
/**
 * add method
 *
 * @return void
 */
	public function add() {
			if ($this->request->is('post')) {
			$this->Partida->create();
			if ($this->Partida->save($this->request->data)) {
				$this->Session->setFlash(__('The partida has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The partida could not be saved. Please, try again.'));
			}
		}
		$catalogos = $this->Partida->Catalogo->find('list');
		$this->set(compact('catalogos'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Partida->exists($id)) {
			throw new NotFoundException(__('Invalid partida'));
		}
		if ($this->request->is('post') || $this->request->is('put')) {
			if ($this->Partida->save($this->request->data)) {
				$this->Session->setFlash(__('The partida has been saved'));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The partida could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Partida.' . $this->Partida->primaryKey => $id));
			$this->request->data = $this->Partida->find('first', $options);
		}
		$catalogos = $this->Partida->Catalogo->find('list');
		$this->set(compact('catalogos'));
	}
/**
 * delete method
 *
 * @throws NotFoundException
 * @throws MethodNotAllowedException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Partida->id = $id;
		if (!$this->Partida->exists()) {
			throw new NotFoundException(__('Invalid partida'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Partida->delete()) {
			$this->Session->setFlash(__('Partida deleted'));
			$this->redirect(array('action' => 'index'));
		}
		$this->Session->setFlash(__('Partida was not deleted'));
		$this->redirect(array('action' => 'index'));
		}
	}