<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Commandegros Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenDate $Date_debut
 * @property \Cake\I18n\FrozenDate $Date_din
 * @property string $repsommsects_id
 * @property string $repgros_id
 * @property string $repsectoriel_id
 *
 * @property \App\Model\Entity\Repgro $repgro
 * @property \App\Model\Entity\Repsectoriel $repsectoriel
 */
class Commandegros extends Entity
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
        'Date_debut' => true,
        'Date_din' => true,
        'repsommsects_id' => true,
        'repgros_id' => true,
        'repsectoriel_id' => true,
        'repgro' => true,
        'repsectoriel' => true,
    ];
}
