<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Visitor extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'          => [
				'type'           => 'INT',
				'constraint'     => 5,
				'unsigned'       => true,
				'auto_increment' => true
			],
			'name'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'gender'      => [
				'type'           => 'ENUM',
				'constraint'     => "'Male','Female'",
			],
			'address'      => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
			],
			'created_at' => [
				'type'           => 'DATETIME',
				'null'           => true,
			],
			'updated_at' => [
				'type'           => 'DATETIME',
				'null'           => true,
			],
		]);

		$this->forge->addKey('id', TRUE);

		$this->forge->createTable('visitors', TRUE);
	}

	public function down()
	{
		$this->forge->dropTable('visitors');
	}
}
