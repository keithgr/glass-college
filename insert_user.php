<?php 
	$content = '<form action = "insert_course.php" method = "get">
	<div class="form-group">
		<label for="name">Year</label>
		<input type="text" class="form-control" id="year" name="name">
	</div>
	<div class="form-group">
		<label for="address">Semester</label>
		<input type="text" class="form-control" id="sem" name="address">
	</div>
	<div class="form-group">
		<label for="city">Title</label>
		<input type="text" class="form-control" id="title" name="city">
	</div>
	<div class="form-group">
		<label for="state">Subject</label>
		<input type="text" class="form-control" id="sub" name="state">
	</div>
	<div class="form-group">
		<label for="zip">Number</label>
		<input type="text" class="form-control" id="num" name="zip">
	</div>
	<div class="form-group">
		<label for="fs_ratio">Userid</label>
		<input type="text" class="form-control" id="uid" name="fs_ratio">
	</div>
	<div class="form-group">
		<label for="dept">Description</label>
		<input type="text" class="form-control" id="des" name="dept">
	</div>
	<input type="submit">
</form>';

	require('functions.php');
	
	$get = $_GET['get'];
	$name = $_GET['name'];
	$address = $_GET['address'];
	$city = $_GET['city'];
	$state = $_GET['state'];
	$zip = $_GET['zip'];
	$fratio = $_GET['fs_ratio'];
    $dept = $_GET['dept'];
	
	if($get && $name && $address && $city && $state && $zip &&  $fratio && $dept){
		$db = db_connect();
		$sql = "INSERT INTO user(get,name,address,city,state,zip,fs_ratio,dept) VALUES ('$get','$name','$address','$city','$state','$zip','$fratio','$dept')";
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