<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Kelasbaru extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Kelasbaru_model');
        $this->load->library('form_validation');
    }

    public function index()
    {
        $q = urldecode($this->input->get('q', TRUE));
        $start = intval($this->input->get('start'));
        
        if ($q <> '') {
            $config['base_url'] = base_url() . 'kelasbaru/index.html?q=' . urlencode($q);
            $config['first_url'] = base_url() . 'kelasbaru/index.html?q=' . urlencode($q);
        } else {
            $config['base_url'] = base_url() . 'kelasbaru/index.html';
            $config['first_url'] = base_url() . 'kelasbaru/index.html';
        }

        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['total_rows'] = $this->Kelasbaru_model->total_rows($q);
        $kelasbaru = $this->Kelasbaru_model->get_limit_data($config['per_page'], $start, $q);

        $this->load->library('pagination');
        $this->pagination->initialize($config);

        $data = array(
            'kelasbaru_data' => $kelasbaru,
            'q' => $q,
            'pagination' => $this->pagination->create_links(),
            'total_rows' => $config['total_rows'],
            'start' => $start,
        );
        $this->load->view('template/header');
        $this->load->view('template/sidenavbar');
        $this->load->view('template/navbar');
        $this->load->view('kelasbaru/kelas_list', $data);
        $this->load->view('template/footer');
    }

    public function read($id) 
    {
        $row = $this->Kelasbaru_model->get_by_id($id);
        if ($row) {
            $data = array(
		'id_mhs' => $row->id_mhs,
		'nis' => $row->nis,
		'nama' => $row->nama,
		'alamat' => $row->alamat,
		'semester' => $row->semester,
		'statusgambar' => $row->statusgambar,
		'namafile' => $row->namafile,
	    );
            $this->load->view('template/header');
            $this->load->view('template/sidenavbar');
            $this->load->view('template/navbar');
            $this->load->view('kelasbaru/kelas_read', $data);
            $this->load->view('template/footer');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('kelasbaru'));
        }
    }

    public function create() 
    {
        $data = array(
            'button' => 'Create',
            'action' => site_url('kelasbaru/create_action'),
	    'id_mhs' => set_value('id_mhs'),
	    'nis' => set_value('nis'),
	    'nama' => set_value('nama'),
	    'alamat' => set_value('alamat'),
	    'semester' => set_value('semester'),
	    'statusgambar' => set_value('statusgambar'),
	    'namafile' => set_value('namafile'),
	);
        $this->load->view('template/header');
        $this->load->view('template/sidenavbar');
        $this->load->view('template/navbar');
        $this->load->view('kelasbaru/kelas_form', $data);
        $this->load->view('template/footer');
    }
    
    public function create_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
		'nis' => $this->input->post('nis',TRUE),
		'nama' => $this->input->post('nama',TRUE),
		'alamat' => $this->input->post('alamat',TRUE),
		'semester' => $this->input->post('semester',TRUE),
		'statusgambar' => $this->input->post('statusgambar',TRUE),
		'namafile' => $this->input->post('namafile',TRUE),
	    );

            $this->Kelasbaru_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('kelasbaru'));
        }
    }
    
    public function update($id) 
    {
        $row = $this->Kelasbaru_model->get_by_id($id);

        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('kelasbaru/update_action'),
		'id_mhs' => set_value('id_mhs', $row->id_mhs),
		'nis' => set_value('nis', $row->nis),
		'nama' => set_value('nama', $row->nama),
		'alamat' => set_value('alamat', $row->alamat),
		'semester' => set_value('semester', $row->semester),
		'statusgambar' => set_value('statusgambar', $row->statusgambar),
		'namafile' => set_value('namafile', $row->namafile),
	    );
            $this->load->view('template/header');
            $this->load->view('template/sidenavbar');
            $this->load->view('template/navbar');
            $this->load->view('kelasbaru/kelas_form', $data);
            $this->load->view('template/footer');
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('kelasbaru'));
        }
    }
    
    public function update_action() 
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_mhs', TRUE));
        } else {
            $data = array(
		'nis' => $this->input->post('nis',TRUE),
		'nama' => $this->input->post('nama',TRUE),
		'alamat' => $this->input->post('alamat',TRUE),
		'semester' => $this->input->post('semester',TRUE),
		'statusgambar' => $this->input->post('statusgambar',TRUE),
		'namafile' => $this->input->post('namafile',TRUE),
	    );

            $this->Kelasbaru_model->update($this->input->post('id_mhs', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('kelasbaru'));
        }
    }
    
    public function delete($id) 
    {
        $row = $this->Kelasbaru_model->get_by_id($id);

        if ($row) {
            $this->Kelasbaru_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('kelasbaru'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('kelasbaru'));
        }
    }

    public function _rules() 
    {
	$this->form_validation->set_rules('nis', 'nis', 'trim|required');
	$this->form_validation->set_rules('nama', 'nama', 'trim|required');
	$this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
	$this->form_validation->set_rules('semester', 'semester', 'trim|required');
	$this->form_validation->set_rules('statusgambar', 'statusgambar', 'trim|required');
	$this->form_validation->set_rules('namafile', 'namafile', 'trim|required');

	$this->form_validation->set_rules('id_mhs', 'id_mhs', 'trim');
	$this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }

    public function excel()
    {
        $this->load->helper('exportexcel');
        $namaFile = "kelas.xls";
        $judul = "kelas";
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
	xlsWriteLabel($tablehead, $kolomhead++, "Nis");
	xlsWriteLabel($tablehead, $kolomhead++, "Nama");
	xlsWriteLabel($tablehead, $kolomhead++, "Alamat");
	xlsWriteLabel($tablehead, $kolomhead++, "Semester");
	xlsWriteLabel($tablehead, $kolomhead++, "Statusgambar");
	xlsWriteLabel($tablehead, $kolomhead++, "Namafile");

	foreach ($this->Kelasbaru_model->get_all() as $data) {
            $kolombody = 0;

            //ubah xlsWriteLabel menjadi xlsWriteNumber untuk kolom numeric
            xlsWriteNumber($tablebody, $kolombody++, $nourut);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nis);
	    xlsWriteLabel($tablebody, $kolombody++, $data->nama);
	    xlsWriteLabel($tablebody, $kolombody++, $data->alamat);
	    xlsWriteLabel($tablebody, $kolombody++, $data->semester);
	    xlsWriteLabel($tablebody, $kolombody++, $data->statusgambar);
	    xlsWriteLabel($tablebody, $kolombody++, $data->namafile);

	    $tablebody++;
            $nourut++;
        }

        xlsEOF();
        exit();
    }

    public function word()
    {
        header("Content-type: application/vnd.ms-word");
        header("Content-Disposition: attachment;Filename=kelas.doc");

        $data = array(
            'kelas_data' => $this->Kelasbaru_model->get_all(),
            'start' => 0
        );
        $this->load->view('template/header');
        $this->load->view('template/sidenavbar');
        $this->load->view('template/navbar');
        $this->load->view('kelasbaru/kelas_doc',$data);
        $this->load->view('template/footer');
    }

    public function tugas(){
        echo "silahkan dikerjaakan";
    }

}

/* End of file Kelasbaru.php */
/* Location: ./application/controllers/Kelasbaru.php */
/* Please DO NOT modify this information : */
/* Generated by Harviacode Codeigniter CRUD Generator 2018-07-04 13:22:16 */
/* http://harviacode.com */