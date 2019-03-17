
<?php 
    require('functions.php');

    $id = '';
    if($_SERVER['REQUEST_METHOD'] === 'POST') {
        $db = db_connect();
        $sql = "INSERT INTO video (username, college_id, name, description) VALUES ('keith', 19075, '{$_POST['title']}', '{$_POST['desc']}')";
        
        $db->query($sql);
        
        $result = $db->query("SELECT MAX(id) c FROM video");
        $id = $result->fetch_assoc()['c'];
        
        $db->close();
    }

    $target_dir = "/opt/lampp/uploads/";
    $target_file = $target_dir.$id.'.mp4';
    $fileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    move_uploaded_file($_FILES["vid"]["tmp_name"], $target_file);

    header("Location: video_upload.php?upl=success");
?>