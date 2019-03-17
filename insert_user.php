<?php 
    require('functions.php');

    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'];
        $password = $_POST['password'];

        if($name && $password){
            $db = db_connect();            
            $sql = "INSERT INTO user (name, pass, major_id) VALUES ('$name', '$password', NULL)";
            $output = $db->query($sql);
            $db->close();
        }
    }

    $content = '
    <form action = "insert_user.php" method = "post">
        <div class="form-group">
            <label for="name">UserName</label>
            <input type="text" class="form-control" id="year" name="name">
        </div>
        <div class="form-group">
            <label for="password">Password</label>
            <input type="password" class="form-control" id="sem" name="password">
        </div>
        <input type="submit">
    </form>';

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

	$db->close();

    echo $content;
?>