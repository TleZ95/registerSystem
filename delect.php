<?php $id = $_GET['c_id'];
    require('conn.php');

    $sql ="DELETE FROM `name` WHERE c_id = '".$id."' ";
	$query = mysqli_query($connection, $sql);
	if($query){
	
	$sql1 ="DELETE FROM `address` WHERE c_id = '".$id."' ";
	$query1 = mysqli_query($connection, $sql1);
    if($query1){

	$sql2 ="DELETE FROM `add2` WHERE c_id = '".$id."' ";
	$query2 = mysqli_query($connection, $sql2);
    if($query2){
	$sql3 ="DELETE FROM `history` WHERE c_id = '".$id."' ";
    $query3 = mysqli_query($connection, $sql3);
    header("Location: alumni_information.php");

}
    }
}