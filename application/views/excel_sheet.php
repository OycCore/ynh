<?php 
function cleanData(&$str)
		  {
			$str = preg_replace("/\t/", "\\t", $str);
			$str = preg_replace("/\r?\n/", "\\n", $str);
			if(strstr($str, '"')) $str = '"' . str_replace('"', '""', $str) . '"';
		  }

		  // file name for download
		  $filename = "website_data_" . date('Ymd') . ".xls";

		  header("Content-Disposition: attachment; filename=\"$filename\"");
		  header("Content-Type: application/vnd.ms-excel");

		  $flag = false;
		  $i=1;
		  foreach($detail as $excel_value){
		  $data = array(
			array("S. No" => $i, "Property_name" => $excel_value->property, "Price" => $excel_value->price1 ,
				"Square_ft" => $excel_value->square_ft, "Bedroom" => $excel_value->bedroom, "Bathroom" => $excel_value->bathroom,
				"Location" => $excel_value->location, "Landmark" => $excel_value->landmark
			)
			
		  );
		  $i++;
		  foreach($data as $row) {
			if(!$flag) {
			  // display field/column names as first row
			  echo implode("\t", array_keys($row)) . "\n";
			  $flag = true;
			}
			array_walk($row, 'cleanData');
			echo implode("\t", array_values($row)) . "\n";
		  }
		  }
		  exit;

?>
