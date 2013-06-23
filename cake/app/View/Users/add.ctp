<!-- app/View/Users/add.ctp -->
<?php if ($current_user['role'] == 'admin'):?>
<div class="users form">
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo __('Crear Usuario'); ?></legend>
    <?php
	 
        echo $this->Form->input('username');
        echo $this->Form->input('password');
		echo $this->Form->input('confirma_tu_password', array('type' => 'password'));
        echo $this->Form->input('Cargo', array(
            'options' => array('admin' => 'Admin', 'author' => 'Author')
        ));
    ?>
    </fieldset>
<?php echo $this->Form->end(__('Crear')); ?>
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
