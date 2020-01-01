<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

class mahasiswa_model extends CI_Model {

    public function getAllmahasiswa()
    {
    // https://www.codeigniter.com/user_guide/database/query_builder.html?highlight=query%20builder
    // $query digunakan untuk menampung isi dari tabel mahasiswa
       $query=$this->db->get('mahasiswa');

    // https://www.codeigniter.com/user_guide/database/results.html
    // untuk menampilkan isi dari query
        return $query->result_array();

    // atau bisa juga menggunakan code berikut
        // return $this->db->get('mahasiswa')->result_array();
    }

}

/* End of file mahasiwa_model.php */

?>