<?php 

namespace Fuel\Migrations;

class Users
{

    function up()
    {
        \DBUtil::create_table('users', array(
            'id' => array('type' => 'int', 'constraint' =>11, 'auto_increment' => true),
            'nombre' => array('type' => 'varchar', 'constraint' => 100),
            'email' => array('type' => 'varchar', 'constraint' => 100),
            'puntuacion' => array('type' => 'int', 'constraint' => 10),
            'password' => array('type' => 'varchar', 'constraint' => 100),
        ), array('id'));
    }

    function down()
    {
       \DBUtil::drop_table('users');
    }
}