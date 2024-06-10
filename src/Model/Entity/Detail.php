<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Detail Entity
 *
 * @property int $id
 * @property string|null $commande_id
 * @property int $article_id
 *
 * @property \App\Model\Entity\Commande $commande
 * @property \App\Model\Entity\Article $article
 */
class Detail extends Entity
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
        'commande_id' => true,
        'article_id' => true,
        'commande' => true,
        'article' => true,
    ];
}
