<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * LiensFixture
 */
class LiensFixture extends TestFixture
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
                'utilisateurmenu_id' => 1,
                'lien' => 'Lorem ipsum dolor sit amet',
                'ajout' => 'Lorem ipsum dolor sit amet',
                'modif' => 'Lorem ipsum dolor sit amet',
                'supp' => 'Lorem ipsum dolor sit amet',
                'imprimer' => 'Lorem ipsum dolor sit amet',
                'valide' => 1,
            ],
        ];
        parent::init();
    }
}
