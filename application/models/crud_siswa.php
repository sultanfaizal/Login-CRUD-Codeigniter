<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * 
 */
class crud_siswa extends CI_Model
{
	
	function __construct(){
		parent:: __construct();
		$this->load->database();
	}

	public function tampil_siswa(){
		$query = $this->db->get('siswa');
		return $query->result();
	}

	public function tambahdatasiswa($siswa){
		return $this->db->insert('siswa',$siswa);
	}

	public function likntambahdatasiswa(){
		$this->load->view('tambah_data.php');
	}

	public function editdatasiswa($siswa, $id){
		$this->db->where('siswa.id',$id);
		return $this->db->update('siswa',$siswa);
	}

	public function tampil_guru(){
		$query = $this->db->get('guru');
		return $query->result();
	}

	public function tambahdataguru($guru){
		return $this->db->insert('guru',$guru);
	}

	public function likntambahdataguru(){
		$this->load->view('tambah_data_guru.php');
	}

	public function editdataguru($guru, $id){
		$this->db->where('guru.guru_id',$id);
		return $this->db->update('guru',$guru);
	}

	public function getuser($id){
		$query = $this->db->get_where('siswa',array('id' => $id ));
		return $query->row_array();
	}

	public function getguru($id){
		$query = $this->db->get_where('guru',array('guru_id' => $id ));
		return $query->row_array();

	}

	public function deletesiswa($id){
		$this->db->where('siswa.id', $id);
		return $this->db->delete('siswa');
	}

	public function deleteguru($id){
		$this->db->where('guru.guru_id', $id);
		return $this->db->delete('guru');
	}

 	public function daftar($data)
    {
        $this->db->insert('users',$data);
    }

}
?>
