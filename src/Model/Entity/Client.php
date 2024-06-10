<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Client Entity
 *
 * @property int $id
 * @property string $nom
 * @property string $prenom
 * @property \Cake\I18n\FrozenTime $DateNaissance
 * @property \Cake\I18n\FrozenTime $created_at
 * @property string $email
 *
 * @property \App\Model\Entity\Bon[] $bons
 * @property \App\Model\Entity\Facture[] $factures
 */
class Client extends Entity
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
        'DateNaissance' => true,
        'created_at' => true,
        'email' => true,
        'bons' => true,
        'factures' => true,
    ];
}
