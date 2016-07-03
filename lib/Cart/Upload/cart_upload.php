<?php

namespace Cart\Upload;

const AllowedTypes = ['image/jpeg', 'image/jpg'];
const InputKey = 'myfile';

function upload_file() {
	if (empty($_FILES[InputKey])) {	//handle error
		die("File Missing!");
	}

	if ($_FILES[InputKey]['error'] > 0) { //handle error
		die("Handle the error! " . $_FILES[InputKey]['error']);
	}


	if (!in_array($_FILES[InputKey]['type'], AllowedTypes)) {
		die("Handle File Type Not Allowed: " . $_FILES[InputKey]['type']);
	}


	$tmpFile = $_FILES[InputKey]['tmp_name'];

	//DOMAIN SPECIFIC:  eg., move the file
	$dstFile = 'uploads/' . $_FILES[InputKey]['name'];

	if (!move_uploaded_file($tmpFile, $dstFile)) {
		die("Handle Error");
	}
		
	//Clean up the temp file
	if (file_exists($tmpFile)) {
		unlink($tmp); 
	}
}