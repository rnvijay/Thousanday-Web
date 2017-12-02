<?php 

use Phalcon\Db\Column;
use Phalcon\Db\Index;
use Phalcon\Db\Reference;
use Phalcon\Mvc\Model\Migration;

/**
 * Class PetMigration_105
 */
class PetMigration_105 extends Migration
{
    /**
     * Define the table structure
     *
     * @return void
     */
    public function morph()
    {
        $this->morphTable('pet', [
                'columns' => [
                    new Column(
                        'pet_id',
                        [
                            'type' => Column::TYPE_BIGINTEGER,
                            'unsigned' => true,
                            'notNull' => true,
                            'autoIncrement' => true,
                            'size' => 20,
                            'first' => true
                        ]
                    ),
                    new Column(
                        'pet_name',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'notNull' => true,
                            'size' => 10,
                            'after' => 'pet_id'
                        ]
                    ),
                    new Column(
                        'pet_gender',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'unsigned' => true,
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'pet_name'
                        ]
                    ),
                    new Column(
                        'pet_type',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'unsigned' => true,
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'pet_gender'
                        ]
                    ),
                    new Column(
                        'pet_nature',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'unsigned' => true,
                            'notNull' => true,
                            'size' => 1,
                            'after' => 'pet_type'
                        ]
                    ),
                    new Column(
                        'pet_reg',
                        [
                            'type' => Column::TYPE_DATE,
                            'size' => 1,
                            'after' => 'pet_nature'
                        ]
                    ),
                    new Column(
                        'owner_id',
                        [
                            'type' => Column::TYPE_BIGINTEGER,
                            'unsigned' => true,
                            'notNull' => true,
                            'size' => 20,
                            'after' => 'pet_reg'
                        ]
                    ),
                    new Column(
                        'relative_id',
                        [
                            'type' => Column::TYPE_BIGINTEGER,
                            'unsigned' => true,
                            'size' => 20,
                            'after' => 'owner_id'
                        ]
                    ),
                    new Column(
                        'attack',
                        [
                            'type' => Column::TYPE_CHAR,
                            'default' => "50",
                            'notNull' => true,
                            'size' => 3,
                            'after' => 'relative_id'
                        ]
                    ),
                    new Column(
                        'defend',
                        [
                            'type' => Column::TYPE_CHAR,
                            'default' => "50",
                            'notNull' => true,
                            'size' => 3,
                            'after' => 'attack'
                        ]
                    ),
                    new Column(
                        'health',
                        [
                            'type' => Column::TYPE_CHAR,
                            'default' => "50",
                            'notNull' => true,
                            'size' => 3,
                            'after' => 'defend'
                        ]
                    ),
                    new Column(
                        'swift',
                        [
                            'type' => Column::TYPE_CHAR,
                            'default' => "50",
                            'notNull' => true,
                            'size' => 3,
                            'after' => 'health'
                        ]
                    ),
                    new Column(
                        'lucky',
                        [
                            'type' => Column::TYPE_CHAR,
                            'default' => "50",
                            'notNull' => true,
                            'size' => 3,
                            'after' => 'swift'
                        ]
                    ),
                    new Column(
                        'win',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'default' => "0",
                            'notNull' => true,
                            'size' => 11,
                            'after' => 'lucky'
                        ]
                    ),
                    new Column(
                        'last_update',
                        [
                            'type' => Column::TYPE_DATE,
                            'size' => 1,
                            'after' => 'win'
                        ]
                    ),
                    new Column(
                        'last_grow',
                        [
                            'type' => Column::TYPE_DATE,
                            'size' => 1,
                            'after' => 'last_update'
                        ]
                    ),
                    new Column(
                        'skill0_index',
                        [
                            'type' => Column::TYPE_CHAR,
                            'size' => 2,
                            'after' => 'last_grow'
                        ]
                    ),
                    new Column(
                        'skill0_name',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => "No Name",
                            'size' => 10,
                            'after' => 'skill0_index'
                        ]
                    ),
                    new Column(
                        'skill0_image',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'size' => 11,
                            'after' => 'skill0_name'
                        ]
                    ),
                    new Column(
                        'skill1_index',
                        [
                            'type' => Column::TYPE_CHAR,
                            'size' => 2,
                            'after' => 'skill0_image'
                        ]
                    ),
                    new Column(
                        'skill1_name',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => "No Name",
                            'size' => 10,
                            'after' => 'skill1_index'
                        ]
                    ),
                    new Column(
                        'skill1_image',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'size' => 11,
                            'after' => 'skill1_name'
                        ]
                    ),
                    new Column(
                        'skill2_index',
                        [
                            'type' => Column::TYPE_CHAR,
                            'size' => 2,
                            'after' => 'skill1_image'
                        ]
                    ),
                    new Column(
                        'skill2_name',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => "No Name",
                            'size' => 10,
                            'after' => 'skill2_index'
                        ]
                    ),
                    new Column(
                        'skill2_image',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'size' => 11,
                            'after' => 'skill2_name'
                        ]
                    ),
                    new Column(
                        'skill3_index',
                        [
                            'type' => Column::TYPE_CHAR,
                            'size' => 2,
                            'after' => 'skill2_image'
                        ]
                    ),
                    new Column(
                        'skill3_name',
                        [
                            'type' => Column::TYPE_VARCHAR,
                            'default' => "No Name",
                            'size' => 10,
                            'after' => 'skill3_index'
                        ]
                    ),
                    new Column(
                        'skill3_image',
                        [
                            'type' => Column::TYPE_INTEGER,
                            'size' => 11,
                            'after' => 'skill3_name'
                        ]
                    ),
                    new Column(
                        'monster_progress',
                        [
                            'type' => Column::TYPE_CHAR,
                            'size' => 3,
                            'default' => '0'
                        ]
                    ),
                ],
                'indexes' => [
                    new Index('PRIMARY', ['pet_id'], 'PRIMARY')
                ],
                'options' => [
                    'TABLE_TYPE' => 'BASE TABLE',
                    'AUTO_INCREMENT' => '15',
                    'ENGINE' => 'InnoDB',
                    'TABLE_COLLATION' => 'utf8_general_ci'
                ],
            ]
        );
    }

    /**
     * Run the migrations
     *
     * @return void
     */
    public function up()
    {

    }

    /**
     * Reverse the migrations
     *
     * @return void
     */
    public function down()
    {

    }

}
