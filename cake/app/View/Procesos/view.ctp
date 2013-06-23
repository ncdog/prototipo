<?php if ($current_user['role'] == 'admin'):?>
<div class="procesos view">
<h2><?php  echo __('Proceso'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($proceso['Proceso']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($proceso['Proceso']['nombre']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Opciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Proceso'), array('action' => 'edit', $proceso['Proceso']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Borrar Proceso'), array('action' => 'delete', $proceso['Proceso']['id']), null, __('Seguro que desaeas borrar # %s?', $proceso['Proceso']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Crear Partida'), array('controller' => 'partidas', 'action' => 'add')); ?> </li>
        <li><?php echo $this->Html->link(__('Ver Catalogos'), array('controller' => 'catalogos', 'action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Ver Partidas'), array('action' => 'index')); ?></li>
        <li><?php echo $this->Html->link(__('Ver Presupuestos'), array('controller' => 'presupuentos', 'action' => 'index')); ?></li>
        <li><?php echo $this->Html->link(__('Ver Departamentos'), array('controller' => 'departamentos', 'action' => 'index')); ?>  </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Relacionado a Presupuesto'); ?></h3>
	<?php if (!empty($proceso['Presupuesto'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Año'); ?></th>
		<th><?php echo __('Departamento Id'); ?></th>
		<th><?php echo __('Proceso Id'); ?></th>
		<th><?php echo __('Partida Id'); ?></th>
		<th class="actions"><?php echo __('Opciones'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($proceso['Presupuesto'] as $presupuesto): ?>
		<tr>
			<td><?php echo $presupuesto['id']; ?></td>
			<td><?php echo $presupuesto['año']; ?></td>
			<td><?php echo $presupuesto['departamento_id']; ?></td>
			<td><?php echo $presupuesto['proceso_id']; ?></td>
			<td><?php echo $presupuesto['partida_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'presupuestos', 'action' => 'view', $presupuesto['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'presupuestos', 'action' => 'edit', $presupuesto['id'])); ?>
				<?php echo $this->Form->postLink(__('Borrar'), array('controller' => 'presupuestos', 'action' => 'delete', $presupuesto['id']), null, __('Seguro que deseas borrar # %s?', $presupuesto['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Crear Presupuesto'), array('controller' => 'presupuestos', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
<?php endif; ?>
