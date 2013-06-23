<?php

class AppController extends Controller {
public $components = array(
        'Session',
        'Auth' => array(
            'loginRedirect' => array('controller' => 'users', 'action' => 'home'),
            'logoutRedirect' => array('controller' => 'users', 'action' => 'login'),
			'authError'  => "No estas autorizado para entrar aqui",
			'authorize' => array('Controller') // Added this line
			
			)
        


   );

public function isAuthorized($user) {
    // Admin can access every action
   if (isset($user['role']) && $user['role'] === 'admin') {
       return true;
   }
	if (isset($user['role']) && $user['role'] === 'author') {
       return true;
   }
   //  Default deny
    return false;
}


public function beforeFilter() {
        $this->Auth->allow('index','view');
		$this->set('logged_in', $this->Auth->loggedIn());
		$this->set('current_user', $this->Auth->user());
    }
  //  ...


 }
