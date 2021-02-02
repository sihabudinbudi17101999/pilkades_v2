<?php 

/**
 * 
 */
class Pages extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
		$this->load->model('Model_pages');
		$this->load->model('Model_data');
	}
	public function index()
	{
		// $data['datas'] = $this->Model_pages->tampilmax(); 
		// print_r($data['datas']);
		// die();
		$this->load->view('template/header_be');
		$data['datascalon'] = $this->Model_data->tampildc();
		$data['datascalonall'] = $this->Model_pages->datascalonall();
		$data['carikec'] = $this->Model_pages->pageskec();
		$this->load->view('frontend/pages/data', $data);
		// $this->load->view('tes2');
		// $this->load->view('template/footer_be');
		// $this->db->select('nama,penduduk');
		// $datas  = $this->db->get('kota')->result_array();
		// foreach ($datas as $r) 
		// {
		// 	$y=json_decode($r['penduduk']);
		// 	$arrProd[] = ['label' =>$r['nama'],'y' =>$y];
		// }
// print_r($arrProd); die()
		// echo json_encode($arrProd,true);
	}
	public function dataChart()
	{
		// $this->db->select('nama,penduduk');
		// $datas  = $this->db->get('kota')->result_array();
		$datas = $this->Model_data->tampilch();
		// print_r($datas);die();
		foreach ($datas as $r) 
		{
			$y=json_decode($r['skor']);
			$arrProd[] = ['label' =>$r['no_urut'].$r['nama_calon'].$r['nama_kecamatan'],'y' =>$y];
		}
// print_r($arrProd); die()
		echo json_encode($arrProd,true);
	}

	//cari perhitungan suara
	public function cperhitungan_suara()
	{
		$c1 = $this->input->post('c1');
		// $c2 = $this->input->post('c2');
		// $c3 = $this->input->post('c3');
		$data['carikec'] = $this->Model_pages->pageskec();
		$data['datas'] = $this->Model_pages->cp($c1);
		// echo "<pre>"; print_r($data); echo "</pre>";
		// die();
		$this->load->view('template/header_be');
		$this->load->view('frontend/pages/perhitungansuarac',$data);	
	}
	//erhitungan suara all
	public function perhitungan_suara()
	{
		$data['datas'] = $this->Model_pages->ps();
		$data['carikec'] = $this->Model_pages->pageskec();
		$this->load->view('template/header_be');
		$this->load->view('frontend/pages/perhitungansuarac',$data);		
	}

	//detail dc
	public function detail_dc()
	{
		$this->load->view('template/header_be');
		$this->load->view('frontend/pages/detaildc');
	}


	//detail 1 
	public function detail1($id_calon)
	{
		$where = $id_calon;
		$data['detail1'] = $this->Model_pages->detail1($where);
		// print_r($data);
		// die();
		$this->load->view('template/header_be');
		$this->load->view('frontend/pages/detail1',$data);
	}
	//detail 2
	public function detail2($id_desa)
	{
		$where = $id_desa;
		$data['carikec'] = $this->Model_pages->pageskec();
		$data['detail2'] = $this->Model_pages->detail2($where);
		// print_r($data);
		// die();
		$this->load->view('template/header_be');
		$this->load->view('frontend/pages/detail2',$data);
	}


}