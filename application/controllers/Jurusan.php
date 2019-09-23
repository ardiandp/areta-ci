<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jurusan extends CI_Controller {

	public function index()
	{
		$data['judul']="Tampil Data Jurusan";
		$this->load->view('jurusan/tampil', $data, FALSE);
	}

	public function input()
	{
		$data['judul']="Input Jurusan Baru";
		$this->load->view('jurusan/input', $data, FALSE);
	}

}

/* End of file Jurusan.php */
/* Location: ./application/controllers/Jurusan.php */