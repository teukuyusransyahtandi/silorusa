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
		if($this->input->post('data')){

			parse_str($_POST['data'], $formdata);

			$kategori = $this->db->select('nama_kategori')
						->from('kategori')
						->where('id_kategori', $formdata['kategori'])
						->get();

			$result = $kategori->row();

			switch ($result->nama_kategori) {
				case 'Rumah Sakit':
					$query = $this->db->select('*')
					 ->from('kategori_lokasi as kl')
					 ->join('kategori as k', 'k.id_kategori=kl.id_kategori', 'left')
					 ->join('lokasi as l', 'l.id_lokasi=kl.id_lokasi', 'left')
					 ->where('k.nama_kategori', 'Rumah Sakit')
					 ->get();
					break;
				case 'Praktik Spesialis':
					$query = $this->db->select('l.*, k.*')
					 ->from('kategori_lokasi as kl')
					 ->join('kategori as k', 'k.id_kategori=kl.id_kategori', 'left')
					 ->join('lokasi as l', 'l.id_lokasi=kl.id_lokasi', 'left')
					 ->join('lokasi_spesialis as ls', 'ls.id_lokasi=l.id_lokasi', 'left')
					 ->join('dokter as d', 'd.id_dokter=ls.id_dokter', 'left')
					 ->join('spesialis as s', 's.id=d.id_spesialis', 'left')
					 ->where('kl.id_kategori', $formdata['kategori'])
					 ->where('s.id', $formdata['spesialis'])
					 ->get();
					 break;
			}

			
			if($query->num_rows() > 0){
				echo json_encode($query->result());
			}

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
