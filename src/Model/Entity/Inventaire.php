<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Inventaire Entity
 *
 * @property int $id
 * @property string|null $numero
 * @property int|null $depot_id
 * @property \Cake\I18n\FrozenTime|null $date
 * @property int $valide
 * @property int|null $typeinventaire
 * @property int|null $pointdevente_id
 *
 * @property \App\Model\Entity\Depot $depot
 * @property \App\Model\Entity\Pointdevente $pointdevente
 */
class Inventaire extends Entity
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
        'depot_id' => true,
        'date' => true,
        'valide' => true,
        'typeinventaire' => true,
        'pointdevente_id' => true,
        'depot' => true,
        'pointdevente' => true,
    ];
}
