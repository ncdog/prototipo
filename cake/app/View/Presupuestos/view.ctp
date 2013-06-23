<?php if ($current_user['role'] == 'admin'):?>
<div class="presupuestos view">
<h2><?php  echo __('Presupuesto'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($presupuesto['Presupuesto']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Año'); ?></dt>
		<dd>
			<?php echo h($presupuesto['Presupuesto']['año']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Departamento'); ?></dt>
		<dd>
			<?php echo $this->Html->link($presupuesto['Departamento']['nombre'], array('controller' => 'departamentos', 'action' => 'view', $presupuesto['Departamento']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Proceso'); ?></dt>
		<dd>
			<?php echo $this->Html->link($presupuesto['Proceso']['nombre'], array('controller' => 'procesos', 'action' => 'view', $presupuesto['Proceso']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Partida'); ?></dt>
		<dd>
			<?php echo $this->Html->link($presupuesto['Partida']['catalogo_id'], array('controller' => 'partidas', 'action' => 'view', $presupuesto['Partida']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Opciones'); ?></h3>
	<ul>
			<li><?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $presupuesto['Presupuesto']['id'])); ?> </li>
			<li><?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $presupuesto['Presupuesto']['id']), null, __('Seguro que deseas borrar # %s?', $presupuesto['Presupuesto']['id'])); ?> </li>
			<li><?php echo $this->Html->link(__('Crear Partida'), array('controller' => 'partidas', 'action' => 'add')); ?> </li>
        	<li><?php echo $this->Html->link(__('Ver Catalogos'), array('controller' => 'catalogos', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('Ver Partidas'), array('controller' => 'partidas', 'action' => 'index')); ?></li>
            <li><?php echo $this->Html->link(__('Ver Presupuestos'), array('action' => 'index')); ?></li>
            <li><?php echo $this->Html->link(__('Ver Departamentos'), array('controller' => 'departamentos', 'action' => 'index')); ?>
        		
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
