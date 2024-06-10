<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * UsersFixture
 */
class UsersFixture extends TestFixture
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
                'personnel_id' => 1,
                'utilisateur_id' => 1,
                'name' => 'Lorem ipsum dolor sit amet',
                'login' => 'Lorem ipsum dolor sit amet',
                'password' => 'Lorem ipsum dolor sit amet',
                'company_id' => 1,
                'type' => 1,
                'etat' => 1,
            ],
        ];
        parent::init();
    }
}
