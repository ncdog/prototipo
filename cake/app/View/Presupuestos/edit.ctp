<?php if ($current_user['role'] == 'admin'):?>
<div class="presupuestos form">
<?php echo $this->Form->create('Presupuesto'); ?>
	<?php if ($current_user['role'] == 'admin'):?>
    <fieldset>
		<legend><?php echo __('Editar Presupuesto'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('año');
		echo $this->Form->input('departamento_id');
		echo $this->Form->input('proceso_id');
		echo $this->Form->input('partida_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Guardar')); ?>
</div>
<?php endif;?>
<div class="actions">
	<h3><?php echo __('Opciones'); ?></h3>
	<ul>
			<li><?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $this->Form->value('Presupuestos.id')), null, __('Seguro que deseas borrar # %s?', $this->Form->value('Presupuestos.id'))); ?></li>
            <li><?php echo $this->Html->link(__('Crear Partida'), array('controller' => 'partidas', 'action' => 'add')); ?> </li>
        	<li><?php echo $this->Html->link(__('Ver Catalogos'), array('controller' => 'catalogos', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('Ver Partidas'), array('controller' => 'partidas', 'action' => 'index')); ?></li>
            <li><?php echo $this->Html->link(__('Ver Presupuestos'), array('action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('Ver Departamentos'), array('controller' => 'departamentos', 'action' => 'index')); ?>  </li>
		</ul>
</div>
<?php else: ?>
    	<?php  ?>
<style><!--
P { text-align:center; font:bold 1.1em sans-serif }
A { color:#444; text-decoration:none }
A:HOVER { text-decoration: underline; color:#44E }
--></style>
</head>
<body>
<p><a href="array('action' => 'index')); ?>"><?php echo 'No tienes permisos para ver esto'; ?></a></p>
</body>
</html>

<?php endif;?>
