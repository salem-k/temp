<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use App\Controller\ProjetsController;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * App\Controller\ProjetsController Test Case
 *
 * @uses \App\Controller\ProjetsController
 */
class ProjetsControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Projets',
        'app.Clients',
        'app.Commercials',
        'app.Personnels',
        'app.Devises',
        'app.Banques',
        'app.Commandefournisseurs',
        'app.Demandeoffredeprixes',
        'app.Factureclients',
        'app.Factures',
        'app.Reglementclients',
        'app.Reglements',
        'app.Taches',
    ];

    /**
     * Test index method
     *
     * @return void
     * @uses \App\Controller\ProjetsController::index()
     */
    public function testIndex(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test view method
     *
     * @return void
     * @uses \App\Controller\ProjetsController::view()
     */
    public function testView(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test add method
     *
     * @return void
     * @uses \App\Controller\ProjetsController::add()
     */
    public function testAdd(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test edit method
     *
     * @return void
     * @uses \App\Controller\ProjetsController::edit()
     */
    public function testEdit(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test delete method
     *
     * @return void
     * @uses \App\Controller\ProjetsController::delete()
     */
    public function testDelete(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
