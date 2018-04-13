<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\WordConnectionsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\WordConnectionsTable Test Case
 */
class WordConnectionsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\WordConnectionsTable
     */
    public $WordConnections;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.word_connections',
        'app.words',
        'app.languages',
        'app.word_locations',
        'app.classifications'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('WordConnections') ? [] : ['className' => WordConnectionsTable::class];
        $this->WordConnections = TableRegistry::get('WordConnections', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->WordConnections);

        parent::tearDown();
    }

    /**
     * Test initialize method
     *
     * @return void
     */
    public function testInitialize()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test validationDefault method
     *
     * @return void
     */
    public function testValidationDefault()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }

    /**
     * Test buildRules method
     *
     * @return void
     */
    public function testBuildRules()
    {
        $this->markTestIncomplete('Not implemented yet.');
    }
}
