<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Article Entity
 *
 * @property int $id
 * @property float|null $Code_Socit
 * @property string|null $Code
 * @property string|null $Dsignation
 * @property string|null $Description
 * @property float|null $famille_id
 * @property int|null $sousfamille1_id
 * @property float|null $tva_id
 * @property float|null $Quantit_Minimale
 * @property float|null $Quantit_Maximale
 * @property float|null $Quantit_Opt_Commande
 * @property float|null $Prix_Moyen_Pondr
 * @property float|null $Quantit_Command
 * @property float|null $Quantit_Reserv
 * @property float|null $Quantit_Disponible
 * @property float|null $Quantit_Inventaire
 * @property string|null $Date_Inventaire
 * @property float|null $Quantit_LastInput
 * @property float|null $Prix_LastInput
 * @property string|null $Date_LastInput
 * @property float|null $Stockage
 * @property string|null $artM
 * @property float|null $PrixGamme
 * @property string|null $AtGamme
 * @property float|null $PrixNom
 * @property float|null $QTR
 * @property float|null $QTRSRT
 * @property float|null $PXNOM2008
 * @property float|null $PXGAMME2008
 * @property float|null $Unite
 * @property float|null $PHT
 * @property float|null $Poids
 * @property float|null $GRM
 * @property string|null $TPP
 * @property string|null $FRM
 * @property string|null $CodeM
 * @property string|null $ST
 * @property float|null $QTMAG
 * @property float|null $PTTC
 * @property string|null $Quantit_Disponible02
 * @property string|null $Quantit_Disponible03
 * @property float|null $CodeEcolef
 * @property float|null $PRIXEcolef
 * @property float|null $POIDSECOLEF
 * @property float|null $CodeTPE
 * @property string|null $UserAdd
 * @property string|null $DateAdd
 * @property string|null $UserUpdate
 * @property string|null $DateUpdate
 * @property string|null $PrixMP
 * @property string|null $PrixV
 * @property string|null $PrixVM
 * @property string|null $PrixEN
 * @property string|null $TauxCharge
 * @property float|null $CoutRevient
 * @property string|null $image
 * @property int|null $etat
 * @property int|null $inserted
 * @property int|null $updated
 * @property int|null $ordre
 * @property int|null $typearticle_id
 * @property int|null $fodec
 * @property string|null $remise
 * @property int|null $nombrepiece
 * @property string|null $codeabarre
 * @property float|null $poidsbrut
 * @property float|null $prixttc
 * @property int|null $unitearticle_id
 * @property float|null $nbpiecepalette
 * @property float|null $contenance
 * @property int|null $unite_id
 * @property int|null $sousfamille2_id
 * @property float|null $nbpoint
 * @property float|null $coefficient
 * @property int|null $nbjour
 * @property int|null $famillerotation_id
 * @property int|null $vente
 * @property int|null $devise_id
 * @property string|null $densite
 * @property int|null $mobile
 * @property string|null $Reffourni
 * @property string|null $Refggb
 * @property int|null $lots
 * @property string|null $URL
 * @property int|null $pay_id
 * @property string|null $longueur
 * @property string|null $largeur
 * @property string|null $hauteur
 * @property string|null $surface
 * @property string|null $volume
 * @property string|null $note
 * @property int|null $categorie_id
 * @property int|null $souscategorie_id
 * @property int|null $codecomptablevente_id
 * @property int|null $codecomptableexport_id
 * @property int|null $codecomptableachat_id
 * @property \Cake\I18n\FrozenTime|null $datearticle
 * @property float|null $ancienprix
 * @property float|null $meilleur_prix_achat
 * @property int|null $fournisseur_id
 * @property string|null $dure
 *
 * @property \App\Model\Entity\Typearticle $typearticle
 * @property \App\Model\Entity\Tva $tva
 * @property \App\Model\Entity\Unite $unite
 * @property \App\Model\Entity\Devise $devise
 * @property \App\Model\Entity\Pay $pay
 * @property \App\Model\Entity\Category $category
 * @property \App\Model\Entity\Souscategory $souscategory
 * @property \App\Model\Entity\Fournisseur $fournisseur
 * @property \App\Model\Entity\Articlefournisseur[] $articlefournisseurs
 * @property \App\Model\Entity\Lignefacture[] $lignefactures
 */
class Article extends Entity
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
        'Code_Socit' => true,
        'Code' => true,
        'Dsignation' => true,
        'Description' => true,
        'famille_id' => true,
        'sousfamille1_id' => true,
        'tva_id' => true,
        'Quantit_Minimale' => true,
        'Quantit_Maximale' => true,
        'Quantit_Opt_Commande' => true,
        'Prix_Moyen_Pondr' => true,
        'Quantit_Command' => true,
        'Quantit_Reserv' => true,
        'Quantit_Disponible' => true,
        'Quantit_Inventaire' => true,
        'Date_Inventaire' => true,
        'Quantit_LastInput' => true,
        'Prix_LastInput' => true,
        'Date_LastInput' => true,
        'Stockage' => true,
        'artM' => true,
        'PrixGamme' => true,
        'AtGamme' => true,
        'PrixNom' => true,
        'QTR' => true,
        'QTRSRT' => true,
        'PXNOM2008' => true,
        'PXGAMME2008' => true,
        'Unite' => true,
        'PHT' => true,
        'Poids' => true,
        'GRM' => true,
        'TPP' => true,
        'FRM' => true,
        'CodeM' => true,
        'ST' => true,
        'QTMAG' => true,
        'PTTC' => true,
        'Quantit_Disponible02' => true,
        'Quantit_Disponible03' => true,
        'CodeEcolef' => true,
        'PRIXEcolef' => true,
        'POIDSECOLEF' => true,
        'CodeTPE' => true,
        'UserAdd' => true,
        'DateAdd' => true,
        'UserUpdate' => true,
        'DateUpdate' => true,
        'PrixMP' => true,
        'PrixV' => true,
        'PrixVM' => true,
        'PrixEN' => true,
        'TauxCharge' => true,
        'CoutRevient' => true,
        'image' => true,
        'etat' => true,
        'inserted' => true,
        'updated' => true,
        'ordre' => true,
        'typearticle_id' => true,
        'fodec' => true,
        'remise' => true,
        'nombrepiece' => true,
        'codeabarre' => true,
        'poidsbrut' => true,
        'prixttc' => true,
        'unitearticle_id' => true,
        'nbpiecepalette' => true,
        'contenance' => true,
        'unite_id' => true,
        'sousfamille2_id' => true,
        'nbpoint' => true,
        'coefficient' => true,
        'nbjour' => true,
        'famillerotation_id' => true,
        'vente' => true,
        'devise_id' => true,
        'densite' => true,
        'mobile' => true,
        'Reffourni' => true,
        'Refggb' => true,
        'lots' => true,
        'URL' => true,
        'pay_id' => true,
        'longueur' => true,
        'largeur' => true,
        'hauteur' => true,
        'surface' => true,
        'volume' => true,
        'note' => true,
        'categorie_id' => true,
        'souscategorie_id' => true,
        'codecomptablevente_id' => true,
        'codecomptableexport_id' => true,
        'codecomptableachat_id' => true,
        'datearticle' => true,
        'ancienprix' => true,
        'meilleur_prix_achat' => true,
        'fournisseur_id' => true,
        'typearticle' => true,
        'dure' => true,
        'tva' => true,
        'unite' => true,
        'devise' => true,
        'pay' => true,
        'category' => true,
        'souscategory' => true,
        'fournisseur' => true,
        'articlefournisseurs' => true,
        'lignefactures' => true,
    ];
}
