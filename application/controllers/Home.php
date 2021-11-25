<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct() 
	{
		parent::__construct();
		$this->load->model('M_Mahasiswa');
	}

	public function index()
	{
		$queryAllMahasiswa = $this->M_Mahasiswa->getDataMahasiswa();
		$DATA = array('queryAllMhs' => $queryAllMahasiswa);
		$this->load->view('home', $DATA);
	}

	public function halaman_tambah() 
	{
		$this->load->view('halaman_tambah_mhs');
	}

	public function halaman_edit($nim)
	{
		$queryMahasiswaDetail = $this->M_Mahasiswa->getDataMahasiswaDetail($nim);
		$DATA = array('queryMhsDetail' => $queryMahasiswaDetail);
		$this->load->view('halaman_edit_mhs', $DATA);
	}

	public function fungsiTambah()
	{
		$nim = $this->input->post('nim');
		$nama = $this->input->post('nama');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$jurusan = $this->input->post('jurusan');
		$angkatan = $this->input->post('angkatan');
		$tanggal = $this->input->post('tanggal');
		$foto =$_FILES['foto'];
		if ($foto=''){}else{
			$config['upload_path'] = './assets/images/';
			$config['allowed_types'] = 'jpg|png|gif';
		
		$this->load->library('upload',$config);
		if(!$this->upload->do_upload('foto')){
			echo "upload gagal"; die();
		}else{
			$foto=$this->upload->data('file_name');
		}
	}
		


		$ArrInsert = array(
			'nim' => $nim,
			'nama' => $nama,
			'jenis_kelamin' => $jenis_kelamin,
			'jurusan' => $jurusan,
			'angkatan' => $angkatan,
			'tanggal' => $tanggal,
			'foto' => $foto
		);

		$this->M_Mahasiswa->insertDataMahasiswa($ArrInsert);
		$this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible" role="alert">
  		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  		Data Berhasil Ditambahkan!
		</div>');
		redirect(base_url('home'));
	}

	

	public function fungsiEdit()
	{
		$nim = $this->input->post('nim');
		$nama = $this->input->post('nama');
		$jenis_kelamin = $this->input->post('jenis_kelamin');
		$jurusan = $this->input->post('jurusan');
		$angkatan = $this->input->post('angkatan');
		$tanggal = $this->input->post('tanggal');
		$foto =$_FILES['foto'];
		if ($foto=''){}else{
			$config['upload_path'] = './assets/images';
			$config['allowed_types'] = 'jpg|png|gif';
		
		$this->load->library('upload',$config);
		if(!$this->upload->do_upload('foto')){
			echo "upload gagal"; die();
		}else{
			$foto=$this->upload->data('file_name');
		}
	}

		$ArrUpdate = array(
			'nama' => $nama,
			'jenis_kelamin' => $jenis_kelamin,
			'jurusan' => $jurusan,
			'angkatan' => $angkatan,
			'tanggal' => $tanggal,
			'foto' => $foto
		);

		$this->M_Mahasiswa->updateDataMahasiswa($nim, $ArrUpdate);
		$this->session->set_flashdata('message', '<div class="alert alert-warning alert-dismissible" role="alert">
  		<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  		Data Berhasil Ditambahkan!
		</div>');
		redirect(base_url('home'));

	}


	public function fungsiDelete($nim)
	{
		$this->M_Mahasiswa->deleteDataMahasiswa($nim);
		redirect(base_url('home'));
	}
}
