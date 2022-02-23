<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller 
{
	public  function __construct()
	{
		parent::__construct();
		
		$this -> load -> library('form_validation');
		$this -> load -> model('Kpk');
		if ($this -> session -> userdata('level') === '1')
		{
			redirect('Admin');
		}
		
		if ($this -> session -> userdata('email') == '')
		{
			redirect('Auth');
		}


	}


	public function index()
		{
			$data['title'] = 'KPK'; 
			$data['user'] = $this -> db -> get_where('users_kpk', ['email' => $this -> session -> userdata('email')]) -> row_array();
				$this -> load -> view('templates/user_header', $data);
				$this -> load -> view('User/index', $data);
				$this -> load -> view('templates/user_footer');

			
		}

	public function modul()
	{
		$data['get'] = $this->Kpk->get('tbl_modul');
		$data['title'] = 'Modul'; 
		$data['user'] = $this -> db -> get_where('users_kpk', ['email' => $this -> session -> userdata('email')]) -> row_array();
	
			$this -> load -> view('templates/user_header', $data);
			$this -> load -> view('User/modul', $data);
			$this -> load -> view('templates/user_footer');	
	}

	public function unduh_modul($id)
		{

		    $file = 'assets/backend/berkasfile/modul/'.$id;
		    force_download($file,NULL);
		    
		}

	public function soal()
	{
		$data['get'] = $this->Kpk->get('tbl_soal');
		$data['title'] = 'Soal'; 
		$data['user'] = $this -> db -> get_where('users_kpk', ['email' => $this -> session -> userdata('email')]) -> row_array();
	
			$this -> load -> view('templates/user_header', $data);
			$this -> load -> view('User/soal', $data);
			$this -> load -> view('templates/user_footer');	
	}

	public function unduh_soal($id)
		{

		    $file = 'assets/backend/berkasfile/soal/'.$id;
		    force_download($file,NULL);
		    
		}

	public function informasi()
	{
		$data['get'] = $this->Kpk->get('tbl_informasi');
		$data['title'] = 'Informasi'; 
		$data['user'] = $this -> db -> get_where('users_kpk', ['email' => $this -> session -> userdata('email')]) -> row_array();
	
			$this -> load -> view('templates/user_header', $data);
			$this -> load -> view('User/informasi', $data);
			$this -> load -> view('templates/user_footer');	
	}

	public function jadwalpengajar()
	{
		$data['get'] = $this->Kpk->get('tbl_jadwal');
		$data['title'] = 'Jadwal Pengajar'; 
		$data['user'] = $this -> db -> get_where('users_kpk', ['email' => $this -> session -> userdata('email')]) -> row_array();
	
			$this -> load -> view('templates/user_header', $data);
			$this -> load -> view('User/jadwalpengajar', $data);
			$this -> load -> view('templates/user_footer');	
	}

	public function unduh_jadwal($id)
		{

		    $file = 'assets/backend/berkasfile/jadwal/'.$id;
		    force_download($file,NULL);
		    
		}

	public function daftaranggota()
	{
		$data['get'] = $this->Kpk->get('tbl_anggota');
		$data['title'] = 'Daftar Anggota'; 
		$data['user'] = $this -> db -> get_where('users_kpk', ['email' => $this -> session -> userdata('email')]) -> row_array();
	
			$this -> load -> view('templates/user_header', $data);
			$this -> load -> view('User/daftaranggota', $data);
			$this -> load -> view('templates/user_footer');	
	}
}