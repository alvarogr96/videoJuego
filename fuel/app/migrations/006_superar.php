<?php 

namespace Fuel\Migrations;

class Superar
{

    function up()
    {
        \DBUtil::create_table('superar', array(
            'id_nivel' => array('type' => 'int', 'constraint' => 11),
            'id_usuario' => array('type' => 'int', 'constraint' => 11),
        ), array('id_nivel', 'id_usuario'), false, 'InnoDB', 'utf8_unicode_ci',
		    array(
		        array(
		            'constraint' => 'claveAjenaSuperarANivel',
		            'key' => 'id_nivel',
		            'reference' => array(
		                'table' => 'niveles',
		                'column' => 'id',
		            ),
		            'on_update' => 'CASCADE',
		            'on_delete' => 'RESTRICT'
		        ),
		        array(
		            'constraint' => 'claveAjenaSuperarAUsuarios',
		            'key' => 'id_usuario',
		            'reference' => array(
		                'table' => 'users',
		                'column' => 'id',
		            ),
		            'on_update' => 'CASCADE',
		            'on_delete' => 'RESTRICT'
		        )
		    )
		);
    }

    function down()
    {
       \DBUtil::drop_table('superar');
    }
}