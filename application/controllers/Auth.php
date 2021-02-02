<?php 
defined('BASEPATH') || exit ('No direct script access allowed');

class Auth extends CI_controller
{
	public function __construct()
	{
		parent:: __construct();
		$this->load->library('form_validation');
		$this->load->model('Model_auth');
		
	}

	public function index()
	{
		if ($this->session->userdata('username'))
		{
			if ($this->session->userdata('status_users')=="ADMIN") 
			{
				// echo "Ok admin";
				redirect('Data/calon');
			}elseif ($this->session->userdata('status_users')=="PETUGAS") {
				redirect('P/data_perhitungan_calon','refresh');
			}
		}
		

		$this->form_validation->set_message('required','kolom {field} harus diisi');
		$this->form_validation->set_rules('username','username','trim|required');
		$this->form_validation->set_rules('password','Password','trim|required');

		if ($this->form_validation->run() ==false )
		 {
			$data['title'] = 'Halaman Login';
			$this->load->view('frontend/auth/login',$data);
		}
		else
		{
			$this->_login();
		}
		
	}

//======================
	//login all users

	private function _login()
	{
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		$users = $this->db->get_where('tb_users', ['username'=> $username])->row_array();
		if ($users) 
		{
			//jika usernya aktif
			if ($users['status_akun'] =="AKTIF") 
			{
				if(password_verify($password, $users['password']))
				{
					$petugas = $this->db->get_where('tb_users', ['id_user'=>$users['id_user']])->row_array();
					$petugasw = $this->db->get_where('tb_calon', ['nw'=>$users['id_calon']])->row_array();
					$data = [
							 'username'=> $users['username'],
							 'nama'=> $petugas['nama'],
							 'status_users'=> $users['status_users'],
							 'id_user'	=> $users['id_user'],
							 'id_calon'=> $petugasw['id_calon']
							];
							// print_r($data);
							// die();
							$this->session->set_userdata($data);
							
							if ($users['status_users']=="ADMIN") 
							{
								// echo "Ok Admin";
								redirect('Data/calon');
							}
							elseif ($this->session->userdata('status_users')=="PETUGAS") 
							{
									redirect('P/data_perhitungan_calon','refresh');
							}
				}
				else
				{
					$this->session->set_flashdata('pesan','<div  class="alert alert-danger" role="alert">password salah</div>');
				redirect('Auth');				
				}
			}
			else
			{
				$this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert">Akun Anda Blum Diaktifkan</div>');
				redirect('Auth');		
			}
		}
		else
		{
			$this->session->set_flashdata('pesan','<div class="alert alert-danger" role="alert">username blum terdaftar daftar</div>');
						redirect('Auth');
		}
	}






//========================	
//logout
	public function logout()
	{

		if ($this->session->userdata('username'))
		{
				$this->session->unset_userdata('username');
				$this->session->unset_userdata('status_users');
				$this->session->set_flashdata('pesan','<div class="alert alert-success" role="alert">berhasil keluar</div>');
				redirect('Auth');
		}

		

	}

	public function regist_ss()
	{
		$data['title'] = 'Halaman Registrasi';
		$this->load->view('frontend/auth/registrasi',$data);
	}
	public function saves_ad()
	{
		$this->Model_auth->save_adds();
	}
	
	

//ahir login admin




}
