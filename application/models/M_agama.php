<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_agama extends CI_Model {

	public function tampil(){
		return $this->db->get('agama');
	}

	

}

/* End of file M_agama.php */
/* Location: ./application/models/M_agama.php */