<?= $this->Form->create() ?>
<?= $this->Form->control('email'); ?>
<?= $this->Form->control('password'); ?>
<?= $this->Form->submit() ?>
<?= $this->Html->link('Iniciar sesión con el proveedor', ['controller' => 'Cliente', 'action' => 'login']) ?>
<?= $this->Form->end() ?>
