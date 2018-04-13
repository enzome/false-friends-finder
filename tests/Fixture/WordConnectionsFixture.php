<?php
namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * WordConnectionsFixture
 *
 */
class WordConnectionsFixture extends TestFixture
{

    /**
     * Fields
     *
     * @var array
     */
    // @codingStandardsIgnoreStart
    public $fields = [
        'id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => false, 'default' => null, 'comment' => '', 'autoIncrement' => true, 'precision' => null],
        'from_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'to_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'classification_id' => ['type' => 'integer', 'length' => 11, 'unsigned' => false, 'null' => true, 'default' => null, 'comment' => '', 'precision' => null, 'autoIncrement' => null],
        'description' => ['type' => 'string', 'length' => 255, 'null' => true, 'default' => null, 'collate' => 'utf8_general_ci', 'comment' => '', 'precision' => null, 'fixed' => null],
        '_indexes' => [
            'firstword_id_idx' => ['type' => 'index', 'columns' => ['from_id'], 'length' => []],
            'secondword_id_idx' => ['type' => 'index', 'columns' => ['to_id'], 'length' => []],
            'connection_classification_idx' => ['type' => 'index', 'columns' => ['classification_id'], 'length' => []],
        ],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id'], 'length' => []],
            'connection_classification' => ['type' => 'foreign', 'columns' => ['classification_id'], 'references' => ['classifications', 'id'], 'update' => 'noAction', 'delete' => 'noAction', 'length' => []],
            'firstword_id' => ['type' => 'foreign', 'columns' => ['from_id'], 'references' => ['words', 'id'], 'update' => 'noAction', 'delete' => 'cascade', 'length' => []],
            'secondword_id' => ['type' => 'foreign', 'columns' => ['to_id'], 'references' => ['words', 'id'], 'update' => 'noAction', 'delete' => 'cascade', 'length' => []],
        ],
        '_options' => [
            'engine' => 'InnoDB',
            'collation' => 'utf8_general_ci'
        ],
    ];
    // @codingStandardsIgnoreEnd

    /**
     * Records
     *
     * @var array
     */
    public $records = [
        [
            'id' => 1,
            'from_id' => 1,
            'to_id' => 1,
            'classification_id' => 1,
            'description' => 'Lorem ipsum dolor sit amet'
        ],
    ];
}
