<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelHSE extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'hse';
	protected $primaryKey           = 'id';
	protected $useAutoIncrement     = true;
	protected $returnType           = 'object';
	protected $allowedFields        = ['nomor', 'judul', 'tahun', 'pemenang', 'retensi', 'file_name'];

	// Dates
	protected $useTimestamps        = true;
}
