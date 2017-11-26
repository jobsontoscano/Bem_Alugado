<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contract $contract
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Contract'), ['action' => 'edit', $contract->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Contract'), ['action' => 'delete', $contract->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contract->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Contracts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contract'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="contracts view large-9 medium-8 columns content">
    <h3><?= h($contract->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($contract->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id User') ?></th>
            <td><?= $this->Number->format($contract->id_user) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Propertie') ?></th>
            <td><?= $this->Number->format($contract->id_propertie) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Duracao Contract') ?></th>
            <td><?= h($contract->duracao_contract) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('End Contract') ?></th>
            <td><?= h($contract->end_contract) ?></td>
        </tr>
    </table>
</div>
