<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class M_db extends CI_Model
{
	public function __construct()
	{
		parent::__construct();

	}

	public function cek_login($data)
	{
		return $this->db->get_where('admin', $data);
	}
}