<?php
session_start();
if(!isset($_SESSION['vip'])){
    header('Location: ../index.html');
    die();
}
if(!addslashes($_SESSION['vip']) == 'aprovado'){
	$_SESSION = array();
    header('Location: ../index.html');
    die();
}
$_SESSION = array();
header('Location: ../index.html');
?>