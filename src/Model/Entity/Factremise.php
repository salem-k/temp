<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Factremise Entity
 *
 * @property int $id
 * @property string $client_id
 * @property int $Reduction
 * @property \Cake\I18n\FrozenTime $Date
 * @property string $Commentaire
 *
 * @property \App\Model\Entity\Client $client
 */
class Factremise extends Entity
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
        'Reduction' => true,
        'Date' => true,
        'Commentaire' => true,
        'client' => true,
    ];
}
