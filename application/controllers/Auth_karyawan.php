<?php
class Auth_karyawan extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('Model_regkaryawan');
        $this->load->library('session');
        $this->load->helper('url');
    }

    public function login() {
        // Jika sudah login, redirect ke halaman lain
        if ($this->session->userdata('logged_in')) {
            redirect('dashboard');
        }

        // Jika form login disubmit
        if ($this->input->post('submit')) {
            $id_karyawan = $this->input->post('id_karyawan');

            // Validasi login
            $karyawan = $this->Model_regkaryawan->getKaryawanById($id_karyawan);
            if ($karyawan) {
                $session_data = array(
                    'id_karyawan' => $karyawan->id_karyawan,
                    'logged_in' => true
                );
                $this->session->set_userdata($session_data);
                redirect('dashboard');
            } else {
                $data['error_msg'] = 'ID Karyawan tidak valid';
            }
        }

        // Load halaman login
        $this->load->view('melebu/login_karyawan', $data);
    }

    public function register() {
        // Jika sudah login, redirect ke halaman lain
        if ($this->session->userdata('logged_in')) {
            redirect('dashboard');
        }

        // Jika form registrasi disubmit
        if ($this->input->post('submit')) {
            $id_karyawan = $this->input->post('id_karyawan');
            $nama_karyawan = $this->input->post('nama_karyawan');
            $jabatan = $this->input->post('jabatan');

            // Validasi input

            // Cek apakah ID Karyawan sudah digunakan
            $existingKaryawan = $this->Model_regkaryawan->getKaryawanById($id_karyawan);
            if ($existingKaryawan) {
                $data['error_msg'] = 'ID Karyawan sudah digunakan';
            } else {
                // Data karyawan baru
                $karyawanData = array(
                    'id_karyawan' => $id_karyawan,
                    'nama_karyawan' => $nama_karyawan,
                    'jabatan' => $jabatan
                );

                // Simpan data karyawan baru ke database
                $result = $this->Model_regkaryawan->insertKaryawan($karyawanData);
                if ($result) {
                    $data['success_msg'] = 'Registrasi berhasil. Silakan login.';
                } else {
                    $data['error_msg'] = 'Registrasi gagal. Silakan coba lagi.';
                }
            }
        }

        // Load halaman registrasi
        $this->load->view('register', $data);
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('login');
    }
}
