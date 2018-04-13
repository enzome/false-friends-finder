<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Word Entity
 *
 * @property int $id
 * @property string $word
 * @property int $language_id
 *
 * @property \App\Model\Entity\Language $language
 * @property \App\Model\Entity\WordLocation[] $word_locations
 */
class Word extends Entity
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
        'word' => true,
        'language_id' => true,
        'language' => true,
        'word_locations' => true
    ];
}
