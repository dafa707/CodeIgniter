<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DataParkir extends CI_Controller {

	public function index()
	{
		$this->load->view('tampilan_data_parkir');
	}
	
	public function tambah()
	{
		$this->load->view('tampilan_data_parkir_tambah');
	}
	
	public function tambah_proses()
	{
		$data = $this->input->post();

		$arr = array(
			'plat_nomor' 		=> $data['plat_nomor'],
			'jenis_kendaraan'	=> $data['jenis_kendaraan'],
			'jam_masuk'			=> date('Y-m-d H:i:s')
		);

		$result = $this->db->insert('tbl_parkir', $arr);

		redirect("DataParkir");
	}

	public function edit($id)
	{
		$data = array(
			'data'	=> $this->db->get_where('tbl_parkir', ['id_transaksi' => $id])->row()
		);
		$this->load->view('tampilan_data_parkir_edit', $data);
	}
	
	public function edit_proses($id)
	{
		$data = $this->input->post();

		$arr = array(
			'plat_nomor' 		=> $data['plat_nomor'],
			'jenis_kendaraan'	=> $data['jenis_kendaraan'],
		);

		$result = $this->db->update('tbl_parkir', $arr, ['id_transaksi' => $id]);

		redirect("DataParkir");
	}

	public function keluar_sekarang($id = null)
	{
		$cekData = $this->db->get_where('tbl_parkir', 
			[
				'id_transaksi' => $id
			]
		)->row();

		$harga = 2000;

		$first_date = new DateTime($cekData->jam_masuk);
		$second_date = new DateTime(date('Y-m-d H:i:s'));

		$difference = $first_date->diff($second_date);

		$total_jam_hari = $difference->format("%d") * 24;
		$total_jam		= $difference->format('%h');
		$totalJam = $total_jam_hari + $total_jam;

		if ($totalJam <= 0){
			$totalJam = 1;
		}

		$total = $harga * $totalJam;

		$editDB = $this->db->update('tbl_parkir', 
			[
				'jam_keluar'	=> date('Y-m-d H:i:s'),
				'harga'			=> $total
			],
			[
				'id_transaksi'	=> $id
			]
			);
		
			redirect("DataParkir");
	}

	public function hapus($id)
	{
		$result = $this->db->delete('tbl_parkir', ['id_transaksi' => $id]);

		redirect("DataParkir");
	}
}
