<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Ex_siswa extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Ex_siswa_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'ex_siswa/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'ex_siswa/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'ex_siswa/index.html';
            $config['first_url'] = base_url() . 'ex_siswa/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Ex_siswa_model->total_rows($q);
        $ex_siswa = $this->Ex_siswa_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'ex_siswa_data' => $ex_siswa,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('ex_siswa/ex_siswa_list', $data);
    }

    public function read($id) 
    {
        $row = $this->Ex_siswa_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_siswa' => $row->id_siswa,
		'nama_siswa' => $row->nama_siswa,
		'jk' => $row->jk,
		'kelas' => $row->kelas,
		'indo' => $row->indo,
		'mtk' => $row->mtk,
		'inggris' => $row->inggris,
	    );
            $this->load->view('ex_siswa/ex_siswa_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('ex_siswa'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('ex_siswa/create_action'),
	    'id_siswa' => set_value('id_siswa'),
	    'nama_siswa' => set_value('nama_siswa'),
	    'jk' => set_value('jk'),
	    'kelas' => set_value('kelas'),
	    'indo' => set_value('indo'),
	    'mtk' => set_value('mtk'),
	    'inggris' => set_value('inggris'),
	);
        $this->load->view('ex_siswa/ex_siswa_form', $data);
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nama_siswa' => $this->input->post('nama_siswa',TRUE),
		'jk' => $this->input->post('jk',TRUE),
		'kelas' => $this->input->post('kelas',TRUE),
		'indo' => $this->input->post('indo',TRUE),
		'mtk' => $this->input->post('mtk',TRUE),
		'inggris' => $this->input->post('inggris',TRUE),
	    );

            $this->Ex_siswa_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('ex_siswa'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Ex_siswa_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('ex_siswa/update_action'),
		'id_siswa' => set_value('id_siswa', $row->id_siswa),
		'nama_siswa' => set_value('nama_siswa', $row->nama_siswa),
		'jk' => set_value('jk', $row->jk),
		'kelas' => set_value('kelas', $row->kelas),
		'indo' => set_value('indo', $row->indo),
		'mtk' => set_value('mtk', $row->mtk),
		'inggris' => set_value('inggris', $row->inggris),
	    );
            $this->load->view('ex_siswa/ex_siswa_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('ex_siswa'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_siswa', TRUE));
        } else {
            $data = array(
		'nama_siswa' => $this->input->post('nama_siswa',TRUE),
		'jk' => $this->input->post('jk',TRUE),
		'kelas' => $this->input->post('kelas',TRUE),
		'indo' => $this->input->post('indo',TRUE),
		'mtk' => $this->input->post('mtk',TRUE),
		'inggris' => $this->input->post('inggris',TRUE),
	    );

            $this->Ex_siswa_model->update($this->input->post('id_siswa', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('ex_siswa'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Ex_siswa_model->get_by_id($id);

        if ($row) {
            $this->Ex_siswa_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('ex_siswa'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('ex_siswa'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nama_siswa', 'nama siswa', 'trim|required');
	$this->form_validation->set_rules('jk', 'jk', 'trim|required');
	$this->form_validation->set_rules('kelas', 'kelas', 'trim|required');
	$this->form_validation->set_rules('indo', 'indo', 'trim|required');
	$this->form_validation->set_rules('mtk', 'mtk', 'trim|required');
	$this->form_validation->set_rules('inggris', 'inggris', 'trim|required');

	$this->form_validation->set_rules('id_siswa', 'id_siswa', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "ex_siswa.xls";
        $judul = "ex_siswa";
        $tablehead = 0;
        $tablebody = 1;
        $nourut = 1;
        //penulisan header
        header("Pragma: public");
        header("Expires: 0");
        header("Cache-Control: must-revalidate, post-check=0,pre-check=0");
        header("Content-Type: application/force-download");
        header("Content-Type: application/octet-stream");
        header("Content-Type: application/download");
        header("Content-Disposition: attachment;filename=" . $namaFile . "");
        header("Content-Transfer-Encoding: binary ");

        xlsBOF();

        $kolomhead = 0;
        xlsWriteLabel($tablehead, $kolomhead++, "No");
	xlsWriteLabel($tablehead, $kolomhead++, "Nama Siswa");
	xlsWriteLabel($tablehead, $kolomhead++, "Jk");
	xlsWriteLabel($tablehead, $kolomhead++, "Kelas");
	xlsWriteLabel($tablehead, $kolomhead++, "Indo");
	xlsWriteLabel($tablehead, $kolomhead++, "Mtk");
	xlsWriteLabel($tablehead, $kolomhead++, "Inggris");

	foreach ($this->Ex_siswa_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama_siswa);
	    xlsWriteLabel($tablebody, $kolombody++, $data->jk);
	    xlsWriteLabel($tablebody, $kolombody++, $data->kelas);
	    xlsWriteLabel($tablebody, $kolombody++, $data->indo);
	    xlsWriteLabel($tablebody, $kolombody++, $data->mtk);
	    xlsWriteLabel($tablebody, $kolombody++, $data->inggris);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=ex_siswa.doc");

        $data = array(
            'ex_siswa_data' => $this->Ex_siswa_model->get_all(),
            'start' => 0
        );
        
        $this->load->view('ex_siswa/ex_siswa_doc',$data);
    }

}

/* End of file Ex_siswa.php */
/* Location: ./application/controllers/Ex_siswa.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-07-04 11:48:07 */
/* http://harviacode.com */