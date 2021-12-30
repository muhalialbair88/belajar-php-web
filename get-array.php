<!-- http://localhost:8080/get-array.php?numbers[]=1&numbers[]=2&numbers[]=3&numbers[]=10 -->
<?php
$numbers = $_GET['numbers'];
$total = 0;

foreach ($numbers as $number) {
    $total += $number;
}
?>
<html>
    <body>
        <h1>Total <?= $total ?></h1>
    </body>
</html>