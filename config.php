<?php 
$db_host = "localhost";
$db_user = "root";
$db_password = "";
$db_name ="date_range_filter";

$conn = mysqli_connect($db_host,$db_user,$db_password,$db_name);
if($conn){
	//echo "Connected";

}
else{
	echo "Connection error";
}

?>