<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Stock Entity
 *
 * @property int $id
 * @property string $depot_id
 * @property string $pfinals_id
 *
 * @property \App\Model\Entity\Depot $depot
 * @property \App\Model\Entity\Pfinal $pfinal
 */
class Stock extends Entity
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
        'depot_id' => true,
        'pfinals_id' => true,
        'depot' => true,
        'pfinal' => true,
    ];
}
