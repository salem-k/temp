<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Devise Entity
 *
 * @property int $id
 * @property string $name
 * @property string|null $code
 * @property string|null $symbole
 * @property float|null $taux
 *
 * @property \App\Model\Entity\Banque[] $banques
 * @property \App\Model\Entity\Client[] $clients
 * @property \App\Model\Entity\Facture[] $factures
 * @property \App\Model\Entity\Fournisseur[] $fournisseurs
 */
class Devise extends Entity
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
        'code' => true,
        'symbole' => true,
        'taux' => true,
        'banques' => true,
        'clients' => true,
        'factures' => true,
        'fournisseurs' => true,
    ];
}
