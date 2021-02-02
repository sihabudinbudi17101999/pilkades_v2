<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Chart extends CI_Controller {

	public function __construct() {
        parent::__construct();

        //memanggil model
        $this->load->model(array('kota_model'));
    }

    public function index() {
		// $this->pie();
		// $data['datas'] = $this->kota_model->tampilk();
		// print_r($data);
		// die();
		// $this->load->view('tes'/*,$data*/);
		
		// $this->load->view('template/header_ba');
		// $this->load->view('template/sidebar_ba');
		// $this->load->view('tes2'/*,$data*/);
		$this->load->view('tes'/*,$data*/);
		// $this->load->view('template/footer_ba');
	}
	public function dataChart()
	{
		$this->db->select('nama,penduduk');
		$datas  = $this->db->get('kota')->result_array();
		foreach ($datas as $r) 
		{
			$y=json_decode($r['penduduk']);
			$arrProd[] = ['label' =>$r['nama'],'y' =>$y];
		}
// print_r($arrProd); die()
		echo json_encode($arrProd,true);
	}






















	//

	public function pie() {
		//memanggil function read pada kota model
		//function read berfungsi mengambil/read data dari table kota di database
		$data_kota = $this->kota_model->read();

		//mengirim data ke view
		$output = array(
					'theme_page' => 'chart_pie',
					'judul' => 'Pie Chart',
					'data_kota' => $data_kota
				);

		//memanggil file view
		$this->load->view('theme/index', $output);


	}

	public function column() {
		//memanggil function read pada kota model
		//function read berfungsi mengambil/read data dari table kota di database
		$data_kota = $this->kota_model->read();

		//mengirim data ke view
		$output = array(
					'theme_page' => 'chart_column',
					'judul' => 'Column Chart',
					'data_kota' => $data_kota
				);

		//memanggil file view
		$this->load->view('theme/index', $output);


	}

}