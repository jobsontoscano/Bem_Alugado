<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\WishesTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\WishesTable Test Case
 */
class WishesTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\WishesTable
     */
    public $Wishes;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.wishes'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Wishes') ? [] : ['className' => WishesTable::class];
        $this->Wishes = TableRegistry::get('Wishes', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Wishes);

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
}
