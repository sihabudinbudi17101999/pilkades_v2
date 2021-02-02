<?php 

/**
 * 
 */
class Model_auth extends CI_Model
{

	public function save_adds()
	{
		$this->form_validation->set_message('required','Kolom {field} harus diisi');

		$this->form_validation->set_rules('username','username','required|trim|is_unique[tb_users.username]',
			[
				'is_unique'=> 'username sudah terdaftar, coba masukkan username baru.',
				'required'=> 'kolom {field} harus diisi']);
		$this->form_validation->set_rules('password1','Password','required|trim|min_length[3]|matches[password2]',[
			'matches'=> 'password tidak sama',
			'min_length'=> 'password terlalu pendek']);
		$this->form_validation->set_rules('password2','Password','required|trim|matches[password1]');
		if ($this->form_validation->run()==false) {
			
		redirect('Auth/regist_ss','refresh');
		}
		else{

			$data = [
						//true untuk menghindari xxs chros
						
						'username'=>htmlspecialchars($this->input->post('username')),
						'password'=>password_hash($this->input->post('password1'), PASSWORD_DEFAULT),
						'status_users' =>1,
						'status_akun'=>1,
						'id_calon'=>0
						];
						// print_r($data);
						// die();
						
						$this->db->insert('tb_users', $data);

						$this->session->set_flashdata('pesan','<div class="alert alert-success" role="alert">Registrasi berhasil!!.. Silahkan Login</div>');
						redirect('Auth');
		}
	}

}