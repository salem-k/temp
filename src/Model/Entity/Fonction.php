<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Fonction Entity
 *
 * @property int $id
 * @property string|null $name
 *
 * @property \App\Model\Entity\Personnel[] $personnels
 * @property \App\Model\Entity\Representant[] $representants
 */
class Fonction extends Entity
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
        'personnels' => true,
        'representants' => true,
    ];
}
