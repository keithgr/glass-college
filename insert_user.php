<?php 
	$content = '<form action = "insert_course.php" method = "get">
	<div class="form-group">
		<label for="name">UserName</label>
		<input type="text" class="form-control" id="year" name="name">
	</div>
	<div class="form-group">
		<label for="password">Password</label>
		<input type="text" class="form-control" id="sem" name="password">
	</div>
	<input type="submit">
</form>';

	require('functions.php');
	
	$get = $_POST['get'];
	$name = $_POST['name'];
	$password = $_POST['password'];
	
	if($get && $name && $password){
		$db = db_connect();
		$sql = "INSERT INTO user(get,name,address,city,state,zip,fs_ratio,dept) VALUES ('$get','$name','$password')";
		$output = $db->query($sql);
		$db->close();
	}

	$db = db_connect();
	$sql = "SELECT * FROM user";
	$result = $db->query($sql);
	var_dump($result);
	$content.= '<table class = "table">';
	while($row = $result->fetch_assoc()){
		$content.= '<tr>';
		foreach($row as $value){
			$content.= '<td>'.$value.'</td>';
		}
		$content.= '</tr>';
	}

	make_basic_page('Create courses table', $content);
	$db->close();
?>