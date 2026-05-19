<?php
$file = $_GET['file'];
$path = "../uploads/" . $file;

if (file_exists($path)) {

    header('Content-Type: application/octet-stream');
    header('Content-Disposition: attachment; filename="'.basename($path).'"');

    readfile($path);
}
?>