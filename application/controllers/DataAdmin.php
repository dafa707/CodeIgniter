<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataAdmin extends CI_Controller {

	public function index()
	{
		$this->load->view('tampilan_data_admin');
	}
	
	public function tambah()
	{
		$this->load->view('tampilan_data_admin_tambah');
	}
	
	public function tambah_proses()
	{
		$data = $this->input->post();

		$arr = array(
			'nama' 		=> $data['nama'],
			'username'	=> $data['username'],
			'password'	=> $data['password'],
			'jabatan'	=> $data['jabatan'],
		);

		$result = $this->db->insert('tbl_admin', $arr);

		redirect("DataAdmin");
	}

	public function edit($id)
	{
		$data = array(
			'data'	=> $this->db->get_where('tbl_admin', ['id_admin' => $id])->row()
		);
		$this->load->view('tampilan_data_admin_edit', $data);
	}
	
	public function edit_proses($id)
	{
		$data = $this->input->post();

		if ($data['password'] == ""){
			$arr = array(
				'nama' 		=> $data['nama'],
				'username'	=> $data['username'],
				'jabatan'	=> $data['jabatan'],
			);
		}else{
			$arr = array(
				'nama' 		=> $data['nama'],
				'username'	=> $data['username'],
				'password'	=> $data['password'],
				'jabatan'	=> $data['jabatan'],
			);
		}

		$result = $this->db->update('tbl_admin', $arr, ['id_admin' => $id]);

		redirect("DataAdmin");
	}

	public function hapus($id)
	{
		$result = $this->db->delete('tbl_admin', ['id_admin' => $id]);

		redirect("DataAdmin");
	}
}
