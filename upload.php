<?php
    $target_dir = "/opt/lampp/uploads";
    $target_file = $target_dir . basename($_FILES["vid"]["name"]);
    $uploadOk = 1;
    $fileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    move_uploaded_file($_FILES["vid"]["tmp_name"], $target_file);
?>