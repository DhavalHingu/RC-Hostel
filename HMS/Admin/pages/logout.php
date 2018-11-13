<?php
include_once '../../getconnection.php';
session_destroy();
header('location:../../Visitor/index.html?msg=logout');
?>