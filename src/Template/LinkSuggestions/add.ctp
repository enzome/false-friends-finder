<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\LinkSuggestion $linkSuggestion
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Back'), ['action' => 'friends', 'controller' => 'words']) ?></li>
    </ul>
</nav>
<div class="linkSuggestions form large-9 medium-8 columns content">
    <?= $this->Form->create($linkSuggestion) ?>
    <fieldset>
        <legend><?= __('Add Link Suggestion') ?></legend>
        <?php
            echo $this->Form->control('link');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
