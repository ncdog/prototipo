<?php
App::uses('AppModel', 'Model');
/**
 * Presupuesto Model
 *
 * @property Departamento $Departamento
 * @property Proceso $Proceso
 * @property Partida $Partida
 */
class Presupuesto extends AppModel {

/**
 * Display field
 *
 * @var string
 */
	public $displayField = 'año';


	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Departamento' => array(
			'className' => 'Departamento',
			'foreignKey' => 'departamento_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Proceso' => array(
			'className' => 'Proceso',
			'foreignKey' => 'proceso_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Partida' => array(
			'className' => 'Partida',
			'foreignKey' => 'partida_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
