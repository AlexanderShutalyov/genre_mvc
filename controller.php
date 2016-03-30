<?php
include_once "model.php";

construct();

if (isset($_GET['genre_id'])) {
	$id = $_GET['genre_id'];
	$res = del_genre($id);
    header("Location: t.php");
    die();
}

if ($_POST['genre_new'] != "") {
	$g_name = $_POST['genre_new'];
	$res = genre_new($g_name)
    header("Location: t.php");
    die();
}   

if ((!empty($_POST['g_old'])) && (!empty($_POST['g_new']))) {
	$g_old = $_POST['g_old'];
	$g_new = $_POST['g_new'];
	$res = g_rename($g_old, $g_new);
    header("Location: t.php");
    die();
} 

?>