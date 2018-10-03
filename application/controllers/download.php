<?php
class Download extends CI_Controller{
	function __construct(){
		parent::__construct();
	}

	public function index(){		
		$this->load->view('v_download');
	}
 
	public function lakukan_download(){				
		$isi = 'Yass Berhasil Membuat sample Download dari CodeIgniter!';
		// $nama_file = 'huy.txt';
		// force_download($nama_file, $isi);
		// force_download('gambar/logo.png',NULL);
		$nama_file = 'gambar/me3.jpg';
		force_download($nama_file, NULL);
	}	
}