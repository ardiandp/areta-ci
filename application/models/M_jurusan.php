<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_jurusan extends CI_Model {

	public function tampil()
	{
		return $this->db->get('jurusan');
		//return $this->db->query("select *from jurusan");
	}

	public function save($data)
	{
		$this->db->insert('jurusan', $data);
	}

	public function getid($id)
	{
		$param = array('kode_jurusan' =>$id );
		return $this->db->get_where('jurusan',$param);
	}

	public function update($data,$kode)
	{
		$this->db->where('kode_jurusan', $kode); // parameter
		$this->db->update('jurusan', $data); //data yang diupdate
	}


}

/* End of file M_jurusan.php */
/* Location: ./application/models/M_jurusan.php */