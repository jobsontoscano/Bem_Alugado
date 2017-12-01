<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Property[]|\Cake\Collection\CollectionInterface $properties
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Cadastre sua Propriedade'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('Cadastro'), ['controller' => 'Pages', 'action' => 'display']) ?></li>
    </ul>
</nav>
<div class="properties index large-9 medium-8 columns content">
    <h3><?= __('Properties') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($properties as $property): ?>
            <tr>
                <?php if($property->ativo == 1): ?>
                <td><img src="<?=$property->id_file['path'].$property->id_file['name']?>"></td>
                <td><button><?= $this->Html->link(__("Eu Quero"),['controller' => 'Constracts', 'action' => 'add']) ?></button></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $property->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $property->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $property->id], ['confirm' => __('Are you sure you want to delete # {0}?', $property->id)]) ?>
                </td>
                <?php endif; ?>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
