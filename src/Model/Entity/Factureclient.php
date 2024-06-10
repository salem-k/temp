<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Factureclient Entity
 *
 * @property int $id
 * @property string|null $numero
 * @property \Cake\I18n\FrozenTime|null $date
 * @property int|null $client_id
 * @property int|null $pointdevente_id
 * @property int|null $depot_id
 * @property int|null $materieltransport_id
 * @property int|null $cartecarburant_id
 * @property int|null $chauffeur_id
 * @property int|null $convoyeur_id
 * @property string|null $totalht
 * @property string|null $totalremise
 * @property string|null $totalfodec
 * @property string|null $totaltva
 * @property string|null $totalttc
 * @property float|null $kilometragearrive
 * @property float|null $kilometragedepart
 * @property int|null $adresselivraisonclient_id
 * @property string|null $payementcomptant
 * @property string|null $tpe
 * @property int|null $poste
 * @property int|null $bonlivraison_id
 * @property string|null $escompte
 * @property string|null $Montant_Regler
 * @property int|null $commandeclient_id
 * @property int|null $projet_id
 * @property int|null $tvaOnOff
 * @property int|null $incoterm_id
 * @property string|null $location_incoterms
 * @property int|null $options_incotermtotalpdf
 * @property int|null $options_istotaltransportdetaille
 * @property string|null $options_indicationenpdf
 *
 * @property \App\Model\Entity\Client $client
 * @property \App\Model\Entity\Pointdevente $pointdevente
 * @property \App\Model\Entity\Depot $depot
 * @property \App\Model\Entity\Commandeclient $commandeclient
 * @property \App\Model\Entity\Factureavoir[] $factureavoirs
 */
class Factureclient extends Entity
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
        'client_id' => true,
        'pointdevente_id' => true,
        'depot_id' => true,
        'materieltransport_id' => true,
        'cartecarburant_id' => true,
        'chauffeur_id' => true,
        'convoyeur_id' => true,
        'totalht' => true,
        'totalremise' => true,
        'totalfodec' => true,
        'totaltva' => true,
        'totalttc' => true,
        'kilometragearrive' => true,
        'kilometragedepart' => true,
        'adresselivraisonclient_id' => true,
        'payementcomptant' => true,
        'tpe' => true,
        'poste' => true,
        'bonlivraison_id' => true,
        'escompte' => true,
        'Montant_Regler' => true,
        'commandeclient_id' => true,
        'projet_id' => true,
        'tvaOnOff' => true,
        'incoterm_id' => true,
        'location_incoterms' => true,
        'options_incotermtotalpdf' => true,
        'options_istotaltransportdetaille' => true,
        'options_indicationenpdf' => true,
        'client' => true,
        'pointdevente' => true,
        'depot' => true,
        'commandeclient' => true,
        'factureavoirs' => true,
    ];
}
