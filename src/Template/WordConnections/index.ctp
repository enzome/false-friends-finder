<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\WordConnection[]|\Cake\Collection\CollectionInterface $wordConnections
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Friends'), ['controller' => 'Words', 'action' => 'friends']) ?></li>
        <li><?= $this->Html->link(__('Connections'), ['controller' => 'WordConnections', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Delete Locations'), ['controller' => 'WordLocations', 'action' => 'deleteurl']) ?></li>

        <li><?= $this->Html->link(__('New Word Connection'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List From Words'), ['controller' => 'Words', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New From Word'), ['controller' => 'Words', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Classifications'), ['controller' => 'Classifications', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Classification'), ['controller' => 'Classifications', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="wordConnections index large-9 medium-8 columns content">
    <h3><?= __('Word Connections') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('from_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('to_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('classification_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('description') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($wordConnections as $wordConnection): ?>
            <tr>
                <td><?= $this->Number->format($wordConnection->id) ?></td>
                <td><?= $wordConnection->has('from_word') ? $this->Html->link($wordConnection->from_word->word, ['controller' => 'Words', 'action' => 'view', $wordConnection->from_word->id]) : '' ?></td>
                <td><?= $wordConnection->has('to_word') ? $this->Html->link($wordConnection->to_word->word, ['controller' => 'Words', 'action' => 'view', $wordConnection->to_word->id]) : '' ?></td>
                <td><?= $wordConnection->has('classification') ? $this->Html->link($wordConnection->classification->name, ['controller' => 'Classifications', 'action' => 'view', $wordConnection->classification->id]) : '' ?></td>
                <td><?= h($wordConnection->description) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $wordConnection->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $wordConnection->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $wordConnection->id], ['confirm' => __('Are you sure you want to delete # {0}?', $wordConnection->id)]) ?>
                </td>
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
