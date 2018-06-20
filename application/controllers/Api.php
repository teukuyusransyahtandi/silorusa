<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

  	public function __construct()
    {
            parent::__construct();
            header('Content-Type: application/json');
    }


    public function lokasi(){
    	$id = $this->input->get('id') ? $this->input->get('id') : null;
    	$kat = $this->input->get('kategori') ? $this->input->get('kategori') : null;


    	$this->db->select('*')->from('lokasi as l');

    	if($kat != null){
    		$this->db->join('kategori_lokasi as kl', 'l.id_lokasi=kl.id_lokasi', 'LEFT');
    		$this->db->join('kategori as k', 'kl.id_kategori=k.id_kategori', 'LEFT');
    		$this->db->where('k.nama_kategori', ucwords($kat));
    	}

    	if($id != null){
    		$this->db->where('l.id_lokasi', $id);
    	}

    	$query = $this->db->order_by('l.nama_lokasi', 'asc')->get();

    	echo json_encode($query->result());
    }

}