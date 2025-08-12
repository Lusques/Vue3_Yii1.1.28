<?php

class m250812_015030_create_table_motorista extends CDbMigration
{
	public function up()
	{
		$this->createTable('motorista', array(
			'id' => 'pk',
			'nome' => 'string NOT NULL',
			'nascimento' => 'date NOT NULL',
			'email' => 'string NOT NULL',
			'telefone' => 'string NOT NULL',
			'placa_veiculo' => 'string NOT NULL',
			'status' => "ENUM('A','I') DEFAULT 'A'",
			'data_hora_status' => 'datetime NOT NULL',
			'obs' => 'varchar(200) DEFAULT NULL',
		));
	}

	public function down()
	{
		return false;
	}

	/*
	// Use safeUp/safeDown to do migration with transaction
	public function safeUp()
	{
	}

	public function safeDown()
	{
	}
	*/
}
