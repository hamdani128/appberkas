<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\ModelAdminis;

class Adminis extends BaseController
{
	public function index()
	{
		$berkas = new ModelAdminis();
		$data['berkas'] = $berkas->findAll();
		$data['title'] = "AppBerkas | Administrasi dan Teknis";
		return view('pages/adminis/view_adminis', $data);
	}

	public function add()
	{
		if (!$this->validate([
			'berkas' => [
				'rules' => 'uploaded[berkas]|mime_in[berkas,application/pdf,application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/x-zip,application/vnd.ms-office,application/msword]|max_size[berkas,5000]',
				'errors' => [
					'uploaded'	 => 'Harus Ada File yang diupload',
					'mime_in'	 => 'File Extention Harus Berupa doc,docx,pdf',
					'max_size'	 => 'File Diupload Terlalu Besar !! Batas Maksimum 10 MB'
				]
			]
		])){
			session()->setFlashdata('error', $this->validator->listErrors());
			return redirect()->to(base_url('/administration'));
		}
		$dataBerkas = $this->request->getFile('berkas');
		$FileExt = $dataBerkas->getClientExtension();
		$no = $this->request->getPost('nomor');
		$judul = $this->request->getPost('judul');
		$tahun = $this->request->getPost('tahun');
		$pemenang = $this->request->getPost('pemenang');
		$retensi = $this->request->getPost('retensi');
		$fileName = "ADT" . $no . "" . $judul . "" . $tahun . "" . $pemenang . "" . $retensi . "." . $FileExt;
		$query = [
			'nomor'				=> $no,
			'judul'				=> $judul,
			'tahun'				=> $tahun,
			'pemenang'			=> $pemenang,
			'retensi'			=> $retensi,
			'file_name' 		=> $fileName
		];
		$berkas = new ModelAdminis();
		$success= $berkas->insert($query);
		if ($success) {
			$dataBerkas->move('uploads/berkas/', $fileName);
			session()->setFlashData('message', 'Data Berhasil Ditambah !');
			return redirect()->to(base_url('/administration'));
		}
	}

	public function download($id)
	{
		$berkas = new ModelAdminis();
		$data = $berkas->find($id);
		return $this->response->download('uploads/berkas/' . $data->file_name, null);
	}

	public function delete($id)
	{
		$berkas  = new ModelAdminis();
		$success = $data = $berkas->find($id);
		$berkas->delete($id);
		if ($success) {
			\unlink('uploads/berkas/' . $data->file_name);
			session()->setFlashData('message', 'Data Berhasil Terhapus !');
			return redirect()->to(base_url('/administration'));
		}
	}
}
