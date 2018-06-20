<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Proses extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		
	}

	public function proses_login()
	{
		$username  = $this->input->post('username');
		$password = $this->input->post('password');

		$data = array(
			'username'   => $username,
			'password' => md5($password),
		);

		$cek = $this->M_db->cek_login($data)->result_object();

		if($cek)
		{
		//mengambil nama dari databases
			foreach ($cek as $v){
				$id   = $v->id;
				$nama   = $v->username;
				$level   = $v->level;
			}

			$data_session = array(
				'id'   => $id,
				'nama'   => $nama,
				'level'   => $level,
			);
			$this->session->set_userdata($data_session);
			if ($this->session->userdata('level') == "administrator") {
				redirect('admin/dashboard/');
			}else{
				redirect('home');
			}
		}

		else
		{
			$this->session->set_flashdata('info', 'username / Password Salah!!!');
			redirect('login');
			
		}
	}

	public function proses_register(){
		$username  = $this->input->post('username');
		$email = $this->input->post('email');
		$password = $this->input->post('password');
		$confirm = $this->input->post('confirm_pass');

		if($password === $confirm){
			$data = array(
				'username' => $username,
				'password' => md5($password),
				'level' => 'user'
			);

			$status = $this->db->insert('user', $data);
			if($status){
				redirect('home');
			}
		}

		
	}

	public function proses_logout(){
			if($this->session->userdata('level') == 'administrator'){
				$page = 'login';
			}else{
				$page = 'home';
			}
			$this->session->sess_destroy();
			redirect($page);
	}

	public function proses_pengisian_data_dokter(){
		$nama_dokter  = $this->input->post('nama_dokter');
		$spesialis = $this->input->post('spesialis');
		$nomor_hp = $this->input->post('nomor_hp');

		$data = array(
			'id_spesialis' => $spesialis,
			'nomor_hp' => $nomor_hp,
			'nama_dokter'   => $nama_dokter,
		);
		$this->M_db->tambah_dokter($data);
		redirect('admin/lihatdatadokter');
	}

	public function proses_pengisian_data_apo(){
		$nama_dokter  = $this->input->post('nama_dokter');
		$spesialis = $this->input->post('spesialis');
		$nomor_hp = $this->input->post('nomor_hp');

		$data = array(
			'id_spesialis' => $spesialis,
			'nomor_hp' => $nomor_hp,
			'nama_dokter'   => $nama_dokter,
		);
		$this->M_db->tambah_dokter($data);
		redirect('admin/lihatdatadokter');
	}

	public function proses_pengisian_data_rs(){
		$nama_lokasi = $this->input->post('nama_lokasi');
		$alamat_lokasi = $this->input->post('alamat_lokasi');
		$jam_buka = $this->input->post('jam_buka');
		$nomor_hp = $this->input->post('nomor_hp');
		$latitude= $this->input->post('latitude');
		$longitude = $this->input->post('longitude');

		$data=array(
			'nama_lokasi'=>$nama_lokasi,
			'alamat_lokasi'=>$alamat_lokasi,
			'jam_buka'=>$jam_buka,
			'nomor_hp'=>$nomor_hp,
			'latitude'=>$latitude,
			'longitude'=>$longitude

		);
		$this->M_db->tambah_lokasi($data);
		redirect('admin/lihatdatadokter');


	}

	public function proses_pengisian_data_kategori_lokasi(){
		$lokasi=$this->input->post('lokasi');
		$kategori=$this->input->post('kategori');

		$data=array(
			'id_lokasi'=>$lokasi,
			'id_kategori'=>$kategori,
		);

		$this->M_db->tambah_kategori_lokasi($data);
		redirect('admin/lihatdatadokter');

	}

	public function proses_pengisian_data_jenis_spesialis(){
		$jenis_spesialis=$this->input->post('jenis_spesialis');
		$data=array(
			'nama_spesialis'=>$jenis_spesialis
		);

		$this->M_db->tambah_jenis_spesialis($data);
		redirect('admin/lihatdatadokter');
	}

	public function proses_edit_pengisian_data_rs($id){
		$nama_lokasi = $this->input->post('nama_lokasi');
		$alamat_lokasi = $this->input->post('alamat_lokasi');
		$jam_buka = $this->input->post('jam_buka');
		$nomor_hp = $this->input->post('nomor_hp');
		$latitude= $this->input->post('latitude');
		$longitude = $this->input->post('longitude');

		$data=array(
			'nama_lokasi'=>$nama_lokasi,
			'alamat_lokasi'=>$alamat_lokasi,
			'jam_buka'=>$jam_buka,
			'nomor_hp'=>$nomor_hp,
			'latitude'=>$latitude,
			'longitude'=>$longitude

		);
		$where = array('id_lokasi' => $id );
		$this->M_db->edit_lokasi($data,$where);
		redirect('admin/lihatdatadokter');
	}

	public function proses_edit_data_dokter($id){
		$nama_dokter  = $this->input->post('nama_dokter');
		$spesialis = $this->input->post('spesialis');
		$nomor_hp = $this->input->post('nomor_hp');

		$data = array(
			'id_spesialis' => $spesialis,
			'nomor_hp' => $nomor_hp,
			'nama_dokter'   => $nama_dokter,
		);
		$where = array('id_dokter' => $id );
		$this->M_db->edit_dokter($data,$where);
		redirect('admin/lihatdatadokter');
	}

	public function proses_edit_data_kategori_lokasi($id){
		$kategori=$this->input->post('kategori');

		$data=array(
			'id_kategori'=>$kategori,
		);
		$where = array('id_lokasi' => $id );
		$this->M_db->edit_kategori_lokasi($data,$where);
		redirect('admin/lihatdatadokter');

	}

	public function proses_edit_jenis_spesialis($id){
		$jenis_spesialis=$this->input->post('jenis_spesialis');
		$data=array(
			'nama_spesialis'=>$jenis_spesialis
		);
		$where = array('id' => $id );
		$this->M_db->edit_jenis_spesialis($data,$where);
		redirect('admin/lihatdatadokter');
	}

	public function proses_pengisian_data_dokter_tempat(){
		$nama_dokter  = $this->input->post('nama_dokter');
		$lokasi = $this->input->post('lokasi');

		$data = array(
			'id_lokasi' => $lokasi,
			'id_dokter'   => $nama_dokter,
		);

		// print_r($data);
		 $this->M_db->tambah_dokter_tempat($data);
		 redirect('admin/lihatdatadokter');
	}

}
