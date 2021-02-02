<?php 


/**
 * 
 */
class P extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
		if ($this->session->userdata('status_users')!="PETUGAS") {
			redirect('Auth','refresh');
		}
		$this->load->model('Model_data');
	}
	public function data_perhitungan_calon()
	{
		$data['title'] = ' | Data Perhitungan Suara';
		$data['datas'] = $this->Model_data->tampilperhitungansuara();
		$this->load->view('template/header_ba', $data);
		$this->load->view('template/sidebar_ba');
		$this->load->view('backend/perhitungan/suara', $data);
		$this->load->view('template/footer_ba');
	}

	public function tambah_perhitungan_suaraa()
	{
		$data['title'] = ' | Form Tambah Data Perhitungan Suara';
		$data['datasw'] = $this->Model_data->tampilow();
		$data['tampilwiskp'] = $this->Model_data->tampilwiskp();
		// echo "<pre>"; print_r($data['tampilwiskp']); die(); echo "</pre>";
		$data['tampilwisdp'] = $this->Model_data->tampilwisdp();
		$this->load->view('template/header_ba', $data);
		$this->load->view('template/sidebar_ba');
		$this->load->view('backend/perhitungan/tambahs');
		$this->load->view('template/footer_ba');
	}
	public function save_perhitungan_suaraa()
	{
		$this->form_validation->set_rules('id_calon', 'Nama Calon', 'trim|required');
		$this->form_validation->set_rules('id_wilayah', 'Wilayah', 'trim|required');
		$this->form_validation->set_rules('tps', 'Tps', 'trim|required');
		$this->form_validation->set_rules('jumlah_suara', 'Jumlah Suara', 'trim|required');
		if ($this->form_validation->run() == FALSE) {
			redirect('P/tambah_perhitungan_suaraa','refresh');
		} else {
			$this->Model_data->saveperhitungansuara();
		}
	}


	public function edit_hasil_perhitungann($id_hasil)
	{
		$where = array('id_hasil' => $id_hasil);
		$data['datas'] = $this->Model_data->tampiledithasilh($where);
		$data['tampilwisk'] = $this->Model_data->tampilwisk();
		$data['tampilwisd'] = $this->Model_data->tampilwisd();
		$data['datasw'] = $this->Model_data->tampilow();
		$data['title'] = ' | Form Edit Data Perhitungan Suara';
		$this->load->view('template/header_ba', $data);
		$this->load->view('template/sidebar_ba');
		$this->load->view('backend/perhitungan/edits',$data);
		$this->load->view('template/footer_ba');

	}
	public function update_perhitungan_suaraa($id_hasil)
	{
		$where = array('id_hasil' => $id_hasil);
		$this->Model_data->updatehasilh($where);
	}
	public function hapus_perhitungan_suaraa($id_hasil)
	{
		$where = array('id_hasil' => $id_hasil);
		$this->Model_data->hapusperhitungansuara($where);
	}

	/*public function tambah_skorsuara()
	{
		$data['title'] = ' | Form Tambah Data Perhitungan Suara';
		$this->load->view('template/header_ba', $data);
		$this->load->view('template/sidebar_ba');
		$this->load->view('backend/perhitungan/tambahs');
		$this->load->view('template/footer_ba');
	}
	public function save_perhitungan_suara()
	{
		$this->form_validation->set_rules('id_calon', 'Nama Calon', 'trim|required');
		$this->form_validation->set_rules('id_desa', 'Desa', 'trim|required');
		$this->form_validation->set_rules('id_tps', 'Tps', 'trim|required');
		$this->form_validation->set_rules('waktu_pelaksanaan', 'Waktu Pelaksanaan', 'trim|required');
		$this->form_validation->set_rules('skor', 'Skor', 'trim|required');
		if ($this->form_validation->run() == FALSE) {
			redirect('P/tambah_skorsuara','refresh');
		} else {
			$this->Model_data->saveperhitungansuara();
		}
	}
	public function edit_skorsuara($id_hasil)
	{
		$where = array('id_hasil' => $id_hasil);
		$data['datas'] = $this->Model_data->tampiledithasilh($where);
		$data['title'] = ' | Form Edit Data Perhitungan Suara';
		$this->load->view('template/header_ba', $data);
		$this->load->view('template/sidebar_ba');
		$this->load->view('backend/perhitungan/edits',$data);
		$this->load->view('template/footer_ba');

	}
	public function update_tambah_skorsuara($id_hasil)
	{
		$where = array('id_hasil' => $id_hasil);
		$this->Model_data->updatehasilh($where);
	}*/
}