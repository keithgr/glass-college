<?php
    $target_dir = "/opt/lampp/uploads";
    $target_file = $target_dir.basename($_FILES["vid"]["name"]);

    echo $target_file;
    
    //move_uploaded_file($_FILES["vid"]["tmp_name"], $target_file);
?>