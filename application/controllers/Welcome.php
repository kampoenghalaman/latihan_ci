<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	function __construct(){
			parent::__construct();		
	}
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
	public function index()
	{
		$this->load->model("m_kelas");
		$data['kelas'] = $this->m_kelas->tampil_data()->result();
		$this->load->view('v_tampil',$data);
		// echo "<pre>";
		// print_r($data['kelas']);
		// $this->load->view('welcome_message');
	}

	public function test(){
		$data['deskripsi'] = "hari jum'at 6/4/2018";
		$data['uhuy'] = 0;
		$data['test'] = "randomstring";
		$this->load->view('test_view', $data);
	}

	public function test2(){
		$data['deskripsi'] = "hari jum'at 18.51 WIB";
		$this->load->view('test_view', $data);
	}

}
