<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

  	public function __construct()
    {
            parent::__construct();

            $this->load->model('M_Home');
    }
	
	public function index()
	{
		$data['kategori'] = $this->M_Home->dropdown_kategori();
		$data['spesialis'] = $this->M_Home->dropdown_spesialis();
		$this->load->view('home', $data);
	}

	public function search(){
		if($this->input->post('kategori')){

		}else{
			$query = $this->db->select('*')
					 ->from('kategori_lokasi as kl')
					 ->join('kategori as k', 'k.id_kategori=kl.id_kategori', 'left')
					 ->join('lokasi as l', 'l.id_lokasi=kl.id_lokasi', 'left')
					 ->where('k.nama_kategori', 'Rumah Sakit')
					 ->get();

			if($query->num_rows() > 0){
				echo json_encode($query->result());
			}
		}
		
	}

}
