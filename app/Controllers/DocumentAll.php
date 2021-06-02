<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelAdminis;
use PHPUnit\Util\Json;

class DocumentAll extends BaseController
{

	public function index()
	{
		return view('pages/all_berkas/view_all_berkas');
	}

	public function databerkas()
	{		
		$arsip = $_GET['berkas'];
		$db      = \Config\Database::connect();
		if($arsip == "Administrasi"){
			$data  =$db->query("SELECT * FROM administrasi");
		}elseif($arsip == "Kontrak"){
			$data  	 = $db->query("SELECT * FROM contract");
		}elseif($arsip == "Lelang"){
			$data  	 = $db->query("SELECT * FROM lelang");
		}elseif($arsip == "HSE"){
			$data  	 = $db->query("SELECT * FROM hse");
		}

		if(!empty($data)){
			$no=1; foreach($data->getResultArray() as $row) : ?>
		<tr>
			<td><?php echo $no++ ?></td>
			<td><?php echo $row['nomor']; ?></td>
			<td><?php echo $row['judul']; ?></td>
			<td><?php echo $row['tahun']; ?></td>
			<td><?php echo $row['pemenang']; ?></td>
			<td><?php echo $row['retensi']; ?></td>
			<td><?php echo $row['file_name']; ?></td>
			<td>
				<a href="/download/docall/<?php echo $row['file_name']; ?>" class="btn btn-md btn-primary btn-rounded">
					<i class="mdi mdi-download"></i>
				</a>
			</td>
		</tr>
		<?php endforeach ?> <?php
		}else{
		?>
		<tr>
			<td colspan="7" class="text-center">Tidak Ada Data</td>
		</tr>
		<?php
		}

		
	}

	public function download($filename)
	{
		return $this->response->download('uploads/berkas/' .$filename, null);
	}



}