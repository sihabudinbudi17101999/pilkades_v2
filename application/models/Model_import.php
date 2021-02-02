<?php 

class Model_import extends CI_Model
{
	
	//data calon
	function insertc($data)
	{
			$this->db->insert_batch('tb_calon', $data);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success">Berhasil Upload Data.!</div>');
			redirect('Data/calon','refresh');
	}

	//data wilayah
	function insertw($data)
	{
			$this->db->insert_batch('tb_wilayah', $data);
			$this->session->set_flashdata('pesan', '<div class="alert alert-success">Berhasil Upload Data.!</div>');
			redirect('Data/wilayah','refresh');
	}

	//data kecamatan
	// function insertk($data)
	// {
	// 		$this->db->insert_batch('tb_kecamatan', $data);
	// 		$this->session->set_flashdata('pesan', '<div class="alert alert-success">Berhasil Upload Data.!</div>');
	// 		redirect('Data/kecamatan','refresh');
	// }


	//data desa
	// function insertd($data)
	// {
	// 		$this->db->insert_batch('tb_desa', $data);
	// 		$this->session->set_flashdata('pesan', '<div class="alert alert-success">Berhasil Upload Data.!</div>');
	// 		redirect('Data/desa','refresh');
	// }



}
	