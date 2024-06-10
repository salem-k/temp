<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Projet Entity
 *
 * @property int $id
 * @property int|null $client_id
 * @property \Cake\I18n\FrozenDate|null $date
 * @property string|null $name
 * @property string|null $libelle
 * @property \Cake\I18n\FrozenDate|null $datefin
 * @property string|null $visibilite
 * @property string|null $probabilite
 * @property string|null $montant
 * @property string|null $budget
 * @property int|null $opportunite_id
 * @property string|null $description
 * @property int|null $commercial_id
 * @property int|null $personnel_id
 * @property int|null $valide
 * @property int|null $devise_id
 * @property int|null $banque_id
 * @property int|null $suivre_opportunite
 * @property int|null $suivre_tache
 * @property int|null $facturer_temps_passe
 * @property \Cake\I18n\FrozenTime|null $datemodification
 * @property int|null $etatTache
 * @property int|null $tagcategorie_id
 * @property string|null $lien
 *
 * @property \App\Model\Entity\Client $client
 * @property \App\Model\Entity\Commercial $commercial
 * @property \App\Model\Entity\Personnel $personnel
 * @property \App\Model\Entity\Devise $devise
 * @property \App\Model\Entity\Banque $banque
 * @property \App\Model\Entity\Commandefournisseur[] $commandefournisseurs
 * @property \App\Model\Entity\Demandeoffredeprix[] $demandeoffredeprixes
 * @property \App\Model\Entity\Factureclient[] $factureclients
 * @property \App\Model\Entity\Facture[] $factures
 * @property \App\Model\Entity\Reglementclient[] $reglementclients
 * @property \App\Model\Entity\Reglement[] $reglements
 * @property \App\Model\Entity\Tach[] $taches
 */
class Projet extends Entity
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
        'client_id' => true,
        'date' => true,
        'name' => true,
        'libelle' => true,
        'datefin' => true,
        'visibilite' => true,
        'probabilite' => true,
        'montant' => true,
        'budget' => true,
        'opportunite_id' => true,
        'description' => true,
        'commercial_id' => true,
        'personnel_id' => true,
        'valide' => true,
        'devise_id' => true,
        'banque_id' => true,
        'suivre_opportunite' => true,
        'suivre_tache' => true,
        'facturer_temps_passe' => true,
        'datemodification' => true,
        'etatTache' => true,
        'tagcategorie_id' => true,
        'lien' => true,
        'client' => true,
        'commercial' => true,
        'personnel' => true,
        'devise' => true,
        'banque' => true,
        'commandefournisseurs' => true,
        'demandeoffredeprixes' => true,
        'factureclients' => true,
        'factures' => true,
        'reglementclients' => true,
        'reglements' => true,
        'taches' => true,
    ];
}
