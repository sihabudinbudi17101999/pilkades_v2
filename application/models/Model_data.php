<?php 


/**
 * 
 */
class Model_data extends CI_Model
{
	
	//data desa
	// public function tampildesa()
	// {
	// 	return $this->db->get('tb_desa')->result();
	// }
	// public function savedesa()
	// {
	// 	$data = [
	// 				'nama_desa'=>$this->input->post('nama_desa')
	// 			];
	// 			$this->db->insert('tb_desa', $data);
	// 			$this->session->set_flashdata('pesan', '<div class="alert alert-success">Berhasil Menambah Data Desa.!</div>');
	// 			redirect('Data/desa','refresh');

	// }
	// public function editdesa($where)
	// {
	// 	$this->db->where($where);
	// 	return $this->db->get('tb_desa', $where)->result();
	// }
	// public function updatedesa($where)
	// {
	// 	$data = array(
	// 					'desa' => $this->input->post('desa')
	// 				);
	// 	$this->db->where($where);
	// 	$this->db->update('tb_desa', $data);
	// 	$this->session->set_flashdata('pesan', '<div class="alert alert-success">Berhasil Perbarui Data Desa.!</div>');
	// 			redirect('Data/desa','refresh');
	// }
	// public function hapusdesa($where)
	// {
	// 	$this->db->where($where);
	// 	$this->db->delete('tb_desa');
	// 	$this->session->set_flashdata('pesan', '<div class="alert alert-success">Berhasil Menghapus Data Desa.!</div>');
	// 	redirect('Data/desa','refresh');
	// }

	//data kota
/*	public function tampilkota()
	{
		return $this->db->get('tb_kota')->result();
	}
	public function savekota()
	{
		$data = [
					'nama_kota'=>$this->input->post('nama_kota')
				];
				$this->db->insert('tb_kota', $data);
				$this->session->set_flashdata('pesan', '<div class="alert alert-success">Berhasil Menambah Data Kota.!</div>');
				redirect('Data/kota','refresh');

	}
	public function editkota($where)
	{
		$this->db->where($where);
		return $this->db->get('tb_kota', $where)->result();
	}
	public function updatekota($where)
	{
		$data = array('nama_kota' => $this->input->post('nama_kota')
					);
		$this->db->where($where);
		$this->db->update('tb_kota', $data);
		$this->session->set_flashdata('pesan', '<div class="alert alert-success">Berhasil Perbarui Data Kota.!</div>');
				redirect('Data/kota','refresh');
	}
	public function hapuskota($where)
	{
		$this->db->where($where);
		$this->db->delete('tb_kota');
		$this->session->set_flashdata('pesan', '<div class="alert alert-success">Berhasil Menghapus Data Kota.!</div>');
		redirect('Data/kota','refresh');
	}
*/
	//data provinsi
	/*public function tampilprovinsi()
	{
		return $this->db->get('tb_provinsi')->result();
	}
	public function saveprovinsi()
	{
		$data = [
					'nama_provinsi'=>$this->input->post('nama_provinsi')
				];
				$this->db->insert('tb_provinsi', $data);
				$this->session->set_flashdata('pesan', '<div class="alert alert-success">Berhasil Menambah Data Provinsi.!</div>');
				redirect('Data/provinsi','refresh');

	}
	public function editprovinsi($where)
	{
		$this->db->where($where);
		return $this->db->get('tb_provinsi', $where)->result();
	}
	public function updateprovinsi($where)
	{
		$data = array('nama_provinsi' => $this->input->post('nama_provinsi')
					);
		$this->db->where($where);
		$this->db->update('tb_provinsi', $data);
		$this->session->set_flashdata('pesan', '<div class="alert alert-success">Berhasil Perbarui Data Provinsi.!</div>');
				redirect('Data/provinsi','refresh');
	}
	public function hapusprovinsi($where)
	{
		$this->db->where($where);
		$this->db->delete('tb_provinsi');
		$this->session->set_flashdata('pesan', '<div class="alert alert-success">Berhasil Menghapus Data Provinsi.!</div>');
		redirect('Data/provinsi','refresh');
	}
*/
	//data kategori
	public function tampilkategori()
	{
		return $this->db->get('tb_kategori')->result();
	}
	public function savekategori()
	{
		$data = [
					'nama_kategori'=>$this->input->post('nama_kategori'),
					'jenis_kategori'=>$this->input->post('jenis_kategori')
				];
				$this->db->insert('tb_kategori', $data);
				$this->session->set_flashdata('pesan', '<div class="alert alert-success">Berhasil Menambah Data Kategori.!</div>');
				redirect('Data/kategori','refresh');

	}
	public function editkategori($where)
	{
		$this->db->where($where);
		return $this->db->get('tb_kategori', $where)->result();
	}
	public function updatekategori($where)
	{
		$data = array(
						'nama_kategori' => $this->input->post('nama_kategori'),
						'jenis_kategori' => $this->input->post('jenis_kategori')
					);
		$this->db->where($where);
		$this->db->update('tb_kategori', $data);
		$this->session->set_flashdata('pesan', '<div class="alert alert-success">Berhasil Perbarui Data Kategori.!</div>');
				redirect('Data/kategori','refresh');
	}
	public function hapuskategori($where)
	{
		$this->db->where($where);
		$this->db->delete('tb_kategori');
		$this->session->set_flashdata('pesan', '<div class="alert alert-success">Berhasil Menghapus Data Kategori.!</div>');
		redirect('Data/kategori','refresh');
	}

	//data calon
	public function tampilcalon()
	{
		$r = $this->session->userdata('status_users');
		if ($r == "ADMIN") {
			return $this->db->get('tb_calon')->result();
		return $this->db->get('tb_calon')->result();
		}elseif ($r == "PETUGAS") {
			$ses = $this->session->userdata('id_user');
			$this->db->select('*, tb_calon.calon, tb_calon.kecamatan, tb_calon.desa, tb_calon.jk ');
		$this->db->join('tb_calon', 'tb_calon.id_calon = tb_users.id_calon', 'left');
		$this->db->where('tb_calon.modified_by', $ses);
		return $this->db->get('tb_users')->result();
		}
	}
	public function savecalon()
	{
		$ses = $this->session->userdata('id_user');
		$data = [
					// 'id_user' => $this->input->post('id_user'),
					// 'id_kecamatan' => $this->input->post('id_kecamatan'),
					// 'id_desa' => $this->input->post('id_desa'),
					// 'id_tps' => $this->input->post('id_tps'),
					// 'skor' => $this->input->post('skor'),
					// 'no_urut' => $this->input->post('no_urut'),
					'calon' => $this->input->post('calon'),
					'nw' => $this->input->post('nw'),
					'jk' => $this->input->post('jk'),
					'kecamatan' => $this->input->post('kecamatan'),
					'desa' => $this->input->post('desa'),
					'nomor' => $this->input->post('nomor'),
					'status' => $this->input->post('status'),
					'modified_by' => $ses
				];
				// print_r($data);die();
				$this->db->insert('tb_calon', $data);
				$this->session->set_flashdata('pesan', '<div class="alert alert-success">Berhasil Menambah Data Calon.!</div>');
				redirect('Data/calon','refresh');

	}
	public function editcalon($where)
	{
		$this->db->where($where);
		return $this->db->get('tb_calon', $where)->result();
	}
	public function updatecalon($where)
	{
		$ses = $this->session->userdata('id_user');
		$data = array(
						'id_user' => $this->input->post('id_user'),
						'kecamatan' => $this->input->post('kecamatan'),
						'desa' => $this->input->post('desa'),
						'id_tps' => $this->input->post('id_tps'),
						'skor' => $this->input->post('skor'),
						'no_urut' => $this->input->post('no_urut'),
						'calon' => $this->input->post('calon'),
						'jk' => $this->input->post('jk'),
						'nomor' => $this->input->post('nomor'),
						'status' => $this->input->post('status'),
						'modified_by' => $ses
					);
		$this->db->where($where);
		$this->db->update('tb_calon', $data);
		$this->session->set_flashdata('pesan', '<div class="alert alert-success">Berhasil Perbarui Data Calon.!</div>');
		if ($this->session->userdata('status_users')=="ADMIN") {
			redirect('Data/calon','refresh');
			# code...
		}elseif ($this->session->userdata('status_users')=="PETUGAS") {
			redirect('P/data_perhitungan_calon','refresh');
		}
	}
	public function hapuscalon($where)
	{
		$this->db->where($where);
		$this->db->delete('tb_calon');
		$this->session->set_flashdata('pesan', '<div class="alert alert-success">Berhasil Menghapus Data Calon.!</div>');
		redirect('Data/calon','refresh');
	}

//	data perhitungan chart
	public function tampilch()
	{
		$this->db->select('*, tb_users.nama, tb_calon.kecamatan, tb_calon.desa');
		$this->db->join('tb_users', 'tb_users.id_user = tb_calon.id_user', 'left');
		$this->db->join('tb_kecamatan', 'tb_kecamatan.id_kecamatan = tb_calon.id_kecamatan', 'left');
		$this->db->join('tb_desa', 'tb_desa.id_desa = tb_calon.id_desa', 'left');
		$this->db->join('tb_tps', 'tb_tps.id_tps = tb_calon.id_tps', 'left');
		return $this->db->get('tb_calon')->result_array();
	}

	//data perhitungan suara
	public function tampilkec()
	{
		$this->db->select('*');
		$this->db->from('tb_calon');
		// $this->db->group_by('tb_calon.kecamatan');
		return $this->db->get()->result();
	}
	public function tampilwisk()
	{
		$this->db->select('*');
		$this->db->from('tb_wilayah');
		$this->db->group_by('tb_wilayah.kecamatan');
		return $this->db->get()->result();
	}
	
	public function tampilwisd()
	{
		$this->db->select('*');
		$this->db->from('tb_wilayah');
		$this->db->group_by('tb_wilayah.desa');
		return $this->db->get()->result();
	}

	//petugas
	/*public function tampilkecgp()
	{
		$ses = $this->session->userdata('id_user');
		$this->db->select('*, tb_kecamatan.kecamatan');
		$this->db->from('tb_users');
		$this->db->join('tb_kecamatan', 'tb_kecamatan.id_kecamatan = tb_users.id_kecamatan', 'left');
		$this->db->where('tb_users.id_user', $ses);
		$this->db->group_by('tb_kecamatan.kecamatan');
		return $this->db->get()->result();
	}*/

	// public function tampildes()
	// {
	// 	$this->db->select('*');
	// 	$this->db->from('tb_calon');
	// 	$this->db->group_by('tb_calon.desa');
	// 	return $this->db->get()->result();
	// }

	// untuk petugas
	public function tampilow()
	{
		$ses = $this->session->userdata('id_user');
		$this->db->select('*, tb_calon.calon, tb_calon.calon,  tb_calon.kecamatan, tb_calon.desa, tb_calon.jk');
		$this->db->from('tb_users');
		$this->db->join('tb_calon', 'tb_calon.id_calon = tb_users.id_calon', 'left');
		$this->db->where('tb_users.id_user',$ses);
		return $this->db->get()->result();
	}

	public function tampilwiskp()
	{
		$ses = $this->session->userdata('id_user');
		$this->db->select('*, tb_wilayah.kecamatan');
		$this->db->from('tb_users');
		$this->db->join('tb_wilayah', 'tb_wilayah.id_wilayah = tb_users.id_wilayah', 'left');
		$this->db->where('tb_users.id_user',$ses);
		$this->db->group_by('tb_wilayah.kecamatan');
		return $this->db->get()->result();
	}
	public function tampilwisdp()
	{
		$ses = $this->session->userdata('id_user');
		$this->db->select('*, tb_wilayah.desa');
		$this->db->from('tb_users');
		$this->db->join('tb_wilayah', 'tb_wilayah.id_wilayah = tb_users.id_wilayah', 'left');
		$this->db->where('tb_users.id_user',$ses);
		$this->db->group_by('tb_wilayah.desa');
		return $this->db->get()->result();
	}

	public function tampilperhitungansuara()
	{
		$ses = $this->session->userdata('id_user');
		if ($this->session->userdata('status_users')=="ADMIN") {
			$this->db->select('*, tb_calon.calon,  tb_calon.jk,tb_calon.nomor, tb_wilayah.kecamatan, tb_wilayah.desa');
		$this->db->from('tb_hasil_pemilihan');
		$this->db->join('tb_calon', 'tb_calon.id_calon = tb_hasil_pemilihan.id_calon', 'left');
		$this->db->join('tb_wilayah', 'tb_wilayah.id_wilayah = tb_hasil_pemilihan.id_wilayah', 'left');
		return $this->db->get()->result();
		}elseif ($this->session->userdata('status_users')=="PETUGAS") {
		
		$this->db->select('*, tb_calon.calon, tb_calon.calon, tb_wilayah.kecamatan, tb_wilayah.desa, tb_calon.jk,tb_calon.nomor');
		$this->db->from('tb_hasil_pemilihan');
		$this->db->join('tb_calon', 'tb_calon.id_calon = tb_hasil_pemilihan.id_calon', 'left');
		$this->db->join('tb_wilayah', 'tb_wilayah.id_wilayah = tb_hasil_pemilihan.id_wilayah', 'left');
		$this->db->where('tb_hasil_pemilihan.modified_by', $ses);
		return $this->db->get()->result();
		}
	}
	public function saveperhitungansuara()
	{
		$ses = $this->session->userdata('id_user');
		$data = [
					'id_calon' => $this->input->post('id_calon'),
					'id_wilayah' => $this->input->post('id_wilayah'),
					'jumlah_suara' => $this->input->post('jumlah_suara'),
					'tps' => $this->input->post('tps'),
					'modified_by' => $ses
				];
				$this->db->insert('tb_hasil_pemilihan', $data);
				$this->session->set_flashdata('pesan', '<div class="alert alert-success">Berhasil Menambah Data Perhitungan Suara.!</div>');
				if ($this->session->userdata('status_users')=="ADMIN") {
					redirect('Data/tambah_perhitungan_suara','refresh');
				}elseif ($this->session->userdata('status_users')=="PETUGAS") {
				redirect('P/data_perhitungan_calon','refresh');
				}

	}
	public function tampiledithasilh($where)
	{
		if ($this->session->userdata('status_users')=="ADMIN") {
			$this->db->select('*, tb_calon.calon,  tb_calon.kecamatan, tb_calon.desa, tb_calon.jk');
		$this->db->join('tb_calon', 'tb_calon.id_calon = tb_hasil_pemilihan.id_calon', 'left');
		$this->db->where($where);
		return $this->db->get('tb_hasil_pemilihan',$where)->result();
		}elseif ($this->session->userdata('status_users')=="PETUGAS") {
			$ses = $this->session->userdata('id_user');
			$this->db->select('*, tb_calon.calon,  tb_calon.kecamatan, tb_calon.desa, tb_calon.jk');
		$this->db->join('tb_calon', 'tb_calon.id_calon = tb_hasil_pemilihan.id_calon', 'left');
		$this->db->where($where);
		$this->db->where('tb_hasil_pemilihan.modified_by', $ses);
		return $this->db->get('tb_hasil_pemilihan',$where)->result();
		}
	}
	public function updatehasilh($where)
	{
		$ses = $this->session->userdata('id_user');
		$data = array(
						'id_calon' => $this->input->post('id_calon'),
						'id_wilayah' => $this->input->post('id_wilayah'),
						'jumlah_suara' => $this->input->post('jumlah_suara'),
						'tps' => $this->input->post('tps'),
						'modified_by' => $ses
		 				);
		$this->db->where($where);
		$this->db->update('tb_hasil_pemilihan', $data);
		$this->session->set_flashdata('pesan', '<div class="alert alert-success">Berhasil Perbarui Data Perhitungan Suara.!</div>');
				redirect('Data/perhitungan_suara','refresh');
	}
	public function hapusperhitungansuara($where)
	{
		$this->db->where($where);
		$this->db->delete('tb_hasil_pemilihan');
		$this->session->set_flashdata('pesan', '<div class="alert alert-success">Berhasil Menghapus Data Perhitungan Suara.!</div>');
		redirect('Data/perhitungan_suara','refresh');
	}


	// public function editcalon($where)
	// {
	// 	$this->db->where($where);
	// 	return $this->db->get('tb_calon', $where)->result();
	// }
	// public function updatecalon($where)
	// {
	// 	$data = array(
	// 					'calon' => $this->input->post('calon'),
	// 					'jk' => $this->input->post('jk'),
	// 					'alamat' => $this->input->post('alamat'),
	// 					'pendidikan_trakhir' => $this->input->post('pendidikan_trakhir'),
	// 					'pekerjaan' => $this->input->post('pekerjaan'),
	// 					'status_calon' => $this->input->post('status_calon'),
	// 					'foto' => $this->input->post('foto')
	// 				);
	// 	$this->db->where($where);
	// 	$this->db->update('tb_calon', $data);
	// 	$this->session->set_flashdata('pesan', '<div class="alert alert-success">Berhasil Perbarui Data Calon.!</div>');
	// 	redirect('Data/calon','refresh');
	// }
	// public function hapuscalon($where)
	// {
	// 	$this->db->where($where);
	// 	$this->db->delete('tb_calon');
	// 	$this->session->set_flashdata('pesan', '<div class="alert alert-success">Berhasil Menghapus Data Calon.!</div>');
	// 	redirect('Data/calon','refresh');
	// }

	//data tps
	public function tampiltps()
	{
		return $this->db->get('tb_tps')->result();
	}
	public function savetps()
	{
		$data = [
					'tps' => $this->input->post('tps')
				];
				$this->db->insert('tb_tps', $data);
				$this->session->set_flashdata('pesan', '<div class="alert alert-success">Berhasil Menambah Data Tps.!</div>');
				redirect('Data/tambah_tps','refresh');

	}
	public function edittps($where)
	{
		$this->db->where($where);
		return $this->db->get('tb_tps', $where)->result();
	}
	public function updatetps($where)
	{
		$data = array(
						'tps' => $this->input->post('tps')
					);
		$this->db->where($where);
		$this->db->update('tb_tps', $data);
		$this->session->set_flashdata('pesan', '<div class="alert alert-success">Berhasil Perbarui Data Tps.!</div>');
		redirect('Data/tps','refresh');
	}
	public function hapustps($where)
	{
		$this->db->where($where);
		$this->db->delete('tb_tps');
		$this->session->set_flashdata('pesan', '<div class="alert alert-success">Berhasil Menghapus Data Tps.!</div>');
		redirect('Data/tps','refresh');
	}


	//wilayah
	public function tampilwilayah()
	{
		return $this->db->get('tb_wilayah')->result();
	}
	public function savewilayah()
	{
		$data = [
					'kecamatan' => $this->input->post('kecamatan'),
					'desa' => $this->input->post('desa')
				];
				$this->db->insert('tb_wilayah', $data);
				$this->session->set_flashdata('pesan', '<div class="alert alert-success">Berhasil Menambah Data Wilayah.!</div>');
				redirect('Data/wilayah','refresh');

	}
	public function editwilayah($where)
	{
		$this->db->where($where);
		return $this->db->get('tb_wilayah', $where)->result();
	}
	public function updatewilayah($where)
	{
		$data = array(
						'kecamatan' => $this->input->post('kecamatan'),
						'desa' => $this->input->post('desa')
					);
		$this->db->where($where);
		$this->db->update('tb_wilayah', $data);
		$this->session->set_flashdata('pesan', '<div class="alert alert-success">Berhasil Perbarui Data Wilayah.!</div>');
		redirect('Data/wilayah','refresh');
	}
	public function hapuswilayah($where)
	{
		$this->db->where($where);
		$this->db->delete('tb_wilayah');
		$this->session->set_flashdata('pesan', '<div class="alert alert-success">Berhasil Menghapus Data Wilayah.!</div>');
		redirect('Data/wilayah','refresh');
	}


	//data kecamatan
	// public function tampilkecamatan()
	// {
	// 	return $this->db->get('tb_kecamatan')->result();
	// }
	// public function savekecamatan()
	// {
	// 	$data = [
	// 				'nama_kecamatan' => $this->input->post('nama_kecamatan')
	// 			];
	// 			$this->db->insert('tb_kecamatan', $data);
	// 			$this->session->set_flashdata('pesan', '<div class="alert alert-success">Berhasil Menambah Data Kecamatan.!</div>');
	// 			redirect('Data/tambah_kecamatan','refresh');

	// }
	// public function editkecamatan($where)
	// {
	// 	$this->db->where($where);
	// 	return $this->db->get('tb_kecamatan', $where)->result();
	// }
	// public function updatekecamatan($where)
	// {
	// 	$data = array(
	// 					'kecamatan' => $this->input->post('kecamatan')
	// 				);
	// 	$this->db->where($where);
	// 	$this->db->update('tb_kecamatan', $data);
	// 	$this->session->set_flashdata('pesan', '<div class="alert alert-success">Berhasil Perbarui Data Kecamatan.!</div>');
	// 	redirect('Data/kecamatan','refresh');
	// }
	// public function hapuskecamatan($where)
	// {
	// 	$this->db->where($where);
	// 	$this->db->delete('tb_kecamatan');
	// 	$this->session->set_flashdata('pesan', '<div class="alert alert-success">Berhasil Menghapus Data Kecamatan.!</div>');
	// 	redirect('Data/kecamatan','refresh');
	// }

	//data calon in pages
	public function tampildc()
	{
		// $this->db->select('*, tb_users.nama, tb_tps.tps, tb_kecamatan.nama_kecamatan, tb_desa.nama_desa');
		// $this->db->join('tb_users', 'tb_users.id_user = tb_calon.id_user', 'left');
		// $this->db->join('tb_kecamatan', 'tb_kecamatan.id_kecamatan = tb_calon.id_kecamatan', 'left');
		// $this->db->join('tb_desa', 'tb_desa.id_desa = tb_calon.id_desa', 'left');
		// $this->db->join('tb_tps', 'tb_tps.id_tps = tb_calon.id_tps', 'left');
		// return $this->db->get('tb_calon')->result();
		return $this->db->get('tb_calon')->result();
	}


	//user data petugas

	//wilayah calon
	public function tampilwc()
	{
		$this->db->select('*');
		$this->db->group_by('tb_calon.nw');
		return $this->db->get('tb_calon')->result();
	}
	//wilayah petugas
	public function tampilwp()
	{
		$this->db->select('*');
		$this->db->group_by('tb_wilayah.kecamatan');
		return $this->db->get('tb_wilayah')->result();
	}
	// public function tampildp()
	// {
	// 	$this->db->select('*');
	// 	$this->db->group_by('tb_desa.desa');
	// 	return $this->db->get('tb_desa')->result();
	// }

	public function tampiltpetugas()
	{
		$this->db->select('*, tb_calon.kecamatan');
		$this->db->join('tb_calon', 'tb_calon.id_calon = tb_users.id_calon', 'left');
		return $this->db->get('tb_users')->result();
	}
	public function savepetugas()
	{
		$ses = $this->session->userdata('id_user');
		$data = [
					'id_calon' => $this->input->post('id_calon'),
					'id_wilayah' => $this->input->post('id_wilayah'),
					'nama' => $this->input->post('nama'),
					'username' => $this->input->post('username'),
					'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
					'status_akun' => $this->input->post('status_akun'),
					'status_users' =>$this->input->post('status_users'),
					'modified_by' => $ses
				];
				$this->db->insert('tb_users', $data);
				$this->session->set_flashdata('pesan', '<div class="alert alert-success">Berhasil Menambah Data Petugas.!</div>');
				redirect('Data/petugas','refresh');

	}
	public function editpetugas($where)
	{
		$this->db->select('*, tb_calon.kecamatan');
		$this->db->join('tb_calon', 'tb_calon.id_calon = tb_users.id_calon', 'left');
		$this->db->where($where);
		return $this->db->get('tb_users', $where)->result();
	}
	public function updatepetugas($where)
	{
		$ses = $this->session->userdata('id_user');
		$data = array(
						'id_calon' => $this->input->post('id_calon'),
						'id_wilayah' => $this->input->post('id_wilayah'),
						'nama' => $this->input->post('nama'),
						'username' => $this->input->post('username'),
						'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
						'status_akun' => $this->input->post('status_akun'),
						'status_users' => $this->input->post('status_users'),
						'modified_by' => $ses
					);
		$this->db->where($where);
		$this->db->update('tb_users', $data);
		$this->session->set_flashdata('pesan', '<div class="alert alert-success">Berhasil Perbarui Data Petugas.!</div>');
		redirect('Data/petugas','refresh');
	}
	public function hapuspetugas($where)
	{
		$this->db->where($where);
		$this->db->delete('tb_users');
		$this->session->set_flashdata('pesan', '<div class="alert alert-success">Berhasil Menghapus Data Petugas.!</div>');
		redirect('Data/petugas','refresh');
	}

}