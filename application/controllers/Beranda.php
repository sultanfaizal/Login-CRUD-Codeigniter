<?php 
defined("BASEPATH") or exit ('No Direct Script Case Acces Allowed');
/**
 * 
 */
class Beranda extends CI_Controller
{

	function __construct(){

		parent::__construct();
		$this->load->helper('url');
		$this->load->model('crud_siswa');
		
	}
	public function index(){
		$this->load->view('account/beranda.php');
		
	}

	public function tampil(){
		$data['guru'] = $this->crud_siswa->tampil_guru();
		$data['siswa'] = $this->crud_siswa->tampil_siswa();
		$this->load->view('dashboard.php', $data);
	}

	public function linktambahdata(){
		$this->load->view('tambah_data.php');
	}

	public function linktambahdataguru(){
		$this->load->view('tambah_data_guru.php');
	}

	public function tambahdata(){
		
		$siswa['nama'] = $this->input->post('nama');
		$siswa['kelas'] = $this->input->post('kelas');
		$siswa['password'] = $this->input->post('password');
	
		$query = $this->crud_siswa->tambahdatasiswa($siswa);
		redirect('beranda/tampil');
	}

	public function tambahdataguru(){
		$guru['nama'] = $this->input->post('nama');
		$guru['mapel'] = $this->input->post('mapel');
		$guru['jam'] = $this->input->post('jam');
		$guru['gaji'] = $this->input->post('gaji');

		$query = $this->crud_siswa->tambahdataguru($guru);
		redirect('beranda/tampil');
	}

	public function linkeditdata($id){
		$data['siswa'] = $this->crud_siswa->getuser($id);
		$this->load->view('editdatasiswa', $data);
	
	}

	public function linkeditdataguru($id){
		$data['guru'] = $this->crud_siswa->getguru($id);
		$this->load->view('editdataguru', $data);
		
	}

	public function update($id){
		$siswa['nama'] = $this->input->post('nama');
		$siswa['kelas'] = $this->input->post('kelas');
		$siswa['password'] = $this->input->post('password');

		$query = $this->crud_siswa->editdatasiswa($siswa,$id);
		redirect('beranda/tampil');
	}

	public function updateguru($id){
		$guru['nama'] = $this->input->post('nama');
		$guru['mapel'] = $this->input->post('mapel');
		$guru['jam'] = $this->input->post('jam');
		$guru['gaji'] = $this->input->post('gaji');

		$query = $this->crud_siswa->editdataguru($guru,$id);
		redirect('beranda/tampil');
	}

	public function deletesiswa($id){
		$query = $this->crud_siswa->deletesiswa($id);
		redirect('beranda/tampil');
	}

	public function deleteguru($id){
		$query = $this->crud_siswa->deleteguru($id);
		redirect('beranda/tampil');
	}

}
	
?>