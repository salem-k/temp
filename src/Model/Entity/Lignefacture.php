<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Lignefacture Entity
 *
 * @property int $id
 * @property int|null $facture_id
 * @property int|null $fournisseur_id
 * @property string|null $codefrs
 * @property int|null $article_id
 * @property int|null $qte
 * @property string|null $prix
 * @property string|null $ht
 * @property float|null $remise
 * @property float|null $fodec
 * @property float|null $tva
 * @property string|null $ttc
 * @property int|null $charge_id
 *
 * @property \App\Model\Entity\Facture $facture
 * @property \App\Model\Entity\Fournisseur $fournisseur
 * @property \App\Model\Entity\Article $article
 */
class Lignefacture extends Entity
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
        'facture_id' => true,
        'fournisseur_id' => true,
        'codefrs' => true,
        'article_id' => true,
        'qte' => true,
        'prix' => true,
        'ht' => true,
        'remise' => true,
        'fodec' => true,
        'tva' => true,
        'ttc' => true,
        'charge_id' => true,
        'facture' => true,
        'fournisseur' => true,
        'article' => true,
    ];
}
