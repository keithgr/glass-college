<?php
    
/*
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $db = db_connect();
        $sql = "INSERT INTO video (username, college_id, name, description) VALUES ('{$_SESSION['user']}', '{$_SESSION['college_id']}', '{$_POST['title']}', '{$_POST['desc']}')";  
    }
*/
    $target_dir = "/opt/lampp/uploads/";
    $target_file = $target_dir.basename($_FILES["vid"]["name"]);
    $uploadOk = 1;
    $fileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    move_uploaded_file($_FILES["vid"]["tmp_name"], $target_file)

?>