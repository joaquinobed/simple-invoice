<?php 
function get_row($table,$row, $id, $equal){
	global $con;
	$query=mysqli_query($con,"select $row from $table where $id='$equal'");
	$rw=mysqli_fetch_array($query);
	$value=$rw[$row];
	return $value;
}
?>