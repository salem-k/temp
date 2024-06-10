<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * LignebandeconsultationsFixture
 */
class LignebandeconsultationsFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'demandeoffredeprix_id' => 1,
                'bandeconsultation_id' => 1,
                'lignedemandeoffredeprix_id' => 1,
                'fournisseur_id' => 1,
                'nameF' => 'Lorem ipsum dolor sit amet',
                'codefrs' => 'Lorem ipsum dolor sit amet',
                'article_id' => 1,
                'designiationA' => 'Lorem ipsum dolor sit amet',
                'qte' => 1,
                'prix' => 1.5,
                'ht' => 1.5,
                'tauxdemarge' => 1,
                'tauxdemarque' => 1,
                'coutrevient' => 1,
            ],
        ];
        parent::init();
    }
}
