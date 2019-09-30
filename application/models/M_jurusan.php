<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_jurusan extends CI_Model {

	public function tampil()
	{
		return $this->db->get('jurusan');
	}

	public function save($data)
	{
		$this->db->insert('jurusan', $data);
	}


}

/* End of file M_jurusan.php */
/* Location: ./application/models/M_jurusan.php */