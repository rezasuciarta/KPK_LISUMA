<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller 
{
	public  function __construct()
	{
		parent::__construct();
		
		$this -> load -> library('form_validation');
		$this -> load -> model('Kpk');
			if ($this -> session -> userdata('level') != '1')
		{
			redirect('User');
		}
		
		if ($this -> session -> userdata('email') == '')
		{
			redirect('Auth');
		}

	}


	public function index()
	{
		$data['title'] = 'Dashboard'; 
		$data['user'] = $this -> db -> get_where('users_kpk', ['email' => $this -> session -> userdata('email')]) -> row_array();

		$data['total_anggota'] = $this->Kpk->hitungJumlahAnggota();
		$data['total_kurikulum'] = $this->Kpk->hitungJumlahKurikulum();
		$data['total_informasi'] = $this->Kpk->hitungJumlahInformasi();
		$data['total_jadwal'] = $this->Kpk->hitungJumlahJadwal();
		$data['total_modul'] = $this->Kpk->hitungJumlahModul();
		$data['total_soal'] = $this->Kpk->hitungJumlahSoal();
		$data['total_pengguna'] = $this->Kpk->hitungJumlahPengguna();
		
			$this -> load -> view('templates/header', $data);
			$this -> load -> view('templates/sidebar', $data);
			$this -> load -> view('templates/topbar', $data);
			$this -> load -> view('Admin/index', $data);
			$this -> load -> view('templates/footer');

		
	}

	

	public function daftaranggota()
	{

		$data['get'] = $this->Kpk->get('tbl_anggota');
		$data['title'] = 'Daftar Anggota'; 
		$data['user'] = $this -> db -> get_where('users_kpk', ['email' => $this -> session -> userdata('email')]) -> row_array();

	
		$this -> load -> view('templates/header', $data);
		$this -> load -> view('templates/sidebar', $data);
		$this -> load -> view('templates/topbar', $data);
		$this -> load -> view('Admin/daftaranggota', $data);
		$this -> load -> view('templates/footer');
	}

	public function tambah_daftar()
	{
		$data['title'] = 'Daftar'; 
		$data['user'] = $this -> db -> get_where('users_kpk', ['email' => $this -> session -> userdata('email')]) -> row_array();
		
		$this -> form_validation -> set_rules('namaanggota', 'Nama Lengkap', 'required|trim');
		$this -> form_validation -> set_rules('nokta', 'No.KTA', 'required|trim');
		$this -> form_validation -> set_rules('jurusan', 'Jurusan', 'required|trim');
		$this -> form_validation -> set_rules('bidang', 'Bidang', 'required|trim');
		

		if ($this -> form_validation -> run()==false){
			$this -> load -> view('templates/header', $data);
			$this -> load -> view('templates/sidebar', $data);
			$this -> load -> view('templates/topbar', $data);
			$this -> load -> view('Admin/tambah_daftar', $data);
			$this -> load -> view('templates/footer');
		}else {
			
			$data = [
				'tanggal' => date("Ymd"),
				'namaanggota' => $this -> input -> post('namaanggota'),
				'nokta' => $this -> input -> post('nokta'),
				'jurusan' => $this -> input -> post('jurusan'),
				'bidang' => $this -> input -> post('bidang')
			];

			$this ->Kpk-> insert('tbl_anggota', $data);
			$this -> session -> set_flashdata('message', '<div class="alert alert-success" role="alert"> Data berhasil ditambahkan! </div>');
			redirect('Admin/daftaranggota');
		}
	}

		public function hapus_daftar($id)
			{
				$this->Kpk->delete($id,'id_anggota','tbl_anggota');
				redirect('Admin/daftaranggota');
			}

	public function edit_daftar($id)
	{
		$data['title'] = 'Edit Anggota'; 
		$data['anggota'] = $this -> Kpk -> getid('id_anggota', $id, 'tbl_anggota');
		$data['user'] = $this -> db -> get_where('users_kpk', ['email' => $this -> session -> userdata('email')]) -> row_array();
		
		$this -> form_validation -> set_rules('namaanggota', 'Nama Lengkap', 'required|trim');
		$this -> form_validation -> set_rules('nokta', 'No.KTA', 'required|trim');
		$this -> form_validation -> set_rules('jurusan', 'Jurusan', 'required|trim');
		$this -> form_validation -> set_rules('bidang', 'Bidang', 'required|trim');
		

		if ($this -> form_validation -> run()==false){
			$this -> load -> view('templates/header', $data);
			$this -> load -> view('templates/sidebar', $data);
			$this -> load -> view('templates/topbar', $data);
			$this -> load -> view('Admin/edit_daftar', $data);
			$this -> load -> view('templates/footer');
		}else {
			
			
			$data = [
				'tanggal' => date("Ymd"),
				'namaanggota' => $this -> input -> post('namaanggota'),
				'nokta' => $this -> input -> post('nokta'),
				'jurusan' => $this -> input -> post('jurusan'),
				'bidang' => $this -> input -> post('bidang')
			];

				$this->db->set($data);
				$this->db->where('id_anggota',$id);
				$this->db->update('tbl_anggota');

			$this -> session -> set_flashdata('message', '<div class="alert alert-success" role="alert"> Data sudah diperbaharui! </div>');
			redirect('Admin/daftaranggota');
	}
}




	public function kurikulum()
	{

		$data['get'] = $this->Kpk->get('kurikulum');
		$data['title'] = 'Kurikulum'; 
		$data['user'] = $this -> db -> get_where('users_kpk', ['email' => $this -> session -> userdata('email')]) -> row_array();

	
		$this -> load -> view('templates/header', $data);
		$this -> load -> view('templates/sidebar', $data);
		$this -> load -> view('templates/topbar', $data);
		$this -> load -> view('Admin/kurikulum', $data);
		$this -> load -> view('templates/footer');
	}



	public function tambah_kurikulum()
	{
		$data['title'] = 'Kurikulum'; 
		$data['user'] = $this -> db -> get_where('users_kpk', ['email' => $this -> session -> userdata('email')]) -> row_array();
		
		$this -> form_validation -> set_rules('kurikulum', 'Kurikulum', 'required|trim');
		

		if ($this -> form_validation -> run()==false){
			$this -> load -> view('templates/header', $data);
			$this -> load -> view('templates/sidebar', $data);
			$this -> load -> view('templates/topbar', $data);
			$this -> load -> view('Admin/tambah_kurikulum', $data);
			$this -> load -> view('templates/footer');
		}else {
			
			$data = [
				'tanggal' => date("Ymd"),
				'kurikulum' => $this -> input -> post('kurikulum')
			];

			$this ->Kpk-> insert('kurikulum', $data);

			$this -> session -> set_flashdata('message', '<div class="alert alert-success" role="alert">
			Data berhasil ditambahkan!</div>');
			redirect('Admin/kurikulum');
		}
	}



	public function hapus_kurikulum($id)
	{
		$this->Kpk->delete($id,'id','kurikulum');
		redirect('Admin/kurikulum');
	}




	public function informasi()
	{
		$data['get'] = $this->Kpk->get('tbl_informasi');
		$data['title'] = 'Informasi'; 
		$data['user'] = $this -> db -> get_where('users_kpk', ['email' => $this -> session -> userdata('email')]) -> row_array();
	
		$this -> load -> view('templates/header', $data);
		$this -> load -> view('templates/sidebar', $data);
		$this -> load -> view('templates/topbar', $data);
		$this -> load -> view('Admin/informasi', $data);
		$this -> load -> view('templates/footer');
	}

	public function tambah_informasi()
	{
		$data = array('get_kurikulum' => $this -> Kpk -> get_option());
		$data['title'] = 'Informasi'; 
		$data['user'] = $this -> db -> get_where('users_kpk', ['email' => $this -> session -> userdata('email')]) -> row_array();

		$this -> form_validation -> set_rules('kurikulum', 'Kurikulum', 'required|trim');
		$this -> form_validation -> set_rules('informasi', 'Informasi', 'required|trim');
		

		if ($this -> form_validation -> run()==false){
			$this -> load -> view('templates/header', $data);
			$this -> load -> view('templates/sidebar', $data);
			$this -> load -> view('templates/topbar', $data);
			$this -> load -> view('Admin/tambah_informasi', $data);
			$this -> load -> view('templates/footer');

		}else{
			$data = [
				'tanggal' => date("Ymd"),
				'kurikulum' => $this -> input -> post('kurikulum'),
				'informasi' => $this -> input -> post('informasi')
			];

			$this ->Kpk-> insert('tbl_informasi', $data);

			$this -> session -> set_flashdata('message', '<div class="alert alert-success" role="alert">
			Data berhasil ditambahkan!</div>');
			redirect('Admin/informasi');

		}
	
	}

	public function hapus_informasi($id)
	{
		$this->Kpk->delete($id,'id_informasi','tbl_informasi');
		redirect('Admin/informasi');
	}


	public function edit_informasi($id)
	{
		$data = array('get_kurikulum' => $this -> Kpk -> get_option());
		$data['title'] = 'Edit Informasi'; 
		$data['info'] = $this -> Kpk -> getid('id_informasi', $id, 'tbl_informasi');
		$data['user'] = $this -> db -> get_where('users_kpk', ['email' => $this -> session -> userdata('email')]) -> row_array();
		
		$this -> form_validation -> set_rules('kurikulum', 'Kurikulum', 'required|trim');
		$this -> form_validation -> set_rules('informasi', 'Informasi', 'required|trim');
		

		if ($this -> form_validation -> run()==false){
			$this -> load -> view('templates/header', $data);
			$this -> load -> view('templates/sidebar', $data);
			$this -> load -> view('templates/topbar', $data);
			$this -> load -> view('Admin/edit_informasi', $data);
			$this -> load -> view('templates/footer');
		}else {
			
			
			$data = [
				'tanggal' => date("Ymd"),
				'kurikulum' => $this -> input -> post('kurikulum'),
				'informasi' => $this -> input -> post('informasi')
			];

				$this->db->set($data);
				$this->db->where('id_informasi',$id);
				$this->db->update('tbl_informasi');

			$this -> session -> set_flashdata('message', '<div class="alert alert-success" role="alert"> Data sudah diperbaharui! </div>');
			redirect('Admin/informasi');
	}
}



/*		public function jadwalpengajar()
	{
		$data['get'] = $this->Kpk->get('tbl_jadwal');
		$data['title'] = 'Jadwal Pengajar'; 
		$data['user'] = $this -> db -> get_where('users_kpk', ['email' => $this -> session -> userdata('email')]) -> row_array();
		
		$this -> load -> view('templates/header', $data);
		$this -> load -> view('templates/sidebar', $data);
		$this -> load -> view('templates/topbar', $data);
		$this -> load -> view('Admin/jadwalpengajar', $data);
		$this -> load -> view('templates/footer');
	}

	public function tambah_jadwal()
	{
		$data = array('get_kurikulum' => $this -> Kpk -> get_option());
		$data['title'] = 'Jadwal Pengajar'; 
		$data['user'] = $this -> db -> get_where('users_kpk', ['email' => $this -> session -> userdata('email')]) -> row_array();
		
		$this -> form_validation -> set_rules('deskripsijadwal', 'Deskripsi Jadwal', 'required|trim');
		$this -> form_validation -> set_rules('kurikulum', 'Kurikulum', 'required|trim');
		

		if ($this -> form_validation -> run()==false){
			$this -> load -> view('templates/header', $data);
			$this -> load -> view('templates/sidebar', $data);
			$this -> load -> view('templates/topbar', $data);
			$this -> load -> view('Admin/tambah_jadwal', $data);
			$this -> load -> view('templates/footer');
		}else {
				
				$config['allowed_types'] = 'docx|doc|xls|xlsx|ppt|pptx|pdf';
				$config['max_size'] = 10000;
				$config['upload_path'] = 'assets/backend/berkasfile/jadwal/';

				$this -> load -> library('upload', $config);

				if($this -> upload -> do_upload('jadwalpengajar')){
					$jadwalpengajar = $this->upload->data();
            		$file = $jadwalpengajar['file_name'];
                    
		            $data = [
		            'tanggal' => date('Ymd'),
		            'filejadwal' => $file,
		            'deskripsijadwal' => $this->input->post('deskripsijadwal'),
		            'kurikulum' => $this->input->post('kurikulum')
           		];

           		$this ->Kpk-> insert('tbl_jadwal', $data);
           		$this -> session -> set_flashdata('message', '<div class="alert alert-success" role="alert"> Data berhasil ditambahkan! </div>');
				redirect('Admin/jadwalpengajar');

		}else{
			$this -> session -> set_flashdata('message', '<div class="alert alert-danger" role="alert">
				Tidak dapat menambah jadwal!</div>');
			redirect('Admin/tambah_jadwal');

		}
	}
}

	public function hapus_jadwal($id)
	{
		$this->Kpk->delete($id,'id_jadwal','tbl_jadwal');
		redirect('Admin/jadwalpengajar');
	}

	public function unduh_jadwal($id)
	{

		$file = 'assets/backend/berkasfile/jadwal/'.$id;
		force_download($file,NULL);
		    
	}
		

	


		public function modul()
	{
		
		$data['get'] = $this->Kpk->get('tbl_modul');	
		$data['title'] = 'Modul'; 
		$data['user'] = $this -> db -> get_where('users_kpk', ['email' => $this -> session -> userdata('email')]) -> row_array();
		
		$this -> load -> view('templates/header', $data);
		$this -> load -> view('templates/sidebar', $data);
		$this -> load -> view('templates/topbar', $data);
		$this -> load -> view('Admin/modul', $data);
		$this -> load -> view('templates/footer');
	}


	public function tambah_modul()
	{
		$data = array('get_kurikulum' => $this -> Kpk -> get_option());
		$data['title'] = 'Modul'; 
		$data['user'] = $this -> db -> get_where('users_kpk', ['email' => $this -> session -> userdata('email')]) -> row_array();
		
		$this -> form_validation -> set_rules('deskripsimodul', 'Deskripsi Modul', 'required|trim');
		$this -> form_validation -> set_rules('kurikulum', 'Kurikulum', 'required|trim');
		

		if ($this -> form_validation -> run()==false){
			$this -> load -> view('templates/header', $data);
			$this -> load -> view('templates/sidebar', $data);
			$this -> load -> view('templates/topbar', $data);
			$this -> load -> view('Admin/tambah_modul', $data);
			$this -> load -> view('templates/footer');
		}else {
				
				$config['allowed_types'] = 'docx|doc|xls|xlsx|ppt|pptx|pdf';
				$config['max_size'] = 10000;
				$config['upload_path'] = 'assets/backend/berkasfile/modul/';

				$this -> load -> library('upload', $config);

				if($this -> upload -> do_upload('modul')){
					$modul = $this -> upload -> data();
            		$file = $modul['file_name'];
                    
		            $data = [
		            'tanggal' => date('Ymd'),
		            'filemodul' => $file,
		            'deskripsimodul' => $this->input->post('deskripsimodul'),
		            'kurikulum' => $this->input->post('kurikulum')
           		];

           		$this ->Kpk-> insert('tbl_modul', $data);
           		$this -> session -> set_flashdata('message', '<div class="alert alert-success" role="alert"> Data berhasil ditambahkan! </div>');
				redirect('Admin/modul');
		}else{
			$this -> session -> set_flashdata('message', '<div class="alert alert-danger" role="alert">
				Tidak dapat menambah modul!</div>');
			redirect('Admin/tambah_modul');

		}
	}
}

		public function hapus_modul($id)
			{
				$this->Kpk->delete($id,'id_modul','tbl_modul');
				redirect('Admin/modul');
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
		
		$this -> load -> view('templates/header', $data);
		$this -> load -> view('templates/sidebar', $data);
		$this -> load -> view('templates/topbar', $data);
		$this -> load -> view('Admin/soal', $data);
		$this -> load -> view('templates/footer');
	}

	public function tambah_soal()
	{
		$data = array('get_kurikulum' => $this -> Kpk -> get_option());
		$data['title'] = 'Soal'; 
		$data['user'] = $this -> db -> get_where('users_kpk', ['email' => $this -> session -> userdata('email')]) -> row_array();
		
		$this -> form_validation -> set_rules('deskripsisoal', 'Deskripsi Soal', 'required|trim');
		$this -> form_validation -> set_rules('kurikulum', 'Kurikulum', 'required|trim');
		

		if ($this -> form_validation -> run()==false){
			$this -> load -> view('templates/header', $data);
			$this -> load -> view('templates/sidebar', $data);
			$this -> load -> view('templates/topbar', $data);
			$this -> load -> view('Admin/tambah_soal', $data);
			$this -> load -> view('templates/footer');
		}else {
				
				$config['allowed_types'] = 'docx|doc|xls|xlsx|ppt|pptx|pdf';
				$config['max_size'] = 10000;
				$config['upload_path'] = 'assets/backend/berkasfile/soal/';

				$this -> load -> library('upload', $config);

				if($this -> upload -> do_upload('soal')){
					$soal = $this -> upload -> data();
            		$file = $soal['file_name'];
                    
		            $data = [
		            'tanggal' => date('Ymd'),
		            'filesoal' => $file,
		            'deskripsisoal' => $this->input->post('deskripsisoal'),
		            'kurikulum' => $this->input->post('kurikulum')
           		];

           		$this ->Kpk-> insert('tbl_soal', $data);
           		$this -> session -> set_flashdata('message', '<div class="alert alert-success" role="alert"> Data berhasil ditambahkan! </div>');
				redirect('Admin/soal');
		}else{
			$this -> session -> set_flashdata('message', '<div class="alert alert-danger" role="alert">
				Tidak dapat menambah soal!</div>');
			redirect('Admin/tambah_soal');

		}
	}
}

		public function hapus_soal($id)
			{
				$this->Kpk->delete($id,'id_soal','tbl_soal');
				redirect('Admin/soal');
			}

		public function unduh_soal($id)
		{

		    $file = 'assets/backend/berkasfile/soal/'.$id;
		    force_download($file,NULL);
		    
			}

*/	


public function pengguna()
	{	
		$data['get'] = $this->Kpk->get('users_kpk');
		$data['title'] = 'Pengguna dan Hak Akses'; 
		$data['user'] = $this -> db -> get_where('users_kpk', ['email' => $this -> session -> userdata('email')]) -> row_array();
		
		if ($this -> form_validation -> run() == false)
		{
			$this -> load -> view('templates/header', $data);
			$this -> load -> view('templates/sidebar', $data);
			$this -> load -> view('templates/topbar', $data);
			$this -> load -> view('Admin/pengguna', $data);
			$this -> load -> view('templates/footer');
		}

		
	}

	public function aktifpengguna($id)
	{

		$this -> db -> set('status', 1);
		$this -> db -> where('id_user', $id);
		$this -> db -> update('users_kpk');
		redirect('Admin/pengguna');

	}



	public function hapus_pengguna($id)
	{
		$this->Kpk->delete($id,'id_user','users_kpk');
		redirect('Admin/pengguna');
	}

}


	



