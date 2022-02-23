<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kpk extends CI_Model {
	function login($email, $password){
		$this->db->where('email', $email);
		$this->db->where('password', $password);
		$hasil = $this->db->get('users_kpk');

		if($hasil->num_rows() > 0){
			return $hasil;
		}
		else{
			return false;
		}
	}


	public function get($table)
	{
		$this->db->select('*');
		$this->db->from($table);
		return $this->db->get()->result();
	}

	public function getid($id_tbl,$id,$table)
	{
		return $this -> db -> get_where($table,[$id_tbl => $id]) -> row();
	}

	
	public function hitungJumlahAnggota()
	{   
	    $query = $this->db->get('tbl_anggota');
	    if($query->num_rows()>0)
	    {
	      return $query->num_rows();
	    }
	    else
	    {
	      return 0;
	    }
	}

	public function hitungJumlahKurikulum()
	{   
	    $query = $this->db->get('kurikulum');
	    if($query->num_rows()>0)
	    {
	      return $query->num_rows();
	    }
	    else
	    {
	      return 0;
	    }
	}

	public function hitungJumlahInformasi()
	{   
	    $query = $this->db->get('tbl_informasi');
	    if($query->num_rows()>0)
	    {
	      return $query->num_rows();
	    }
	    else
	    {
	      return 0;
	    }
	}

	public function hitungJumlahJadwal()
	{   
	    $query = $this->db->get('tbl_jadwal');
	    if($query->num_rows()>0)
	    {
	      return $query->num_rows();
	    }
	    else
	    {
	      return 0;
	    }
	}

	public function hitungJumlahModul()
	{   
	    $query = $this->db->get('tbl_modul');
	    if($query->num_rows()>0)
	    {
	      return $query->num_rows();
	    }
	    else
	    {
	      return 0;
	    }
	}

	public function hitungJumlahSoal()
	{   
	    $query = $this->db->get('tbl_soal');
	    if($query->num_rows()>0)
	    {
	      return $query->num_rows();
	    }
	    else
	    {
	      return 0;
	    }
	}

	public function hitungJumlahPengguna()
	{   
	    $query = $this->db->get('users_kpk');
	    if($query->num_rows()>0)
	    {
	      return $query->num_rows();
	    }
	    else
	    {
	      return 0;
	    }
	}

	public function get_option(){
		$this -> db -> select('*');
		$this -> db -> from('kurikulum');
		$query = $this -> db -> get();
		return $query -> result();
	}


	public function insert($table,$data)
	{
		return $this->db->insert($table,$data);
	}
	public function delete($id,$id_tbl,$table)
	{
		$this->db->where($id_tbl,$id);
		return $this->db->delete($table);
	}

	public function update($data, $id, $table)
	{
		$this->db->set($data);
		$this->db->where('id',$id);
		$this->db->update($table);
	}




}