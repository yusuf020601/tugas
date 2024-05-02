<?php
defined('BASEPATH') or exit ('no direct script access allowed');

class Sekolah extends CI_Controller{
    function __construct(){
        parent::__construct();
    }
    
    public function form(){
        $this->load->view('view_form_input.php');
    }

    public function index(){
        $this->load->view('v_header.php');
        $this->load->view('v_home.php');
        $this->load->view('v_footer.php');
    }

    public function cetak(){
        $data = [
            'nama' => $this->input->post('nama'),
            'nis' => $this->input->post('nis'),
            'kelas' => $this->input->post('kelas'),
            'tempat_lahir' => $this->input->post('tempat_lahir'),
            'tanggal_lahir' => $this->input->post('tanggal_lahir'),
            'alamat' => $this->input->post('alamat'),
            'jk' => $this->input->post('jk'),
            'agama' => $this->input->post('agama'),
        ];
            $this->load->view('view-data-siswa', $data);
        
    }
}