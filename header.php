<?php

header('Application: Belajar PHP Web');
header('Author: Ali Albair');
$client = $_SERVER['HTTP_CLIENT_NAME'];

echo "Hello" . $client;
?>