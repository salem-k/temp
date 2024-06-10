<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Commande Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenTime $date
 * @property string $numero
 * @property string|null $num_tab
 * @property int|null $client_id
 * @property float|null $remise
 * @property string $total
 * @property string|null $totalttc
 * @property int|null $commercial_id
 * @property string|null $payementcomptant
 * @property string|null $observation
 * @property int|null $pointdevente_id
 * @property int|null $depot_id
 * @property string $fodec
 * @property string $tpe
 * @property string $escompte
 * @property string $tva
 * @property int $etatliv
 * @property int|null $valide
 * @property \Cake\I18n\FrozenDate|null $dateimp
 * @property \Cake\I18n\FrozenDate|null $dateintfin
 * @property \Cake\I18n\FrozenDate|null $dateintdebut
 * @property \Cake\I18n\FrozenDate|null $dateupdateclient
 * @property string|null $nouv_client
 * @property string|null $brut
 * @property float|null $pallette
 * @property float|null $Coeff
 * @property float|null $Poids
 * @property int|null $type
 * @property int|null $nbligne
 * @property int|null $bl
 *
 * @property \App\Model\Entity\Client $client
 * @property \App\Model\Entity\Commercial $commercial
 * @property \App\Model\Entity\Pointdevente $pointdevente
 * @property \App\Model\Entity\Depot $depot
 * @property \App\Model\Entity\Detail[] $details
 */
class Commande extends Entity
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
        'numero' => true,
        'num_tab' => true,
        'client_id' => true,
        'remise' => true,
        'total' => true,
        'totalttc' => true,
        'commercial_id' => true,
        'payementcomptant' => true,
        'observation' => true,
        'pointdevente_id' => true,
        'depot_id' => true,
        'fodec' => true,
        'tpe' => true,
        'escompte' => true,
        'tva' => true,
        'etatliv' => true,
        'valide' => true,
        'dateimp' => true,
        'dateintfin' => true,
        'dateintdebut' => true,
        'dateupdateclient' => true,
        'nouv_client' => true,
        'brut' => true,
        'pallette' => true,
        'Coeff' => true,
        'Poids' => true,
        'type' => true,
        'nbligne' => true,
        'bl' => true,
        'client' => true,
        'commercial' => true,
        'pointdevente' => true,
        'depot' => true,
        'details' => true,
    ];
}
