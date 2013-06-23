<div class="departamentos index">
<?php if ($current_user['role'] == 'admin'):?>
	<h2><?php echo __('Departamentos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('nombre'); ?></th>
			<th><?php echo $this->Paginator->sort('responsable'); ?></th>
			<th class="actions"><?php echo __('opciones'); ?></th>
	</tr>
	<?php foreach ($departamentos as $departamento): ?>
	<tr>
		<td><?php echo h($departamento['Departamento']['id']); ?>&nbsp;</td>
		<td><?php echo h($departamento['Departamento']['nombre']); ?>&nbsp;</td>
		<td><?php echo h($departamento['Departamento']['responsable']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver'), array('action' => 'view', $departamento['Departamento']['id'])); ?>
			<?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $departamento['Departamento']['id'])); ?>
			<?php echo $this->Form->postLink(__('Borrar'), array('action' => 'delete', $departamento['Departamento']['id']), null, __('Estas seguro de que quieres borrar # %s?', $departamento['Departamento']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Pagina {:page} de {:pages}, mostrando {:current} resultados de {:count} totales, empezando en {:start}, terminando en {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Opciones'); ?></h3>
	<ul>
    		<li><?php echo $this->Html->link(__('Crear Partida'), array('controller' => 'partidas', 'action' => 'add')); ?> </li>
        	<li><?php echo $this->Html->link(__('Crear Presupuesto'), array('controller' => 'presupuestos', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('Ver Catalogos'), array('controller' => 'catalogos', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('Ver Partidas'), array('controller' => 'partidas', 'action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('Ver Presupuestos'), array('controller' => 'presupuestos', 'action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('Ver Departamentos'), array('action' => 'index')); ?> </li>
		</ul>
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
</div>
