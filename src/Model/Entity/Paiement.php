<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Paiement Entity
 *
 * @property int $id
 * @property string $name
 * @property int $typepaiement_id
 *
 * @property \App\Model\Entity\Typepaiement $typepaiement
 * @property \App\Model\Entity\Client[] $clients
 * @property \App\Model\Entity\Facture[] $factures
 * @property \App\Model\Entity\Fournisseur[] $fournisseurs
 */
class Paiement extends Entity
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
        'typepaiement_id' => true,
        'typepaiement' => true,
        'clients' => true,
        'factures' => true,
        'fournisseurs' => true,
    ];
}
