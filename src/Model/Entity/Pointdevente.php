<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Pointdevente Entity
 *
 * @property int $id
 * @property string|null $code
 * @property string|null $name
 * @property string|null $adresse
 * @property int|null $ville_id
 * @property string|null $matriclefiscale
 *
 * @property \App\Model\Entity\Bondetransfert[] $bondetransferts
 * @property \App\Model\Entity\Facture[] $factures
 * @property \App\Model\Entity\Personnel[] $personnels
 * @property \App\Model\Entity\User[] $users
 * @property \App\Model\Entity\Utilisateur[] $utilisateurs
 */
class Pointdevente extends Entity
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
        'name' => true,
        'adresse' => true,
        'ville_id' => true,
        'matriclefiscale' => true,
        'bondetransferts' => true,
        'factures' => true,
        'personnels' => true,
        'users' => true,
        'utilisateurs' => true,
    ];
}
