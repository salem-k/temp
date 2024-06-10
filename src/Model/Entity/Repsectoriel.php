<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Repsectoriel Entity
 *
 * @property int $id
 * @property string $Responsable
 * @property int $Numero_telephone
 * @property string $Username
 * @property string $Password
 * @property string $Email
 * @property string $Voiture
 * @property string $Categorie
 * @property string $Remplacant_id
 * @property string $Activity
 * @property string $depotttt_id
 *
 * @property \App\Model\Entity\Commandegros[] $commandegross
 * @property \App\Model\Entity\Commandesect[] $commandesects
 * @property \App\Model\Entity\Commentaire[] $commentaires
 */
class Repsectoriel extends Entity
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
        'Numero_telephone' => true,
        'Username' => true,
        'Password' => true,
        'Email' => true,
        'Voiture' => true,
        'Categorie' => true,
        'Remplacant_id' => true,
        'Activity' => true,
        'depotttt_id' => true,
        'commandegross' => true,
        'commandesects' => true,
        'commentaires' => true,
    ];
}
