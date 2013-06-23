<?php if ($current_user['role'] == 'admin'):?>
<div class="partidas form">
<?php echo $this->Form->create('Partida'); ?>
    <fieldset>
		<legend><?php echo __('Editar Partida'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('catalogo_id');
		echo $this->Form->input('enero_monto');
		echo $this->Form->input('enero_federal');
		echo $this->Form->input('enero_estatal');
		echo $this->Form->input('enero_propio');
		echo $this->Form->input('febrero_monto');
		echo $this->Form->input('febrero_federal');
		echo $this->Form->input('febrero_estatal');
		echo $this->Form->input('febrero_propio');
		echo $this->Form->input('marzo_monto');
		echo $this->Form->input('marzo_federal');
		echo $this->Form->input('marzo_estatal');
		echo $this->Form->input('marzo_propio');
		echo $this->Form->input('abril_monto');
		echo $this->Form->input('abril_federal');
		echo $this->Form->input('abril_estatal');
		echo $this->Form->input('abril_propio');
		echo $this->Form->input('mayo_monto');
		echo $this->Form->input('mayo_federal');
		echo $this->Form->input('mayo_estatal');
		echo $this->Form->input('mayo_propio');
		echo $this->Form->input('junio_monto');
		echo $this->Form->input('junio_federal');
		echo $this->Form->input('junio_estatal');
		echo $this->Form->input('junio_propio');
		echo $this->Form->input('julio_monto');
		echo $this->Form->input('julio_federal');
		echo $this->Form->input('julio_estatal');
		echo $this->Form->input('julio_propio');
		echo $this->Form->input('agosto_monto');
		echo $this->Form->input('agosto_federal');
		echo $this->Form->input('agosto_estatal');
		echo $this->Form->input('agosto_propio');
		echo $this->Form->input('septiembre_monto');
		echo $this->Form->input('septiembre_federal');
		echo $this->Form->input('septiembre_estatal');
		echo $this->Form->input('septiembre_propio');
		echo $this->Form->input('octubre_monto');
		echo $this->Form->input('octubre_federal');
		echo $this->Form->input('octubre_estatal');
		echo $this->Form->input('octubre_propio');
		echo $this->Form->input('noviembre_monto');
		echo $this->Form->input('noviembre_federal');
		echo $this->Form->input('noviembre_estatal');
		echo $this->Form->input('noviembre_propio');
		echo $this->Form->input('diciembre_monto');
		echo $this->Form->input('diciembre_federal');
		echo $this->Form->input('diciembre_estatal');
		echo $this->Form->input('diciembre_propio');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Guardar')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Opciones'); ?></h3>
	<ul>
        	<li><?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $this->Form->value('Partidas.id')), null, __('Seguro que deseas borrar # %s?', $this->Form->value('Partidas.id'))); ?></li>
            <li><?php echo $this->Html->link(__('Crear Partida'), array('controller' => 'partidas', 'action' => 'add')); ?> </li>
            <li><?php echo $this->Html->link(__('Crear Presupuesto'), array('controller' => 'presupuestos', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('Ver Catalogos'), array('controller' => 'catalogos', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('Ver Partidas'), array('action' => 'index')); ?></li>
            <li><?php echo $this->Html->link(__('Ver Presupuestos'), array('controller' => 'presupuestos', 'action' => 'index')); ?> </li>
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