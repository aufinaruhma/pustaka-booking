<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Latihan1 extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        //Codeigniter : Write Less Do More
    }

    public function index()
    {
    #echo "Selamat Belajar Web Programming 2 Dengan Kelas 12.3A.35";
    #$this->load->view('templates/header');
    #$this->load->view('templates/sidebar');
    #$this->load->view('templates/topbar');
    #$this->load->view('templates/footer');
    $this->load->view('templates/aute_header');
    $this->load->view('autentifikasi/login');
    $this->load->view('templates/aute_footer');
}
    public function penjumlahan($n1, $n2)
    {
        $this->load->model('Model_latihan1');
        $data['nilai1'] = $n1;
        $data['nilai2'] = $n2;
        $data['hasil'] = $this->Model_latihan1->jumlah($n1, $n2);

        $this->load->view('templates/header');
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('view_latihan', $data);
        $this->load->view('templates/footer');
    }
}