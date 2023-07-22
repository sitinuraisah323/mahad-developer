<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Evaluation extends Migration
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
			'score'      => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
			],
			'id_subject'       => [
				'type'           => 'VARCHAR',
				'constraint'     => '255'
			],
			'id_user'      => [
				'type'           => 'INT',
				'constraint'     => 5,
			],
			'description'      => [
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

		$this->forge->createTable('evaluations', TRUE);
	}

	public function down()
	{
		$this->forge->dropTable('evaluations');
	}
}
