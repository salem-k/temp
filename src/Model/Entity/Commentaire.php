<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Commentaire Entity
 *
 * @property int $id
 * @property string $Description
 * @property string $Repgros_id
 * @property \Cake\I18n\FrozenTime $Date
 * @property string $repsectoriel_id
 *
 * @property \App\Model\Entity\Repgro $repgro
 * @property \App\Model\Entity\Repsectoriel $repsectoriel
 */
class Commentaire extends Entity
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
        'Description' => true,
        'Repgros_id' => true,
        'Date' => true,
        'repsectoriel_id' => true,
        'repgro' => true,
        'repsectoriel' => true,
    ];
}
