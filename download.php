<?php

if(isset($_GET['key']) && $_GET['key'] == 'benar'){
    header('Content-Disposition: attachment; filename="profile.png"');
    header('Content-Type: image/jpeg');
    readfile(__DIR__ . '/file/TaskPortofolio2.PNG');
    exit();
}else{
    echo "Invalid Key";
}
?>