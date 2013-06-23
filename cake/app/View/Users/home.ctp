<div class="home">
<?php if ($current_user['role'] == 'admin' || $current_user['role'] == 'author'):?>
	<h2><?php echo __('BIENVENIDO'); ?></h2>
    <div class="actions">
	<h3><?php echo __('Opciones'); ?></h3>
	<ul>
			<li><?php echo $this->Html->link(__('Crear Partida'), array('controller' => 'partidas', 'action' => 'add')); ?> </li>
        	<li><?php echo $this->Html->link(__('Crear Presupuesto'), array('controller' => 'presupuestos', 'action' => 'add')); ?> </li>
            <?php if ($current_user['role'] != 'admin'):?>
            <li><?php echo $this->Html->link(__('Imprimir Partidas'), array('controller' => 'partidas', 'action' => 'imprimir')); ?></li>
            <?php endif;?>
            <?php if ($current_user['role'] == 'admin'):?>
            	<li><?php echo $this->Html->link(__('Crear Catalogo'), array('controller' => 'catalogos', 'action' => 'add')); ?> </li>
        		<li><?php echo $this->Html->link(__('Crear Departamento'), array('controller' => 'departamentos', 'action' => 'add')); ?> </li>
            	<li><?php echo $this->Html->link(__('Crear Proceso'), array('controller' => 'procesos', 'action' => 'add')); ?> </li>
              	<li><?php echo $this->Html->link(__('Crear Usuario'), array('controller' => 'users', 'action' => 'add')); ?> </li>
                <li><?php echo $this->Html->link(__('Ver Catalogos'), array('controller' => 'catalogos', 'action' => 'index')); ?></li>
				<li><?php echo $this->Html->link(__('Ver Partidas'), array('controller' => 'partidas', 'action' => 'index')); ?></li>
            	<li><?php echo $this->Html->link(__('Ver Presupuestos'), array('action' => 'index')); ?></li>
            	<li><?php echo $this->Html->link(__('Ver Departamentos'), array('controller' => 'departamentos', 'action' => 'index')); ?>  </li>
                <li><?php echo $this->Html->link(__('Imprimir Partidas'), array('controller' => 'partidas', 'action' => 'printadmn')); ?></li>
</div>
<?php endif;?>
<?php endif;?>