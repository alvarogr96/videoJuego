<?php 

namespace Fuel\Migrations;

class Comentarios
{

    function up()
    {
        \DBUtil::create_table('comentarios', array(
            'id' => array('type' => 'int', 'constraint' => 11, 'auto_increment' => true),
            'descripcion' => array('type' => 'varchar', 'constraint' => 100),
            'id_comentario' => array('type' => 'int', 'constraint' => 11),
            'id_usuario' => array('type' => 'int', 'constraint' => 11),
        ), array('id'), false, 'InnoDB', 'utf8_unicode_ci',
		    array(
		        array(
		            'constraint' => 'claveAjenaComentariosAComentarios',
		            'key' => 'id_comentario',
		            'reference' => array(
		                'table' => 'comentarios',
		                'column' => 'id',
		            ),
		            'on_update' => 'CASCADE',
		            'on_delete' => 'RESTRICT'
		        ),
		        array(
		            'constraint' => 'claveAjenaComentariosAUsuarios',
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
       \DBUtil::drop_table('comentarios');
    }
}