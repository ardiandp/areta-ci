<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Agama extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->load->model('M_agama');
	}

	public function index()
	{
		$data['judul']="Data Agama";
		$data['agama']=$this->M_agama->tampil()->result();
		$this->load->view('theme/header');
		$this->load->view('agama/tampil', $data, FALSE);
		$this->load->view('theme/header');
	}

	public function input()
	{
		$data['judul']="Input Agama";
		$this->load->view('agama/input', $data, FALSE);
	}

	public function simpan()
	{
		$data=array(
			'nama_agama'=>$this->input->post('agama')
		);
		$this->M_agama->simpan($data);
		redirect('agama','refresh');
	}

}

/* End of file Agama.php */
/* Location: ./application/controllers/Agama.php */