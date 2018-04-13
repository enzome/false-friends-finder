<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\WordLocation[]|\Cake\Collection\CollectionInterface $wordLocations
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Friends'), ['controller' => 'Words', 'action' => 'friends']) ?></li>
        <li><?= $this->Html->link(__('Connections'), ['controller' => 'WordConnections', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Delete Locations'), ['controller' => 'WordLocations', 'action' => 'deleteurl']) ?></li>

        <li><?= $this->Html->link(__('New Word Location'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Words'), ['controller' => 'Words', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Word'), ['controller' => 'Words', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="wordLocations index large-9 medium-8 columns content">
    <h3><?= __('Word Locations') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('word_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('url') ?></th>
                <th scope="col"><?= $this->Paginator->sort('count') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($wordLocations as $wordLocation): ?>
            <tr>
                <td><?= $this->Number->format($wordLocation->id) ?></td>
                <td><?= $wordLocation->has('word') ? $this->Html->link($wordLocation->word->word, ['controller' => 'Words', 'action' => 'view', $wordLocation->word->id]) : '' ?></td>
                <td><?= h($wordLocation->url) ?></td>
                <td><?= $this->Number->format($wordLocation->count) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $wordLocation->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $wordLocation->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $wordLocation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $wordLocation->id)]) ?>
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
