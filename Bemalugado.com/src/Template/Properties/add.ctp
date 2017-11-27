<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Property $property
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Properties'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Contracts'), ['controller' => 'Contracts', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Contract'), ['controller' => 'Contracts', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="properties form large-9 medium-8 columns content">
    <?= $this->Form->create($property) ?>
    <fieldset>
        <legend><?= __('Add Property') ?></legend>
        <?php
            echo $this->Form->control('kind');
            echo $this->Form->control('cep');
            echo $this->Form->control('state');
            echo $this->Form->control('city');
            echo $this->Form->control('neighborhood');
            echo $this->Form->control('address');
            echo $this->Form->control('number');
            echo $this->Form->control('complement');
            echo $this->Form->control('descricao');
            echo $this->Form->control('id_file', ['label' => 'Imagem do Imovel', 'type' => 'file']);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
