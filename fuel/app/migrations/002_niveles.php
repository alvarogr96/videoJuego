<?php 

namespace Fuel\Migrations;

class Niveles
{

    function up()
    {
        \DBUtil::create_table('niveles', array(
            'id' => array('type' => 'int', 'constraint' => 11, 'auto_increment' => true),
            'titulo' => array('type' => 'varchar', 'constraint' => 100),
            'nFotos' => array('type' => 'int', 'constraint' => 10),
        ), array('id'));
    }

    function down()
    {
       \DBUtil::drop_table('niveles');
    }
}