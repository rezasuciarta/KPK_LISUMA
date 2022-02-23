<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller 
{
	public  function __construct()
	{
		parent::__construct();
		$this -> load -> library('form_validation');
		$this -> load -> model('Kpk');

	}

	public function index()
	{
		if ($this -> session -> userdata('email')){
			redirect('User');
		}

		$this -> form_validation -> set_rules('email', 'Email', 'trim|required|valid_email');
		$this -> form_validation -> set_rules('password', 'Password', 'trim|required');
		if($this -> form_validation -> run() == false) {
			$data['title'] = 'Login';
			$this -> load -> view('templates/auth_header', $data);
			$this -> load -> view('Auth/login');
			$this -> load -> view('templates/auth_footer');
		}else{
			//validasi sukses
			$this -> _login();
		}		
	}



	private function _login()
	{
		$email = $this -> input -> post('email');
		$password = sha1($this -> input -> post('password'));
		
		$login = $this->Kpk->login($email, $password);
		
		$user = $this -> db -> get_where('users_kpk', ['email' => $email]) -> row_array();

	if($user)
        {
          if($user['status'] == 1)
              {
                  if($login)
                    {
                      
                      $data = ['email' => $user['email'],
                                'level' => $user['level'],
                           
                              ];
                        
                              $this->session->set_userdata($data);

                                
                              if($user['level'] == 1)
                              {
                                redirect('Admin');
                              }else
                             {
                             	redirect('User');
                             }
                    }else
                    {

                       $this->session->set_flashdata('message','<div class ="alert alert-danger" role = "alert"> Password salah </div>');
                       redirect('Auth');
                       

                    }
              }else
              {
                $this->session->set_flashdata('message','<div class ="alert alert-danger" role = "alert"> Akun ini belum terverifikasi oleh Admin!</div>');
           redirect('Auth');
              }
        }else
        {
           $this->session->set_flashdata('message','<div class ="alert alert-danger" role = "alert"> Email Tidak Ada</div>');
           redirect('Auth');
        }
		
	}


	public function registration()
	{
		if ($this -> session -> userdata('email')){
			redirect('User');
		}

		
		$this -> form_validation -> set_rules('nama', 'Nama', 'required|trim');
		$this -> form_validation -> set_rules('nokta', 'No.KTA', 'required|trim|is_unique[users_kpk.nokta]',
			[
				'is_unique' => 'No.KTA ini sudah terdaftar!'
			]);
		$this -> form_validation -> set_rules('jurusan', 'Jurusan', 'required|trim');
		$this -> form_validation -> set_rules('notelepon', 'Nomor Telepon', 'required|trim');
		$this -> form_validation -> set_rules('email', 'Email', 'required|trim|valid_email|is_unique[users_kpk.email]', [
				'is_unique' => 'Email ini sudah terdaftar!'
		]);
		$this -> form_validation -> set_rules('password1','Password','required|min_length[6]|matches[password2]', [
				'matches' => 'Password tidak sama!',
				'min_length' => 'Password terlalu pendek!'
			]);
		$this -> form_validation -> set_rules('password2','Password','required|matches[password1]');
		

		if ($this -> form_validation -> run()==false){
			$data['title'] = 'Registration';
			$this -> load -> view('templates/auth_header', $data);
			$this -> load -> view('Auth/registration');
			$this -> load -> view('templates/auth_footer');
		}else {
			
			$data = [
				'nama' => $this -> input -> post('nama'),
				'nokta' => $this -> input -> post('nokta'),
				'jurusan' => $this -> input -> post('jurusan'),
				'notelepon' => $this -> input -> post('notelepon'),
				'email' => $this -> input -> post('email'),
				'image' => 'default.jpg',
				'password' => sha1($this -> input -> post('password1')),
				'level' => 2,
				'status' => 0,
				'tanggal' => date('Ymd')
			];

			$this -> db -> insert('users_kpk', $data);

			$this -> session -> set_flashdata('message', '<div class="alert alert-success" role="alert">
				Selamat data kamu sudah terdaftar, silahkan login.</div>');
			redirect('Auth');
		}
	}

	


	public function logout()
	{
		$this -> session -> unset_userdata('email');
		$this -> session -> unset_userdata('level');

		$this -> session -> set_flashdata('message', '<div class="alert alert-success" role="alert">
				Kamu sudah keluar akun</div>');
			redirect('Auth');
	}

}
