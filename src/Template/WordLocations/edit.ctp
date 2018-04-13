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

        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $wordLocation->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $wordLocation->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Word Locations'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Words'), ['controller' => 'Words', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Word'), ['controller' => 'Words', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="wordLocations form large-9 medium-8 columns content">
    <?= $this->Form->create($wordLocation) ?>
    <fieldset>
        <legend><?= __('Edit Word Location') ?></legend>
        <?php
            echo $this->Form->control('word_id', ['options' => $words, 'empty' => true]);
            echo $this->Form->control('url');
            echo $this->Form->control('count');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
