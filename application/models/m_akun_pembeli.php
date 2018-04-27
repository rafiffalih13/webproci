<?php
	class M_akun_pembeli extends CI_Model{

 	public function tampil_data(){
 		return $this->db->get('akun_pembeli');
 	}

 	public function simpan_data($data, $table){
 		$this->db->insert($table,$data);
 	}

 	public function cekuser($user){
 		$this->db->select('username');
		$this->db->from('akun_pembeli');
 		$this->db->where('username = ', $user);
 		$query = $this->db->get();
 		return $query->result();
 	}
 }
?>
