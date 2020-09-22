<?php
session_start();
extract($_POST);
print_r($_POST);
$_SESSION['foco'] = $tipo_foco;
?>