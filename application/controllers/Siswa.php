<?php
class Siswa extends CI_Controller{

	public function index()
	{
		echo "tidak memanggil file lain";
	}

	public function datadiri()
	{
		echo "Tampil Data Diri";
	}

	public function input()
	{
		$this->load->view('v_input');
	
}