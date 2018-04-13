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

        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $wordConnection->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $wordConnection->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Word Connections'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List From Words'), ['controller' => 'Words', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New From Word'), ['controller' => 'Words', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Classifications'), ['controller' => 'Classifications', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Classification'), ['controller' => 'Classifications', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="wordConnections form large-9 medium-8 columns content">
    <?= $this->Form->create($wordConnection) ?>
    <fieldset>
        <legend><?= __('Edit Word Connection') ?></legend>
        <?php
            echo $this->Form->control('from_id', ['options' => $fromWords, 'empty' => true]);
            echo $this->Form->control('to_id', ['options' => $toWords, 'empty' => true]);
            echo $this->Form->control('classification_id', ['options' => $classifications, 'empty' => true]);
            echo $this->Form->control('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
