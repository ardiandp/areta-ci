<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_dosen extends CI_Model {

	public function tampil()
	{
		return $this->db->get('dosen');
	}

	public function save($data)
	{
		return $this->db->insert('dosen', $data);
	}

	

}

/* End of file M_dosen.php */
/* Location: ./application/models/M_dosen.php */