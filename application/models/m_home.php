<?php
        defined('BASEPATH') or exit('No direct script access allowed');

        class m_home extends CI_Model {

                // function __construct() {
                //         parent::__construct();
                // }
                public function get_data_barang() {
                        return $this->db->get('barang')->result();
                }
        }
?>