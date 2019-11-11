<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class C_mahasiswa extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_jurusan');
		$this->load->model('M_agama');
	}

	public function index()
	{
		echo "tampil calon mahasiswa";
	}

	public function input()
	{
		$data['judul']="Input Calon Mahasiswa";
		$data['jurusan']= $this->M_jurusan->tampil()->result();
		$data['agama']= $this->M_agama->tampil()->result();
		$this->load->view('calon/input', $data, FALSE);
	}

}

/* End of file C_mahasiswa.php */
/* Location: ./application/controllers/C_mahasiswa.php */