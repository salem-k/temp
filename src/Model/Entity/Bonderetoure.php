<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Bonderetoure Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenTime $date
 * @property int $pointdevente_id
 * @property int $depot_id
 * @property string $numero
 * @property int|null $kilometragedepart
 * @property int|null $kilometragearrive
 * @property int $poste
 *
 * @property \App\Model\Entity\Pointdevente $pointdevente
 * @property \App\Model\Entity\Depot $depot
 */
class Bonderetoure extends Entity
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
        'date' => true,
        'pointdevente_id' => true,
        'depot_id' => true,
        'numero' => true,
        'kilometragedepart' => true,
        'kilometragearrive' => true,
        'poste' => true,
        'pointdevente' => true,
        'depot' => true,
    ];
}
