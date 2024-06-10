<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Bonreceptionstock Entity
 *
 * @property int $id
 * @property string $numero
 * @property \Cake\I18n\FrozenTime $date
 * @property int $pointdevente_id
 * @property int $depot_id
 * @property int $materieltransport_id
 * @property int $cartecarburant_id
 * @property int $personnel_id
 * @property int $conffaieur_id
 * @property int $chauffeur_id
 * @property float $kilometragedepart
 * @property float $kilometragearrive
 *
 * @property \App\Model\Entity\Pointdevente $pointdevente
 * @property \App\Model\Entity\Depot $depot
 * @property \App\Model\Entity\Personnel $personnel
 * @property \App\Model\Entity\Bondetransfert[] $bondetransferts
 */
class Bonreceptionstock extends Entity
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
        'materieltransport_id' => true,
        'cartecarburant_id' => true,
        'personnel_id' => true,
        'conffaieur_id' => true,
        'chauffeur_id' => true,
        'kilometragedepart' => true,
        'kilometragearrive' => true,
        'pointdevente' => true,
        'depot' => true,
        'personnel' => true,
        'bondetransferts' => true,
    ];
}
