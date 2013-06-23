<?php if ($current_user['role'] == 'admin'):?>
<div class="procesos form">
<?php echo $this->Form->create('Proceso'); ?>
	    <fieldset>
		<legend><?php echo __('Editar Proceso'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('nombre');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Guardar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Opciones'); ?></h3>
	<ul>
			<li><?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $this->Form->value('Presupuestos.id')), null, __('Seguro que deseas borrar # %s?', $this->Form->value('Presupuestos.id'))); ?></li>
            <li><?php echo $this->Html->link(__('Crear Partida'), array('controller' => 'partidas', 'action' => 'add')); ?> </li>
        	<li><?php echo $this->Html->link(__('Crear Presupuesto'), array('controller' => 'presupuestos', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('Ver Catalogos'), array('controller' => 'catalogos', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('Ver Partidas'), array('controller' => 'partidas', 'action' => 'index')); ?></li>
            <li><?php echo $this->Html->link(__('Ver Presupuestos'), array('controller' => 'presupuestos', 'action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('Ver Departamentos'), array('controller' => 'departamentos', 'action' => 'index')); ?>  </li>
		</ul>
</div>
<?php endif; ?>
