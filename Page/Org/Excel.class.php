<?php
require_once "Excel/reader.php";

class Excel{

	public static function import($file=''){

		$data = new Spreadsheet_Excel_Reader();

		$data->setOutputEncoding('utf-8');

		$data->read($file);

		error_reporting(E_ALL ^ E_NOTICE);

		$value = array();

		for ($i = 1; $i <= $data->sheets[0]['numRows']; $i++) {
			
			for ($j = 1; $j <= $data->sheets[0]['numCols']; $j++) {
			
				$value[$i-1][$j-1] = $data->sheets[0]['cells'][$i][$j];
			
			}

		}

		return $value;

	}

	public static function export($dataset=array(),$name=''){

		if($name==''){ $name=time();}

		$celldex = array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z');

		/** Error reporting */
		error_reporting(E_ALL);

		/** PHPExcel */
		require_once 'Excel/PHPExcel.php';


		// Create new PHPExcel object
		$objPHPExcel = new PHPExcel();

		// Set properties
		$objPHPExcel->getProperties()->setCreator("Maarten Balliauw")
									 ->setLastModifiedBy("Maarten Balliauw")
									 ->setTitle("Office 2007 XLSX Test Document")
									 ->setSubject("Office 2007 XLSX Test Document")
									 ->setDescription("Test document for Office 2007 XLSX, generated using PHP classes.")
									 ->setKeywords("office 2007 openxml php")
									 ->setCategory("Test result file");


		// Add some data
		for($i=0;$i<count($dataset);$i++){

			for($j=0;$j<count($dataset[$i]);$j++){
		
				$objPHPExcel->setActiveSheetIndex(0)
							->setCellValue($celldex[$j].($i+1),$dataset[$i][$j]);

			}

		}

		// Rename sheet
		$objPHPExcel->getActiveSheet()->setTitle('Simple');


		// Set active sheet index to the first sheet, so Excel opens this as the first sheet
		$objPHPExcel->setActiveSheetIndex(0);


		// Save Excel 2007 file
		header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
		
		header('Content-Disposition: attachment;filename="'.$name.'.xlsx"');
		
		header('Cache-Control: max-age=0');

		$objWriter = PHPExcel_IOFactory::createWriter($objPHPExcel, 'Excel2007');
		
		$objWriter->save('php://output');

		exit();
		
		}

}
?>