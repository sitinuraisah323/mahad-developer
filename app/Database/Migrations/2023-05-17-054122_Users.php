<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Users extends Migration
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
			'id_visitor'       => [
				'type'           => 'INT',
				'constraint'     => 5
			],
			'id_level'      => [
				'type'           => 'INT',
				'constraint'     => 5,
			],
			'email'      => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
			],
			'username'      => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
			],
			'password'      => [
				'type'           => 'VARCHAR',
				'constraint'     => 255,
			],
			'status'      => [
				'type'           => 'ENUM',
				'constraint'     => "'PUBLISH', 'DRAFT', 'UNPUBLISH', 'DELETED'",
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

		$this->forge->createTable('users', TRUE);
	}

	public function down()
	{
		$this->forge->dropTable('users');
	}
}
