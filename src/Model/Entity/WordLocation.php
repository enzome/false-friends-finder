<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * WordLocation Entity
 *
 * @property int $id
 * @property int $word_id
 * @property string $url
 *
 * @property \App\Model\Entity\Word $word
 */
class WordLocation extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'word_id' => true,
        'url' => true,
        'word' => true
    ];
}
