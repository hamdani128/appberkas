<?php

namespace App\Controllers;
use App\Models\ModelContract;
use App\Controllers\BaseController;

class Contract extends BaseController
{

	protected $contract;
	public function __construct()
	{
		$this->contract = new ModelContract();
	}

	public function index()
	{
		$berkas = new ModelContract();
		$data['berkas'] = $berkas->findAll();
	 	return view('pages/kontrak/view_kontrak', $data);
	}

	public function add()
	{
		if (!$this->validate([
			'berkas' => [
				'rules' => 'uploaded[berkas]|mime_in[berkas,application/pdf,application/vnd.openxmlformats-officedocument.wordprocessingml.document,application/x-zip]|max_size[berkas,5000]',
				'errors' => [
					'uploaded'	 => 'Harus Ada File yang diupload',
					'mime_in'	 => 'File Extention Harus Berupa doc,docx,pdf',
					'max_size'	 => 'File Diupload Terlalu Besar !! Batas Maksimum 10 MB'
				]
			]
		])){
			session()->setFlashdata('error', $this->validator->listErrors());
			return redirect()->to(base_url('/contract'));
		}
		$dataBerkas = $this->request->getFile('berkas');
		$FileExt = $dataBerkas->getClientExtension();
		$no = $this->request->getPost('nomor');
		$judul = $this->request->getPost('judul');
		$tahun = $this->request->getPost('tahun');
		$pemenang = $this->request->getPost('pemenang');
		$retensi = $this->request->getPost('retensi');
		$fileName ="Kontrak" . $no . "" . $judul . "" . $tahun . "" . $pemenang . "" . $retensi . "." . $FileExt;
		$query = [
			'nomor'				=> $no,
			'judul'				=> $judul,
			'tahun'				=> $tahun,
			'pemenang'			=> $pemenang,
			'retensi'			=> $retensi,
			'file_name' 		=> $fileName
		];
		$berkas = new ModelContract();
		$berkas->insert($query);
		$dataBerkas->move('uploads/berkas', $fileName);
		return redirect()->to(base_url('/contract'));
	}

	public function download($id)
	{	
		$berkas = new ModelContract();
		$data = $berkas->find($id);
		return $this->response->download('uploads/berkas/' . $data->file_name, null);
	}
	public function delete($id)
	{
		$berkas = new ModelContract();
		$data = $berkas->find($id);
		$berkas->delete($id);
		\unlink('uploads/berkas/' . $data->file_name);
		return redirect()->to(base_url('/contract'));
	}

}
