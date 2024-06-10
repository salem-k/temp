<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Commandeclient Entity
 *
 * @property int $id
 * @property string $code
 * @property int $client_id
 * @property \Cake\I18n\FrozenTime $date
 * @property \Cake\I18n\FrozenTime $datedecreation
 * @property string $commentaire
 * @property int $pointdevente_id
 * @property int $depot_id
 * @property string $totalht
 * @property string $totalttc
 * @property string $totalremise
 * @property string $totaltva
 * @property string $totalfodec
 * @property int|null $cartecarburant_id
 * @property int|null $materieltransport_id
 * @property int|null $chauffeur_id
 * @property int|null $convoyeur_id
 * @property int $bonlivraison_id
 * @property int $etatliv
 * @property int|null $projet_id
 * @property int|null $commandeclient_id
 * @property int|null $valider
 * @property int|null $facture_id
 * @property int|null $tvaOnOff
 * @property int|null $incoterm_id
 * @property int|null $duree_validite
 * @property int|null $devis_id
 * @property float|null $total_transport
 * @property int|null $condreglement_id
 * @property int|null $availability_id
 * @property int|null $shippingmethod_id
 * @property int|null $envoiemail
 *
 * @property \App\Model\Entity\Client $client
 * @property \App\Model\Entity\Pointdevente $pointdevente
 * @property \App\Model\Entity\Depot $depot
 * @property \App\Model\Entity\Commandeclient[] $commandeclients
 * @property \App\Model\Entity\Facture $facture
 */
class Commandeclient extends Entity
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
        'code' => true,
        'client_id' => true,
        'date' => true,
        'datedecreation' => true,
        'commentaire' => true,
        'pointdevente_id' => true,
        'depot_id' => true,
        'totalht' => true,
        'totalttc' => true,
        'totalremise' => true,
        'totaltva' => true,
        'totalfodec' => true,
        'cartecarburant_id' => true,
        'materieltransport_id' => true,
        'chauffeur_id' => true,
        'convoyeur_id' => true,
        'bonlivraison_id' => true,
        'etatliv' => true,
        'projet_id' => true,
        'commandeclient_id' => true,
        'valider' => true,
        'facture_id' => true,
        'tvaOnOff' => true,
        'incoterm_id' => true,
        'duree_validite' => true,
        'devis_id' => true,
        'total_transport' => true,
        'condreglement_id' => true,
        'availability_id' => true,
        'shippingmethod_id' => true,
        'envoiemail' => true,
        'client' => true,
        'pointdevente' => true,
        'depot' => true,
        'commandeclients' => true,
        'facture' => true,
    ];
}
