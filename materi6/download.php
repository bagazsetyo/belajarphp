<?php
    if(isset($_GET['key']) && $_GET['key'] == 'rahasia'){
        header('Content-Disposition: attachment; filename="download.jpg"');
        header('Content-Type: image/jpg');
        readfile(__DIR__ . '/file/profile.jpg');
        exit();
    }else{
        echo "invalid link";
        exit();
    }
?>