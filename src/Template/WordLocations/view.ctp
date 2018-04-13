<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\WordLocation $wordLocation
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Friends'), ['controller' => 'Words', 'action' => 'friends']) ?></li>
        <li><?= $this->Html->link(__('Connections'), ['controller' => 'WordConnections', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Delete Locations'), ['controller' => 'WordLocations', 'action' => 'deleteurl']) ?></li>

        <li><?= $this->Html->link(__('Edit Word Location'), ['action' => 'edit', $wordLocation->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Word Location'), ['action' => 'delete', $wordLocation->id], ['confirm' => __('Are you sure you want to delete # {0}?', $wordLocation->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Word Locations'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Word Location'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Words'), ['controller' => 'Words', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Word'), ['controller' => 'Words', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="wordLocations view large-9 medium-8 columns content">
    <h3><?= h($wordLocation->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Word') ?></th>
            <td><?= $wordLocation->has('word') ? $this->Html->link($wordLocation->word->id, ['controller' => 'Words', 'action' => 'view', $wordLocation->word->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Url') ?></th>
            <td><?= h($wordLocation->url) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($wordLocation->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Count') ?></th>
            <td><?= $this->Number->format($wordLocation->count) ?></td>
        </tr>
    </table>
</div>
