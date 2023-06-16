<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Bukutamu extends CI_Controller
{


    function __construct()
    {
        parent::__construct();
        if (!$this->ion_auth->logged_in()) {
            redirect('auth');
        } else if (!$this->ion_auth->is_admin()) {
            show_error('Hanya Administrator yang diberi hak untuk mengakses halaman ini, <a href="' . base_url('dashboard') . '">Kembali ke menu awal</a>', 403, 'Akses Terlarang');
        }
        $this->load->model('Bukutamu_model');
        $this->load->library('form_validation');
        $this->user = $this->ion_auth->user()->row();
    }

    public function index()
    {
        $user = $this->user;
        $menu = $this->Bukutamu_model->get_all();

        $data = array(
            'bukutamu_data' => $menu,
            'user' => $user, 'users'     => $this->ion_auth->user()->row(),
        );
        $this->template->load('template/template', 'bukutamu/bukutamu_list', $data);
        $this->load->view('template/datatables');
    }

    public function read($id)
    {
        $user = $this->user;
        $row = $this->Bukutamu_model->get_by_id($id);
        if ($row) {
            $data = array(
                'id_bukutamu' => $row->id_bukutamu,
                'nama_tamu' => $row->nama_tamu,
                'jk' => $row->jk,
                'alamat' => $row->alamat,
                'instansi' => $row->instansi,
                'no_hp' => $row->no_hp,
                'keperluan' => $row->keperluan,
                'email_tamu' => $row->email_tamu,
                'user' => $user,
                'users'     => $this->ion_auth->user()->row(),
            );
            $this->template->load('template/template', 'bukutamu/bukutamu_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('bukutamu'));
        }
    }
}
