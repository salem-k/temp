<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Bontransfert Entity
 *
 * @property int $id
 * @property int $reference
 * @property \Cake\I18n\FrozenDate $date
 * @property string $depot_id
 * @property string $depot_to_id
 *
 * @property \App\Model\Entity\Depot $depot
 */
class Bontransfert extends Entity
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
        'reference' => true,
        'date' => true,
        'depot_id' => true,
        'depot_to_id' => true,
        'depot' => true,
    ];
}
