<?php

class Kelas extends CI_Controller {
	function __construct(){
			parent::__construct();		
	}

	public function index(){
		$this->load->model("m_kelas");
		$data['kelas'] = $this->m_kelas->tampil_data()->result();
		$this->load->view('v_tampil',$data);
		// echo "<pre>";
		// print_r($data['kelas']);
	}

	public function simulasi($id_mhs){ 
		$this->load->model("m_kelas");
		$where = array('id_mhs' => $id_mhs);
		$data['data'] = $this->m_kelas->tampil_data1($where, "kelas")->result();
		// var_dump($data['data'])
		$data['error'] = ' ';
		$this->load->view('v_tambahgambar',$data);
	}

	public function aksi_upload($id_mhs){
		$this->load->model("m_kelas");
		$where = array('id_mhs' => $id_mhs);
		$data['data'] = $this->m_kelas->tampil_data1($where, "kelas")->result();
		$config['upload_path']          = './gambar/';
		$config['allowed_types']        = 'gif|jpg|png|pdf';
		$config['max_size']             = 1000;
		$config['max_width']            = 1024;
		$config['max_height']           = 768;
		$this->load->library('upload', $config);
		if ( ! $this->upload->do_upload('berkas')){
			$error = array('error' => $this->upload->display_errors());
			$this->load->view('v_tambahgambar', $data);
		}else{
			$data = array('upload_data' => $this->upload->data());
			$file_name = $data['upload_data']['file_name'];
				$data1 = array(
					'statusgambar' => '1',
					'namafile' => $file_name
				);
				// var_dump($data1);
					$id_mhs = $this->input->post('id_mhs');
					$where = array('id_mhs' => $id_mhs);
					$this->m_kelas->update_data($where, $data1, 'kelas');
					redirect('Kelas');
		}
	}

	public function download_gambar(){
		// $isi = 'Yass Berhasil Membuat sample Download dari CodeIgniter!';
		// $nama_file = 'mytext.txt';
		
		// force_download($nama_file, $isi);
		$nama_file = 'gambar/'.$this->uri->segment(3);
		force_download($nama_file, NULL);
	}

	public function tambahdata(){
		$this->load->view("v_tambahdata");
	}
}