<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Fournisseur Entity
 *
 * @property int $id
 * @property string $name
 * @property int|null $typefournisseur_id
 * @property int|null $typelocalisation_id
 * @property string|null $compte_comptable
 * @property int|null $ville_id
 * @property string|null $codepostal
 * @property int|null $region_id
 * @property int|null $pay_id
 * @property string|null $activite
 * @property string|null $secteur
 * @property string|null $tel
 * @property string|null $fax
 * @property string|null $mail
 * @property string|null $site
 * @property int|null $paiement_id
 * @property int|null $devise_id
 * @property int|null $typeutilisateur_id
 * @property int|null $exo
 * @property string|null $code
 * @property string|null $adresse
 * @property int|null $gouvernorat_id
 * @property int|null $delegation_id
 * @property int|null $localite_id
 * @property int|null $typetier_id
 * @property int|null $typeentite_id
 * @property string|null $villes
 * @property int|null $prospect_id
 * @property string|null $codecl
 * @property string|null $fournisseur
 * @property string|null $nomalternatif
 * @property string|null $RC
 * @property string|null $codedouane
 * @property string|null $matricule_fiscale
 * @property string|null $BAN
 * @property string|null $ajusterTVA
 * @property string|null $numTVA
 * @property int|null $salari_id
 * @property string|null $capital
 * @property int|null $incoterm_id
 * @property string|null $port
 * @property string|null $tags
 * @property string|null $commercial
 * @property string|null $logo
 * @property \Cake\I18n\FrozenTime|null $datemodification
 * @property int|null $categorie_id
 *
 * @property \App\Model\Entity\Ville $ville
 * @property \App\Model\Entity\Pay $pay
 * @property \App\Model\Entity\Paiement $paiement
 * @property \App\Model\Entity\Delegation $delegation
 * @property \App\Model\Entity\Localite $localite
 * @property \App\Model\Entity\Category $category
 * @property \App\Model\Entity\Facture[] $factures
 * @property \App\Model\Entity\Livraison[] $livraisons
 */
class Fournisseur extends Entity
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
        'name' => true,
        'typefournisseur_id' => true,
        'typelocalisation_id' => true,
        'compte_comptable' => true,
        'ville_id' => true,
        'codepostal' => true,
        'region_id' => true,
        'pay_id' => true,
        'activite' => true,
        'secteur' => true,
        'tel' => true,
        'fax' => true,
        'mail' => true,
        'site' => true,
        'paiement_id' => true,
        'devise_id' => true,
        'typeutilisateur_id' => true,
        'exo' => true,
        'code' => true,
        'adresse' => true,
        'gouvernorat_id' => true,
        'delegation_id' => true,
        'localite_id' => true,
        'typetier_id' => true,
        'typeentite_id' => true,
        'villes' => true,
        'prospect_id' => true,
        'codecl' => true,
        'fournisseur' => true,
        'nomalternatif' => true,
        'RC' => true,
        'codedouane' => true,
        'matricule_fiscale' => true,
        'BAN' => true,
        'ajusterTVA' => true,
        'numTVA' => true,
        'salari_id' => true,
        'capital' => true,
        'incoterm_id' => true,
        'port' => true,
        'tags' => true,
        'commercial' => true,
        'logo' => true,
        'datemodification' => true,
        'categorie_id' => true,
        'ville' => true,
        'pay' => true,
        'paiement' => true,
        'delegation' => true,
        'localite' => true,
        'category' => true,
        'factures' => true,
        'livraisons' => true,
    ];
}
