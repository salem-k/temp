<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Replivreure Entity
 *
 * @property int $id
 * @property string $Responsable
 * @property string $Adresse
 * @property string $Username
 * @property string $Password
 * @property string $Email
 * @property string $Voiture
 * @property string $Categorie
 * @property int $Telephone
 * @property string $Depot_id
 *
 * @property \App\Model\Entity\Depot $depot
 */
class Replivreure extends Entity
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
        'Responsable' => true,
        'Adresse' => true,
        'Username' => true,
        'Password' => true,
        'Email' => true,
        'Voiture' => true,
        'Categorie' => true,
        'Telephone' => true,
        'Depot_id' => true,
        'depot' => true,
    ];
}
