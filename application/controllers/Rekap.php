<?php 


/**
 * 
 */
class Rekap extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
		$this->load->model('Model_rekap');
	}

	//print ad calon suara
	public function downloads()
	{
		$this->load->library('mypdf');
		$c1 = $this->input->post('c1');
		$c2 = $this->input->post('c2');
		$data['datas'] =  $this->Model_rekap->tac($c1,$c2);
		// echo "<pre>"; print_r($data); echo "</pre>";
		// die();
		$this->mypdf->generate('backend/perhitungan/rekap',$data,'Rekap-Jumlah Suara','A4','potrait');
	}
}