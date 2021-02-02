<?php 


/**
 * 
 */
class Model_rekap extends CI_Model
{
	
	//rekap ad calon
	public function tac($c1,$c2)
	{
		
		$this->db->select('*, tb_calon.calon, tb_calon.nomor, tb_wilayah.kecamatan, tb_wilayah.desa');
		$this->db->join('tb_calon', 'tb_calon.id_calon = tb_hasil_pemilihan.id_calon', 'left');
		$this->db->join('tb_wilayah', 'tb_wilayah.id_wilayah = tb_hasil_pemilihan.id_wilayah', 'left');
		$this->db->where('tb_hasil_pemilihan.id_wilayah', $c1);
		$this->db->where('tb_hasil_pemilihan.id_wilayah', $c2);
		return $this->db->get('tb_hasil_pemilihan')->result();
	}
}