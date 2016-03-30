<?php
include_once "model.php";

construct();

function genre_id($_GET['genre_id']) {
	if (isset($_GET['genre_id'])) {
		$id = $_GET['genre_id'];
	//  $res = del_genre($id);
  		return del_genre($id);
    	header("Location: t.php");
    	die();
	}
}

function genre_new($_POST['genre_new']) {
	if ($_POST['genre_new'] != "") {
		$g_name = $_POST['genre_new'];
	//  $res = genre_new($g_name);
		return genre_new($g_name);
    	header("Location: t.php");
	    die();
	}   
}

function genre_new($_POST['g_old'], $_POST['g_new']) {
	if ((!empty($_POST['g_old'])) && (!empty($_POST['g_new']))) {
		$g_old = $_POST['g_old'];
		$g_new = $_POST['g_new'];
	//	$res = g_rename($g_old, $g_new);
		return g_rename($g_old, $g_new);
	    header("Location: t.php");
    	die();
	} 
}
?>
