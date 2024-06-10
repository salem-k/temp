<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Sousfamille Entity
 *
 * @property int $id
 * @property string $Description
 * @property string $categories_id
 *
 * @property \App\Model\Entity\Category $category
 */
class Sousfamille extends Entity
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
        'categories_id' => true,
        'category' => true,
    ];
}
