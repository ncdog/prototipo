<?php
// app/Model/User.php
App::uses('AuthComponent', 'Controller/Component');


class User extends AppModel {
    public $name = 'User';
    public $displayField = 'username';	
    public $validate = array(
        'username' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Ingresa tu nombre de Usuario'
            )
        ),
        'password' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Ingresa tu contraseña'
         ),
		
		'coincide_password' => array(
				'rule' => 'MatchPasswords',
				'message' => 'Por favor confirma tu contraseña nuevamente'
			)
		),
		
		'confirma_tu_password' => array(
            'required' => array(
                'rule' => array('notEmpty'),
                'message' => 'Por favor confirma tu contraseña'
	)
),
        'role' => array(
            'valid' => array(
                'rule' => array('inList', array('admin', 'author')),
                'message' => 'Please enter a valid role',
                'allowEmpty' => false
            )
		)
 );

	public function matchPasswords($data){
		if ($data['password'] == $this->data['User']['confirma_tu_password']){
			return true;
			}
			$this->invalidate('confirma_tu_password','Por favor confirma tu contraseña nuevamente');
			return false;
		}

public function beforeSave() {
    if (isset($this->data[$this->alias]['password'])) {
        $this->data[$this->alias]['password'] = AuthComponent::password($this->data[$this->alias]['password']);
    }
    return true;
}


}


