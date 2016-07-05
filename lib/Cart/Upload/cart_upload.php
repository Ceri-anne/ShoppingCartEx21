<?php

namespace Cart\Upload;

const AllowedTypes = ['image/jpeg', 'image/jpg'];
const InputKey = 'myfile';
        
function upload_file() {
	if (empty($_FILES[InputKey])) {	
		die("No file selected. Please try again.");
	}

	else if ($_FILES[InputKey]['error'] > 0) { 
           die("Handle the error! " . $_FILES[InputKey]['error']);
	}

	else if (!in_array($_FILES[InputKey]['type'], AllowedTypes)) {
		die("Handle File Type Not Allowed: " . $_FILES[InputKey]['type']);
	}


	$tmpFile = $_FILES[InputKey]['tmp_name'];

	$dstFile = 'uploads/' . $_FILES[InputKey]['name'];

	if (!move_uploaded_file($tmpFile, $dstFile)) {
		die("Handle Error");
	}
		
	if (file_exists($tmpFile)) {
		unlink($tmp); 
	}
}