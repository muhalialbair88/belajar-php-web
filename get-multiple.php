<!-- http://localhost:8080/get-multiple.php?first_name=%20Ali&last_name=%20Albair -->
<?php 
$say = "Hello" . $_GET['first_name'] . " " . $_GET['last_name']; 
?>

<html>
    <body>
        <h1><?= $say ?></h1>
    </body>
</html>