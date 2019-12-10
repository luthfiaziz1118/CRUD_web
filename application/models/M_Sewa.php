<?php

/**
 * 
 */
class M_sewa extends CI_Model
{
	
	function input_data($data,$table){
		$this->db->insert($table,$data);
	}
	
	function tampil_data(){
		return $this->db->get('reservasi');
	}
	
	function hapus_data($data,$id_reservasi){
    $this->db->where('id_reservasi', $id_reservasi);
    $this->db->delete('reservasi');
    $this->session->set_flashdata('sukses',"Data Berhasil Dihapus");
  	}

 	function edit_data($where,$table){		
	return $this->db->get_where($table,$where);
	}
	
	function update_data($data,$id_reservasi){
    $this->db->where('id_reservasi', $id_reservasi);
    $this->db->update('reservasi',$data);
    return true;
  }

  	function cek_login($table,$where){
  		return $this->db->get_where($table,$where);
  	}
}