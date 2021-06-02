<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Lelang extends Migration
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
			'file_name'		=> [
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
		$this->forge->createTable('lelang');
	}

	public function down()
	{
		$this->forge->dropTable('lelang');
	}
}
