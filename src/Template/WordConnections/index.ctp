<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\WordConnection[]|\Cake\Collection\CollectionInterface $wordConnections
 */
?>
<?php if ($showactions): ?>
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

<?php endif ?>
<div class="wordConnections index large-9 medium-8 columns content">
    <h3><?= __('Word Connections') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('from_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('to_id') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($wordConnections as $wordConnection): ?>

            <tr>
                <td>
<?= $this->Html->link($wordConnection->from_word->word, ['controller' => 'Words', 'action' => 'view', $wordConnection->from_word->id, '_full' => true]) . " (" . __('HU') . ")" ?>   &#8800;  <?= $this->Html->link($wordConnection->to_word->word, ['controller' => 'Words', 'action' => 'view', $wordConnection->to_word->id, '_full' => true]) . " (" . __('IT') . ")" ?><br>
                    <?= $this->Html->link($wordConnection->from_word->word, ['controller' => 'Words', 'action' => 'view', $wordConnection->from_word->id, '_full' => true]) . " (" . __('HU') . ")" ?> = <?= $wordConnection->to_translation; ?> (<?= __('IT') ?>)<br><br>
               <?= __('Classification') ?>: <?= $wordConnection->has('classification') ? $this->Html->link($wordConnection->classification->name, ['controller' => 'Classifications', 'action' => 'view', $wordConnection->classification->id, '_full' => true]) : '' ?><br><br>


                    <?= $wordConnection->from_meaning ?><br>

                </td>

                <td>  <?= $this->Html->link($wordConnection->to_word->word, ['controller' => 'Words', 'action' => 'view', $wordConnection->to_word->id, '_full' => true]) . " (" . __('IT') . ")" ?> &#8800;  <?= $this->Html->link($wordConnection->from_word->word, ['controller' => 'Words', 'action' => 'view', $wordConnection->from_word->id, '_full' => true]) . " (" . __('HU') . ")" ?><br>
                    <?= $this->Html->link($wordConnection->to_word->word, ['controller' => 'Words', 'action' => 'view', $wordConnection->to_word->id, '_full' => true]) . " (" . __('IT') . ")" ?> = <?= $wordConnection->from_translation; ?> (<?= __('HU') ?>)
                    <br><br><br><br><?= $wordConnection->to_meaning ?></td>

            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
