<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Factavoir Entity
 *
 * @property int $id
 * @property \Cake\I18n\FrozenDate $Date_debut
 * @property \Cake\I18n\FrozenDate $Date_fin
 * @property string $client_id
 * @property string $facture_id
 *
 * @property \App\Model\Entity\Client $client
 * @property \App\Model\Entity\Facture $facture
 */
class Factavoir extends Entity
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
        'Date_fin' => true,
        'client_id' => true,
        'facture_id' => true,
        'client' => true,
        'facture' => true,
    ];
}
