<div class="catalogos form">
<?php if ($current_user['role'] == 'admin'):?>
<?php echo $this->Form->create('Catalogo'); ?>
    <fieldset>
		<legend><?php echo __('Editar Catalogo'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('catalogo');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Guardar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Opciones'); ?></h3>
	<ul>
       		<li><?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $this->Form->value('Catalogo.id')), null, __('Seguro que deseas borrar # %s?', $this->Form->value('Catalogo.id'))); ?></li>
            <li><?php echo $this->Html->link(__('Crear Partida'), array('controller' => 'partidas', 'action' => 'add')); ?> </li>
        	<li><?php echo $this->Html->link(__('Crear Presupuesto'), array('controller' => 'presupuestos', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('Ver Catalogos'), array('action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('Ver Partidas'), array('controller' => 'partidas', 'action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('Ver Presupuestos'), array('controller' => 'presupuestos', 'action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('Ver Departamentos'), array('controller' => 'departamentos', 'action' => 'index')); ?> </li>
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
    </ul>
</div>
