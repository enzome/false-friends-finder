<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\WordConnection $wordConnection
 */

$this->prepend('script', $this->Html->script('https://code.jquery.com/jquery-1.12.4.min.js'));
$this->prepend('script', $this->Html->script('textboxio'));


$this->append('script');?>
<script>
        function editContent(me) {
            textboxio.replace('#from-meaning')
            textboxio.replace('#to-meaning')
            textboxio.replace('#description')
        }
</script>
<?php
$this->end()
?>

<script>

</script>


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
        <li><?= $this->Html->link(__('List Classifications'), ['controller' => 'Classifications', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Classification'), ['controller' => 'Classifications', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="wordConnections form large-9 medium-8 columns content">
    <?= $this->Form->create($wordConnection) ?>
    <fieldset>
        <legend><?= __('Edit Word Connection') ?></legend>
        <?php
            echo $this->Form->control('from_meaning', ['escape' => false, 'onFocus' => 'editContent(this)', 'label' => __('Meaning of word <strong>{0}</strong> in language {1}, explained in Italian', [$wordConnection->FromWords['word'], $wordConnection->FromWords['language']['name']])]);
            echo $this->Form->control('to_translation', ['label' => __('Meaning')]);
            echo $this->Form->control('to_meaning', ['escape' => false, 'label' => __('Meaning of word <strong>{0}</strong> in language {1}, explained in Italian', [$wordConnection->ToWords['word'], $wordConnection->ToWords['language']['name']])]);
            echo $this->Form->control('from_translation', ['label' => __('Meaning')]);

            echo $this->Form->control('classification_id', ['options' => $classifications, 'empty' => true]);
            echo $this->Form->control('description');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
