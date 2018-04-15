<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * WordConnection Entity
 *
 * @property int $id
 * @property int $from_id
 * @property int $to_id
 * @property int $classification_id
 * @property string $description
 * @property string $from_meaning
 * @property string $to_meaning
 * @property int $completed
 *
 * @property \App\Model\Entity\Word $from_word
 * @property \App\Model\Entity\Word $to_word
 * @property \App\Model\Entity\Word $word
 * @property \App\Model\Entity\Classification $classification
 */
class WordConnection extends Entity
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
        'from_id' => true,
        'to_id' => true,
        'classification_id' => true,
        'description' => true,
        'from_meaning' => true,
        'to_meaning' => true,
        'completed' => true,
        'from_word' => true,
        'to_word' => true,
        'word' => true,
        'classification' => true,
        'completed_by' => true,
        'from_translation' => true,
        'to_translation' => true
    ];
}
