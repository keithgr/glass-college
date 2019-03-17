<?php
	
	require('functions.php');
	
	
	$db = db_connect();

	$sql = "DROP TABLE courses";
			
	$result = $db->query($sql);
	
	if ($result === TRUE) {
    $content = 'Courses table dropped';
	}
	else {
		$content = 'Error: '.$db->error;
	}
	
	
	make_basic_page('Drop courses table', $content);
	
?>