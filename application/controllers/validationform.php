<?php
class validationform extends CI_Controller{
	function __construct(){
		parent::__construct();
	}

	public function index(){		
        $this->load->library('form_validation');
        // $this->form_validation->set_rules('username', 'Username', 'required');
        $this->form_validation->set_rules(
        'username', 'Username',
        'required|min_length[5]|max_length[12]',
        array(
                'required'      => 'You have not provided %s.',
                'is_unique'     => 'This %s already exists.'
        ));
        $this->form_validation->set_rules('password', 'Password', 'required',array('required' => 'You must provide a %s.'));
        $this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password]');
        $this->form_validation->set_rules('email', 'Email', 'required');
            if ($this->form_validation->run() == FALSE)
            {
           		$this->load->view('v_formvalidation');
            }
            else
            {
                $this->load->view('v_formvalidationsukses');
            }
	}
}