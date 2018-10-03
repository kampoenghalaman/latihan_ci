<?php 
 
class M_kelas extends CI_Model{

	function tampil_data(){
		return $this->db->get('kelas');
		// select * from kelas
	}

	function tampil_data1($where, $table){
		return $this->db->get_where($table,$where);
		// select * from kelas where nis = $nis
	}	

	function update_data($where,$data,$table){
		$this->db->where($where);
		$this->db->update($table,$data);
	}	
 
	// function input_data($data,$table){
	// 	$this->db->insert($table,$data);
	// }
}