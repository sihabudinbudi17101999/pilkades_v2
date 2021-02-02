<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Setting extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		if ($this->session->userdata('status_users')!="ADMIN") {
			redirect('Auth','refresh');
		}
		$this->load->model('Model_data');
	}

	public function index()
	{
		$data['title'] = ' | Setting Wilayah';
		$data['provinsi'] = $this->db->get('provinsi')->result();
		$data['datas'] = $this->Model_data->tampilwilayah();
		$this->load->view('template/header_ba', $data);
		$this->load->view('template/sidebar_ba');
		$this->load->view('backend/setting/data', $data);
		$this->load->view('template/footer_ba');
	}

	public function get_provinsi()
	{
		$id = $this->input->post('id_prov');
		$this->db->where('id_prov', $id);
		$data = $this->db->get('provinsi');
		if ($data->num_rows() > 0) {
			$list = array();
			$key= 0;
			foreach ($data->result() as $val) {
				echo '<option value="'.$val->id.'">'.$val->nama.'</option>';
			}

			
		} else {
			echo "data tidak ditemukan";
		}
		
	}

	public function get_kota()
	{
		$id = $this->input->post('id_prov');
		$this->db->where('id_prov', $id);
		$data = $this->db->get('kota');
		if ($data->num_rows() > 0) {
			$list = array();
			$key= 0;
			foreach ($data->result() as $val) {
				echo '<option value="'.$val->id_kab.'">'.$val->nama.'</option>';
			}

			
		} else {
			echo "";
		}
		
	}


	public function get_kecamatan()
	{
		$id = $this->input->post('id_kota');
		$this->db->where('id_kab', $id);
		$data = $this->db->get('kecamatan');
		if ($data->num_rows() > 0) {
			$list = array();
			$key= 0;
			foreach ($data->result() as $val) {
				echo '<option value="'.$val->id_kec.'">'.$val->nama.'</option>';
			}

			
		} else {
			echo "";
		}
		
	}

	public function get_kelurahan()
	{
		$id = $this->input->post('id_kota');
		$this->db->where('id_kec', $id);
		$data = $this->db->get('kelurahan');
		if ($data->num_rows() > 0) {
			$list = array();
			$key= 0;
			foreach ($data->result() as $val) {
				echo '<option value="'.$val->id_kel.'">'.$val->nama.'</option>';
			}

			
		} else {
			echo "gada";
		}
		
	}

	public function simpan()
	{
		$save_data = [
			'kota'=> $this->input->post('kota'),
			'kecamatan'=> $this->input->post('kecamatan'),
			'desa'=> $this->input->post('kelurahan'),
			'kode_seting'=> $this->input->post('kode_setting')
		];


		$this->db->insert('tb_set_wilayah', $save_data);
		$save = $this->db->insert_id();
		if ($save) {
			echo "<script>alert('Data berhasil di simpan');</script>";
			redirect(base_url('setting'));
		}


	}

}

/* End of file Setting.php */
/* Location: ./application/controllers/Setting.php */