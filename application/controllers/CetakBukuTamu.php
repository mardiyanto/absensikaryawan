<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CetakBukuTamu extends CI_Controller {

    public function __construct() {
        parent::__construct();
        // Load model BukuTamuModel
        $this->load->model('BukuTamuModel');
    }

    public function index() {
        // Ambil data buku tamu dari database
        $data['bukutamu'] = $this->BukuTamuModel->getAll();

        // Load view cetak_buku_tamu.php
        $this->load->view('bukutamu/cetak_buku_tamu', $data);
    }

}