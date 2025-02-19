<?php
declare(strict_types=1);

namespace App\Test\TestCase\Model\Table;

use App\Model\Table\WardsTable;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\WardsTable Test Case
 */
class WardsTableTest extends TestCase
{
    /**
     * Test subject
     *
     * @var \App\Model\Table\WardsTable
     */
    protected $Wards;

    /**
     * Fixtures
     *
     * @var array<string>
     */
    protected $fixtures = [
        'app.Wards',
    ];

    /**
     * setUp method
     *
     * @return void
     */
    protected function setUp(): void
    {
        parent::setUp();
        $config = $this->getTableLocator()->exists('Wards') ? [] : ['className' => WardsTable::class];
        $this->Wards = $this->getTableLocator()->get('Wards', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    protected function tearDown(): void
    {
        unset($this->Wards);

        parent::tearDown();
    }

    /**
     * Test validationDefault method
     *
     * @return void
     * @uses \App\Model\Table\WardsTable::validationDefault()
     */
    public function testValidationDefault(): void
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
