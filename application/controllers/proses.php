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
			'password' => $password,
		);

		$cek = $this->M_db->cek_login($data)->result_object();

		if($cek)
		{
		//mengambil nama dari databases
			foreach ($cek as $v){
				$nama   = $v->username;
			}

			$data_session = array(
				'nama'   => $nama,
			);

		//mengset data session
			$this->session->set_userdata($data_session);
			redirect('admin/dashboard/');
		}

		else
		{
			$this->session->set_flashdata('info', 'username / Password Salah!!!');
			redirect('login');
			
		}
	}

	public function proses_pengisian_data_dokter(){
		$username  = $this->input->post('username');
		$password = $this->input->post('password');

		$data = array(
			'username'   => $username,
			'password' => $password,
		);
	}

}
