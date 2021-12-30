<!-- http://localhost:8080/get.php?name=%20Ali -->
<?php
$say = "Hello" . htmlspecialchars($_GET['name']);
?>

<html>
    <body>
        <h1><?= $say ?></h1>
    </body>
</html>