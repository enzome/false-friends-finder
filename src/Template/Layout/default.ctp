<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'False Friend Finder';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>

    <?= $this->Html->css('base.css') ?>
    <?= $this->Html->css('cake.css') ?>

    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <nav class="top-bar expanded" data-topbar role="navigation">
        <ul class="title-area large-3 medium-4 columns">
            <li class="name">
                <h1><a href="<?= $this->Url->build(['controller' => 'words', 'action'=>'friends']) ?>"><?= __('False Friends Finder') ?></a></h1>
            </li>
        </ul>
        <div class="top-bar-section">
            <ul class="left">
                <li><?= $this->Html->link(__('Suggest a link to scrape'), ['controller' => 'link_suggestions', 'action' => 'add']) ?></li>
                <li><?= $this->Html->image('trophy.png', ['url' => ['controller' => 'scores', 'action' => 'index'], 'width'=>'30px', 'style' => 'height: 30px; margin: 3px;margin-top: 4px;']) ?></li>
                <?php if (!$this->request->session()->check('Name')) { ?>

                <li>
                    <?php
                        echo $this->Form->create('name', ['url' => ['controller'=>'words', 'action' => 'newplayer']]) ;
                        echo $this->Form->input('name', ['label' => false, 'placeholder' => __('Player name')]);
                        ?>

                </li>
                <li><?php
                        echo $this->Form->submit(__('Play')) ;
                        echo $this->Form->end();
                 ?></li>

                 <?php } else {
                    echo '<li>' . $this->Form->postLink(__('Hello') . ' ' .  $this->request->session()->read('Name'), ['action' => 'logout', 'controller' => 'words'], ['confirm' => __('Are you sure you want to log out?')] ) . '</li>';
                 } ?>
                 <?php if ($this->request->session()->check('Points')): ?>
                    <?php $beernum = floor($this->request->session()->read('Points') / 20) ?>
                     <li><?php for ($i=0; $i < $beernum; $i++) {
                         echo $this->Html->image('beer.png', ['style' => 'height: 30px; margin: 3px;margin-top: 8px;']);
                     } ?></li>
                 <?php endif ?>

            </ul>
            <ul class="right">
                <li><?= $this->Html->link('EN', ['controller' => 'words', 'action' => 'setlang', 'en']) ?></li>
                <li><?= $this->Html->link('IT', ['controller' => 'words', 'action' => 'setlang', 'it']) ?></li>
                <li><?= $this->Html->link('HU', ['controller' => 'words', 'action' => 'setlang', 'hu']) ?></li>
            </ul>
        </div>
    </nav>
    <?= $this->Flash->render() ?>
    <div class="container clearfix">
        <?= $this->fetch('content') ?>
    </div>
    <footer>
    </footer>
</body>
</html>
