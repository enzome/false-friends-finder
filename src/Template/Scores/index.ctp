<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Score[]|\Cake\Collection\CollectionInterface $scores
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Back'), ['action' => 'friends', 'controller' => 'words']) ?></li>
    </ul>
</nav>
<div class="scores index large-9 medium-8 columns content">
    <h3><?= __('Highscores') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('name') ?></th>
                <th scope="col"><?= $this->Paginator->sort('hidden') ?></th>
                <th scope="col"><?= $this->Paginator->sort('explained') ?></th>
                <th scope="col"><?= $this->Paginator->sort('points') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($scores as $score): ?>
            <tr>
                <td><?= h($score->name) ?></td>
                <td><?= h($score->hidden) ?></td>
                <td><?= h($score->explained) ?></td>
                <td> <?php echo $score->points ?>
                    <?php $beernum = floor($score->points / 20);
                        for ($i=0; $i < $beernum; $i++) {
                         echo $this->Html->image('star.png', ['style' => 'height: 30px; margin: 3px;margin-top: 8px;']);
                     }

                 ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
