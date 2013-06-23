<?php
App::uses('AppModel', 'Model');
/**
 * Partida Model
 *
 * @property Catalogo $Catalogo
 * @property Presupuesto $Presupuesto
 */
class Partida extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'catalogo_id';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Catalogo' => array(
			'className' => 'Catalogo',
			'foreignKey' => 'catalogo_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

/**
 * hasMany associations
 *
 * @var array
 */
	public $hasMany = array(
		'Presupuesto' => array(
			'className' => 'Presupuesto',
			'foreignKey' => 'partida_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
