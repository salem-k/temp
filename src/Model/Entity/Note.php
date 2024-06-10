<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Note Entity
 *
 * @property int $id
 * @property string|null $notepub
 * @property string|null $noteprive
 * @property int|null $user_id
 *
 * @property \App\Model\Entity\User $user
 */
class Note extends Entity
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
        'notepub' => true,
        'noteprive' => true,
        'user_id' => true,
        'user' => true,
    ];
}
