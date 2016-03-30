<?php
include_once "connect.php";

function construct() {
	$use_db['host'=>'localhost', 'db'=>'bib', 'user'=>'root', 'pass'=>''];
	return connect($use_db);
}

function query($query) {
	//Зачем в операторе запроса CONSTRACT? 
	//Можно ли вызвать CONSTRACT на стороку раньше?
	$result = mysqli_query(construct(), $query); 
	return $result;
}

function genre_all() {
	$query = "SELECT genre, genre_id from genre";
	return query($query);
}
 
function del_genre($id) { 
	$query = "DELETE FROM genre WHERE genre_id = '$id'";
  	$result = mysqli_query($query);
  	return $result;
} 

function genre_new($g_name) {
    $query = "INSERT INTO genre (genre) VALUES ($g_name)";
    $result = mysqli_query($query);
  	return $result;
}     

function g_rename($g_old, $g_new) {
    $query = "UPDATE genre SET genre='$g_new' WHERE genre='$g_old'";
    $result = mysqli_query($query);
  	return $result;
} 


?>