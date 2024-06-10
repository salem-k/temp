<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Dstock Entity
 *
 * @property int $id
 * @property string $dstock_id
 *
 * @property \App\Model\Entity\Dstock[] $dstocks
 */
class Dstock extends Entity
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
        'dstock_id' => true,
        'dstocks' => true,
    ];
}
