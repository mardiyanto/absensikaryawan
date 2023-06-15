<?php
class Model_regkaryawan extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function getKaryawanById($id_karyawan) {
        $query = $this->db->get_where('karyawan', array('id_karyawan' => $id_karyawan));
        return $query->row();
    }

    public function insertKaryawan($data) {
        return $this->db->insert('karyawan', $data);
    }
}
