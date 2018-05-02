<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\CoursesGroupsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\CoursesGroupsTable Test Case
 */
class CoursesGroupsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\CoursesGroupsTable
     */
    public $CoursesGroups;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.courses_groups'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('CoursesGroups') ? [] : ['className' => CoursesGroupsTable::class];
        $this->CoursesGroups = TableRegistry::get('CoursesGroups', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->CoursesGroups);

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
