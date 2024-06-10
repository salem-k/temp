<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Destruction Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenTime $Date
 * @property string $Depot_id
 *
 * @property \App\Model\Entity\Depot $depot
 */
class Destruction extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'Date' => true,
        'Depot_id' => true,
        'depot' => true,
    ];
}
