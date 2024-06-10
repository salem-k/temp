<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Facture Entity
 *
 * @property int $id
 * @property int|null $livraison_id
 * @property string|null $numero
 * @property \Cake\I18n\FrozenTime|null $date
 * @property int|null $fournisseur_id
 * @property int|null $pointdevente_id
 * @property int|null $depot_id
 * @property int|null $cartecarburant_id
 * @property int|null $materieltransport_id
 * @property int|null $chauffeur
 * @property int|null $convoyeur
 * @property int $valide
 * @property string|null $remise
 * @property string|null $tva
 * @property string|null $fodec
 * @property string|null $ttc
 * @property string|null $ht
 * @property int|null $adresselivraisonfournisseur_id
 * @property int|null $kilometragedepart
 * @property int|null $kilometragearrive
 * @property string|null $Montant_Regler
 * @property int|null $tauxchange
 * @property string|null $totaldevise
 * @property int|null $importation_id
 * @property int|null $typef
 * @property int|null $devise_id
 * @property int|null $paiement_id
 * @property int|null $caissee_id
 * @property int|null $dossierimportation_id
 * @property int|null $typefacture_id
 * @property int|null $typefac
 * @property int|null $client_id
 * @property int|null $projet_id
 * @property int $etatgroup
 * @property int|null $groupage_id
 * @property int|null $conteneur_id
 * @property int|null $tvaOnOff
 * @property int|null $incoterm_id
 * @property string|null $location_incoterms
 * @property int|null $options_incotermtotalpdf
 * @property string|null $options_istotaltransportdetaille
 * @property string|null $options_indicationenpdf
 *
 * @property \App\Model\Entity\Pointdevente $pointdevente
 * @property \App\Model\Entity\Depot $depot
 * @property \App\Model\Entity\Paiement $paiement
 * @property \App\Model\Entity\Client $client
 * @property \App\Model\Entity\Factavoir[] $factavoirs
 */
class Facture extends Entity
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
        'livraison_id' => true,
        'numero' => true,
        'date' => true,
        'fournisseur_id' => true,
        'pointdevente_id' => true,
        'depot_id' => true,
        'cartecarburant_id' => true,
        'materieltransport_id' => true,
        'chauffeur' => true,
        'convoyeur' => true,
        'valide' => true,
        'remise' => true,
        'tva' => true,
        'fodec' => true,
        'ttc' => true,
        'ht' => true,
        'adresselivraisonfournisseur_id' => true,
        'kilometragedepart' => true,
        'kilometragearrive' => true,
        'Montant_Regler' => true,
        'tauxchange' => true,
        'totaldevise' => true,
        'importation_id' => true,
        'typef' => true,
        'devise_id' => true,
        'paiement_id' => true,
        'caissee_id' => true,
        'dossierimportation_id' => true,
        'typefacture_id' => true,
        'typefac' => true,
        'client_id' => true,
        'projet_id' => true,
        'etatgroup' => true,
        'groupage_id' => true,
        'conteneur_id' => true,
        'tvaOnOff' => true,
        'incoterm_id' => true,
        'location_incoterms' => true,
        'options_incotermtotalpdf' => true,
        'options_istotaltransportdetaille' => true,
        'options_indicationenpdf' => true,
        'pointdevente' => true,
        'depot' => true,
        'paiement' => true,
        'client' => true,
        'factavoirs' => true,
    ];
}
