<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Commandefournisseur Entity
 *
 * @property int $id
 * @property int|null $demandeoffredeprix_id
 * @property string|null $numero
 * @property \Cake\I18n\FrozenDate|null $date
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
 * @property int $livraison_id
 * @property int $etatliv
 * @property int|null $typecommande
 * @property int|null $projet_id
 * @property int|null $facture_id
 * @property int|null $conteneur_id
 * @property int|null $tvaOnOff
 * @property int|null $envoiemail
 *
 * @property \App\Model\Entity\Demandeoffredeprix $demandeoffredeprix
 * @property \App\Model\Entity\Fournisseur $fournisseur
 * @property \App\Model\Entity\Pointdevente $pointdevente
 * @property \App\Model\Entity\Depot $depot
 * @property \App\Model\Entity\Livraison[] $livraisons
 * @property \App\Model\Entity\Facture $facture
 */
class Commandefournisseur extends Entity
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
        'demandeoffredeprix_id' => true,
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
        'livraison_id' => true,
        'etatliv' => true,
        'typecommande' => true,
        'projet_id' => true,
        'facture_id' => true,
        'conteneur_id' => true,
        'tvaOnOff' => true,
        'envoiemail' => true,
        'demandeoffredeprix' => true,
        'fournisseur' => true,
        'pointdevente' => true,
        'depot' => true,
        'livraisons' => true,
        'facture' => true,
    ];
}
