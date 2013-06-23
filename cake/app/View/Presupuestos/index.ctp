<?php if ($current_user['role'] == 'admin'):?>
<div class="presupuestos index">
	<h2><?php echo __('Presupuestos'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('año'); ?></th>
			<th><?php echo $this->Paginator->sort('departamento_id'); ?></th>
			<th><?php echo $this->Paginator->sort('proceso_id'); ?></th>
			<th><?php echo $this->Paginator->sort('partida_id'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($presupuestos as $presupuesto): ?>
	<tr>
		<td><?php echo h($presupuesto['Presupuesto']['id']); ?>&nbsp;</td>
		<td><?php echo h($presupuesto['Presupuesto']['año']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($presupuesto['Departamento']['nombre'], array('controller' => 'departamentos', 'action' => 'view', $presupuesto['Departamento']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($presupuesto['Proceso']['nombre'], array('controller' => 'procesos', 'action' => 'view', $presupuesto['Proceso']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($presupuesto['Partida']['catalogo_id'], array('controller' => 'partidas', 'action' => 'view', $presupuesto['Partida']['id'])); ?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $presupuesto['Presupuesto']['id'])); ?>
            <?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $presupuesto['Presupuesto']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $presupuesto['Presupuesto']['id']), null, __('Are you sure you want to delete # %s?', $presupuesto['Presupuesto']['id'])); ?>
     
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Pagina {:page} de {:pages}, mostrando {:current} resultados de {:count} totales, empezando de {:start}, terminando en {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('Anterior'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('Siguiente') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Opciones'); ?></h3>
	<ul>
			<li><?php echo $this->Html->link(__('Crear Partida'), array('controller' => 'partidas', 'action' => 'add')); ?> </li>
        	<li><?php echo $this->Html->link(__('Crear Presupuesto'), array('controller' => 'presupuestos', 'action' => 'add')); ?> </li>
            <li><?php echo $this->Html->link(__('Ver Catalogos'), array('controller' => 'catalogos', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('Ver Partidas'), array('controller' => 'partidas', 'action' => 'index')); ?></li>
            <li><?php echo $this->Html->link(__('Ver Presupuestos'), array('action' => 'index')); ?></li>
            <li><?php echo $this->Html->link(__('Ver Departamentos'), array('controller' => 'departamentos', 'action' => 'index')); ?>  </li>
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