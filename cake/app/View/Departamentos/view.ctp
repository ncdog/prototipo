<div class="departamentos view">
<?php if ($current_user['role'] == 'admin'):?>
<h2><?php  echo __('Departamento'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($departamento['Departamento']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Nombre'); ?></dt>
		<dd>
			<?php echo h($departamento['Departamento']['nombre']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Responsable'); ?></dt>
		<dd>
			<?php echo h($departamento['Departamento']['responsable']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Opciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Editar Departamento'), array('action' => 'edit', $departamento['Departamento']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Borrar Departamento'), array('action' => 'delete', $departamento['Departamento']['id']), null, __('Seguro que deseas borrar # %s?', $departamento['Departamento']['id'])); ?> </li>
			<li><?php echo $this->Html->link(__('Crear Partida'), array('controller' => 'partidas', 'action' => 'add')); ?> </li>
        	<li><?php echo $this->Html->link(__('Crear Presupuesto'), array('controller' => 'presupuestos', 'action' => 'add')); ?> </li>
			<li><?php echo $this->Html->link(__('Ver Catalogos'), array('controller' => 'catalogos', 'action' => 'index')); ?></li>
			<li><?php echo $this->Html->link(__('Ver Partidas'), array('controller' => 'partidas', 'action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('Ver Presupuestos'), array('controller' => 'presupuestos', 'action' => 'index')); ?> </li>
            <li><?php echo $this->Html->link(__('Ver Departamentos'), array('action' => 'index')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Presupuestos Relacionados'); ?></h3>
	<?php if (!empty($departamento['Presupuesto'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Año'); ?></th>
		<th><?php echo __('Departamento Id'); ?></th>
		<th><?php echo __('Proceso Id'); ?></th>
		<th><?php echo __('Partida Id'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($departamento['Presupuesto'] as $presupuesto): ?>
		<tr>
			<td><?php echo $presupuesto['id']; ?></td>
			<td><?php echo $presupuesto['año']; ?></td>
			<td><?php echo $presupuesto['departamento_id']; ?></td>
			<td><?php echo $presupuesto['proceso_id']; ?></td>
			<td><?php echo $presupuesto['partida_id']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('Ver'), array('controller' => 'presupuestos', 'action' => 'view', $presupuesto['id'])); ?>
				<?php echo $this->Html->link(__('Editar'), array('controller' => 'presupuestos', 'action' => 'edit', $presupuesto['id'])); ?>
				<?php echo $this->Form->postLink(__('BorraR'), array('controller' => 'presupuestos', 'action' => 'delete', $presupuesto['id']), null, __('Estas seguro que quieres borrar # %s?', $presupuesto['id'])); ?>
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
