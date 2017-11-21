<center>
    <div class="Customers form">
    <?= $this->Flash->render('auth');?>
    <?= $this->Form->create();?>
        <fieldset>
            <legend><?= (__("Por favor, entre com seu Email e Senha")) ?></legend>
            <?= $this->Form->control('username');?>
            <?= $this->Form->control('password');?>
        </fieldset>
    <?= $this->Form->button(__('Login'));?>
    <?= $this->Form->end();?>
    </div>
</center>