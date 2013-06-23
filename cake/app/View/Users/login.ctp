<h2>Iniciar Sesión</h2>
<div class="users form">
<?php echo $this->Session->flash('auth'); ?>
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo __('Introdusca su Usuario y Contraseña'); ?></legend>
    <?php
        echo $this->Form->create();
		echo $this->Form->input('username');
        echo $this->Form->input('password');
		echo $this->Form->end(__('Login'));
    ?>

</div>