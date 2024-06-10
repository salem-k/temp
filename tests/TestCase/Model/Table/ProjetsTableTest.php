<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\ProjetsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\ProjetsTable Test Case
 */
class ProjetsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\ProjetsTable
     */
    protected $Projets;

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
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Projets') ? [] : ['className' => ProjetsTable::class];
        $this->Projets = $this->getTableLocator()->get('Projets', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Projets);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\ProjetsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     * @uses \App\Model\Table\ProjetsTable::buildRules()
     */
    public function testBuildRules(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
