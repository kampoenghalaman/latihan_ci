<?php 
 
class Login extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('Modellogin');
 
	}
 
	function index(){
		$this->load->view('loginview');
	}
 
	function aksi_login(){
		$username = $this->input->post('username');
		$password = $this->input->post('password');
		$where = array(
			'username' => $username,
			'password' => $password
			);
		$cek = $this->Modellogin->cek_login("login",$where)->num_rows();
		if($cek == 1){
 
			$data_session = array(
				'nama' => $username,
				'status' => "login"
				);
 
			$this->session->set_userdata($data_session);
 
			redirect(base_url("Kelasbaru"));
 
		}else{
			echo "Username dan password salah !";
		}
		}
	
 
	function logout(){
		$this->session->sess_destroy();
		redirect(base_url('login'));
	}
}
?>