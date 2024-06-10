<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ProjetsFixture
 */
class ProjetsFixture extends TestFixture
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
                'client_id' => 1,
                'date' => '2024-05-16',
                'name' => 'Lorem ipsum dolor sit amet',
                'libelle' => 'Lorem ipsum dolor sit amet',
                'datefin' => '2024-05-16',
                'visibilite' => 'Lorem ipsum dolor sit amet',
                'probabilite' => 'Lorem ipsum dolor sit amet',
                'montant' => 'Lorem ipsum dolor sit amet',
                'budget' => 'Lorem ipsum dolor sit amet',
                'opportunite_id' => 1,
                'description' => 'Lorem ipsum dolor sit amet',
                'commercial_id' => 1,
                'personnel_id' => 1,
                'valide' => 1,
                'devise_id' => 1,
                'banque_id' => 1,
                'suivre_opportunite' => 1,
                'suivre_tache' => 1,
                'facturer_temps_passe' => 1,
                'datemodification' => '2024-05-16 10:12:38',
                'etatTache' => 1,
                'tagcategorie_id' => 1,
                'lien' => 'Lorem ipsum dolor sit amet',
            ],
        ];
        parent::init();
    }
}
