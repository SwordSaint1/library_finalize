<?php
include "../conn.php";
	
if(isset($_POST['submit'])) {


	// Count total files
	$countfiles = count(($_FILES['files']['name']));

	
	// Prepared statement
	$query = "INSERT INTO announcement(`file_name`,`image`,announcement_description,date_announce) VALUES(?,?,?,?)";

	$statement = $conn->prepare($query);

	// Loop all files
	for($i = 0; $i < $countfiles; $i++) {

		// File name
		$filename = $_FILES['files']['name'][$i];
		if(strpos(" ",$filename)){
			$filename = str_replace(" ","-",$filename);
		}

		$random = mt_rand(100000,999999);
		$datecode = date('Ymd');
		$prefix = "UPLOAD";
		$unique = uniqid();

		$extn = pathinfo($filename,PATHINFO_EXTENSION);

		## NEW FILENAME
		$filename = $prefix."-".strtoupper(trim($filename))."-".$datecode."-".$random."-".$unique.".".$extn;

		// Location
		$target_file = 'upload/'.$filename;
	
		$description = $_POST['description'][$i];

		$date_announce = $_POST['date_announce'];
		// file extension
		$file_extension = pathinfo(
			$target_file, PATHINFO_EXTENSION);
			
		$file_extension = strtolower($file_extension);
	
		// Valid image extension
		$valid_extension = array("png","jpeg","jpg");
	

		if(in_array($file_extension, $valid_extension)) {

			// Upload file
			if(move_uploaded_file(
				$_FILES['files']['tmp_name'][$i],
				$target_file)
			) {

				// Execute query
				$statement->execute(
					array($filename,$target_file,$description,$date_announce));
			}
		}
	}


	 echo '<script>
                    var x = confirm("Announce successfully");
                    if(x == true){
                        location.replace("../../page/admin/dashboard.php");
                    }else{
                        location.replace("../../page/admin/dashboard.php");
                    }
                </script>';
	

}
?>
