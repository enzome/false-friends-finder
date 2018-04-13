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

        <li><?= $this->Html->link(__('List Words'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Languages'), ['controller' => 'Languages', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Language'), ['controller' => 'Languages', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Word Locations'), ['controller' => 'WordLocations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Word Locations'), ['controller' => 'WordLocations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Word Location'), ['controller' => 'WordLocations', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="words form large-9 medium-8 columns content">
    <?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Delete Location') ?></legend>
        <?php
            echo $this->Form->control('url');
            if (isset($locations)&&isset($url))  echo __('There are in total {0} locations for words with url {1}', [$locations, $url] );
            if (isset($locations)) echo $this->Form->input('go', ['label' => __('Insert the word \'go\' here to remove url and associated words ')]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
