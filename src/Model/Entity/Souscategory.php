<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Souscategory Entity
 *
 * @property int $id
 * @property string|null $name
 * @property int|null $categorie_id
 *
 * @property \App\Model\Entity\Category $category
 */
class Souscategory extends Entity
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
        'categorie_id' => true,
        'category' => true,
    ];
}
