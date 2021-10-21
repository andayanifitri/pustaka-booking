<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Cinema extends CI_Controller {

	
	public function index()
	{
		$this ->load->view('View-output-cinema');

	}

	public function addCinema()
	{
		$nama = $this->input->post('nama');
		$judul = $this->input->post('judul');
		$pukul = $this->input->post('pukul');
		$tipe = $this->input->post('tipe');
		$jumlah = $this->input->post('jumlah');

		if($tipe == "Reguler 2D"){
			$harga_tiket = 40000;
		}else if($tipe == "Reguler 3D"){
			$harga_tiket = 80000;
		}else if($tipe == "Velvet"){
			$harga_tiket = 100000;
		}

		$total_harga = $jumlah * $harga_tiket

		$data = [
			'nama' =>$nama,
			'judul' =>$judul,
			'pukul' =>$pukul,
			'tipe' =>$tipe,
			'jumlah' =>$jumlah,
			'harga' =>$harga_tiket,
			'total' =>$total_harga,
		]
		return $this->load->view('view-output-cinema',$data)
	}
}