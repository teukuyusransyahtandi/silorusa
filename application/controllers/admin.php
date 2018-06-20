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
		$data['spesialis']=$this->M_db->daftar_spesialis();
		$this->load->view('template',$data);
	}

	public function lihatdata()
	{
		$data['content'] = 'admin/lihatdata';
		$data['data']=$this->M_db->lihat_lokasi();
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
		$data['data']= $this->M_db->lihatdatadokter();
		$this->load->view('template',$data);
	}

	public function pengisiandatakategorilokasi(){
		$data['content'] ='admin/pengisiandatakategorilokasi';
		$data['data1']=$this->M_db->lihat_lokasi();
		$data['data2']=$this->M_db->lihat_kategori();
		$this->load->view('template',$data);
	}

	public function pengisiandataspesialis(){
		$data['content']='admin/pengisiandata_jenisspesialis';
		$this->load->view('template',$data);
	}

	public function lihatdatakategorilokasi(){
		$data['content']='admin/lihatdatakategorilokasi';
		$data['data']=$this->M_db->lihat_kategori_lokasi();
		$this->load->view('template',$data);
	}

	public function edit_pengisiandata($id){
		$data['content']='admin/edit_pengisiandata';
		$data['data']=$this->M_db->edit_pengisiandata($id);
		$this->load->view('template',$data);
	}

	public function edit_datadokter($id)
	{
		$data['content'] = 'admin/edit_datadokter';
		$data['data']= $this->M_db->lihatdatadokter($id);
		$data['data1']= $this->M_db->lihatdataspesialis();
		$this->load->view('template',$data);
	}

	public function edit_kategorilokasi($id){
		$data['content']='admin/editkategorilokasi';
		$data['data']=$this->M_db->edit_kategorilokasi($id);
		$data['data2']=$this->M_db->lihat_kategori();
		$this->load->view('template',$data);
	}

	public function lihatdataspesialis(){
		$data['content']='admin/lihatdataspesialis';
		$data['data'] = $this->M_db->lihatdataspesialis();
		$this->load->view('template',$data);
	}

	public function edit_jenisspesialis($id){
		$data['content']='admin/edit_jenisspesialis';
		$data['data'] = $this->M_db->edit_lihatdataspesialis($id);
		$this->load->view('template',$data);
	}

	public function pengisiandatadokterdantempat(){
		$data['content']='admin/pengisiandatadokterdantempat';
		$data['data'] = $this->M_db->lihatdokter();
		$data['data2'] = $this->M_db->daftar_lokasi();
		$this->load->view('template',$data);
	}


}
