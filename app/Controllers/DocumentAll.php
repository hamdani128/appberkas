<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelAdminis;
use App\Models\ModelContract;
use App\Models\ModelHSE;
use App\Models\ModelLelang;
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
				<a href="/download/docall/<?php echo $arsip; ?>/<?php echo $row['id']; ?>" class="btn btn-md btn-primary btn-rounded">
					<i class="mdi mdi-download"></i>
				</a>
				<a href="/priview/docall/<?php echo $arsip; ?>/<?php echo $row['id']; ?>" onclick="basicPopup(this.href);return false"
					class="btn btn-md btn-success btn-rounded mt-1">
					<i class="mdi mdi-file-pdf-box"></i>
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

	public function download($arsip,$id)
	{
		if($arsip == "Administrasi"){
			$berkas  = new ModelAdminis();
			$data = $berkas->find($id);
			return $this->response->download('uploads/berkas/' . $data->file_name, null);
		}elseif($arsip == "Kontrak"){
			$berkas  = new ModelContract();
			$data = $berkas->find($id);	
			return $this->response->download('uploads/berkas/' . $data->file_name, null);
		}elseif($arsip == "Lelang"){
			$berkas  = new ModelLelang();
			$data = $berkas->find($id);
			return $this->response->download('uploads/berkas/' . $data->file_name, null);
		}elseif($arsip == "HSE"){
			$berkas  = new ModelHSE();
			$data = $berkas->find($id);
			return $this->response->download('uploads/berkas/' . $data->file_name, null);
		}
	}

	public function priview($arsip,$id)
	{	
		if($arsip == "Administrasi"){
			$berkas  = new ModelAdminis();
			$data = $berkas->find($id);
			$path = $data->file_name;
			header('Content-Type: application/pdf');
			header('Content-Disposition: inline; filename='.$path);
			header('Content-Transfer-Encoding: binary');
			header('Accept-Rangers: bytes');
			readfile(realpath('uploads/berkas'.$path));

		}elseif($arsip == "Kontrak"){
			$berkas  = new ModelContract();
			$data = $berkas->find($id);	
			$path = $data->file_name;
			header('Content-Type: application/pdf');
			header('Content-Disposition: inline; filename='.$path);
			header('Content-Transfer-Encoding: binary');
			header('Accept-Rangers: bytes');
			readfile(realpath('uploads/berkas'.$path));

		}elseif($arsip == "Lelang"){
			$berkas  = new ModelLelang();
			$data = $berkas->find($id);
			$path = $data->file_name;
			header('Content-Type: application/pdf');
			header('Content-Disposition: inline; filename='.$path);
			header('Content-Transfer-Encoding: binary');
			header('Accept-Rangers: bytes');
			readfile(realpath('uploads/berkas'.$path));

		}elseif($arsip == "HSE"){
			$berkas  = new ModelHSE();
			$data = $berkas->find($id);
			$path = $data->file_name;
			header('Content-Type: application/pdf');
			header('Content-Disposition: inline; filename='.$path);
			header('Content-Transfer-Encoding: binary');
			header('Accept-Rangers: bytes');
			readfile(realpath('uploads/berkas'.$path));
			
		}
	}


}