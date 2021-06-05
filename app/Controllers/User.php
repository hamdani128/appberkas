<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class User extends BaseController
{
	public function index()
	{	
		$db = \Config\Database::connect();
		$she= $db->table('hse')->countAll();
		$administasi= $db->table('administrasi')->countAll();
		$lelang= $db->table('lelang')->countAll();
		$contract= $db->table('contract')->countAll();
		$data = [
			'title'				=> 'AppBekas | Dashboard',
			'hse'				=> $she,
			'administrasi'		=> $administasi,
			'lelang'			=> $lelang,
			'contract'			=> $contract
		];
		return view('pages/index', $data);
	}
}
