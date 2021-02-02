<?php 



/**
 * 
 */
class Data extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
		if ($this->session->userdata('status_users')!="ADMIN") {
			redirect('Auth','refresh');
		}
		$this->load->model('Model_data');
	}

	//data desa
	// public function desa()
	// {
	// 	$data['title'] = ' | Data Desa';
	// 	$data['datas'] = $this->Model_data->tampildesa();
	// 	$this->load->view('template/header_ba', $data);
	// 	$this->load->view('template/sidebar_ba');
	// 	$this->load->view('backend/desa/data', $data);
	// 	$this->load->view('template/footer_ba');
	// }
	// public function tambah_desa()
	// {
	// 	$data['title'] = ' | Form Tambah Data Desa';
	// 	$this->load->view('template/header_ba', $data);
	// 	$this->load->view('template/sidebar_ba');
	// 	$this->load->view('backend/desa/tambah');
	// 	$this->load->view('template/footer_ba');
	// }
	// public function save_desa()
	// {
	// 	$this->form_validation->set_rules('nama_desa', 'Nama Desa', 'trim|required');
	// 	if ($this->form_validation->run() == FALSE) {
	// 		redirect('Data/tambah_desa','refresh');
	// 	} else {
	// 		$this->Model_data->savedesa();
	// 	}
	// }
	// public function edit_desa($id_desa)
	// {
	// 	$where = array('id_desa' => $id_desa );
	// 	$data['title'] = ' | Form Edit Data Desa';
	// 	$data['datas'] = $this->Model_data->editdesa($where);
	// 	$this->load->view('template/header_ba', $data);
	// 	$this->load->view('template/sidebar_ba');
	// 	$this->load->view('backend/desa/edit',$data);
	// 	$this->load->view('template/footer_ba');
	// }
	// public function update_desa($id_desa)
	// {
	// 	$where = array('id_desa' => $id_desa);
	// 	$this->Model_data->updatedesa($where);
	// }
	// public function hapus_desa($id_desa)
	// {
	// 	$where = array('id_desa' => $id_desa);
	// 	$this->Model_data->hapusdesa($where);
	// }


	//wilayah kec & des
	public function wilayah()
	{
		$data['title'] = ' | Data Wilayah';
		$data['datas'] = $this->Model_data->tampilwilayah();
		$this->load->view('template/header_ba', $data);
		$this->load->view('template/sidebar_ba');
		$this->load->view('backend/wilayah/data', $data);
		$this->load->view('template/footer_ba');
	}
	public function tambah_wilayah()
	{
		$data['title'] = ' | Form Tambah Data Wilayah';
		$this->load->view('template/header_ba', $data);
		$this->load->view('template/sidebar_ba');
		$this->load->view('backend/wilayah/tambah');
		$this->load->view('template/footer_ba');
	}
	public function save_wilayah()
	{
		$this->form_validation->set_rules('kecamatan', 'Kecamatan', 'trim|required');
		$this->form_validation->set_rules('desa', 'Kecamatan', 'trim|required');
		if ($this->form_validation->run() == FALSE) {
			redirect('Data/tambah_wilayah','refresh');
		} else {
			$this->Model_data->savewilayah();
		}
	}
	public function edit_wilayah($id_wilayah)
	{
		$where = array('id_wilayah' => $id_wilayah);
		$data['title'] = ' | Form Edit Data Wilayah';
		$data['datas'] = $this->Model_data->editwilayah($where);
		// print_r($data);
		// die();
		$this->load->view('template/header_ba', $data);
		$this->load->view('template/sidebar_ba');
		$this->load->view('backend/wilayah/edit',$data);
		$this->load->view('template/footer_ba');
	}
	public function update_wilayah($id_wilayah)
	{
		$where = array('id_wilayah' => $id_wilayah);
		$this->Model_data->updatewilayah($where);
	}
	public function hapus_wilayah($id_wilayah)
	{
		$where = array('id_wilayah' => $id_wilayah);
		$this->Model_data->hapuswilayah($where);
	}




	//data kecamatan 
	// public function kecamatan()
	// {
	// 	$data['title'] = ' | Data Kecamatan';
	// 	$data['datas'] = $this->Model_data->tampilkecamatan();
	// 	$this->load->view('template/header_ba', $data);
	// 	$this->load->view('template/sidebar_ba');
	// 	$this->load->view('backend/kecamatan/data', $data);
	// 	$this->load->view('template/footer_ba');
	// }
	// public function tambah_kecamatan()
	// {
	// 	$data['title'] = ' | Form Tambah Data Kecamatan';
	// 	$this->load->view('template/header_ba', $data);
	// 	$this->load->view('template/sidebar_ba');
	// 	$this->load->view('backend/kecamatan/tambah');
	// 	$this->load->view('template/footer_ba');
	// }
	// public function save_kecamatan()
	// {
	// 	$this->form_validation->set_rules('nama_kecamatan', 'Kecamatan', 'trim|required');
	// 	if ($this->form_validation->run() == FALSE) {
	// 		redirect('Data/tambah_kecamatan','refresh');
	// 	} else {
	// 		$this->Model_data->savekecamatan();
	// 	}
	// }
	// public function edit_kecamatan($id_kecamatan)
	// {
	// 	$where = array('id_kecamatan' => $id_kecamatan);
	// 	$data['title'] = ' | Form Edit Data Kecamatan';
	// 	$data['datas'] = $this->Model_data->editkecamatan($where);
	// 	// print_r($data);
	// 	// die();
	// 	$this->load->view('template/header_ba', $data);
	// 	$this->load->view('template/sidebar_ba');
	// 	$this->load->view('backend/kecamatan/edit',$data);
	// 	$this->load->view('template/footer_ba');
	// }
	// public function update_kecamatan($id_kecamatan)
	// {
	// 	$where = array('id_kecamatan' => $id_kecamatan);
	// 	$this->Model_data->updatekecamatan($where);
	// }
	// public function hapus_kecamatan($id_kecamatan)
	// {
	// 	$where = array('id_kecamatan' => $id_kecamatan);
	// 	$this->Model_data->hapuskecamatan($where);
	// }


	//data kota
	/*public function kota()
	{
		$data['title'] = ' | Data Desa';
		$data['datas'] = $this->Model_data->tampilkota();
		$this->load->view('template/header_ba', $data);
		$this->load->view('template/sidebar_ba');
		$this->load->view('backend/kota/data', $data);
		$this->load->view('template/footer_ba');
	}
	public function tambah_kota()
	{
		$data['title'] = ' | Form Tambah Data Kota';
		$this->load->view('template/header_ba', $data);
		$this->load->view('template/sidebar_ba');
		$this->load->view('backend/kota/tambah');
		$this->load->view('template/footer_ba');
	}
	public function save_kota()
	{
		$this->form_validation->set_rules('nama_kota', 'Nama Kota', 'trim|required');
		if ($this->form_validation->run() == FALSE) {
			redirect('Data/tambah_kota','refresh');
		} else {
			$this->Model_data->savekota();
		}
	}
	public function edit_kota($id_kota)
	{
		$where = array('id_kota' => $id_kota);
		$data['title'] = ' | Form Edit Data Kota';
		$data['datas'] = $this->Model_data->editkota($where);
		$this->load->view('template/header_ba', $data);
		$this->load->view('template/sidebar_ba');
		$this->load->view('backend/kota/edit',$data);
		$this->load->view('template/footer_ba');
	}
	public function update_kota($id_kota)
	{
		$where = array('id_kota' => $id_kota);
		$this->Model_data->updatekota($where);
	}
	public function hapus_kota($id_kota)
	{
		$where = array('id_kota' => $id_kota);
		$this->Model_data->hapuskota($where);
	}*/

	//data provinsi
	/*public function provinsi()
	{
		$data['title'] = ' | Data Provinsi';
		$data['datas'] = $this->Model_data->tampilprovinsi();
		$this->load->view('template/header_ba', $data);
		$this->load->view('template/sidebar_ba');
		$this->load->view('backend/provinsi/data', $data);
		$this->load->view('template/footer_ba');
	}
	public function tambah_provinsi()
	{
		$data['title'] = ' | Form Tambah Data Provinsi';
		$this->load->view('template/header_ba', $data);
		$this->load->view('template/sidebar_ba');
		$this->load->view('backend/provinsi/tambah');
		$this->load->view('template/footer_ba');
	}
	public function save_provinsi()
	{
		$this->form_validation->set_rules('nama_provinsi', 'Nama Provinsi', 'trim|required');
		if ($this->form_validation->run() == FALSE) {
			redirect('Data/tambah_provinsi','refresh');
		} else {
			$this->Model_data->saveprovinsi();
		}
	}
	public function edit_provinsi($id_provinsi)
	{
		$where = array('id_provinsi' => $id_provinsi);
		$data['title'] = ' | Form Edit Data Provinsi';
		$data['datas'] = $this->Model_data->editprovinsi($where);
		$this->load->view('template/header_ba', $data);
		$this->load->view('template/sidebar_ba');
		$this->load->view('backend/provinsi/edit',$data);
		$this->load->view('template/footer_ba');
	}
	public function update_provinsi($id_provinsi)
	{
		$where = array('id_provinsi' => $id_provinsi);
		$this->Model_data->updateprovinsi($where);
	}
	public function hapus_provinsi($id_provinsi)
	{
		$where = array('id_provinsi' => $id_provinsi);
		$this->Model_data->hapusprovinsi($where);
	}*/

	//data kategori
	public function kategori()
	{
		$data['title'] = ' | Data Provinsi';
		$data['datas'] = $this->Model_data->tampilkategori();
		$this->load->view('template/header_ba', $data);
		$this->load->view('template/sidebar_ba');
		$this->load->view('backend/kategori/data', $data);
		$this->load->view('template/footer_ba');
	}
	public function tambah_kategori()
	{
		$data['title'] = ' | Form Tambah Data Kategori';
		$this->load->view('template/header_ba', $data);
		$this->load->view('template/sidebar_ba');
		$this->load->view('backend/kategori/tambah');
		$this->load->view('template/footer_ba');
	}
	public function save_kategori()
	{
		$this->form_validation->set_rules('nama_kategori', 'Nama Kategori', 'trim|required');
		$this->form_validation->set_rules('jenis_kategori', 'Jenis Kategori', 'trim|required');
		if ($this->form_validation->run() == FALSE) {
			redirect('Data/tambah_kategori','refresh');
		} else {
			$this->Model_data->savekategori();
		}
	}
	public function edit_kategori($id_kategori)
	{
		$where = array('id_kategori' => $id_kategori);
		$data['title'] = ' | Form Edit Data Kategori';
		$data['datas'] = $this->Model_data->editkategori($where);
		$this->load->view('template/header_ba', $data);
		$this->load->view('template/sidebar_ba');
		$this->load->view('backend/kategori/edit',$data);
		$this->load->view('template/footer_ba');
	}
	public function update_kategori($id_kategori)
	{
		$where = array('id_kategori' => $id_kategori);
		$this->Model_data->updatekategori($where);
	}
	public function hapus_kategori($id_kategori)
	{
		$where = array('id_kategori' => $id_kategori);
		$this->Model_data->hapuskategori($where);
	}

	//data calon 
	public function calon()
	{
		$data['title'] = ' | Data Calon Legislatif';
		$data['datas'] = $this->Model_data->tampilcalon();
		$this->load->view('template/header_ba', $data);
		$this->load->view('template/sidebar_ba');
		$this->load->view('backend/calon/data', $data);
		$this->load->view('template/footer_ba');
	}
	public function tambah_calon()
	{
		$data['title'] = ' | Form Tambah Data Calon';
		$this->load->view('template/header_ba', $data);
		$this->load->view('template/sidebar_ba');
		$this->load->view('backend/calon/tambah');
		$this->load->view('template/footer_ba');
	}
	public function save_calon()
	{
		// $this->form_validation->set_rules('id_user', 'Petugas', 'trim|required');
		// $this->form_validation->set_rules('id_kecamatan', 'Kecamatan', 'trim|required');
		// $this->form_validation->set_rules('id_desa', 'Desa', 'trim|required');
		// $this->form_validation->set_rules('id_tps', 'Tps', 'trim|required');
		// $this->form_validation->set_rules('skor', 'Skor', 'trim|required');
		// $this->form_validation->set_rules('no_urut', 'No Urut', 'trim|required');
		$this->form_validation->set_rules('calon', 'Nama Calon', 'trim|required');
		$this->form_validation->set_rules('jk', 'Jenis Kelamin', 'trim|required');
		$this->form_validation->set_rules('kecamatan', 'Kecamatan', 'trim|required');
		$this->form_validation->set_rules('desa', 'Desa', 'trim|required');
		$this->form_validation->set_rules('nomor', 'No Urut', 'trim|required');
		$this->form_validation->set_rules('status', 'Status', 'trim|required');
		$this->form_validation->set_rules('nw', 'Nomor Wilayah', 'trim|required');
		// $this->form_validation->set_rules('foto', 'Foto', 'trim|required');
		if ($this->form_validation->run() == FALSE) {
			redirect('Data/tambah_calon','refresh');
		} else {
			$this->Model_data->savecalon();
		}
	}
	public function edit_calon($id_calon)
	{
		$where = array('id_calon' => $id_calon);
		$data['title'] = ' | Form Edit Data Calon';
		$data['datas'] = $this->Model_data->editcalon($where);
		$this->load->view('template/header_ba', $data);
		$this->load->view('template/sidebar_ba');
		$this->load->view('backend/calon/edit',$data);
		$this->load->view('template/footer_ba');
	}
	public function update_calon($id_calon)
	{
		$where = array('id_calon' => $id_calon);
		$this->Model_data->updatecalon($where);
	}
	public function hapus_calon($id_calon)
	{
		$where = array('id_calon' => $id_calon);
		$this->Model_data->hapuscalon($where);
	}

	//data hasil perhitungan
	public function perhitungan_suara()
	{
		$data['title'] = ' | Data Perhitungan Suara';
		$data['datas'] = $this->Model_data->tampilperhitungansuara();
		$data['tampilwisk'] = $this->Model_data->tampilwisk();
		$data['tampilwisd'] = $this->Model_data->tampilwisd();
		$this->load->view('template/header_ba', $data);
		$this->load->view('template/sidebar_ba');
		$this->load->view('backend/perhitungan/suara', $data);
		$this->load->view('template/footer_ba');
	}
	public function tambah_perhitungan_suara()
	{
		$data['title'] = ' | Form Tambah Data Perhitungan Suara';
		$data['tampilwisk'] = $this->Model_data->tampilwisk();
		$data['tampilwisd'] = $this->Model_data->tampilwisd();
		$this->load->view('template/header_ba', $data);
		$this->load->view('template/sidebar_ba');
		$this->load->view('backend/perhitungan/tambahs');
		$this->load->view('template/footer_ba');
	}
	public function save_perhitungan_suara()
	{
		$this->form_validation->set_rules('id_calon', 'Nama Calon', 'trim|required');
		$this->form_validation->set_rules('id_wilayah', 'Wilayah', 'trim|required');
		$this->form_validation->set_rules('tps', 'Tps', 'trim|required');
		$this->form_validation->set_rules('jumlah_suara', 'Jumlah Suara', 'trim|required');
		if ($this->form_validation->run() == FALSE) {
			redirect('Data/tambah_perhitungan_suara','refresh');
		} else {
			$this->Model_data->saveperhitungansuara();
		}
	}
	public function edit_hasil_perhitungan($id_hasil)
	{
		$where = array('id_hasil' => $id_hasil);
		$data['tampilwisk'] = $this->Model_data->tampilwisk();
		$data['tampilwisd'] = $this->Model_data->tampilwisd();
		$data['datas'] = $this->Model_data->tampiledithasilh($where);
		// echo "<pre>"; print_r($data); die(); echo "</pre>";
		$data['title'] = ' | Form Edit Data Perhitungan Suara';
		$this->load->view('template/header_ba', $data);
		$this->load->view('template/sidebar_ba');
		$this->load->view('backend/perhitungan/edits',$data);
		$this->load->view('template/footer_ba');

	}
	public function update_perhitungan_suara($id_hasil)
	{
		$where = array('id_hasil' => $id_hasil);
		$this->Model_data->updatehasilh($where);
	}
	public function hapus_perhitungan_suara($id_hasil)
	{
		$where = array('id_hasil' => $id_hasil);
		$this->Model_data->hapusperhitungansuara($where);
	}
	// public function edit_calon($id_calon)
	// {
	// 	$where = array('id_calon' => $id_calon);
	// 	$data['title'] = ' | Form Edit Data Calon';
	// 	$data['datas'] = $this->Model_data->editcalon($where);
	// 	$this->load->view('template/header_ba', $data);
	// 	$this->load->view('template/sidebar_ba');
	// 	$this->load->view('backend/calon/edit',$data);
	// 	$this->load->view('template/footer_ba');
	// }
	// public function update_calon($id_calon)
	// {
	// 	$where = array('id_calon' => $id_calon);
	// 	$this->Model_data->updatecalon($where);
	// }
	// public function hapus_calon($id_calon)
	// {
	// 	$where = array('id_calon' => $id_calon);
	// 	$this->Model_data->hapuscalon($where);
	// }


	//data tps
	public function tps()
	{
		$data['title'] = ' | Data Tps';
		$data['datas'] = $this->Model_data->tampiltps();
		$this->load->view('template/header_ba', $data);
		$this->load->view('template/sidebar_ba');
		$this->load->view('backend/tps/data', $data);
		$this->load->view('template/footer_ba');
	}
	public function tambah_tps()
	{
		$data['title'] = ' | Form Tambah Data Tps';
		$this->load->view('template/header_ba', $data);
		$this->load->view('template/sidebar_ba');
		$this->load->view('backend/tps/tambah');
		$this->load->view('template/footer_ba');
	}
	public function save_tps()
	{
		$this->form_validation->set_rules('tps', 'Tps', 'trim|required');
		if ($this->form_validation->run() == FALSE) {
			redirect('Data/tambah_tps','refresh');
		} else {
			$this->Model_data->savetps();
		}
	}
	public function edit_tps($id_tps)
	{
		$where = array('id_tps' => $id_tps);
		$data['title'] = ' | Form Edit Data Tps';
		$data['datas'] = $this->Model_data->edittps($where);
		$this->load->view('template/header_ba', $data);
		$this->load->view('template/sidebar_ba');
		$this->load->view('backend/tps/edit',$data);
		$this->load->view('template/footer_ba');
	}
	public function update_tps($id_tps)
	{
		$where = array('id_tps' => $id_tps);
		$this->Model_data->updatetps($where);
	}
	public function hapus_tps($id_tps)
	{
		$where = array('id_tps' => $id_tps);
		$this->Model_data->hapustps($where);
	}


	//user data petugas
	public function petugas()
	{
		$data['title'] = ' | Data Petugas';
		$data['datas'] = $this->Model_data->tampiltpetugas();
		$this->load->view('template/header_ba', $data);
		$this->load->view('template/sidebar_ba');
		$this->load->view('backend/petugas/data', $data);
		$this->load->view('template/footer_ba');
	}
	public function tambah_petugas()
	{
		$data['title'] = ' | Form Tambah Data Petugas';
		$data['wc'] = $this->Model_data->tampilwc();
		// print_r($data);die();
		$data['wp'] = $this->Model_data->tampilwp();
		// $data['dp'] = $this->Model_data->tampildp();s
		$this->load->view('template/header_ba', $data);
		$this->load->view('template/sidebar_ba');
		$this->load->view('backend/petugas/tambah');
		$this->load->view('template/footer_ba');
	}
	public function save_petugas()
	{
		$this->form_validation->set_rules('nama', 'Petugas', 'trim|required');
		$this->form_validation->set_rules('username', 'username', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		$this->form_validation->set_rules('id_calon', 'Wilayah', 'trim|required');
		$this->form_validation->set_rules('id_wilayah', 'Wilayah', 'trim|required');
		$this->form_validation->set_rules('status_users', 'Status Level', 'trim|required');
		$this->form_validation->set_rules('status_akun', 'Status Akun', 'trim|required');
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('pesan', '<div class="alert alert-danger">Gagal Input Petugas.!</div>');
			redirect('Data/tambah_petugas','refresh');
		} else {
			$this->Model_data->savepetugas();
		}
	}
	public function edit_petugas($id_user)
	{
		$where = array('id_user' => $id_user);
		$data['title'] = ' | Form Edit Data Petugas';
		$data['datas'] = $this->Model_data->editpetugas($where);
		$data['w'] = $this->Model_data->tampilw();
		$this->load->view('template/header_ba', $data);
		$this->load->view('template/sidebar_ba');
		$this->load->view('backend/petugas/edit',$data);
		$this->load->view('template/footer_ba');
	}
	public function update_petugas($id_user)
	{
		$where = array('id_user' => $id_user);
		$this->Model_data->updatepetugas($where);
	}
	public function hapus_petugas($id_user)
	{
		$where = array('id_user' => $id_user);
		$this->Model_data->hapuspetugas($where);
	}	

}