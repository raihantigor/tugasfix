<?php
class m_login extends ci_model{
 
 public function cek_user($nama , $nrp){
 	$condition = "nama='".$nama."' and nrp='".$nrp."'";
 	$this->db->select('*');
 	$this->db->from('users');
 	$this->db->where($condition);

 	$hasil_cek = $this->db->get();

 	if ($hasil_cek->num_rows()==1) {
 		return true;
 		 }
 		else {
 			return false;
 		}	
 }

}



 ?>