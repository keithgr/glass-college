<?php
	
	require('functions.php');

	$sql = "CREATE TABLE major (
                id INT AUTO_INCREMENT,
                name VARCHAR(40),
                primary key(id)
            );";
        /*
        "CREATE TABLE user (
                name VARCHAR(15),
                pass VARCHAR(65)
		  )";
          */
	
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



