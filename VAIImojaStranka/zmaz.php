<?php

include 'proces.php';
$proces = new Proces();
$id = $_REQUEST['id'];
$zmaz = $proces->zmaz($id);

if ($zmaz) {
    echo "<script>alert('Zmazanie prebehlo úspešne');</script>";
    echo "<script>window.location.href = 'zoznam.php';</script>";
}

?>