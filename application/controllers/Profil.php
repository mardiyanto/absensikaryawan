<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Profil extends CI_Controller
{


    function __construct()
    {
        parent::__construct();
        if (!$this->ion_auth->logged_in()) {
            redirect('auth');
        } else if (!$this->ion_auth->is_admin()) {
            show_error('Hanya Administrator yang diberi hak untuk mengakses halaman ini, <a href="' . base_url('dashboard') . '">Kembali ke Profil awal</a>', 403, 'Akses Terlarang');
        }
        $this->load->model('Profil_model');
        $this->load->library('form_validation');
        $this->user = $this->ion_auth->user()->row();
    }

    public function index()
    {
        $user = $this->user;
        $data = $this->Profil_model->get_all();

        $data = array(
            'data' => $data,
            'user' => $user, 'users'     => $this->ion_auth->user()->row(),
        );
        $this->template->load('template/template', 'profil/profil_list', $data);
        $this->load->view('template/datatables');
    }

    public function read($id)
    {
        $user = $this->user;
        $row = $this->Profil_model->get_by_id($id);
        if ($row) {
            $data = array(
                'id_profil' => $row->id_profil,
                'nama_instansi' => $row->nama_instansi,
                'alamat' => $row->alamat,
                'no_hp' => $row->no_hp,
                'email_instansi' => $row->email_instansi,
                'tentang' => $row->tentang,
                'alias' => $row->alias,
                'user' => $user,
                'users'     => $this->ion_auth->user()->row(),
            );
            $this->template->load('template/template', 'profil/profil_read', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('profil'));
        }
    }
    public function create()
    {
        $user = $this->user;
        $data = array(
            'button' => 'Create',
            'action' => site_url('profil/create_action'),
            'id_profil' => set_value('id_profil'),
            'nama_instansi' => set_value('nama_instansi'),
            'alamat' => set_value('alamat'),
            'no_hp' => set_value('no_hp'),
            'email_instansi' => set_value('email_instansi'),
            'tentang' => set_value('tentang'),
            'alias' => set_value('alias'),
            'user' => $user, 'users'     => $this->ion_auth->user()->row(),
        );
        $this->template->load('template/template', 'profil/Profil_form', $data);
    }

    public function create_action()
    {
        $this->_rules();
        if ($this->form_validation->run() == FALSE) {
            $this->create();
        } else {
            $data = array(
                'nama_instansi' => $this->input->post('nama_instansi', TRUE),
                'alamat' => $this->input->post('alamat', TRUE),
                'no_hp' => $this->input->post('no_hp', TRUE),
                'email_instansi' => $this->input->post('email_instansi', TRUE),
                'tentang' => $this->input->post('tentang', TRUE),
                'alias' => $this->input->post('alias', TRUE),
            );

            $this->Profil_model->insert($data);
            $this->session->set_flashdata('message', 'Create Record Success');
            redirect(site_url('profil'));
        }
    }
    public function update($id)
    {
        $user = $this->user;
        $row = $this->Profil_model->get_by_id($id);
        if ($row) {
            $data = array(
                'button' => 'Update',
                'action' => site_url('profil/update_action'),
                'id_profil' => set_value('id_profil', $row->id_profil),
                'nama_instansi' => set_value('nama_instansi', $row->nama_instansi),
                'alamat' => set_value('alamat', $row->alamat),
                'no_hp' => set_value('no_hp', $row->no_hp),
                'email_instansi' => set_value('email_instansi', $row->email_instansi),
                'tentang' => set_value('tentang', $row->tentang),
                'alias' => set_value('alias', $row->alias),
                'user' => $user,
                'users'     => $this->ion_auth->user()->row(),
            );
            $this->template->load('template/template', 'Profil/Profil_form', $data);
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('Profil'));
        }
    }

    public function update_action()
    {
        $this->_rules();

        if ($this->form_validation->run() == FALSE) {
            $this->update($this->input->post('id_profil', TRUE));
        } else {
            $data = array(
                'nama_instansi' => $this->input->post('nama_instansi', TRUE),
                'alamat' => $this->input->post('alamat', TRUE),
                'no_hp' => $this->input->post('no_hp', TRUE),
                'email_instansi' => $this->input->post('email_instansi', TRUE),
                'tentang' => $this->input->post('tentang', TRUE),
                'alias' => $this->input->post('alias', TRUE),
            );

            $this->Profil_model->update($this->input->post('id_profil', TRUE), $data);
            $this->session->set_flashdata('message', 'Update Record Success');
            redirect(site_url('Profil'));
        }
    }

    public function delete($id)
    {
        $row = $this->Profil_model->get_by_id($id);
        if ($row) {
            $this->Profil_model->delete($id);
            $this->session->set_flashdata('message', 'Delete Record Success');
            redirect(site_url('Profil'));
        } else {
            $this->session->set_flashdata('message', 'Record Not Found');
            redirect(site_url('Profil'));
        }
    }

    public function _rules()
    {
        $this->form_validation->set_rules('nama_instansi', 'nama_instansi', 'trim|required');
        $this->form_validation->set_rules('alamat', 'alamat', 'trim|required');
        $this->form_validation->set_rules('id_profil', 'id_profil', 'trim');
        $this->form_validation->set_error_delimiters('<span class="text-danger">', '</span>');
    }
}
