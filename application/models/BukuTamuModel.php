<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BukuTamuModel extends CI_Model {

    public function getAll() {
        // Query untuk mengambil semua data buku tamu dari database
        $query = $this->db->get('bukutamu');
        return $query->result();
    }

}
