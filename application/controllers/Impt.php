<?php 

class Impt extends CI_Controller
{
	
	function __construct()
	{
		parent:: __construct();
		if ($this->session->userdata('status_users')!="ADMIN") {
			redirect('Auth','refresh');
		}
		$this->load->model('Model_import');
		$this->load->library('excel');
	}
	// public function indexs()
	// {
	// 	$t['title'] = ' Import Data Calon';
	// 	$this->load->view('template/header_ba',$t);
	// 	$this->load->view('templatesidebar_ba');
	// 	$this->load->view('backend/calon/importc');
	// 	$this->load->view('template/footer_ba');
	// }


	//import calon
	public function datasc()
	{
		$t['title'] = ' | Import Data Calon';
		$this->load->view('template/header_ba',$t);
		$this->load->view('template/sidebar_ba');
		$this->load->view('backend/calon/ic');
		$this->load->view('template/footer_ba');
	}

	//data wilayah
	public function dataswi()
	{
		$t['title'] = ' | Import Data Calon';
		$this->load->view('template/header_ba',$t);
		$this->load->view('template/sidebar_ba');
		$this->load->view('backend/wilayah/iw');
		$this->load->view('template/footer_ba');
	}

	//kecamatan
	// public function datask()
	// {
	// 	$t['title'] = ' | Import Data Kecamatan';
	// 	$this->load->view('template/header_ba',$t);
	// 	$this->load->view('template/sidebar_ba');
	// 	$this->load->view('backend/kecamatan/ik');
	// 	$this->load->view('template/footer_ba');
	// }

	// public function datasd()
	// {
	// 	$t['title'] = ' | Import Data Kecamatan';
	// 	$this->load->view('template/header_ba',$t);
	// 	$this->load->view('template/sidebar_ba');
	// 	$this->load->view('backend/desa/id');
	// 	$this->load->view('template/footer_ba');
	// }


	//data kecamatan
	// function ik()
	// {
	// 	if (isset($_FILES["file"]["name"]))
	// 	 {
	// 		$path = $_FILES["file"]["tmp_name"];
	// 		$object	= PHPExcel_IOFactory::load($path);
	// 		foreach($object->getWorksheetIterator() as $worksheet)
	// 		{
	// 			$highestRow = $worksheet->getHighestRow();
	// 			$highestColumn = $worksheet->getHighestColumn();
	// 			for($row=2; $row<$highestRow; $row++)
	// 			{
	// 				$kecamatan = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
	// 				$data[] = array(
	// 					'kecamatan'=>$kecamatan
	// 				);
	// 			}
	// 		}
	// 		// print_r($data);
	// 		// die();
	// 		$this->Model_import->insertk($data);
			
	// 	}
	// }


	//data desa
	// function id()
	// {
	// 	if (isset($_FILES["file"]["name"]))
	// 	 {
	// 		$path = $_FILES["file"]["tmp_name"];
	// 		$object	= PHPExcel_IOFactory::load($path);
	// 		foreach($object->getWorksheetIterator() as $worksheet)
	// 		{
	// 			$highestRow = $worksheet->getHighestRow();
	// 			$highestColumn = $worksheet->getHighestColumn();
	// 			for($row=2; $row<$highestRow; $row++)
	// 			{
	// 				$desa = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
	// 				$data[] = array(
	// 					'desa'=>$desa
	// 				);
	// 			}
	// 		}
	// 		// print_r($data);
	// 		// die();
	// 		$this->Model_import->insertd($data);
			
	// 	}
	// }

	//data calon
	function icd()
	{
		if (isset($_FILES["file"]["name"]))
		 {
			$path = $_FILES["file"]["tmp_name"];
			$object	= PHPExcel_IOFactory::load($path);
			foreach($object->getWorksheetIterator() as $worksheet)
			{
				$highestRow = $worksheet->getHighestRow();
				$highestColumn = $worksheet->getHighestColumn();
				for($row=2; $row<$highestRow; $row++)
				{
					$calon = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
					$jk = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
					$kecamatan = $worksheet->getCellByColumnAndRow(2, $row)->getValue();
					$desa = $worksheet->getCellByColumnAndRow(3, $row)->getValue();
					$nomor = $worksheet->getCellByColumnAndRow(4, $row)->getValue();
					$status = $worksheet->getCellByColumnAndRow(5, $row)->getValue();
					$nw = $worksheet->getCellByColumnAndRow(6, $row)->getValue();
					$data[] = array(
						'calon'=>$calon,
						'jk'=>$jk,
						'kecamatan'=>$kecamatan,
						'desa'=>$desa,
						'nomor'=>$nomor,
						'status'=>$status,
						'nw'=>$nw
					);
				}
			}
			// print_r($data);
			// die();
			$this->Model_import->insertc($data);
			
		}
	}


	//data wilayah
	function iw()
	{
		if (isset($_FILES["file"]["name"]))
		 {
			$path = $_FILES["file"]["tmp_name"];
			$object	= PHPExcel_IOFactory::load($path);
			foreach($object->getWorksheetIterator() as $worksheet)
			{
				$highestRow = $worksheet->getHighestRow();
				$highestColumn = $worksheet->getHighestColumn();
				for($row=2; $row<$highestRow; $row++)
				{
					$kecamatan = $worksheet->getCellByColumnAndRow(0, $row)->getValue();
					$desa = $worksheet->getCellByColumnAndRow(1, $row)->getValue();
					$data[] = array(
						'kecamatan'=>$kecamatan,
						'desa'=>$desa
					);
				}
			}
			// print_r($data);
			// die();
			$this->Model_import->insertw($data);
			
		}
	}



	 //download format upload calon
    function action2(){



      $object = new PHPExcel();

      $object->setActiveSheetIndex(0);

      $table_columns = array("calon","jk", "kecamatan","desa","nomor","status","nw");

      $column = 0;

      foreach($table_columns as $field){

        $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);

        $column++;

      }
      
      // $employee_data = $this->Model_excel_export->fetch_data2();
      // print_r($employee_data);
      // die();
      

      $excel_row = 2;

     

      $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');

      header('Content-Type: application/vnd.ms-excel');

      header('Content-Disposition: attachment;filename="Format Upload Data Calon.xls"');

      $object_writer->save('php://output');

    }

    //data wilayah
     function action5(){



      $object = new PHPExcel();

      $object->setActiveSheetIndex(0);

      $table_columns = array("kecamatan","desa");

      $column = 0;

      foreach($table_columns as $field){

        $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);

        $column++;

      }
      
      // $employee_data = $this->Model_excel_export->fetch_data2();
      // print_r($employee_data);
      // die();
      

      $excel_row = 2;

     

      $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');

      header('Content-Type: application/vnd.ms-excel');

      header('Content-Disposition: attachment;filename="Format Upload Data Wilayah.xls"');

      $object_writer->save('php://output');

    }


    //data kecamatan
    //    function action3(){



    //   $object = new PHPExcel();

    //   $object->setActiveSheetIndex(0);

    //   $table_columns = array("kecamatan");

    //   $column = 0;

    //   foreach($table_columns as $field){

    //     $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);

    //     $column++;

    //   }
      
    //   // $employee_data = $this->Model_excel_export->fetch_data2();
    //   // print_r($employee_data);
    //   // die();
      

    //   $excel_row = 2;

     

    //   $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');

    //   header('Content-Type: application/vnd.ms-excel');

    //   header('Content-Disposition: attachment;filename="Format Upload Data Kecamatan.xls"');

    //   $object_writer->save('php://output');

    // }

    //data desa
    // function action4(){



    //   $object = new PHPExcel();

    //   $object->setActiveSheetIndex(0);

    //   $table_columns = array("desa");

    //   $column = 0;

    //   foreach($table_columns as $field){

    //     $object->getActiveSheet()->setCellValueByColumnAndRow($column, 1, $field);

    //     $column++;

    //   }
      
    //   // $employee_data = $this->Model_excel_export->fetch_data2();
    //   // print_r($employee_data);
    //   // die();
      

    //   $excel_row = 2;

     

    //   $object_writer = PHPExcel_IOFactory::createWriter($object, 'Excel5');

    //   header('Content-Type: application/vnd.ms-excel');

    //   header('Content-Disposition: attachment;filename="Format Upload Data Desa.xls"');

    //   $object_writer->save('php://output');

    // }


}