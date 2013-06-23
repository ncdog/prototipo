
<div class="presupuestos form">
<?php echo $this->Form->create('Presupuesto'); ?>
	<fieldset>
		<legend><?php echo __('Crear Presupuesto'); ?></legend>
	<?php
		echo $this->Form->input('año');
		echo $this->Form->input('departamento_id');
		echo $this->Form->input('proceso_id');
		echo $this->Form->input('partida_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Crear')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Opciones'); ?></h3>
	<ul>
        	<li><?php echo $this->Html->link(__('Crear Partida'), array('controller' => 'partidas', 'action' => 'add')); ?> </li>
        	<?php if ($current_user['role'] == 'admin'):?>
            <li><?php echo $this->Html->link(__('Ver Catalogos'), array('controller' => 'catalogos', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('Ver Partidas'), array('controller' => 'partidas', 'action' => 'index')); ?></li>
            <li><?php echo $this->Html->link(__('Ver Presupuestos'), array('action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('Ver Departamentos'), array('controller' => 'departamentos', 'action' => 'index')); ?> </li>
			<?php endif;?>
      </ul>
</div>

