<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Personnel Entity
 *
 * @property int $id
 * @property string|null $nom
 * @property string|null $prenom
 * @property int|null $fonction_id
 * @property string|null $code
 * @property int|null $sexe_id
 * @property \Cake\I18n\FrozenDate|null $dateentre
 * @property int|null $situationfamiliale_id
 * @property float|null $nombreenfant
 * @property string|null $matriculecnss
 * @property float|null $age
 * @property string|null $chefdefamille
 * @property int|null $typecontrat_id
 * @property int|null $pointdevente_id
 * @property string|null $image
 * @property string|null $tel
 * @property string|null $email
 * @property int|null $salarie
 * @property int|null $responsable
 * @property int|null $report_validator
 * @property int|null $request_validator
 * @property string|null $adresse
 * @property int|null $codepostal
 * @property string|null $ville
 * @property int|null $pay_id
 * @property int|null $canton_id
 * @property string|null $telportable
 * @property string|null $fax
 * @property string|null $compte_comptable
 * @property int|null $tarif_horaire_moyen
 * @property int|null $tarif_journalier_moyen
 * @property int|null $salaire
 * @property int|null $heures_de_travail
 * @property \Cake\I18n\FrozenDate|null $date_fin
 * @property \Cake\I18n\FrozenDate|null $datedenaissance
 * @property string|null $notes
 * @property string|null $signature
 *
 * @property \App\Model\Entity\Fonction $fonction
 * @property \App\Model\Entity\Sex $sex
 * @property \App\Model\Entity\Situationfamiliale $situationfamiliale
 * @property \App\Model\Entity\Typecontrat $typecontrat
 * @property \App\Model\Entity\Pointdevente $pointdevente
 * @property \App\Model\Entity\Pay $pay
 * @property \App\Model\Entity\Bonreceptionstock[] $bonreceptionstocks
 * @property \App\Model\Entity\Representant[] $representants
 * @property \App\Model\Entity\Tach[] $taches
 * @property \App\Model\Entity\User[] $users
 * @property \App\Model\Entity\Utilisateur[] $utilisateurs
 */
class Personnel extends Entity
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
        'nom' => true,
        'prenom' => true,
        'fonction_id' => true,
        'code' => true,
        'sexe_id' => true,
        'dateentre' => true,
        'situationfamiliale_id' => true,
        'nombreenfant' => true,
        'matriculecnss' => true,
        'age' => true,
        'chefdefamille' => true,
        'typecontrat_id' => true,
        'pointdevente_id' => true,
        'image' => true,
        'tel' => true,
        'email' => true,
        'salarie' => true,
        'responsable' => true,
        'report_validator' => true,
        'request_validator' => true,
        'adresse' => true,
        'codepostal' => true,
        'ville' => true,
        'pay_id' => true,
        'canton_id' => true,
        'telportable' => true,
        'fax' => true,
        'compte_comptable' => true,
        'tarif_horaire_moyen' => true,
        'tarif_journalier_moyen' => true,
        'salaire' => true,
        'heures_de_travail' => true,
        'date_fin' => true,
        'datedenaissance' => true,
        'notes' => true,
        'signature' => true,
        'fonction' => true,
        'sex' => true,
        'situationfamiliale' => true,
        'typecontrat' => true,
        'pointdevente' => true,
        'pay' => true,
        'bonreceptionstocks' => true,
        'representants' => true,
        'taches' => true,
        'users' => true,
        'utilisateurs' => true,
    ];
}
