<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\WordConnection $wordConnection
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Friends'), ['controller' => 'Words', 'action' => 'friends']) ?></li>
        <li><?= $this->Html->link(__('Connections'), ['controller' => 'WordConnections', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Delete Locations'), ['controller' => 'WordLocations', 'action' => 'deleteurl']) ?></li>

        <li><?= $this->Html->link(__('Edit Word Connection'), ['action' => 'edit', $wordConnection->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Word Connection'), ['action' => 'delete', $wordConnection->id], ['confirm' => __('Are you sure you want to delete # {0}?', $wordConnection->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Word Connections'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Word Connection'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List From Words'), ['controller' => 'Words', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New From Word'), ['controller' => 'Words', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List To Words'), ['controller' => 'Words', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New To Word'), ['controller' => 'Words', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Classifications'), ['controller' => 'Classifications', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Classification'), ['controller' => 'Classifications', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="wordConnections view large-9 medium-8 columns content">
    <h3><?= h($wordConnection->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('From Word') ?></th>
            <td><?= $wordConnection->has('from_word') ? $this->Html->link($wordConnection->from_word->word, ['controller' => 'Words', 'action' => 'view', $wordConnection->from_word->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('To Word') ?></th>
            <td><?= $wordConnection->has('to_word') ? $this->Html->link($wordConnection->to_word->word, ['controller' => 'Words', 'action' => 'view', $wordConnection->to_word->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Classification') ?></th>
            <td><?= $wordConnection->has('classification') ? $this->Html->link($wordConnection->classification->name, ['controller' => 'Classifications', 'action' => 'view', $wordConnection->classification->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Description') ?></th>
            <td><?= h($wordConnection->description) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($wordConnection->id) ?></td>
        </tr>
    </table>
</div>
