<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Pfinal Entity
 *
 * @property int $id
 * @property string $Description
 * @property float $Prix
 * @property int $PrixSEC
 * @property int $PrixGROS
 * @property string $PHOTO
 * @property bool $Gratuit
 * @property string $souscategorie_id
 * @property string $categories_id
 *
 * @property \App\Model\Entity\Souscategory $souscategory
 * @property \App\Model\Entity\Category $category
 */
class Pfinal extends Entity
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
        'Prix' => true,
        'PrixSEC' => true,
        'PrixGROS' => true,
        'PHOTO' => true,
        'Gratuit' => true,
        'souscategorie_id' => true,
        'categories_id' => true,
        'souscategory' => true,
        'category' => true,
    ];
}
