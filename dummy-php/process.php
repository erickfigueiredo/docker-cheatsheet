<?php
    $message = $_POST['message'];
    
    $files = scandir('./messages');
    $numFiles = count($files) - 2; // . e ..

    $fileName = "msg-{$numFiles}.txt";

    $file = fopen("./messages/{$fileName}", 'x');
    
    fwrite($file, $message);
    fclose($file);

    header('location: index.php');
?>