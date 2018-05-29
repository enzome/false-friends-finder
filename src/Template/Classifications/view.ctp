<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Classification $classification
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Friends'), ['controller' => 'Words', 'action' => 'friends']) ?></li>
        <li><?= $this->Html->link(__('Connections'), ['controller' => 'WordConnections', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Delete Locations'), ['controller' => 'WordLocations', 'action' => 'deleteurl']) ?></li>

        <li><?= $this->Html->link(__('Edit Classification'), ['action' => 'edit', $classification->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Classification'), ['action' => 'delete', $classification->id], ['confirm' => __('Are you sure you want to delete # {0}?', $classification->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Classifications'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Classification'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Word Connections'), ['controller' => 'WordConnections', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Word Connection'), ['controller' => 'WordConnections', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="classifications view large-9 medium-8 columns content">
    <h3><?= h($classification->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($classification->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($classification->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Word Connections') ?></h4>
        <?php if (!empty($classification->word_connections)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('From Id') ?></th>
                <th scope="col"><?= __('To Id') ?></th>
                <th scope="col"><?= __('Classification Id') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($classification->word_connections as $wordConnections): ?>
            <tr>
                <td><?= h($wordConnections->id) ?></td>
                <td><?= $this->Html->link($wordConnections['from_word']['word'], ['controller' => 'words', 'action' => 'view', $wordConnections['from_word']['id']]) ?></td>
                <td><?= $this->Html->link($wordConnections['to_word']['word'], ['controller' => 'words', 'action' => 'view', $wordConnections['to_word']['id']]) ?></td>
                <td><?= h($wordConnections->classification_id) ?></td>
                <td><?= $wordConnections->description ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'WordConnections', 'action' => 'view', $wordConnections->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'WordConnections', 'action' => 'edit', $wordConnections->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'WordConnections', 'action' => 'delete', $wordConnections->id], ['confirm' => __('Are you sure you want to delete # {0}?', $wordConnections->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
