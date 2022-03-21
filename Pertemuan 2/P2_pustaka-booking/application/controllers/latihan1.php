<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class latihan1 extends CI_Controller {

	public function index()
	{
		echo "Selamat Datang.. Selamat Belajar Web Programing";

		//$this->load->view('view-latihan');
	}

	public function penjumlahan($n1, $n2)
	{
		$this->load->model('Model_latihan1');

		//Menggunakan parameter perhitungan
		//$hasil = $this->Model_latihan1->jumlah($n1, $n2);
		//echo "Hasil Penjumlahan Dari ". $n1 ." + ". $n2 ." = ". $hasil;

		//Parsing parameter
		$data['nilai1'] = $n1;
		$data['nilai2'] = $n2;
		$data['hasil'] = $this->Model_latihan1->jumlah($n1, $n2);

		//Menampilkan view
		$this->load->view('view-latihan', $data);
	}
}
