<?php 
require_once("config.php");

//Logic for getting data
$output="";
if(isset($_POST['search'])){

$auctions_start_date = $_POST['auctions_start_date'];
$auctions_end_date = $_POST['auctions_end_date'];
 
 $get_products ="SELECT * FROM auction_product WHERE auctions_date Between '$auctions_start_date' AND '$auctions_end_date' ORDER BY auctions_date";
$res = mysqli_query($conn,$get_products);
//$count = mysqli_num_rows($res);
$output.= '<table class="table-bordered">
<tr><th>Sno</th><th>Product name</th><th>Price</th><th>Qty</th>
</tr>';
$sno=1;
if(mysqli_num_rows($res)>0){
	while ($rs= mysqli_fetch_assoc($res)) {
				$output .='<tr>
					<td>'.$sno++.'</td>
					<td>'.$rs['product_name'].'</td>
					<td>'.$rs['price'].'</td>
					<td>'. $rs['qty'].'</td>
				</tr>';
			
	
	}
	$output.='</table>';

	echo "<div class='row'><div class='col-md-6 mx-auto'>".$output."</div></div>";
}
else{
	echo "<div class='row'><div class='col-md-6 mx-auto'><h5>No Data Found</h5></div></div>";
}

}


?>
<!DOCTYPE html>
<html>
<head>
	<title>Date Range Filter</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container" >
		<div class="row">
			<div class="col-md-6 mx-auto" style="margin-top: 50px;">
		<form method="POST">
			<div class="form-group">
				<label>Start Date:</label>
				<input type="date" name="auctions_start_date" id="auctions_start_date" class="form-control">
			</div>
			<div class="form-group">
				<label>End Date:</label>
				<input type="date" name="auctions_end_date" id="auctions_end_date" class="form-control">
			</div>
			<input type="submit" name="search" id="search" value="Search" class="btn btn-primary">
		</form>
	</div>
</div>


</div>
	</body>
	</html>