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
use Cake\Cache\Cache;
use Cake\Core\Configure;
use Cake\Core\Plugin;
use Cake\Datasource\ConnectionManager;
use Cake\Error\Debugger;
use Cake\Network\Exception\NotFoundException;

$this->layout = false;

if (!Configure::read('debug')) :
    throw new NotFoundException(
        'Please replace src/Template/Pages/home.ctp with your own version or re-enable debug mode.'
    );
endif;

$cakeDescription = 'CakePHP: the rapid development PHP framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>
    </title>
<style>
    td {vertical-align: top; border: 1px solid grey; padding: 5px; width: 50%}
</style>
</head>
<body class="home">
<table cellspacing="0" cellpadding="0">

<tr>
<td><a href="/words/view/7235">Ann&oacute;</a> (HU) &ne; <a href="/words/view/77369">anno</a> (IT)<br /><a href="/words/view/7235">Ann&oacute;</a> (HU) = ~ nei vecchi tempi (IT)<br /><br /> Classification: <a href="/classifications/view/1">Falsi amici totali</a><br /><br /> "<strong>Ann&oacute;</strong> nem j&aacute;rt mindenki aut&oacute;val" - Riferimento al passato remoto, in generale</td>
<td><a href="/words/view/77369">anno</a> (IT) &ne; <a href="/words/view/7235">Ann&oacute;</a> (HU)<br /><a href="/words/view/77369">anno</a> (IT) = &Eacute;v (HU) <br /><br /><br /><br />
<ol>
<li>periodo di dodici mesi, compreso tra un primo gennaio e il successivo</li>
<li>periodo di dodici mesi calcolato a partire da un qualsiasi giorno preso a riferimento</li>
<li>arco di tempo, non coincidente con l&rsquo;anno civile</li>
<li>corso di studi della durata di un anno</li>
<li>periodo di tempo della durata di un anno destinato a una celebrazione 6. (pl.) periodo della vita: gli anni dell&rsquo;adolescenza; 7. periodo di tempo indeterminato di cui si vuol sottolineare la lunghezza</li>
</ol>
</td>
</tr>
<tr>
<td><a href="/words/view/776">arca</a> (HU) &ne; <a href="/words/view/108966">arca</a> (IT)<br /><a href="/words/view/776">arca</a> (HU) = (IT)<br /><br /> Classification: <a href="/classifications/view/1">Falsi amici totali</a><br /><br /> La faccia di qualcuno</td>
<td><a href="/words/view/108966">arca</a> (IT) &ne; <a href="/words/view/776">arca</a> (HU)<br /><a href="/words/view/108966">arca</a> (IT) = (HU) <br /><br /><br /><br />mollusco marino bivalve, con valve ruvide</td>
</tr>
<tr>
<td><a href="/words/view/53377">brutt&oacute;</a> (HU) &ne; <a href="/words/view/95970">brutto</a> (IT)<br /><a href="/words/view/53377">brutt&oacute;</a> (HU) = (IT)<br /><br /> Classification: <a href="/classifications/view/1">Falsi amici totali</a><br /><br /> 1. si dice di importo dal quale non siano state detratte ritenute, spese ecc.: stipendio, reddito, incasso lordo 2. sporco, sudicio (anche in senso figurato): scarpe lorde di fango; coscienza lorda di sangue altrui</td>
<td><a href="/words/view/95970">brutto</a> (IT) &ne; <a href="/words/view/53377">brutt&oacute;</a> (HU)<br /><a href="/words/view/95970">brutto</a> (IT) = (HU) <br /><br /><br /><br />1. persona brutta accr. bruttone 2. ci&ograve; che suscita un&rsquo;impressione estetica sgradevole; ci&ograve; che provoca preoccupazione, difficolt&agrave;, tristezza: distinguere il bello dal brutto; il brutto di una situazione 3. cattive condizioni atmosferiche: il tempo volge al brutto</td>
</tr>
<tr>
<td><a href="/words/view/67626">cifra</a> (HU) &ne; <a href="/words/view/90819">cifra</a> (IT)<br /><a href="/words/view/67626">cifra</a> (HU) = (IT)<br /><br /> Classification: <a href="/classifications/view/1">Falsi amici totali</a><br /><br /> Oggetto decorato pomposamente. Molto ricco, abbondante: <strong>cifra t&aacute;rsas&aacute;g</strong>|gruppo di persone illustri <strong>cifra h&ouml;lgyem&eacute;ny</strong>: donna opulenta&lt;&gt;, dalle forme prosperose e armoniche; donna giunonica |<strong>cifra sz&eacute;ps&eacute;g&lt;&gt; bellezza opulenta, di donna opulenta ornato di abbellimenti, anche in modo lezioso, eccessivamente ricercato "Ha infiorettato il suo commento di preziose citazioni;" <br /></strong></td>
<td><a href="/words/view/90819">cifra</a> (IT) &ne; <a href="/words/view/67626">cifra</a> (HU)<br /><a href="/words/view/90819">cifra</a> (IT) = (HU) <br /><br /><br /><br />Ognuno dei dieci segni {0, 1, ..., 9} con cui, a parte la virgola, sono scritti i numeri nel sistema di numerazione decimale</td>
</tr>
<tr>
<td><a href="/words/view/33332">dada</a> (HU) &ne; <a href="/words/view/116407">dada</a> (IT)<br /><a href="/words/view/33332">dada</a> (HU) = (IT)<br /><br /> Classification: <a href="/classifications/view/1">Falsi amici totali</a><br /><br /> (n) donna che allatta i bambini altrui dietro compenso |far da balia a qualcuno, (fig.) accudirlo, proteggerlo con cure continue |aver bisogno della balia, (fig.) si dice di persona impacciata e incapace di iniziative</td>
<td><a href="/words/view/116407">dada</a> (IT) &ne; <a href="/words/view/33332">dada</a> (HU)<br /><a href="/words/view/116407">dada</a> (IT) = (HU) <br /><br /><br /><br />(agg.) del dadaismo, che segue il dadaismo: pittore dada</td>
</tr>
<tr>
<td><a href="/words/view/12616">francia</a> (HU) &ne; <a href="/words/view/94598">francia</a> (IT)<br /><a href="/words/view/12616">francia</a> (HU) = (IT)<br /><br /> Classification: <a href="/classifications/view/1">Falsi amici totali</a><br /><br /> (n m)<br />della Francia:<em>la letteratura, la rivoluzione francese</em><br /><br /></td>
<td><a href="/words/view/94598">francia</a> (IT) &ne; <a href="/words/view/12616">francia</a> (HU)<br /><a href="/words/view/94598">francia</a> (IT) = (HU) <br /><br /><br /><br />(nome proprio). Il nome di un paese in Europa.</td>
</tr>
<tr>
<td><a href="/words/view/35992">artista</a> (HU) &ne; <a href="/words/view/99827">artista</a> (IT)<br /><a href="/words/view/35992">artista</a> (HU) = (IT)<br /><br /> Classification: <a href="/classifications/view/1">Falsi amici totali</a><br /><br /> Intrattenitore professionale; una persona in un circo o in un parco giochi. Acrobata che esegue esercizi al trapezio, specialmente nel circo.</td>
<td><a href="/words/view/99827">artista</a> (IT) &ne; <a href="/words/view/35992">artista</a> (HU)<br /><a href="/words/view/99827">artista</a> (IT) = (HU) <br /><br /><br /><br />1. chi si dedica abitualmente a un&rsquo;arte (pittura, scultura, poesia, musica ecc.) o la esercita professionalmente: gli artisti dell&rsquo;et&agrave; neoclassica pegg. artistucolo 2. chi per professione si esibisce in spettacoli teatrali, musicali, televisivi ecc.: un artista del cinema, del variet&agrave; 3. persona che possiede particolari doti di sensibilit&agrave; e di gusto 4. chi &egrave; abilissimo in un&rsquo;attivit&agrave; (anche in senso ironico): sono degli artisti nel prenderci in giro 5. (ant.) artigiano</td>
</tr>
<tr>
<td><a href="/words/view/1130">mese</a> (HU) &ne; <a href="/words/view/79135">mese</a> (IT)<br /><a href="/words/view/1130">mese</a> (HU) = (IT)<br /><br /> Classification: <a href="/classifications/view/1">Falsi amici totali</a><br /><br /> Una narrativa o una storia fittizia o vera, specialmente una che viene raccontata in modo fantasioso. Sok mese sz&oacute;l az igazs&aacute;gos M&aacute;ty&aacute;s kir&aacute;lyr&oacute;l. R&eacute;gen a mes&eacute;kkel oktatt&aacute;k a j&oacute;ra a gyerekeket.</td>
<td><a href="/words/view/79135">mese</a> (IT) &ne; <a href="/words/view/1130">mese</a> (HU)<br /><a href="/words/view/79135">mese</a> (IT) = (HU) <br /><br /><br /><br />periodo di circa trenta giorni, che pu&ograve; non coincidere con un mese del calendario: un mese di ferie da met&agrave; luglio a met&agrave; agosto |da mesi, da molto tempo: non lo vedo da mesi |essere al primo, al secondo, al terzo ecc. mese, si dice di donna che &egrave; al primo, secondo, terzo ecc. mese di gravidanza</td>
</tr>
<tr>
<td><a href="/words/view/17083">vita</a> (HU) &ne; <a href="/words/view/77741">vita</a> (IT)<br /><a href="/words/view/17083">vita</a> (HU) = lite, discussione, disputa, polemica (IT)<br /><br /> Classification: <a href="/classifications/view/1">Falsi amici totali</a><br /><br />
<p>sostantivo<br />1. un disaccordo orale; opposizione verbale; contesa; alterco:<br />una discussione violenta.<br />2. una discussione che coinvolge punti di vista diversi; discussione:<br />Erano profondamente coinvolti in una discussione sull'inflazione.</p>
</td>
<td><a href="/words/view/77741">vita</a> (IT) &ne; <a href="/words/view/17083">vita</a> (HU)<br /><a href="/words/view/77741">vita</a> (IT) = &eacute;let (HU) <br /><br /><br /><br />
<div>
<p><strong>.</strong>lo stato di attivit&agrave; naturale di un organismo che avvia e coordina le funzioni inerenti alla sua conservazione, sviluppo e riproduzione, considerate anche in relazione con l&rsquo;ambiente e con gli altri organismi:<em>la vita delle piante, degli animali</em>;<em>ambiente adatto alla vita dell&rsquo;uomo</em>;<em>vita vegetativa, sensitiva, intellettiva</em>;<em>essere in vita</em>;<em>essere in fin di vita, tra la vita e la morte</em>, sul punto di morire;<em>non dare segni di vita</em>, sembrare morto, essere come morto |<strong>togliere la vita a qualcuno</strong>, ucciderlo |<strong>togliersi la vita</strong>, suicidarsi |<strong>perdere la vita</strong>, morire |<strong>restare, rimanere in vita</strong>, sopravvivere |<strong>venire alla vita</strong>, nascere |<strong>dare la vita a qualcuno</strong>, procrearlo |<strong>dovere la vita a qualcuno</strong>, essere riusciti a evitare la morte grazie al suo intervento |<strong>dare la vita per qualcuno, qualcosa</strong>, sacrificarsi, dedicare tutto s&eacute; stesso o morire per qualcuno, qualcosa |<strong>ridare, restituire, rendere la vita a qualcuno</strong>, resuscitarlo o strapparlo alla morte |<strong>salvare la vita a qualcuno</strong>, evitare che muoia |<strong>questione di vita o di morte</strong>, di capitale importanza |<strong>ne va della vita</strong>, &egrave; in gioco, si rischia la vita |<strong>o la borsa o la vita</strong>, tradizionale intimazione dei rapinatori | (prov.)<em>finch&eacute; c&rsquo;&egrave; vita c&rsquo;&egrave; speranza</em></p>
<p><strong>2.</strong>il vivere, il modo di vivere particolare di ogni individuo:<em>vita sana, attiva, onesta, agiata</em>;<em>vita privata, pubblica, associata, di relazione</em>;<em>la vita del contadino, del maestro, del ferroviere</em>;<em>il corso, le et&agrave; della vita</em>;<em>avere vita breve, lunga</em>;<em>soffr&igrave; per tutta la vita</em>|<strong>vita da cani</strong>, faticosa o piena di disagi |<strong>vita da nababbo, da re, da papa</strong>, piena di agi |<strong>rendere la vita difficile a qualcuno</strong>, ostacolarlo, creargli dei problemi |<strong>lo studio &egrave; tutta la sua vita</strong>, &egrave; la cosa pi&ugrave; importante |<strong>l&rsquo;alba, la primavera della vita</strong>, la giovinezza |<strong>il tramonto, l&rsquo;autunno della vita</strong>, la vecchiaia pegg. vitaccia</p>
<p><strong>3.</strong>esistenza dopo la morte, per la fede nella sopravvivenza dell&rsquo;anima:<em>l&rsquo;altra vita</em>;<em>la vita ultraterrena</em></p>
<p><strong>4.</strong>l&rsquo;insieme delle cose umane, il mondo:<em>conoscere la vita</em>;<em>avere esperienza della vita</em></p>
<p><strong>5.</strong>il complesso delle attivit&agrave; o manifestazioni di un ente, di un&rsquo;istituzione e simili; la durata di tali attivit&agrave;, di un fenomeno ecc.:<em>la vita di un partito</em>;<em>il giornale ebbe breve vita</em></p>
<p><strong>6.</strong>salute, vitalit&agrave;, energia:<em>un ragazzo pieno di vita</em>| animazione, fermento:<em>una citt&agrave;, una strada piena di vita</em>;<em>dare un po&rsquo; di vita alla festa</em>| espressivit&agrave;, vivacit&agrave;:<em>stile privo di vita, senza vita</em>|<strong>su con la vita!</strong>, coraggio!</p>
<p><strong>7.</strong>ci&ograve; che &egrave; necessario materialmente per vivere:<em>lavora per guadagnarsi la vita</em>;<em>la vita diventa sempre pi&ugrave; cara</em>;<em>le radici sono la vita delle piante</em></p>
<p><strong>8.</strong>essere vivente; persona:<em>l&rsquo;anoressia distrugge molte giovani vite</em>;<em>sulla Luna non c&rsquo;&egrave; traccia di vita</em></p>
<p><strong>9.</strong>biografia:<em>scrivere la vita di Napoleone</em></p>
<p><strong>10.</strong>(lett.) fama, notoriet&agrave;:<em>e tu ne&rsquo; carmi avrai perenne vita / sponda che Arno saluta in suo cammino</em>(FOSCOLO<em>Sonetti</em>)</p>
</div>
<p><strong>Etimologia:</strong>&larr; lat.<em>vī</em>ta(m), dalla stessa radice di<em>vivĕ</em>re &lsquo;vivere&rsquo;.</p>
</td>
</tr>
<tr>
<td><a href="/words/view/5908">metr&oacute;</a> (HU) &ne; <a href="/words/view/93824">metro</a> (IT)<br /><a href="/words/view/5908">metr&oacute;</a> (HU) = metropolitana (IT)<br /><br /> Classification: <a href="/classifications/view/1">Falsi amici totali</a><br /><br />
<p>La ferrovia elettrica sotterranea di Parigi, Francia, Montreal, Canada, Washington, D.C. e altre citt&agrave;.</p>
<p>"<em>V</em><em>el&uuml;nk utazik a Zazie a metr&oacute;n!</em>"</p>
</td>
<td><a href="/words/view/93824">metro</a> (IT) &ne; <a href="/words/view/5908">metr&oacute;</a> (HU)<br /><a href="/words/view/93824">metro</a> (IT) = m&eacute;ter, m&eacute;rőszalag (HU) <br /><br /><br /><br />
<p>(n.m)</p>
<div>
<p><strong>1.</strong>unit&agrave; di misura fondamentale della lunghezza nel Sistema Internazionale (simbolo m), definita un tempo come quarantamilionesima parte del meridiano terrestre e poi ridefinita in rapporto alla velocit&agrave; della luce nel vuoto, come percorso coperto dalla luce in 1/299792458 di secondo</p>
<p><strong>2.</strong>nastro o regolo della lunghezza di uno o pi&ugrave; metri e con la graduazione dei decimetri e centimetri:<em>misurare qualcosa con un metro</em>;<em>metro da sarto, da falegname</em></p>
<p><strong>3.</strong>criterio di giudizio:<em>giudicare tutti con lo stesso metro</em>;<em>usare metri diversi</em></p>
<p><strong>4.</strong>unit&agrave; di misura della poesia quantitativa greco-latina; anche, il verso o la strofa costituiti da una serie di queste unit&agrave;:<em>metro spondaico, dattilico</em>;<em>metro alcaico, saffico</em>;<em>i metri catulliani, oraziani</em>| nella poesia moderna, la struttura particolare di un verso o di una strofa, o anche lo schema metrico di un componimento:<em>metro quinario, settenario</em>;<em>il metro del sonetto, della ballata</em>;<em>metri barbari</em></p>
<p><strong>5.</strong>(lett.) tono, tenore del discorso:<em>Perch&eacute; parli in questo metro...?</em>(GOZZANO) | (non com.) modo di comportarsi, di agire:<em>non potevamo mutare metro</em></p>
<p><strong>6.</strong>(lett.) rima, poesia:<em>Gi&agrave; era<em>,</em>e con paura il metto in metro<em>,</em>/ l&agrave; dove l&rsquo;ombre tutte eran coperte</em>(DANTE<em>Inf.</em>XXXIV, 10-11)</p>
<p><strong>7.</strong>(lett.) misura:<em>tant&rsquo;era ivi lo 'ncendio sanza metro</em>(DANTE<em>Purg.</em>XXVII, 51)</p>
</div>
<p><strong>Etimologia:</strong>&larr; dal lat.<em>mĕ</em>tru(m), che &egrave; dal gr.<em>m&eacute;tron</em>&lsquo;misura&rsquo;, poi &lsquo;verso&rsquo;; nel sign. di &lsquo;unit&agrave; di misura&rsquo;, attrav. il fr.<em>m&egrave;tre</em>.</p>
<p>(Garzanti 1994)</p>
</td>
</tr>
<tr>
<td><a href="/words/view/9989">pr&iacute;ma</a> (HU) &ne; <a href="/words/view/77584">prima</a> (IT)<br /><a href="/words/view/9989">pr&iacute;ma</a> (HU) = buonissimo, eccezionale (IT)<br /><br /> Classification: <a href="/classifications/view/1">Falsi amici totali</a><br /><br />
<p>buonissimo, molto buono, il pi&ugrave; buono; eccellente<em><br /></em></p>
<p><em>"</em><em>Pr&iacute;ma ker&eacute;kp&aacute;rt vettem a bolhapiacon"</em></p>
</td>
<td><a href="/words/view/77584">prima</a> (IT) &ne; <a href="/words/view/9989">pr&iacute;ma</a> (HU)<br /><a href="/words/view/77584">prima</a> (IT) = Előtte, hamarabb (HU) <br /><br /><br /><br />
<div>
<p><strong>1.</strong>nel tempo anteriore, in precedenza:<em>questo palazzo prima non c&rsquo;era</em>;<em>avresti dovuto pensarci prima</em>;<em>prima finisci l&rsquo;universit&agrave;<em>,</em>poi penserai al lavoro</em>;<em>&egrave; partito due giorni prima</em>;<em>&egrave; arrivato un po&rsquo;, immediatamente prima</em>;<em>ne so quanto prima</em>;<em>ci capisco meno di prima</em>;<em>sono stanco come prima</em>;<em>non &egrave; pi&ugrave; quello di prima</em>|<strong>far prima</strong>, far pi&ugrave; presto degli altri |<strong>arrivare prima</strong>, per primo</p>
<p><strong>2.</strong>in un luogo, in uno spazio precedente; avanti, davanti:<em>prima c&rsquo;&egrave; un negozio di bomboniere e subito dopo uno di scarpe</em>;<em>un paragrafo prima</em></p>
<p><strong>3.</strong>in primo luogo:<em>voglio fare il calciatore<em>,</em>prima perch&eacute; &egrave; la mia passione e poi perch&eacute; si guadagna molto</em>;<em>prima lo studio<em>,</em>poi il divertimento</em></p>
<p><strong>4.</strong>(ant., lett.) per la prima volta:<em>ricorro al tempo ch&rsquo;io vi vidi prima / tal che null&rsquo;altra fia mai che mi piaccia</em>(PETRARCA<em>Canz.</em>XX, 3-4)<br /><br /><strong>&diams; agg. m. e f. invar.</strong><br /><br />precedente:<em>il giorno, l&rsquo;anno prima</em></p>
</div>
<p><strong>Etimologia:</strong>&larr; lat. tardo<em>prī</em>ma.</p>
</td>
</tr>
<tr>
<td><a href="/words/view/30029">premier</a> (HU) &ne; <a href="/words/view/82373">premier</a> (IT)<br /><a href="/words/view/30029">premier</a> (HU) = prima visione (IT)<br /><br /> Classification: <a href="/classifications/view/1">Falsi amici totali</a><br /><br />
<p>Il titolo di<strong>primo ministro</strong>&egrave; utilizzato per designare il<a title="Capo del governo" href="https://it.wikipedia.org/wiki/Capo_del_governo">capo del governo</a>nei sistemi dove la carica &egrave; distinta da quella del<a title="Capo di Stato" href="https://it.wikipedia.org/wiki/Capo_di_Stato">capo dello stato</a>.</p>
</td>
<td><a href="/words/view/82373">premier</a> (IT) &ne; <a href="/words/view/30029">premier</a> (HU)<br /><a href="/words/view/82373">premier</a> (IT) = minisztereln&ouml;k (HU) <br /><br /><br /><br />titolo dato al primo ministro di un governo, in particolare di quello inglese <br />(Garzanti 1994)</td>
</tr>
<tr>
<td><a href="/words/view/38807">m&eacute;ta</a> (HU) &ne; <a href="/words/view/78195">met&agrave;</a> (IT)<br /><a href="/words/view/38807">m&eacute;ta</a> (HU) = Il gioco a palle "m&eacute;ta" (IT)<br /><br /> Classification: <a href="/classifications/view/1">Falsi amici totali</a><br /><br />
<p>un vecchio gioco a palla ungherese giocato in diverse varianti, in cui uno dei membri della prima squadra colpisce la palla con la mano o la racchetta, e dovr&agrave; essere colpito mentre corre, dal giocatore dell'altra squadra</p>
</td>
<td><a href="/words/view/78195">met&agrave;</a> (IT) &ne; <a href="/words/view/38807">m&eacute;ta</a> (HU)<br /><a href="/words/view/78195">met&agrave;</a> (IT) = f&eacute;l (0,5), c&eacute;l (HU) <br /><br /><br /><br />
<p>(n.f.)</p>
<p><strong>1.</strong>il punto, il termine al quale si &egrave; diretti, al quale si deve giungere:<em>la nostra meta era Londra</em>;<em>toccare la meta</em>;<em>arrivare alla meta</em>;<em>camminare, vagare senza meta</em></p>
<p><strong>2.</strong>scopo, fine da raggiungere:<em>proporsi una meta</em>;<em>la sua meta &egrave; la laurea</em></p>
<p><strong>3.</strong>(archeol.) nei circhi antichi, ciascuno dei due elementi di pietra a forma di piramide o di cono, posti alle estremit&agrave; interne della pista, attorno ai quali i carri in gara dovevano girare</p>
<p><strong>4.</strong>nel rugby, marcatura che si ottiene ponendo il pallone a terra oltre la linea (detta appunto<em>di meta</em>) che delimita sul fondo la met&agrave; campo degli avversari:<em>andare in meta</em>;<em>segnare una meta</em></p>
<p><strong>5.</strong>(ant., lett.) calmiere, prezzo di calmiere:<em>fiss&ograve; la meta del pane al prezzo che sarebbe stato il giusto</em>(MANZONI<em>P.S.</em>XII)</p>
<p>(Gar</p>
</td>
</tr>
<tr>
<td><a href="/words/view/47374">f&aacute;ma</a> (HU) &ne; <a href="/words/view/93255">fama</a> (IT)<br /><a href="/words/view/47374">f&aacute;ma</a> (HU) = passaparola (IT)<br /><br /> Classification: <a href="/classifications/view/1">Falsi amici totali</a><br /><br />
<p>Notizie non necessariamente credibili; Il passaparola.</p>
</td>
<td><a href="/words/view/93255">fama</a> (IT) &ne; <a href="/words/view/47374">f&aacute;ma</a> (HU)<br /><a href="/words/view/93255">fama</a> (IT) = H&iacute;rn&eacute;v, k&ouml;ztudott h&iacute;r (HU) <br /><br /><br /><br />
<p>(n. f.)</p>
<p><strong>1.</strong>l&rsquo;essere conosciuto da molti; notoriet&agrave;, celebrit&agrave;:<em>conquistare la fama</em>;<em>uno scienziato di fama mondiale</em>| ci&ograve; che la maggior parte della gente pensa di qualcuno o di qualcosa; reputazione, nomea:<em>ha fama di persona corretta</em>;<em>una scuola che ha fama di essere severa</em>;<em>godere di ottima, pessima, dubbia fama</em></p>
<p><strong>2.</strong>(lett.) voce, notizia universalmente diffusa |<strong>&egrave; fama, corre fama</strong>, si dice</p>
<p>(Garzanti 1994)</p>
</td>
</tr>
<tr>
<td><a href="/words/view/51978">sal&aacute;ta</a> (HU) &ne; <a href="/words/view/101495">salata</a> (IT)<br /><a href="/words/view/51978">sal&aacute;ta</a> (HU) = lattuga, insalata (IT)<br /><br /> Classification: <a href="/classifications/view/1">Falsi amici totali</a><br /><br />
<p>Insalata (n.f.)</p>
<p><strong>1.</strong>nome generico di varie verdure a cespo con foglie per lo pi&ugrave; larghe, verdi o rossastre, che si mangiano generalmente crude e condite:<em>un cesto d&rsquo;insalata</em>;<em>cogliere, lavare l&rsquo;insalata</em></p>
<p><strong>2.</strong>portata di verdure, generalmente crude e condite:<em>insalata verde, mista, di pomodori, di lattuga</em>| piatto freddo costituito da una mescolanza di ingredienti vari conditi:<em>insalata di riso, di pollo</em>dim. insalatina, insalatuccia, accr. insalatona</p>
<p><strong>3.</strong>(scherz.) mescolanza confusa di pi&ugrave; cose:<em>questo scritto &egrave; un&rsquo;insalata</em></p>
<p>Lattuga (n.f.)</p>
<p><strong>1.</strong>pianta erbacea coltivata negli orti, le cui foglie larghe e tenere vengono utilizzate specialmente per insalate (<em>fam.</em>Composite) dim. lattughina, lattughino (m.)</p>
<p><strong>2.</strong>gala di merletto o di tela inamidata e increspata, usata un tempo come ornamento sul davanti delle camicie maschili</p>
<p>(Garzanti 1994)</p>
</td>
<td><a href="/words/view/101495">salata</a> (IT) &ne; <a href="/words/view/51978">sal&aacute;ta</a> (HU)<br /><a href="/words/view/101495">salata</a> (IT) = s&oacute;s (HU) <br /><br /><br /><br />
<p>(n. f.)</p>
<p>il salare, il condire con sale:<em>dare una salata alla verdura</em>dim. salatina.&nbsp;(Garzanti 1994)</p>
</td>
</tr>
<tr>
<td><a href="/words/view/23878">n&oacute;ta</a> (HU) &ne; <a href="/words/view/80923">nota</a> (IT)<br /><a href="/words/view/23878">n&oacute;ta</a> (HU) = Canto (poplare) (IT)<br /><br /> Classification: <a href="/classifications/view/2">Falsi amici parziali (inclusion)</a><br /><br />
<p>N&oacute;ta &egrave; una forma di canzone popolare ungherese del XIX secolo. &Egrave; uno di un certo numero di stili collettivamente denominati <em>cig&aacute;nyzene</em>, che letteralmente significa musica zingara ma &egrave; usato per riferirsi a un certo numero di stili di musica popolare ungherese che sono riprodotti in un tipico stile musicale. <strong>N&oacute;ta</strong> include una variet&agrave; di tempi, da cs&aacute;rd&aacute;s attraverso un tempo medio "Palot&aacute;s" fino al tempo rubato delle balladi.</p>
</td>
<td><a href="/words/view/80923">nota</a> (IT) &ne; <a href="/words/view/23878">n&oacute;ta</a> (HU)<br /><a href="/words/view/80923">nota</a> (IT) = Hangjegy, sz&aacute;mla, blokk (HU) <br /><br /><br /><br />
<div>pl.<em>-e</em><br />
<p><strong>1.</strong>segno convenzionale con il quale si indica graficamente un suono musicale; il suono rappresentato da tale segno:<em>leggere le note</em>;<em>le sette note</em>|<strong>trovare la nota giusta</strong>, (fig.) il modo, il tono adatto |<strong>mettere, portare una nota allegra, triste, di buonumore</strong>, portare allegria, tristezza, buonumore dim. notina</p>
<p><strong>2.</strong>breve appunto, annotazione:<em>blocco, taccuino per note</em>;<em>prendere nota di qualcosa</em>dim. noterella, noticina</p>
<p><strong>3.</strong>spiegazione, commento di un testo che chiarisce o d&agrave; informazioni supplementari:<em>nota critica, esegetica</em>;<em>note storiche, linguistiche, erudite</em>;<em>un&rsquo;edizione di Dante senza note</em>|<strong>nota introduttiva</strong>, breve testo che si premette a un&rsquo;opera per fornire elementi utili alla lettura</p>
<p><strong>4.</strong>giudizio espresso da un superiore su un dipendente, da un insegnante su un allievo ecc.:<em>nota informativa, di qualifica</em>;<em>scrivere una nota sul registro</em></p>
<p><strong>5.</strong>elenco, lista; in particolare, lista di importi pagati o da pagare:<em>la nota della spesa, del sarto, dell&rsquo;albergo</em></p>
<p><strong>6.</strong>segno particolare, caratteristica che contraddistingue:<em>i nominativi dei presenti sono stati contrassegnati con una nota</em>;<em>la sua nota caratteristica &egrave; la puntualit&agrave;</em></p>
<p><strong>7.</strong>memoria, comunicazione scritta, per lo pi&ugrave; di carattere ufficiale:<em>una nota diplomatica</em></p>
<p><strong>8.</strong>(filos.) ogni propriet&agrave; definitoria di un concetto</p>
<p><strong>9.</strong>(non com.) segno grafico; carattere, lettera:<em>note tachigrafiche</em>;<em>note tironiane</em></p>
</div>
<p><strong>Etimologia:</strong>&larr; lat.<em>nŏ</em>ta(m) &lsquo;segno, tratto, nota&rsquo;.</p>
<p>(Garzanti 1994)</p>
</td>
</tr>
<tr>
<td><a href="/words/view/35938">bravo</a> (HU) &ne; <a href="/words/view/87497">bravo</a> (IT)<br /><a href="/words/view/35938">bravo</a> (HU) = bravo (esclamativo) oppure (IT)<br /><br /> Classification: <a href="/classifications/view/2">Falsi amici parziali (inclusion)</a><br /><br />
<p>Riconoscere il successo; l'alto grado di piacere, l'alto grado di consenso entusiasta, il successo ottenuto, il risultato, l'alto grado di consenso entusiastico: evviva! grande! va bene!</p>
<p><em>"A hallgat&oacute;s&aacute;g a sz&oacute;noklatot lelkes Brav&oacute;!-val fogadta. Spont&aacute;n brav&oacute; ki&aacute;lt&aacute;sok vegy&uuml;ltek az előad&aacute;s v&eacute;g&eacute;n az &aacute;llva tapsol&oacute;k hangos tetsz&eacute;snyilv&aacute;n&iacute;t&aacute;s&aacute;ba."</em></p>
</td>
<td><a href="/words/view/87497">bravo</a> (IT) &ne; <a href="/words/view/35938">bravo</a> (HU)<br /><a href="/words/view/87497">bravo</a> (IT) = (HU) <br /><br /><br /><br />
<p>(n.m)</p>
<p><strong>1.</strong>che &egrave; abile ed esperto in ci&ograve; che fa, specialmente nell&rsquo;esercizio di un mestiere, di una professione o negli studi; valente [+ a, in, con]:<em>un bravo medico</em>;<em>un bravo operaio</em>;<em>un cuoco bravo<strong>a</strong>cucinare</em>;<em>uno scolaro bravo<strong>in</strong>matematica</em>;<em>un parrucchiere bravo<strong>con</strong>le forbici</em>;<em>chi ci riesce, chi ci capisce &egrave; bravo!</em>, (fam.) si dice a proposito di cosa difficile da fare o da capire | usato in formule esclamative esprime approvazione, consenso o, ironicamente, disapprovazione:<em>bravo<em>,</em>bene!</em>;<em>bravo<em>,</em>bis!</em>;<em>ma bravo<em>,</em>guarda cosa hai combinato!</em>| usato come rafforzativo, per lo pi&ugrave; in senso ironico:<em>bravo furbo!</em>;<em>bravo scemo!</em>|<strong>da bravo</strong>, si dice per esortare qualcuno a fare qualcosa:<em>su<em>,</em>da bravo<em>,</em>non fare i capricci!</em>dim. bravino</p>
<p><strong>2.</strong>onesto, per bene; generoso, di buon cuore:<em>un bravo bambino</em>;<em>una brava ragazza</em>;<em>brava gente</em>|<strong>brav&rsquo;uomo, bravo giovane</strong>, formule di cortesia con cui un tempo ci si rivolgeva a uno sconosciuto; oggi sono usate per lo pi&ugrave; in tono scherzoso</p>
<p><strong>3.</strong>(fam.) pu&ograve; essere usato con funzione rafforzativa o espressiva, unito all&rsquo;aggettivo possessivo e riferito a cosa:<em>ho dormito le mie brave otto ore</em>;<em>A ogni contadino aveva procurato il suo bravo schioppo</em>(VERGA)</p>
<p><strong>4.</strong>(lett.) coraggioso, pieno di ardimento, di baldanza</p>
<p><strong>5.</strong>(ant.) non addomesticato, brado (un animale)</p>
<p>(Garzanti 1994)</p>
</td>
</tr>
<tr>
<td><a href="/words/view/37039">P&aacute;lma</a> (HU) &ne; <a href="/words/view/92913">palma</a> (IT)<br /><a href="/words/view/37039">P&aacute;lma</a> (HU) = palma (solo pianta) (IT)<br /><br /> Classification: <a href="/classifications/view/2">Falsi amici parziali (inclusion)</a><br /><br /></td>
<td><a href="/words/view/92913">palma</a> (IT) &ne; <a href="/words/view/37039">P&aacute;lma</a> (HU)<br /><a href="/words/view/92913">palma</a> (IT) = Teny&eacute;r (HU) <br /><br /><br /><br />
<p><strong>1.&nbsp;</strong></p>
<p><strong>2.</strong>genere di piante arboree comprendente numerosissime specie, con fusto a colonna sormontato da un pennacchio di foglie verdi, lucenti e flessibili (<em>fam.</em>Palme):<em>palma da cocco, da datteri, da olio</em>;<em>palma nana</em>;<em>olio di palma</em></p>
<p><strong>3.</strong>vittoria, premio:<em>ottenere, riportare la palma</em>;<em>la palma del martirio</em>, la gloria concessa da Dio ai martiri della fede</p>
<p><strong>4.</strong>(lit.) ramo di palma o, pi&ugrave; spesso, di olivo, che viene benedetto e distribuito ai fedeli nella domenica precedente la Pasqua (<em>domenica delle palme</em>), che commemora l&rsquo;entrata trionfale di Ges&ugrave; Cristo in Gerusalemme:<em>la benedizione delle palme</em></p>
<p><strong>5.</strong>ghirlanda o ramo di palma che nell&rsquo;antichit&agrave; greco-romana si attribuiva in segno di vittoria</p>
</td>
</tr>
<tr>
<td><a href="/words/view/64171">caf&eacute;</a> (HU) &ne; <a href="/words/view/97071">caf&eacute;</a> (IT)<br /><a href="/words/view/64171">caf&eacute;</a> (HU) = caff&eacute; (bevanda), (IT)<br /><br /> Classification: <a href="/classifications/view/2">Falsi amici parziali (inclusion)</a><br /><br />
<div>
<p>Nel significato della parola caff&egrave; in ungherese non troviamo La moltitudine degli significati italiani.</p>
<p><strong>1.</strong>bevanda amara e aromatica di colore scuro che si ricava dalla polvere dei chicchi tostati e macinati di una pianta dallo stesso nome; anche, i chicchi stessi e la polvere che si ricava dai chicchi macinati:<em>una tazzina di caff&egrave;</em>;<em>caff&egrave; lungo, ristretto</em>, pi&ugrave; o meno diluito;<em>caff&egrave; macchiato</em>, con aggiunta di un po&rsquo; di latte;<em>caff&egrave; corretto</em>, con aggiunta di alcolico;<em>caff&egrave; freddo</em>, shakerato con ghiaccio e zucchero;<em>caff&egrave; e latte, latte e caff&egrave;</em>, caffellatte;<em>caff&egrave; nero</em>, puro, senza aggiunte;<em>una confezione di caff&egrave;</em></p>
</div>
</td>
<td><a href="/words/view/97071">caf&eacute;</a> (IT) &ne; <a href="/words/view/64171">caf&eacute;</a> (HU)<br /><a href="/words/view/97071">caf&eacute;</a> (IT) = k&aacute;v&eacute;z&oacute; (HU) <br /><br /><br /><br />
<div>
<p><strong>1.</strong>bevanda amara e aromatica di colore scuro che si ricava dalla polvere dei chicchi tostati e macinati di una pianta dallo stesso nome; anche, i chicchi stessi e la polvere che si ricava dai chicchi macinati:<em>una tazzina di caff&egrave;</em>;<em>caff&egrave; lungo, ristretto</em>, pi&ugrave; o meno diluito;<em>caff&egrave; macchiato</em>, con aggiunta di un po&rsquo; di latte;<em>caff&egrave; corretto</em>, con aggiunta di alcolico;<em>caff&egrave; freddo</em>, shakerato con ghiaccio e zucchero;<em>caff&egrave; e latte, latte e caff&egrave;</em>, caffellatte;<em>caff&egrave; nero</em>, puro, senza aggiunte;<em>una confezione di caff&egrave;</em></p>
<p><strong>2.</strong>pianta tropicale sempreverde da cui si ricava questo prodotto, con fiori bianchi e frutti a bacche rosse contenenti ciascuna due chicchi verdognoli (<em>fam.</em>Rubiacee):<em>una piantagione di caff&egrave;</em></p>
<p><strong>3.</strong>locale pubblico nel quale si consumano caff&egrave; e altre bevande, gelati, pasticceria, panini ecc.; bar |<strong>chiacchiere da caff&egrave;</strong>, discorsi oziosi e svagati<br /><br /><strong>&diams; n.m. e agg. m. e f. invar.</strong><br /><br />(sempre dopo il nome) si dice di colore bruno dorato simile a quello del caff&egrave;, e di ci&ograve; che ha questo colore</p>
</div>
<p><strong>Etimologia:</strong>&larr; dal turco<em>kahve</em>, e questo dall&rsquo;ar.<em>qahwa</em>, orig. &lsquo;vino, bevanda eccitante&rsquo;; nel sign. di &lsquo;locale pubblico&rsquo;, dal fr.<em>caf&eacute;</em>.</p>
<p>(Garzanti 1994)</p>
</td>
</tr>
<tr>
<td><a href="/words/view/71404">mat&eacute;ria</a> (HU) &ne; <a href="/words/view/82460">materia</a> (IT)<br /><a href="/words/view/71404">mat&eacute;ria</a> (HU) = Sostanza (IT)<br /><br /> Classification: <a href="/classifications/view/2">Falsi amici parziali (inclusion)</a><br /><br />
<p><em>"</em><em>A k&oacute;rokoz&oacute;k jelenl&eacute;te miatt amat&eacute;riamindig fertőző anyagnak sz&aacute;m&iacute;t"</em><strong><br /></strong></p>
<p><strong>1.</strong>la sostanza di cui sono fatti i corpi percepibili con i sensi; la sostanza di cui un determinato oggetto &egrave; costituito; materiale :<em>materia liquida, solida, gassosa, infiammabile</em>|<strong>materie tessili</strong>, quelle che possono essere filate e tessute</p>
<p>Nota: nella lingua antica ungherese, la parola porta il significato del la descrizione di una scienza cio&egrave; si tratta di una perdita di significato.</p>
</td>
<td><a href="/words/view/82460">materia</a> (IT) &ne; <a href="/words/view/71404">mat&eacute;ria</a> (HU)<br /><a href="/words/view/82460">materia</a> (IT) = Tant&aacute;rgy, Anyag, Alap (HU) <br /><br /><br /><br />
<div>
<p><strong>1.</strong>la sostanza di cui sono fatti i corpi percepibili con i sensi; la sostanza di cui un determinato oggetto &egrave; costituito; materiale :<em>materia liquida, solida, gassosa, infiammabile</em>|<strong>materie tessili</strong>, quelle che possono essere filate e tessute</p>
<p><strong>2.</strong>ci&ograve; di cui si tratta in un discorso, in uno scritto; argomento, soggetto:<em>svolgere una materia</em>;<em>indice delle materie</em>;<em>catalogo per materia</em>;<em>una materia scabrosa, delicata</em>|<strong>entrare in materia</strong>, affrontare un argomento, una questione |<strong>non so nulla in materia</strong>, sulla questione di cui si parla o si tratta |<strong>la materia della conoscenza</strong>, (filos.) l&rsquo;insieme dei dati di fatto, degli elementi empirici</p>
<p><strong>3.</strong>qualunque disciplina che sia oggetto di studio o d&rsquo;insegnamento:<em>essere promosso in tutte le materie</em>;<em>materie letterarie, scientifiche</em>;<em>materie facoltative, obbligatorie</em></p>
<p><strong>4.</strong>occasione, motivo, pretesto:<em>dare, offrire materia a sospetti, a pettegolezzi</em></p>
<p><strong>5.</strong>per la filosofia e la scienza contemporanee, l&rsquo;insieme delle manifestazioni delle aggregazioni di particelle elementari (molecole, atomi ecc.), oggetto di ricerca teorica e sperimentale da parte della chimica e della fisica | in Aristotele, la componente particolare e sensibile di ogni essere, che &egrave; mera potenzialit&agrave; (in opposizione a<em>forma</em>) | nel cristianesimo, la realt&agrave; corporea dell&rsquo;uomo (si contrappone a<em>spirito</em>) | per Cartesio, realt&agrave; che coincide con l&rsquo;estensione e l&rsquo;inerzia e obbedisce alle leggi meccaniche, in opposizione al pensiero</p>
<p><strong>6.</strong>(med.) forma abbreviata di<em>materia purulenta</em></p>
<p><strong>7.</strong>(anat.) sostanza organica, cellulare</p>
</div>
<p><strong>Etimologia:</strong>&larr; dal lat.<em>materĭ</em>a(m) &lsquo;materia, legname da costruzione&rsquo;, deriv. di<em>mā</em>ter, nel sign. di &lsquo;tronco dell&rsquo;albero&rsquo; (da cui si sviluppano i rami).</p>
</td>
</tr>
<tr>
<td><a href="/words/view/49582">banda</a> (HU) &ne; <a href="/words/view/77720">banda</a> (IT)<br /><a href="/words/view/49582">banda</a> (HU) = (IT)<br /><br /> Classification: <a href="/classifications/view/3">Falsi amici parziali (overlap)</a><br /><br /> (n, pegg.) Societ&aacute; cooperativa unita per commettere atti criminali.</td>
<td><a href="/words/view/77720">banda</a> (IT) &ne; <a href="/words/view/49582">banda</a> (HU)<br /><a href="/words/view/77720">banda</a> (IT) = (HU) <br /><br /><br /><br />1. complesso di suonatori di strumenti a fiato e a percussione, che si esibisce generalmente all&rsquo;aperto sfilando in divisa: banda militare, municipale 2. gruppo organizzato di malviventi: una banda di ladri, di rapinatori | brigata, compagnia di amici: una banda di ragazzi 3. compagnia di armati che esercita la guerriglia: le bande sanfediste, partigiane 4. insegna, drappo che, un tempo, distingueva un esercito da un altro: Giovanni dalle Bande Nere, condottiero italiano (1498-1526) che portava appunto insegne di questo colore</td>
</tr>
<tr>
<td><a href="/words/view/25625">figura</a> (HU) &ne; <a href="/words/view/83367">figura</a> (IT)<br /><a href="/words/view/25625">figura</a> (HU) = (IT)<br /><br /> Classification: <a href="/classifications/view/3">Falsi amici parziali (overlap)</a><br /><br /> 1. <strong>persona strana, ridicola, </strong> (B&aacute;rczi, Orsz&aacute;gh, e Bal&aacute;zs 1962)</td>
<td><a href="/words/view/83367">figura</a> (IT) &ne; <a href="/words/view/25625">figura</a> (HU)<br /><a href="/words/view/83367">figura</a> (IT) = (HU) <br /><br /><br /><br />1. l&rsquo;aspetto esteriore di una cosa; sagoma, forma: figura tonda, quadrata; una figura inconsueta | l&rsquo;aspetto del corpo umano: una figura snella, tozza; avere una bella figura | la persona stessa in quanto riassume in s&eacute; un insieme di qualit&agrave; caratteristiche: una figura interessante, simpatica; figura di primo piano, persona importante; mezza figura, persona mediocre, di poca personalit&agrave; 2. immagine disegnata, dipinta o scolpita; illustrazione: una figura di terracotta; un libro ricco di figure | in particolare, la rappresentazione artistica del corpo umano: lezione di figura dim. figurina 3. animale o cosa divenuti simbolo: la colomba &egrave; figura della pace | nella concezione medievale, realt&agrave; terrena che &egrave; interpretata come simbolo di un&rsquo;entit&agrave; o di un valore ultraterreno: Isacco inteso come figura di Cristo; il Catone dantesco &egrave; figura della libert&agrave; del cristiano 4. il modo in cui qualcuno o qualcosa si mostra, appare; parvenza, apparenza: &egrave; l&igrave; per figura, a solo scopo decorativo; far figura, di persona o cosa che si presenta bene, che &egrave; appariscente; non fare figura, restare inosservato |bella, magnifica, ottima, brutta, magra, pessima figura, comportamento o apparenza che ottiene un giudizio positivo, oppure negativo: ci tiene a fare sempre bella figura; ha fatto una serie di brutte figure |fare la figura di, apparire, sembrare (per lo pi&ugrave; in modo diverso dalla realt&agrave;): ha fatto la figura del genio, dello sciocco |fare una figura, (fam.) comportarsi in modo da ottenere un giudizio negativo |che figura!, (fam.) a commento di un&rsquo;impresa riuscita male accr. figurona, figurone (m.), pegg. figuraccia 5. ente geometrico costituito da un insieme di punti, di linee o di superfici : il quadrato &egrave; una figura piana, il cubo una figura solida 6. (filos.) nella logica tradizionale, la forma che il sillogismo assume a seconda della posizione occupata dal termine medio nelle due premesse 7. nel gioco delle carte, ogni carta illustrata con l&rsquo;immagine del re, della regina, del fante o del cavallo | negli scacchi, qualsiasi pezzo superiore al pedone 8. nella danza, nel pattinaggio artistico e in altri sport che prevedono posizioni e movimenti codificati, ogni posizione e movimento del corpo attraverso cui si articola la prestazione: figure obbligate, libere 9. nel pugilato, il torso del corpo, sopra la cintura ed escluse le braccia e la testa: incassare una serie di colpi alla figura (Garzanti 1994)</td>
</tr>
<tr>
<td><a href="/words/view/13442">font</a> (HU) &ne; <a href="/words/view/78400">font</a> (IT)<br /><a href="/words/view/13442">font</a> (HU) = (IT)<br /><br /> Classification: <a href="/classifications/view/3">Falsi amici parziali (overlap)</a><br /><br /> Libra</td>
<td><a href="/words/view/78400">font</a> (IT) &ne; <a href="/words/view/13442">font</a> (HU)<br /><a href="/words/view/78400">font</a> (IT) = (HU) <br /><br /><br /><br />Serie completa di caratteri di stampa dello stesso stile</td>
</tr>
<tr>
<td><a href="/words/view/38040">alibi</a> (HU) &ne; <a href="/words/view/83416">alibi</a> (IT)<br /><a href="/words/view/38040">alibi</a> (HU) = (IT)<br /><br /> Classification: <a href="/classifications/view/3">Falsi amici parziali (overlap)</a><br /><br /><strong>(Jelzőként:) Alibi munka: látszólagos, színlelt, tessék-lássék munka. Ez a négyórás alibi munka nem fárasztja ki túlságosan.</strong> 1. Bizonyíték arra, hogy a gyanúsított a bűncselekmény idején másutt tartózkodott. Tökéletes alibije van, nem tartóztathatjuk le. A krimiben az alibi megdönthetetlennek látszott. 2. Kibúvó, ürügy. Alibiként használja rengeteg elfoglaltságát, hogy ne kelljen találkoznia a rokonaival.</td>
<td><a href="/words/view/83416">alibi</a> (IT) &ne; <a href="/words/view/38040">alibi</a> (HU)<br /><a href="/words/view/83416">alibi</a> (IT) = (HU) <br /><br /><br /><br />1. (dir.) argomento di difesa con il quale l&rsquo;accusato mira a provare di non aver commesso un reato in quanto si trovava in un luogo diverso da quello in cui veniva consumato il reato stesso: alibi di ferro, sostenuto da molte prove o testimonianze; costruire, fabbricarsi un alibi, procurarselo con prove o testimoni falsi; smontare un alibi, dimostrarne l&rsquo;infondatezza 2. scusa, pretesto: alibi morale</td>
</tr>
<tr>
<td><a href="/words/view/5882">ritu&aacute;l&eacute;</a> (HU) &ne; <a href="/words/view/82842">rituale</a> (IT)<br /><a href="/words/view/5882">ritu&aacute;l&eacute;</a> (HU) = (IT)<br /><br /> Classification: <a href="/classifications/view/3">Falsi amici parziali (overlap)</a><br /><br />
<p>1. Cerimonia</p>
</td>
<td><a href="/words/view/82842">rituale</a> (IT) &ne; <a href="/words/view/5882">ritu&aacute;l&eacute;</a> (HU)<br /><a href="/words/view/82842">rituale</a> (IT) = (HU) <br /><br /><br /><br />
<p>(n.m.)</p>
pl.<em>-i</em><br />
<p><strong>1.</strong>che segue il rito; conforme ai riti:<em>preghiere rituali</em>|<strong>libri rituali</strong>, che contengono le norme riguardanti lo svolgimento dei riti</p>
<p><strong>2.</strong>conforme all&rsquo;abitudine, alle consuetudini; secondo la regola, la procedura:<em>domanda rituale</em></p>
<p><strong>3.</strong>l&rsquo;insieme delle formule e degli atti propri di un rito:<em>rispettare, seguire il rituale</em>;<em>il rituale della Pasqua</em>| nella chiesa cattolica, libro liturgico che contiene le norme e le formule relative ai vari sacramenti, sacramentali o benedizioni che un sacerdote pu&ograve; amministrare</p>
<p><strong>4.</strong>insieme di norme che regolano lo svolgimento di una cerimonia; cerimoniale:<em>osservare il rituale</em></p>
</td>
</tr>
<tr>
<td><a href="/words/view/7407">nulla</a> (HU) &ne; <a href="/words/view/78585">nulla</a> (IT)<br /><a href="/words/view/7407">nulla</a> (HU) = zero (IT)<br /><br /> Classification: <a href="/classifications/view/3">Falsi amici parziali (overlap)</a><br /><br />
<div>
<p><strong>1.</strong>numero che indica assenza di quantit&agrave; | numero iniziale della successione dei numeri naturali, fondamentale per la numerazione che si basa sulla posizione delle cifre:<em>cominciare a contare dallo zero</em>;<em>molte culture ignorano lo zero</em></p>
<p><strong>2.</strong>il punto di partenza di una serie, di una successione; lo stato iniziale di una grandezza che pu&ograve; variare nei due sensi opposti:<em>il termometro segna zero</em>, una temperatura di zero gradi Celsius |<strong>ricominciare, ripartire da zero</strong>, dal nulla o, anche, dal punto di partenza</p>
<p><strong>3.</strong>il punto pi&ugrave; basso nelle votazioni scolastiche (nei sistemi di punteggio che vanno da 0 a 10):<em>prendere zero in matematica</em>;<em>zero in condotta</em>|<strong>meritare zero in qualcosa</strong>, (fig.) non saperne nulla, non valere niente in quel campo</p>
<p><strong>4.</strong>in una valutazione, la totale assenza di valore; nullit&agrave;:<em>essere, valere uno zero</em>;<em>considerare una persona uno zero</em><br /><br /><strong>&diams; agg. num. card. m. e f. pl.</strong><br /><br />indica una quantit&agrave; nulla:<em>la squadra sconfitta prende zero punti</em>|<strong>gli anni Zero</strong>, per antonomasia, quelli compresi tra il 2000 e il 2009:<em>il rock degli anni Zero</em><br /><br /><strong>&diams; agg. m. e f. invar.</strong><br /><br />(sempre dopo il nome) nullo, minimo:<em>velocit&agrave; zero</em>;<em>spirito di adattamento zero</em>|<strong>segno, desinenza zero</strong>, (ling.) in una serie definita di desinenze o suffissi, nella declinazione dei nomi, nella coniugazione dei verbi ecc., l&rsquo;assenza di una desinenza o di un suffisso, caratterizzante una determinata forma</p>
</div>
<p><strong>Etimologia:</strong>&larr; dal lat. mediev.<em>zephiru(m)</em>, usato da leonardo fibonacci nel &laquo;liber abbaci&raquo; (1202) come adattamento dell&rsquo;ar.<em>sifr</em>&lsquo;nulla, zero&rsquo;; cfr.<em>cifra</em>.</p>
<p>(Garzanti 1994)</p>
</td>
<td><a href="/words/view/78585">nulla</a> (IT) &ne; <a href="/words/view/7407">nulla</a> (HU)<br /><a href="/words/view/78585">nulla</a> (IT) = semmi (HU) <br /><br /><br /><br />
<p>(avv.)</p>
<p>niente, nessuna cosa (quando si trova dopo il verbo, come soggetto o come complemento, richiede la negazione<em>non</em>):<em>nulla &egrave; immutabile</em>;<em>non &egrave; immutabile nulla</em>;<em>non sapere, non fare nulla</em>| senza un preciso significato, per incominciare un discorso o per fare una pausa mentre si cerca di ricordare qualcosa o di riorganizzare il pensiero:<em>nulla<em>,</em>&egrave; che non posso tacere su questo argomento</em></p>
<p>(n. m.)</p>
<p><strong>1.</strong>ci&ograve; che non esiste; condizione di inesistenza:<em>creare qualcosa dal nulla</em>;<em>la morte non pu&ograve; far paura<em>,</em>perch&eacute; la morte &egrave; il nulla</em>(CASSOLA) <strong><em>un nulla</em></strong>, una piccolissima cosa</p>
<p><strong>2.</strong>persona dappoco, di nessun valore; nullit&agrave;:<em>essere, sentirsi un nulla</em></p>
<p><strong>3.</strong>(filos.) termine designante l&rsquo;opposto dell&rsquo;essere, il non essere</p>
<p>(Garzanti 1994)</p>
</td>
</tr>
<tr>
<td><a href="/words/view/4352">m&oacute;di</a> (HU) &ne; <a href="/words/view/79156">modi</a> (IT)<br /><a href="/words/view/4352">m&oacute;di</a> (HU) = comportamento (spregiativo) (IT)<br /><br /> Classification: <a href="/classifications/view/3">Falsi amici parziali (overlap)</a><br /><br /> (n) Moda, usanza, abitudine &mdash;&nbsp;maniera particolare in cui una persona si comporta,<br /><em>Ez mif&eacute;le m&oacute;di, hogy csak &uacute;gy fel&aacute;llunk &eacute;s kis&eacute;t&aacute;lunk a teremből?</em><br /><br /></td>
<td><a href="/words/view/79156">modi</a> (IT) &ne; <a href="/words/view/4352">m&oacute;di</a> (HU)<br /><a href="/words/view/79156">modi</a> (IT) = M&oacute;dok (HU) <br /><br /><br /><br /><strong>(pl. del n.m. modo)</strong><br />
<p>1.maniera particolare in cui una persona si comporta, un&rsquo;azione si svolge, un fenomeno si manifesta:<em>modo di camminare, di agire, di vivere, di pensare</em>;<em>uno strano modo di ridere</em>;<em>parlare in modo affascinante</em>;<em>affrontare un problema in modo razionale</em>;<em>pioveva in modo fastidioso</em>|in questo, in tal modo, cos&igrave; |in che modo, come:<em>non so in che modo ci sia riuscito</em>|in (un) certo (qual) modo, in un certo senso, da un certo punto di vista | l&rsquo;espressione<em>in modo</em>, seguita o preceduta da un aggettivo qualificativo, d&agrave; luogo a una espressione equivalente all&rsquo;avverbio dell&rsquo;aggettivo stesso:<em>in modo cortese</em>, cortesemente;<em>in modo giusto</em>, giustamente;<em>in modo corretto</em>, correttamente | forma abbreviata di<em>modo di dire</em>:<em>ci augura tanta fortuna con modi toscani ma pronuncia padana</em></p>
<p>2.maniera usuale o tipica di comportarsi, di fare; abitudine, usanza:<em>avere modi bruschi, affettuosi</em>;<em>prima colazione al modo contadino</em>|a mio, tuo, suo ecc. modo (o a modo mio, tuo, suo ecc.), come so, voglio o mi piace fare:<em>ognuno si regoli a suo modo</em>|che modo &egrave; questo?, per riprendere un comportamento sconveniente o scortese:<em>che modo &egrave; questo di scrivere?</em>|esserci modo e modo, per dire che le cose cambiano a seconda della maniera in cui si fanno, si dicono, si presentano:<em>c&rsquo;&egrave; modo e modo di parlare</em>;<em>si pu&ograve; fare un appunto senza offendere: c&rsquo;&egrave; modo e modo!</em></p>
<p>3.mezzo, metodo per raggiungere un fine; procedimento, espediente:<em>in che modo farai?</em>;<em>trovare un modo rapido e sicuro</em>|dare, avere modo, dare, avere l&rsquo;opportunit&agrave;, la possibilit&agrave;:<em>dammi modo di pensarci</em>;<em>non ho modo di vederlo</em>|con, in tutti i modi, in ogni modo, in qualunque modo, con qualsiasi mezzo, comunque, a tutti i costi |in nessun modo, in alcun modo, per nessuna ragione |non esserci modo, non esser possibile:<em>non c&rsquo;&egrave; modo di convincerla</em></p>
<p>4.procedura, modalit&agrave;:<em>agire nei modi di legge</em></p>
<p>5.limite, misura:<em>agire, comportarsi con modo</em>|porre modo, (lett.) mettere un limite:<em>se egli avesse saputo por modo alle felicit&agrave; sue</em>(BOCCACCIO<em>Dec.</em>V, 2) |senza modo, smodatamente, senza limite |sopra modo, fuor di modo, oltre modo, fuor di misura, esageratamente</p>
<p>6.(gramm.) categoria della coniugazione verbale che presenta l&rsquo;azione o situazione descritta dal verbo come certa (<em>indicativo</em>), possibile (<em>congiuntivo</em>), desiderata (<em>condizionale</em>) ecc.; in italiano i modi sono sette: indicativo, congiuntivo, condizionale, imperativo (<em>finiti</em>); infinito, participio, gerundio (<em>infiniti</em>)</p>
<p>7.(mus.) sistema organizzato di intervalli che d&agrave; luogo a diverse scale:<em>gli antichi modi greci, medievali</em>;<em>i moderni modi maggiore e minore</em>| nella polifonia dei secoli XII e XIII, configurazione di determinati schemi ritmici</p>
<p>8.in radiofonia, forma abbreviata di<em>modulazione di frequenza</em>nel significato di &lsquo;selezione di banda&rsquo;</p>
<p>9.(dir.) onere, collegato a una disposizione a titolo gratuito (legato, comodato, donazione), posto a carico del beneficiato</p>
(Garzanti 1994)<strong><br /></strong></td>
</tr>
<tr>
<td><a href="/words/view/44971">villa</a> (HU) &ne; <a href="/words/view/83197">villa</a> (IT)<br /><a href="/words/view/44971">villa</a> (HU) = Casa signorile (IT)<br /><br /> Classification: <a href="/classifications/view/3">Falsi amici parziali (overlap)</a><br /><br />
<p><strong>1.</strong>casa signorile, circondata da un giardino o da un parco:<em>abita in una villa in collina</em>;<em>possedere una villa al mare, sul lago</em>;<em>le ville medicee, palladiane</em>dim. villetta, villettina, villino (m.), villuccia, accr. villona, villone (m.), pegg. villaccia</p>
</td>
<td><a href="/words/view/83197">villa</a> (IT) &ne; <a href="/words/view/44971">villa</a> (HU)<br /><a href="/words/view/83197">villa</a> (IT) = Park (HU) <br /><br /><br /><br />
<div>
<p><strong>1.</strong>casa signorile, circondata da un giardino o da un parco:<em>abita in una villa in collina</em>;<em>possedere una villa al mare, sul lago</em>;<em>le ville medicee, palladiane</em>dim. villetta, villettina, villino (m.), villuccia, accr. villona, villone (m.), pegg. villaccia</p>
<p><strong>2.&nbsp;parco, giardino annesso a una villa; anche, parco, giardino in genere:&nbsp;villa comunale;&nbsp;Villa Borghese, a Roma</strong></p>
<p><strong>3.</strong>(lett.) campagna, contado |<strong>uomo di villa</strong>, campagnolo, villano</p>
<p><strong>4.</strong>(lett.) piccolo borgo, paese:<em>odi spesso un tonar di ferree canne / che rimbomba lontan di villa in villa</em>(LEOPARDI<em>Il passero solitario</em>30-31) | citt&agrave;:<em>I&rsquo; fui nato e cresciuto / sovra 'l bel fiume d&rsquo;Arno a la gran villa</em>(DANTE<em>Inf.</em>XXIII, 94-95)</p>
</div>
<p><strong>Etimologia</strong>&larr; dal lat.<em>vī</em>lla(m) &lsquo;casa di campagna&rsquo;.</p>
</td>
</tr>
<tr>
<td><a href="/words/view/69904">paletta</a> (HU) &ne; <a href="/words/view/105068">paletta</a> (IT)<br /><a href="/words/view/69904">paletta</a> (HU) = spettro (come in ampio spettro) (IT)<br /><br /> Classification: <a href="/classifications/view/3">Falsi amici parziali (overlap)</a><br /><br />
<p>1. disco con lungo manico con cui il capostazione d&agrave; il segnale di partenza al treno o la polizia o altro personale autorizzato intima l&rsquo;alt a un veicolo</p>
<p>A sz&iacute;nek sz&eacute;les palett&aacute;j&aacute;n szabad szemmel megk&uuml;l&ouml;nb&ouml;ztethetetlen &aacute;rnyalatok is l&eacute;teznek.</p>
</td>
<td><a href="/words/view/105068">paletta</a> (IT) &ne; <a href="/words/view/69904">paletta</a> (HU)<br /><a href="/words/view/105068">paletta</a> (IT) = Kislap&aacute;t (HU) <br /><br /><br /><br />
<p><strong>1.</strong>diminutivo di<em>pala</em>1| piccola pala usata come attrezzo domestico:<em>la paletta del focolare, della spazzatura</em>;<em>girare il pesce nella padella aiutandosi con la paletta</em>| piccola pala che usano i bambini per giocare sulla spiaggia dim. palettina, accr. palettona</p>
<div>
<p><strong>2.</strong>disco con lungo manico con cui il capostazione d&agrave; il segnale di partenza al treno o la polizia o altro personale autorizzato intima l&rsquo;alt a un veicolo</p>
</div>
<div>
<p><strong>3.</strong>(mecc.) ciascuno degli elementi a forma di pala, ma di dimensioni ridotte, degli organi rotanti o fissi di turbine, compressori radiali ecc.:<em>le palette del distributore</em></p>
</div>
<p><strong>4.</strong>(mus.) parte terminale del manico della chitarra; cavigliere</p>
<p><strong>5.</strong>parte posteriore del seggio della sella.</p>
</td>
</tr>
<tr>
<td><a href="/words/view/29966">dett&oacute;</a> (HU) &ne; <a href="/words/view/78286">detto</a> (IT)<br /><a href="/words/view/29966">dett&oacute;</a> (HU) = Similmente (IT)<br /><br /> Classification: <a href="/classifications/view/3">Falsi amici parziali (overlap)</a><br /><br />
<p>"&nbsp;<em>Ha te elm&eacute;sz hazulr&oacute;l, akkor &eacute;n<strong>dett&oacute;</strong>elmegyek. Holnap<strong>dett&oacute;</strong>ugyanilyen meleg idő lesz.</em> "</p>
</td>
<td><a href="/words/view/78286">detto</a> (IT) &ne; <a href="/words/view/29966">dett&oacute;</a> (HU)<br /><a href="/words/view/78286">detto</a> (IT) = Mond&aacute;s, eml&iacute;tett (HU) <br /><br /><br /><br />
<p><a title="Morfologia" href="http://www.garzantilinguistica.it/ricerca/?q=detto#">m</a></p>
<p>(n.m)</p>
<p>pl.<em>-i</em></p>
<p><strong>1.</strong>motto, sentenza, proverbio:<em>i detti popolari, degli antichi</em></p>
<p><strong>2.&nbsp;</strong>nelle didascalie teatrali, personaggio che era gi&agrave; nella scena precedente e che continua a essere presente:<em>Arlecchino e detti</em></p>
<p><strong>3.</strong>nel medioevo, poemetto d&rsquo;argomento allegorico-didattico:<em>&laquo;Il Detto d&rsquo;Amore&raquo;</em>, poemetto attribuito a Dante</p>
<p><strong>4.</strong>(non com.) il dire, ci&ograve; che si dice; parola, frase, discorso:<em>stando al suo detto</em>, stando a ci&ograve; che egli dice</p>
<em><br />(agg)<br /><br /></em>
<p><strong>1.</strong>soprannominato:<em>Lorenzo de&rsquo; Medici detto &laquo;il Magnifico&raquo;</em></p>
<p><strong>2.</strong>(burocr.) gi&agrave; nominato, sopraddetto:<em>nel detto giorno.</em></p>
<p>(Garzanti 1994)</p>
</td>
</tr>
<tr>
<td><a href="/words/view/18884">&oacute;ra</a> (HU) &ne; <a href="/words/view/77460">ora</a> (IT)<br /><a href="/words/view/18884">&oacute;ra</a> (HU) = Orologio / ora (60 minuti) (IT)<br /><br /> Classification: <a href="/classifications/view/3">Falsi amici parziali (overlap)</a><br /><br />
<p>Orologio: <em>az &oacute;ra el&uuml;t&ouml;tte a delet</em><br />uno strumento per misurare e registrare il tempo, soprattutto con mezzi meccanici, di solito con le mani o cambiando i numeri per indicare l'ora e il minuto: non progettato per essere indossato o portato in giro.(Garzanti 1994)</p>
<p>Ora:&nbsp;<em>Elgelt egy &oacute;ra, de m&eacute;g mindig nem j&ouml;tt a busz.</em><br />"unit&agrave; di tempo pari alla ventiquattresima parte del giorno solare medio, uguale a 60 minuti primi, ossia 3600 secondi; lo spazio di tempo di tale durata:<em>ora del giorno, della notte</em>;<em>ore antimeridiane, pomeridiane</em>;<em>un quarto d&rsquo;ora, mezz&rsquo;ora</em>;<em>la lancetta delle ore</em>;<em>l&rsquo;orologio segna, batte le ore</em>;<em>le ore 9 del mattino</em>;<em>un&rsquo;ora di lezione</em>;<em>un&rsquo;ora di cammino</em>dim. oretta" (Garzanti 1994)<br /><br /></p>
</td>
<td><a href="/words/view/77460">ora</a> (IT) &ne; <a href="/words/view/18884">&oacute;ra</a> (HU)<br /><a href="/words/view/77460">ora</a> (IT) = &oacute;ra (szerkezet), most (HU) <br /><br /><br /><br />
<p><strong>1.</strong>in questo momento, adesso; attualmente, al presente:<em>ora non posso uscire</em>;<em>ora le cose vanno meglio</em>;<em>cose che ora non si usano pi&ugrave;</em>, al giorno d&rsquo;oggi, nel tempo presente |<strong>alcuni mesi, giorni, anni or sono</strong>, alcuni mesi, giorni, anni fa (con soggetto al singolare &egrave; di uso letterario:<em>or &egrave; un anno</em>)</p>
<p><strong>2.</strong>nell&rsquo;immediato passato; poco fa:<em>se ne &egrave; andato ora</em>|<strong>or ora</strong>, raddoppiato, con lo stesso significato:<em>il parroco &egrave; arrivato or ora</em>(Landolfi)</p>
<p><strong>3.</strong>nell&rsquo;immediato futuro; tra poco, subito:<em>arriver&agrave; ora</em>;<em>ora lo chiamo</em></p>
<p><strong>4.</strong>con funzione correlativa, un momento... un altro, una volta... un&rsquo;altra:<em>ora dice di s&igrave;<em>,</em>ora di no</em>;<em>ora qui<em>,</em>ora l&igrave;</em><br /><br /></p>
<p><strong>1.</strong>dunque, di conseguenza (per riprendere o concludere un discorso):<em>ora<em>,</em>se le cose stanno cos&igrave;<em>,</em>&egrave; meglio soprassedere</em>;<em>ora si deve sapere che...</em>;<em>or dunque, or bene le cose sono arrivate a questo punto</em></p>
<p><strong>2.</strong>d&rsquo;altra parte, invece (con valore avversativo):<em>tu credi di aver ragione, ora io ti dico che hai torto</em>|<strong>or via!, or su</strong>, (non com.) ors&ugrave;, come espressione di incitamento, di esortazione</p>
<p>(Garzanti 1994)</p>
</td>
</tr>
<tr>
<td><a href="/words/view/9755">fia</a> (HU) &ne; <a href="/words/view/85864">fia</a> (IT)<br /><a href="/words/view/9755">fia</a> (HU) = (IT)<br /><br /> Classification: <a href="/classifications/view/4">Coincidenza lessicale casuale</a><br /><br /></td>
<td><a href="/words/view/85864">fia</a> (IT) &ne; <a href="/words/view/9755">fia</a> (HU)<br /><a href="/words/view/85864">fia</a> (IT) = (HU) <br /><br /><br /><br /></td>
</tr>
<tr>
<td><a href="/words/view/1722">lass&uacute;</a> (HU) &ne; <a href="/words/view/79080">lass&ugrave;</a> (IT)<br /><a href="/words/view/1722">lass&uacute;</a> (HU) = (IT)<br /><br /> Classification: <a href="/classifications/view/4">Coincidenza lessicale casuale</a><br /><br /></td>
<td><a href="/words/view/79080">lass&ugrave;</a> (IT) &ne; <a href="/words/view/1722">lass&uacute;</a> (HU)<br /><a href="/words/view/79080">lass&ugrave;</a> (IT) = (HU) <br /><br /><br /><br /></td>
</tr>
<tr>
<td><a href="/words/view/8801">lenti</a> (HU) &ne; <a href="/words/view/108672">lenti</a> (IT)<br /><a href="/words/view/8801">lenti</a> (HU) = (IT)<br /><br /> Classification: <a href="/classifications/view/4">Coincidenza lessicale casuale</a><br /><br /></td>
<td><a href="/words/view/108672">lenti</a> (IT) &ne; <a href="/words/view/8801">lenti</a> (HU)<br /><a href="/words/view/108672">lenti</a> (IT) = (HU) <br /><br /><br /><br /></td>
</tr>
<tr>
<td><a href="/words/view/809">ma</a> (HU) &ne; <a href="/words/view/77667">ma</a> (IT)<br /><a href="/words/view/809">ma</a> (HU) = (IT)<br /><br /> Classification: <a href="/classifications/view/4">Coincidenza lessicale casuale</a><br /><br /></td>
<td><a href="/words/view/77667">ma</a> (IT) &ne; <a href="/words/view/809">ma</a> (HU)<br /><a href="/words/view/77667">ma</a> (IT) = (HU) <br /><br /><br /><br /></td>
</tr>
<tr>
<td><a href="/words/view/959">mai</a> (HU) &ne; <a href="/words/view/77714">mai</a> (IT)<br /><a href="/words/view/959">mai</a> (HU) = quotidiano (IT)<br /><br /> Classification: <a href="/classifications/view/4">Coincidenza lessicale casuale</a><br /><br /> (agg.) quotidiano, di oggi</td>
<td><a href="/words/view/77714">mai</a> (IT) &ne; <a href="/words/view/959">mai</a> (HU)<br /><a href="/words/view/77714">mai</a> (IT) = soha (HU) <br /><br /><br /><br />(avv.) nessuna volta, in nessun tempo</td>
</tr>
<tr>
<td><a href="/words/view/36147">m&eacute;rce</a> (HU) &ne; <a href="/words/view/79169">merce</a> (IT)<br /><a href="/words/view/36147">m&eacute;rce</a> (HU) = (IT)<br /><br /> Classification: <a href="/classifications/view/4">Coincidenza lessicale casuale</a><br /><br />
<p>(n)<br />Un livello di qualit&agrave; o raggiungimento.<br /><em>'Az &eacute;tterm&uuml;kben magasra tett&eacute;k a m&eacute;rc&eacute;t' &mdash;&nbsp;<em>'Il loro ristorante&nbsp;offre un elevato standard di servizio'&nbsp;</em><br /></em></p>
<p>2. <br />nastro o regolo della lunghezza di uno o pi&ugrave; metri e con la graduazione dei decimetri e centimetri:<em>misurare qualcosa con un metro</em>;<em>metro da sarto, da falegname</em></p>
</td>
<td><a href="/words/view/79169">merce</a> (IT) &ne; <a href="/words/view/36147">m&eacute;rce</a> (HU)<br /><a href="/words/view/79169">merce</a> (IT) = (HU) <br /><br /><br /><br />
<p>(n.f.)</p>
<div>
<p><strong>1.</strong>qualunque bene economico mobile destinato alla vendita:<em>merce preziosa, avariata</em>;<em>merce di prima, di seconda scelta</em>;<em>distinta, inventario delle merci</em>;<em>ritirare, ricevere, spedire la merce</em>;<em>spacciare merce di contrabbando</em>|<strong>carro, treno merci</strong>, adibiti al solo trasporto di merci</p>
<p><strong>2.</strong>bene, valore spirituale:<em>l&rsquo;onest&agrave; &egrave; una merce rara</em></p>
</div>
<p><strong>Etimologia:</strong>&larr; lat.<em>mĕ</em>rce(m).</p>
</td>
</tr>
<tr>
<td><a href="/words/view/33943">mer&iacute;ti</a> (HU) &ne; <a href="/words/view/91238">meriti</a> (IT)<br /><a href="/words/view/33943">mer&iacute;ti</a> (HU) = (IT)<br /><br /> Classification: <a href="/classifications/view/4">Coincidenza lessicale casuale</a><br /><br /></td>
<td><a href="/words/view/91238">meriti</a> (IT) &ne; <a href="/words/view/33943">mer&iacute;ti</a> (HU)<br /><a href="/words/view/91238">meriti</a> (IT) = (HU) <br /><br /><br /><br /></td>
</tr>
<tr>
<td><a href="/words/view/52857">ama</a> (HU) &ne; <a href="/words/view/92572">ama</a> (IT)<br /><a href="/words/view/52857">ama</a> (HU) = (IT)<br /><br /> Classification: <a href="/classifications/view/4">Coincidenza lessicale casuale</a><br /><br /></td>
<td><a href="/words/view/92572">ama</a> (IT) &ne; <a href="/words/view/52857">ama</a> (HU)<br /><a href="/words/view/92572">ama</a> (IT) = (HU) <br /><br /><br /><br /></td>
</tr>
<tr>
<td><a href="/words/view/11313">ad&oacute;ra</a> (HU) &ne; <a href="/words/view/115903">adora</a> (IT)<br /><a href="/words/view/11313">ad&oacute;ra</a> (HU) = (IT)<br /><br /> Classification: <a href="/classifications/view/4">Coincidenza lessicale casuale</a><br /><br /></td>
<td><a href="/words/view/115903">adora</a> (IT) &ne; <a href="/words/view/11313">ad&oacute;ra</a> (HU)<br /><a href="/words/view/115903">adora</a> (IT) = (HU) <br /><br /><br /><br /></td>
</tr>
<tr>
<td><a href="/words/view/776">arca</a> (HU) &ne; <a href="/words/view/108966">arca</a> (IT)<br /><a href="/words/view/776">arca</a> (HU) = (IT)<br /><br /> Classification: <a href="/classifications/view/4">Coincidenza lessicale casuale</a><br /><br /></td>
<td><a href="/words/view/108966">arca</a> (IT) &ne; <a href="/words/view/776">arca</a> (HU)<br /><a href="/words/view/108966">arca</a> (IT) = (HU) <br /><br /><br /><br /></td>
</tr>
<tr>
<td><a href="/words/view/2375">testi</a> (HU) &ne; <a href="/words/view/78564">testi</a> (IT)<br /><a href="/words/view/2375">testi</a> (HU) = (IT)<br /><br /> Classification: <a href="/classifications/view/4">Coincidenza lessicale casuale</a><br /><br />
<div>
<p><strong>1.</strong>che si riferisce o appartiene al corpo o agli organi degli esseri viventi, in particolare a quelli coordinati dal sistema nervoso centrale, come gli organi di senso e quelli locomotori:<em>cellule somatiche</em>, tutte quelle non adibite alla riproduzione</p>
<p><strong>2.</strong>che si riferisce al corpo umano, alle sue fattezze:<em>tratti, caratteri somatici</em>, quelli caratteristici di un tipo umano o di un individuo</p>
</div>
<p><strong>Etimologia</strong>&larr; dal gr.<em>sō</em>matik&oacute;s, deriv. di<em>s&ocirc;ma -atos</em>&lsquo;soma&rsquo;.</p>
<p>(Garzanti 1994)</p>
</td>
<td><a href="/words/view/78564">testi</a> (IT) &ne; <a href="/words/view/2375">testi</a> (HU)<br /><a href="/words/view/78564">testi</a> (IT) = (HU) <br /><br /><br /><br />
<p><strong>1.</strong>l&rsquo;insieme delle parole che compongono uno scritto o un discorso:<em>il testo di una lettera, di una legge</em>;<em>il testo del discorso</em></p>
<p><strong>2.</strong>lo scritto nella sua forma originale, distinto da ci&ograve; che viene aggiunto come commento, spiegazione, traduzione ecc.:<em>traduzione con testo a fronte</em>;<em>una traduzione che travisa il testo</em>;<em>testo commentato, postillato, annotato, emendato</em>|<strong>carattere di, da testo</strong>, (tip.) quelli facilmente leggibili, di forma classica, contrapposti ai caratteri fantasia, da titoli ecc.</p>
<p><strong>3.</strong>libro autorevole, che &egrave; oggetto di studio:<em>i testi classici</em></p>
<p><strong>4.</strong>(ling.) qualsiasi enunciato linguistico in quanto venga sottoposto ad analisi | in linguistica testuale, produzione linguistica orale o scritta di senso compiuto, fatta da un emittente e accolta da un ricevente in una determinata situazione con l&rsquo;intenzione e con l&rsquo;effetto di comunicare</p>
<p><strong>5.</strong>(filol.) il risultato della trasmissione scritta di un&rsquo;opera:<em>critica del testo</em></p>
<p><strong>Etimologia:</strong>&larr; dal lat.<em>tĕ</em>xtu(m), propr. &lsquo;intreccio, trama&rsquo;, deriv. di<em>texĕ</em>re &lsquo;tessere&rsquo;.</p>
<p>(Garzanti 1994)</p>
</td>
</tr>
<tr>
<td><a href="/words/view/3104">tette</a> (HU) &ne; <a href="/words/view/90274">tette</a> (IT)<br /><a href="/words/view/3104">tette</a> (HU) = (IT)<br /><br /> Classification: <a href="/classifications/view/4">Coincidenza lessicale casuale</a><br /><br /></td>
<td><a href="/words/view/90274">tette</a> (IT) &ne; <a href="/words/view/3104">tette</a> (HU)<br /><a href="/words/view/90274">tette</a> (IT) = (HU) <br /><br /><br /><br /></td>
</tr>
<tr>
<td><a href="/words/view/9077">mutat&oacute;</a> (HU) &ne; <a href="/words/view/100775">mutato</a> (IT)<br /><a href="/words/view/9077">mutat&oacute;</a> (HU) = (IT)<br /><br /> Classification: <a href="/classifications/view/4">Coincidenza lessicale casuale</a><br /><br /></td>
<td><a href="/words/view/100775">mutato</a> (IT) &ne; <a href="/words/view/9077">mutat&oacute;</a> (HU)<br /><a href="/words/view/100775">mutato</a> (IT) = (HU) <br /><br /><br /><br /></td>
</tr>
<tr>
<td><a href="/words/view/10569">piaci</a> (HU) &ne; <a href="/words/view/84754">piaci</a> (IT)<br /><a href="/words/view/10569">piaci</a> (HU) = (IT)<br /><br /> Classification: <a href="/classifications/view/4">Coincidenza lessicale casuale</a><br /><br /></td>
<td><a href="/words/view/84754">piaci</a> (IT) &ne; <a href="/words/view/10569">piaci</a> (HU)<br /><a href="/words/view/84754">piaci</a> (IT) = (HU) <br /><br /><br /><br /></td>
</tr>
<tr>
<td><a href="/words/view/14359">torna</a> (HU) &ne; <a href="/words/view/78061">torna</a> (IT)<br /><a href="/words/view/14359">torna</a> (HU) = (IT)<br /><br /> Classification: <a href="/classifications/view/4">Coincidenza lessicale casuale</a><br /><br /></td>
<td><a href="/words/view/78061">torna</a> (IT) &ne; <a href="/words/view/14359">torna</a> (HU)<br /><a href="/words/view/78061">torna</a> (IT) = (HU) <br /><br /><br /><br /></td>
</tr>
<tr>
<td><a href="/words/view/15342">verte</a> (HU) &ne; <a href="/words/view/93893">verte</a> (IT)<br /><a href="/words/view/15342">verte</a> (HU) = (IT)<br /><br /> Classification: <a href="/classifications/view/4">Coincidenza lessicale casuale</a><br /><br /></td>
<td><a href="/words/view/93893">verte</a> (IT) &ne; <a href="/words/view/15342">verte</a> (HU)<br /><a href="/words/view/93893">verte</a> (IT) = (HU) <br /><br /><br /><br /></td>
</tr>
<tr>
<td><a href="/words/view/16413">pia</a> (HU) &ne; <a href="/words/view/82029">pia</a> (IT)<br /><a href="/words/view/16413">pia</a> (HU) = (IT)<br /><br /> Classification: <a href="/classifications/view/4">Coincidenza lessicale casuale</a><br /><br /></td>
<td><a href="/words/view/82029">pia</a> (IT) &ne; <a href="/words/view/16413">pia</a> (HU)<br /><a href="/words/view/82029">pia</a> (IT) = (HU) <br /><br /><br /><br /></td>
</tr>
<tr>
<td><a href="/words/view/347">vele</a> (HU) &ne; <a href="/words/view/86758">vele</a> (IT)<br /><a href="/words/view/347">vele</a> (HU) = (IT)<br /><br /> Classification: <a href="/classifications/view/4">Coincidenza lessicale casuale</a><br /><br /></td>
<td><a href="/words/view/86758">vele</a> (IT) &ne; <a href="/words/view/347">vele</a> (HU)<br /><a href="/words/view/86758">vele</a> (IT) = (HU) <br /><br /><br /><br /></td>
</tr>
<tr>
<td><a href="/words/view/1090">neve</a> (HU) &ne; <a href="/words/view/94874">neve</a> (IT)<br /><a href="/words/view/1090">neve</a> (HU) = (IT)<br /><br /> Classification: <a href="/classifications/view/4">Coincidenza lessicale casuale</a><br /><br /></td>
<td><a href="/words/view/94874">neve</a> (IT) &ne; <a href="/words/view/1090">neve</a> (HU)<br /><a href="/words/view/94874">neve</a> (IT) = (HU) <br /><br /><br /><br /></td>
</tr>
<tr>
<td><a href="/words/view/3629">ebbe</a> (HU) &ne; <a href="/words/view/92055">ebbe</a> (IT)<br /><a href="/words/view/3629">ebbe</a> (HU) = (IT)<br /><br /> Classification: <a href="/classifications/view/4">Coincidenza lessicale casuale</a><br /><br /></td>
<td><a href="/words/view/92055">ebbe</a> (IT) &ne; <a href="/words/view/3629">ebbe</a> (HU)<br /><a href="/words/view/92055">ebbe</a> (IT) = (HU) <br /><br /><br /><br /></td>
</tr>
<tr>
<td><a href="/words/view/21823">t&ouml;ltő</a> (HU) &ne; <a href="/words/view/82479">tolto</a> (IT)<br /><a href="/words/view/21823">t&ouml;ltő</a> (HU) = (IT)<br /><br /> Classification: <a href="/classifications/view/4">Coincidenza lessicale casuale</a><br /><br /></td>
<td><a href="/words/view/82479">tolto</a> (IT) &ne; <a href="/words/view/21823">t&ouml;ltő</a> (HU)<br /><a href="/words/view/82479">tolto</a> (IT) = (HU) <br /><br /><br /><br /></td>
</tr>
<tr>
<td><a href="/words/view/21852">duna</a> (HU) &ne; <a href="/words/view/84091">duna</a> (IT)<br /><a href="/words/view/21852">duna</a> (HU) = Danubio (IT)<br /><br /> Classification: <a href="/classifications/view/4">Coincidenza lessicale casuale</a><br /><br />
<div>(nome proprio) Il fiume Danubio.&nbsp;</div>
</td>
<td><a href="/words/view/84091">duna</a> (IT) &ne; <a href="/words/view/21852">duna</a> (HU)<br /><a href="/words/view/84091">duna</a> (IT) = dűne (HU) <br /><br /><br /><br />
<div>pl.<em>-e</em><br />rilievo sabbioso instabile formato a causa del vento in spiagge o deserti | cumulo di neve formato dal vento</div>
<p><strong>Etimologia:</strong>&larr; dal medio ol.<em>dū</em>ne (mod.<em>duin</em>).</p>
<p>(Garzanti 1994)</p>
</td>
</tr>
<tr>
<td><a href="/words/view/24493">mente</a> (HU) &ne; <a href="/words/view/79689">mente</a> (IT)<br /><a href="/words/view/24493">mente</a> (HU) = Dolman (IT)<br /><br /> Classification: <a href="/classifications/view/4">Coincidenza lessicale casuale</a><br /><br />
<p>Sinonimo di<em> Dolm&aacute;ny.</em></p>
<div>
<p><strong>1.</strong>giubba di panno pesante, ornata di astracan e alamari, tipica dell&rsquo;uniforme degli ussari | giacca femminile di forma analoga</p>
<p><strong>2.</strong>veste sacerdotale turca</p>
</div>
<p><strong>Etimologia:</strong>&larr; dal turco<em>dolama(n)</em>.</p>
<p>(Garzanti 1994)</p>
<p>Anche: l'andare di una persona (<em>Ment&eacute;ben m&eacute;g h&aacute;trakacsintott)</em></p>
</td>
<td><a href="/words/view/79689">mente</a> (IT) &ne; <a href="/words/view/24493">mente</a> (HU)<br /><a href="/words/view/79689">mente</a> (IT) = &Eacute;sz (HU) <br /><br /><br /><br />
<div>
<p><strong>1.</strong>l&rsquo;insieme delle facolt&agrave; intellettive che permettono all&rsquo;uomo di conoscere la realt&agrave;, di pensare e di giudicare (spesso in contrapposizione a<em>corpo</em>o a<em>cuore</em>):<em>affaticare, riposare la mente</em>;<em>mente sana in corpo sano</em>;<em>ragionare con la mente e non col cuore</em>|<strong>uscire di mente</strong>, perdere la ragione, uscire di senno |<strong>malato di mente</strong>, chi presenta alterazioni delle facolt&agrave; mentali</p>
<p><strong>2.</strong>la sede in cui l&rsquo;attivit&agrave; del pensiero ha luogo; testa, capo:<em>che cosa ti salta in mente?</em>;<em>non mi passa neppure per la mente</em>, non ci penso affatto</p>
<p><strong>3.</strong>particolare attitudine, inclinazione mentale:<em>avere una mente riflessiva, speculativa, calcolatrice</em></p>
<p><strong>4.</strong>intelligenza, capacit&agrave; intellettiva:<em>mente acuta, ottusa</em>;<em>ristrettezza di mente</em></p>
<p><strong>5.</strong>il pensiero, l&rsquo;attenzione:<em>essere altrove con la mente</em>;<em>applicare la mente a qualcosa</em>, rivolgerle l&rsquo;attenzione | volont&agrave;, proposito, intenzione:<em>avere in mente una cosa</em>, avere intenzione di farla;<em>mettersi, ficcarsi in mente di fare qualcosa</em>, ostinarsi nel volerla fare;<em>levarsi qualcosa dalla mente</em>, dissuadersi da un proposito</p>
<p><strong>6.</strong>memoria:<em>un ricordo vivo nella mente</em>;<em>tornare alla mente, in mente</em>, di cosa che si era dimenticata;<em>mi &egrave; uscito, passato, scappato di mente</em>, me ne sono dimenticato</p>
<p><strong>7.</strong>il complesso delle idee, delle cognizioni di una persona; anche, la persona stessa fornita di determinate qualit&agrave;:<em>educare la mente</em>;<em>le pi&ugrave; belle menti del mondo</em>;<em>&egrave; una mente geniale, bislacca</em>|<strong>il braccio e la mente</strong>, chi esegue materialmente un&rsquo;impresa e chi la organizza e dirige</p>
</div>
<p><strong>Etimologia:</strong>&larr; dal lat.<em>mĕ</em>nte(m), da una radice *<em>men-</em>indicante in generale l&rsquo;attivit&agrave; del pensiero.</p>
<p>(Garzanti 1994)</p>
</td>
</tr>
<tr>
<td><a href="/words/view/18003">talpa</a> (HU) &ne; <a href="/words/view/97381">talpa</a> (IT)<br /><a href="/words/view/18003">talpa</a> (HU) = Suola, pianta (IT)<br /><br /> Classification: <a href="/classifications/view/4">Coincidenza lessicale casuale</a><br /><br />
<div>
<p>la parte della scarpa che poggia sul terreno:<em>suola di cuoio, di gomma, di corda</em>;<em>suola chiodata</em></p>
</div>
<p><strong><br /></strong>la parte del piede volta verso terra | l&rsquo;intero piede o la parte inferiore della scarpa<br />(Garzanti 1994)</p>
</td>
<td><a href="/words/view/97381">talpa</a> (IT) &ne; <a href="/words/view/18003">talpa</a> (HU)<br /><a href="/words/view/97381">talpa</a> (IT) = Vakond (HU) <br /><br /><br /><br />
<div>
<p><strong>1.</strong>piccolo mammifero insettivoro, dal corpo tozzo coperto da una morbida pelliccia grigio-scura; ha muso appuntito, occhi piccoli e zampe corte con unghie robuste, adatte a scavare gallerie sotterranee (<em>fam.</em>Talpidi) |<strong>essere cieco, sordo come una talpa</strong>, (fam.) vedere o sentire pochissimo |<strong>avere il cervello di una talpa</strong>, (fam.) essere tardo, ottuso accr. talpona, talpone (m.)</p>
<p><strong>2.</strong>persona che, lavorando all&rsquo;interno di uffici, enti, aziende ecc., fornisce segretamente e in modo illecito informazioni riservate delle quali &egrave; a conoscenza per il ruolo che svolge</p>
<p><strong>3.</strong>macchina escavatrice per realizzare gallerie<br /><br /><strong>&diams; n.m. e agg. m. e f. invar.</strong><br /><br />(sempre dopo il nome) si dice di colore grigio-scuro simile a quello dell&rsquo;animale, e di ci&ograve; che ha questo colore</p>
</div>
<p><strong>Etimologia:</strong>&larr; lat.<em>tă</em>lpa(m).</p>
<p>(Garzanti 1994)</p>
</td>
</tr>
<tr>
<td><a href="/words/view/35278">muri</a> (HU) &ne; <a href="/words/view/114277">muri</a> (IT)<br /><a href="/words/view/35278">muri</a> (HU) = Festa (IT)<br /><br /> Classification: <a href="/classifications/view/4">Coincidenza lessicale casuale</a><br /><br /> (n) festa, ricevimento</td>
<td><a href="/words/view/114277">muri</a> (IT) &ne; <a href="/words/view/35278">muri</a> (HU)<br /><a href="/words/view/114277">muri</a> (IT) = fal (t&aacute;mfal) (HU) <br /><br /><br /><br />la singola opera muraria, considerata separatamente i muri portanti, i muri di collegamento</td>
</tr>
<tr>
<td><a href="/words/view/45149">v&iacute;zi&oacute;</a> (HU) &ne; <a href="/words/view/91874">vizio</a> (IT)<br /><a href="/words/view/45149">v&iacute;zi&oacute;</a> (HU) = (IT)<br /><br /> Classification: <a href="/classifications/view/4">Coincidenza lessicale casuale</a><br /><br /></td>
<td><a href="/words/view/91874">vizio</a> (IT) &ne; <a href="/words/view/45149">v&iacute;zi&oacute;</a> (HU)<br /><a href="/words/view/91874">vizio</a> (IT) = (HU) <br /><br /><br /><br /></td>
</tr>
<tr>
<td><a href="/words/view/1090">neve</a> (HU) &ne; <a href="/words/view/94874">neve</a> (IT)<br /><a href="/words/view/1090">neve</a> (HU) = (IT)<br /><br /> Classification: <a href="/classifications/view/4">Coincidenza lessicale casuale</a><br /><br /></td>
<td><a href="/words/view/94874">neve</a> (IT) &ne; <a href="/words/view/1090">neve</a> (HU)<br /><a href="/words/view/94874">neve</a> (IT) = (HU) <br /><br /><br /><br /></td>
</tr>
</table>
</body>
</html>
