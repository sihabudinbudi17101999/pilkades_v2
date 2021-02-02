<?php 

/**
 * 
 */
class Model_pages extends CI_Model
{
	
	//cari perhitungan perdesa
	
	public function cp($c1)
	{
		// $this->db->select('tb_calon.id_calon,tb_calon.id_desa, tb_calon.id_tps, tb_calon.id_user, tb_calon.id_kecamatan, tb_calon.jk, tb_calon.foto, tb_calon.calon, tb_calon.skor, tb_users.nama, tb_tps.tps, tb_kecamatan.nama_kecamatan, tb_desa.nama_desa');
		// $this->db->join('tb_users', 'tb_users.id_user = tb_calon.id_user', 'left');
		// $this->db->join('tb_kecamatan', 'tb_kecamatan.id_kecamatan = tb_calon.id_kecamatan', 'left');
		// $this->db->join('tb_desa', 'tb_desa.id_desa = tb_calon.id_desa', 'left');
		// $this->db->join('tb_tps', 'tb_tps.id_tps = tb_calon.id_tps', 'left');
		// $this->db->where(array('tb_calon.id_kecamatan'=>$c1),$c1);
		// $this->db->order_by('tb_calon.skor','desc');
		$this->db->select('*, tb_calon.kecamatan, tb_calon.calon, tb_calon.jk, tb_calon.desa');
		$this->db->join('tb_calon', 'tb_calon.id_calon = tb_hasil_pemilihan.id_calon', 'left');
		$this->db->where(array('tb_hasil_pemilihan.id_calon'=>$c1),$c1);
		$this->db->order_by('tb_hasil_pemilihan.jumlah_suara','desc');
		$this->db->limit(1);
		return $this->db->get('tb_hasil_pemilihan')->result();
	}	

	//datas pada pages under chart
	public function pageskec()
	{
		$this->db->select('*');
		$this->db->group_by('tb_calon.kecamatan');
		return $this->db->get('tb_calon')->result();
	}
	public function datascalonall()
	{
		// $this->db->select('*, tb_users.nama, tb_tps.tps, tb_kecamatan.nama_kecamatan, tb_desa.nama_desa');
		// $this->db->join('tb_users', 'tb_users.id_user = tb_calon.id_user', 'left');
		// $this->db->join('tb_kecamatan', 'tb_kecamatan.id_kecamatan = tb_calon.id_kecamatan', 'left');
		// $this->db->join('tb_desa', 'tb_desa.id_desa = tb_calon.id_desa', 'left');
		// $this->db->join('tb_tps', 'tb_tps.id_tps = tb_calon.id_tps', 'left');
		// $this->db->group_by('tb_calon.id_kecamatan');
		// return $this->db->get('tb_calon')->result();
		return $this->db->get('tb_calon')->result();
	}
	//perhitungan suara all
	public function ps()
	{
		$this->db->select('*, tb_calon.calon, tb_calon.jk, tb_calon.kecamatan, tb_calon.desa');
		$this->db->join('tb_calon', 'tb_calon.id_calon = tb_hasil_pemilihan.id_calon', 'left');
		return $this->db->get('tb_hasil_pemilihan')->result();
	}

	//detail 1
	public function detail1($where)
	{
		$this->db->select('*, tb_users.nama, tb_tps.tps, tb_kecamatan.nama_kecamatan, tb_desa.nama_desa');
		$this->db->join('tb_users', 'tb_users.id_user = tb_calon.id_user', 'left');
		$this->db->join('tb_kecamatan', 'tb_kecamatan.id_kecamatan = tb_calon.id_kecamatan', 'left');
		$this->db->join('tb_desa', 'tb_desa.id_desa = tb_calon.id_desa', 'left');
		$this->db->join('tb_tps', 'tb_tps.id_tps = tb_calon.id_tps', 'left');
		$this->db->where('tb_calon.id_kecamatan',$where);
		return $this->db->get('tb_calon')->result();
	}
	//detail 2
	public function detail2($where)
	{
		$this->db->select('*, tb_calon.kecamatan, tb_calon.calon, tb_calon.jk, tb_calon.desa');
		$this->db->join('tb_calon', 'tb_calon.id_calon = tb_hasil_pemilihan.id_calon', 'left');
		$this->db->where('tb_hasil_pemilihan.id_calon',$where);
		// $this->db->order_by('tb_calon.skor', 'desc');
		// $this->db->limit(1);
		return $this->db->get('tb_hasil_pemilihan')->result();	
	}

	//max
	public function tampilmax()
	{
		$this->db->select_max('angka');
		// $this->db->select('*');
		// $this->db->from('tes');
		return $this->db->get('tes')->row();
	}


}