<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Word $word
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Friends'), ['controller' => 'Words', 'action' => 'friends']) ?></li>
        <li><?= $this->Html->link(__('Connections'), ['controller' => 'WordConnections', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Delete Locations'), ['controller' => 'WordLocations', 'action' => 'deleteurl']) ?></li>

        <li><?= $this->Html->link(__('Edit Word'), ['action' => 'edit', $word->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Word'), ['action' => 'delete', $word->id], ['confirm' => __('Are you sure you want to delete # {0}?', $word->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Words'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Word'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Languages'), ['controller' => 'Languages', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Language'), ['controller' => 'Languages', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Word Locations'), ['controller' => 'WordLocations', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Word Location'), ['controller' => 'WordLocations', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="words view large-9 medium-8 columns content">
    <h3><?= h($word->word) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Word') ?></th>
            <td><?= h($word->word) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Language') ?></th>
            <td><?= $word->has('language') ? $this->Html->link($word->language->name, ['controller' => 'Languages', 'action' => 'view', $word->language->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($word->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Word Locations') ?></h4>
        <?php if (!empty($word->word_locations)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Word Id') ?></th>
                <th scope="col"><?= __('Url') ?></th>
                <th scope="col"><?= __('Count') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($word->word_locations as $wordLocations): ?>
            <tr>
                <td><?= h($wordLocations->id) ?></td>
                <td><?= h($wordLocations->word_id) ?></td>
                <td><?= h($wordLocations->url) ?></td>
                <td><?= h($wordLocations->count) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'WordLocations', 'action' => 'view', $wordLocations->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'WordLocations', 'action' => 'edit', $wordLocations->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'WordLocations', 'action' => 'delete', $wordLocations->id], ['confirm' => __('Are you sure you want to delete # {0}?', $wordLocations->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
