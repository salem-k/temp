<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Bondetransfert Entity
 *
 * @property int $id
 * @property string $numero
 * @property \Cake\I18n\FrozenTime $date
 * @property int $pointdevente_id
 * @property int $depot_id
 * @property int $depot_to_id
 * @property int|null $bonreceptionstock_id
 * @property float $kilometragedepart
 * @property float $kilometragearrive
 *
 * @property \App\Model\Entity\Pointdevente $pointdevente
 * @property \App\Model\Entity\Depot $depot
 * @property \App\Model\Entity\Bonreceptionstock $bonreceptionstock
 */
class Bondetransfert extends Entity
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
        'numero' => true,
        'date' => true,
        'pointdevente_id' => true,
        'depot_id' => true,
        'depot_to_id' => true,
        'bonreceptionstock_id' => true,
        'kilometragedepart' => true,
        'kilometragearrive' => true,
        'pointdevente' => true,
        'depot' => true,
        'bonreceptionstock' => true,
    ];
}
