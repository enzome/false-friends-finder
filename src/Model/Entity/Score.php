<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Score Entity
 *
 * @property int $id
 * @property string $name
 * @property int $hidden
 * @property int $explained
 * @property float $points
 */
class Score extends Entity
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
        'name' => true,
        'hidden' => true,
        'explained' => true,
    ];

    protected $_virtual = ['points'];

    protected function _getPoints() {
            $points = ($this->_properties['hidden'] * 0.5) + ($this->_properties['explained'] * 5);
            return $points;
    }
}
