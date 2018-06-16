<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

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

	function __construct()

    {
        // Construct the parent class
        parent::__construct();
        if (!$this->session->userdata('nama')) redirect('/login');
    }

	public function dashboard()
	{
		$data['content'] = 'admin/dashboard';
		$this->load->view('template',$data);
	}

	public function pengisiandata()
	{
		$data['content'] = 'admin/pengisiandata';
		$this->load->view('template',$data);
	}

	public function pengisiandata_apotek()
	{
		$data['content'] = 'admin/pengisiandata_apotek';
		$this->load->view('template',$data);
	}

	public function pengisiandatadokter()
	{
		$data['content'] = 'admin/pengisiandatadokter';
		$this->load->view('template',$data);
	}

	public function lihatdata()
	{
		$data['content'] = 'admin/lihatdata';
		$this->load->view('template',$data);
	}

	public function lihatdata_apotek()
	{
		$data['content'] = 'admin/lihatdata_apotek';
		$this->load->view('template',$data);
	}

	public function lihatdatadokter()
	{
		$data['content'] = 'admin/lihatdatadokter';
		$this->load->view('template',$data);
	}


}
