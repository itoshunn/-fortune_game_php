<?php
namespace App\Test\TestCase\Model\Table;

use App\Model\Table\AvatarsTable;
use Cake\ORM\TableRegistry;
use Cake\TestSuite\TestCase;

/**
 * App\Model\Table\AvatarsTable Test Case
 */
class AvatarsTableTest extends TestCase
{

    /**
     * Test subject
     *
     * @var \App\Model\Table\AvatarsTable
     */
    public $Avatars;

    /**
     * Fixtures
     *
     * @var array
     */
    public $fixtures = [
        'app.avatars',
        'app.users',
        'app.goals'
    ];

    /**
     * setUp method
     *
     * @return void
     */
    public function setUp()
    {
        parent::setUp();
        $config = TableRegistry::exists('Avatars') ? [] : ['className' => 'App\Model\Table\AvatarsTable'];
        $this->Avatars = TableRegistry::get('Avatars', $config);
    }

    /**
     * tearDown method
     *
     * @return void
     */
    public function tearDown()
    {
        unset($this->Avatars);

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
