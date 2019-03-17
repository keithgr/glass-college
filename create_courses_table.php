<?php
	
	require('functions.php');
	
	$sql = "CREATE TABLE ebreimer_courses (
			cid   INT         NOT NULL AUTO_INCREMENT, 
			sub   VARCHAR(4)  NOT NULL, 
			num   VARCHAR(3)  NOT NULL, 
			title VARCHAR(48) NULL, 
			descr TEXT        NULL, 
			year  INT         NULL, 
			sem   VARCHAR(6)  NULL, 
			uid   VARCHAR(10) NOT NULL, 
			PRIMARY KEY (cid)
		)";
	
	$db = db_connect();
		
	$result = $db->query($sql);
	
	if ($result === TRUE) {
    $content = 'Courses table created successfully';
	}
	else {
		$content = 'Error: '.$db->error;
	}
	
	make_basic_page('Create courses table', $content);
	
?>



