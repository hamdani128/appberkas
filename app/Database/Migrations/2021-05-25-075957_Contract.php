<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Contract extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'			=> [
					'type'				=> 'int',
					'auto_increment'	=> true,
					'constraint'		=> 11,
					'unsigned'			=>true,
			],
			'nomor'			=> [
					'type'				=> 'VARCHAR',
					'constraint'		=> 255,
					'null'				=> true,
			],
			'judul'			=> [
				'type'				=> 'VARCHAR',
				'constraint'		=> 255,
				'null'				=> true,
			],
			'tahun'			=> [
				'type'				=> 'VARCHAR',
				'constraint'		=> 255,
				'null'				=> true,
			],
			'pemenang'		=> [
				'type'				=> 'VARCHAR',
				'constraint'		=> 255,
				'null'				=> true,
			],
			'retensi'		=> [
				'type'				=> 'VARCHAR',
				'constraint'		=> 255,
				'null'				=> true,
			],
			'created_at'	=> [
				'type'				=> 'DATETIME',
				'null'				=> true,
			],
			'updated_at'	=> [
				'type'				=> 'DATETIME',
				'null'				=> true,
			]
		]);
		$this->forge->addKey('id', TRUE);
		$this->forge->createTable('contract');
	}

	public function down()
	{
		$this->forge->dropTable('contract');
	}
}
