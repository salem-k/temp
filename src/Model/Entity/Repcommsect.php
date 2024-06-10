<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Repcommsect Entity
 *
 * @property int $id
 * @property string $Responsable
 * @property int $Telephone
 * @property string $Adresse
 * @property string $Username
 * @property string $Email
 * @property string $Password
 * @property string $Voiture
 * @property string $Activity
 * @property string $depot_id
 * @property string $Responsable_id
 *
 * @property \App\Model\Entity\Depot $depot
 */
class Repcommsect extends Entity
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
        'Telephone' => true,
        'Adresse' => true,
        'Username' => true,
        'Email' => true,
        'Password' => true,
        'Voiture' => true,
        'Activity' => true,
        'depot_id' => true,
        'Responsable_id' => true,
        'depot' => true,
    ];
}
