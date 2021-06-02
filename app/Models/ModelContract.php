<?php

namespace App\Models;

use CodeIgniter\Model;

class ModelContract extends Model
{
	protected $DBGroup              = 'default';
	protected $table                = 'contract';
	protected $primaryKey           = 'id';
	protected $useAutoIncrement     = true;
	protected $returnType           = 'object';
	protected $allowedFields        = ['nomor', 'judul', 'tahun', 'pemenang', 'retensi', 'file_name'];

	// Dates
	protected $useTimestamps        = true;
}
