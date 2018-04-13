<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Word[]|\Cake\Collection\CollectionInterface $words
 */

$this->append('script');
echo $this->Html->script('https://code.jquery.com/jquery-1.12.4.min.js');
$this->end();
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Friends'), ['controller' => 'Words', 'action' => 'friends']) ?></li>
        <li><?= $this->Html->link(__('Connections'), ['controller' => 'WordConnections', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('Delete Locations'), ['controller' => 'WordLocations', 'action' => 'deleteurl']) ?></li>

        <li><?= $this->Html->link(__('New Word'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Languages'), ['controller' => 'Languages', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Language'), ['controller' => 'Languages', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Word Locations'), ['controller' => 'WordLocations', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Word Location'), ['controller' => 'WordLocations', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="words index large-9 medium-8 columns content">
    <h3><?= __('Friends') .  ' (' . $wordscount .  ')' ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= __('Word') ?></th>
                <?php foreach ($languages as $language): ?>
                    <th><?= $language->name ?></th>
                <?php endforeach ?>
                <th scope="col"><?= __('Options') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($words as $word): ?>
            <tr style="<?php if ($word['flag']) echo 'background-color: #c6ffc6;' ; ?> <?php if ($word['hidden']) echo 'display: none;' ?>"  >
                <td><?= $word['word'] ?></td>

                <?php foreach ($languages as $language): ?>
                    <td><?= $this->Html->link(__('Sources:'), 'javascript: void(0);', ['onclick' => 'listsources(this, '. '\'' .$word['word'] . '\'' .', '. $language['id'].')']) ?></td>
                <?php endforeach ?>
                <td><?= $this->Html->link(__('Delete'), 'javascript:void(0);', ['onclick' => 'deleteWithPairs(this, '. $word['id'] . ')'] ) ?>&nbsp;&nbsp;&nbsp;| &nbsp;
                <?= $this->Html->link(__('Hide'), 'javascript:void(0);', ['onclick' => 'hideWithPairs(this, '. $word['id'] . ')'] ) ?>&nbsp;&nbsp;&nbsp;| &nbsp;
                <?= $this->Html->link(__('Add Connection'), 'javascript:void(0);', ['onclick' => 'addConnection(this, '. $word['id'] . ')'] ) ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

</div>

<?php $this->append('script') ?>
<script>
    function listsources (myself, word, langid) {
        console.log(myself);
        $.getJSON( "<?= $this->Url->build(['controller' => 'Words', 'action' => 'friendLocations']) ?>/"+word+'/'+langid+'.json', function (data) {
            $(myself).parent().append('<ul>')
            for (var i = 0; i < data.locations.word_locations.length; i++) {
                $(myself).parent().append('<li><a target="blank" href="' + data.locations.word_locations[i]['url'] + '"> '+ data.locations.word_locations[i]['url'] + '(' + data.locations.word_locations[i]['count'] + ')'+'</a></li>')
            }
            $(myself).parent().append('<ul>')
        }) ;
    }

    function deleteWithPairs(me, myid) {
        $.post("<?= $this->Url->build(['controller' => 'Words', 'action' => 'deleteWithPairs']) ?>", {id: myid}  ).done(function ( data ){
            if (data==='deleted') {$(me).parents('tr').remove();}
        })
    }
    function hideWithPairs(me, myid) {
        $.post("<?= $this->Url->build(['controller' => 'Words', 'action' => 'hideWithPairs']) ?>", {id: myid}  ).done(function ( data ){
            if (data==='hidden') {$(me).parents('tr').remove(); }
        })
    }
    function addConnection(me, myid) {
        $.post("<?= $this->Url->build(['controller' => 'WordConnections', 'action' => 'addconnection']) ?>", {id: myid}  ).done(function ( data ){
            if (data === 'OK') {$(me).parents('tr').css('background-color', '#c6ffc6');} else {$(me).parents('tr').css('background-color', 'red');alert('data')}
        })

    }
</script>
<?php $this->end() ?>
