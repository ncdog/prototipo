<div class="partidas form">
<?php echo $this->Form->create('Partida'); ?>
	<fieldset>
		<legend><?php echo __('Crear Partida'); ?></legend>
	<?php
		echo $this->Form->input('catalogo_id');
		echo $this->Form->input('enero_monto');
		echo $this->Form->input('febrero_monto');
		echo $this->Form->input('marzo_monto');
		echo $this->Form->input('abril_monto');
		echo $this->Form->input('mayo_monto');
		echo $this->Form->input('junio_monto');
		echo $this->Form->input('julio_monto');
		echo $this->Form->input('agosto_monto');
		echo $this->Form->input('septiembre_monto');
		echo $this->Form->input('octubre_monto');
		echo $this->Form->input('noviembre_monto');
		echo $this->Form->input('diciembre_monto');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Crear')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Opciones'); ?></h3>
	<ul>
              	<li><?php echo $this->Html->link(__('Crear Presupuesto'), array('controller' => 'presupuestos', 'action' => 'add')); ?> </li>
                <?php if ($current_user['role'] == 'admin'):?>
            		<li><?php echo $this->Html->link(__('Ver Catalogos'), array('controller' => 'catalogos', 'action' => 'index')); ?></li>
					<li><?php echo $this->Html->link(__('Ver Partidas'), array('action' => 'index')); ?></li>
            		<li><?php echo $this->Html->link(__('Ver Presupuestos'), array('controller' => 'presupuestos', 'action' => 'index')); ?> </li>
            		<li><?php echo $this->Html->link(__('Ver Departamentos'), array('controller' => 'departamentos', 'action' => 'index')); ?> </li>
     
               <?php endif;?>
		    </ul>
</div>
