<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CompanysTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CompanysTable Test Case
 */
class CompanysTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\CompanysTable
     */
    protected $Companys;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Companys',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Companys') ? [] : ['className' => CompanysTable::class];
        $this->Companys = $this->getTableLocator()->get('Companys', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Companys);

        parent::tearDown();
    }
}
