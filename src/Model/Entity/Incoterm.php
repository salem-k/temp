<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Incoterm Entity
 *
 * @property int $id
 * @property string|null $code
 * @property string|null $name
 *
 * @property \App\Model\Entity\Commandeclient[] $commandeclients
 * @property \App\Model\Entity\Factureclient[] $factureclients
 * @property \App\Model\Entity\Facture[] $factures
 * @property \App\Model\Entity\Fournisseur[] $fournisseurs
 */
class Incoterm extends Entity
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
        'code' => true,
        'name' => true,
        'commandeclients' => true,
        'factureclients' => true,
        'factures' => true,
        'fournisseurs' => true,
    ];
}
