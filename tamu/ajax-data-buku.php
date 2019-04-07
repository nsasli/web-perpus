<?php
/* Database connection start */
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "perpusdwsteam4";

$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());

/* Database connection end */


// storing  request (ie, get/post) global array to a variable  
$requestData= $_REQUEST;


$columns = array( 
// datatable column index  => database column name
	0 => 'id',
    1 => 'judul', 
	2 => 'pengarang',
	3 => 'penerbit',
    4 => 'isbn',
    5 => 'jumlah_buku',  
    6 => 'lokasi'
);

// getting total number records without any search
$sql = "SELECT id, judul, pengarang, penerbit, isbn, jumlah_buku, lokasi ";
$sql.=" FROM tbl_buku";
$query=mysqli_query($conn, $sql) or die("ajax-data-buku.php: get InventoryItems");
$totalData = mysqli_num_rows($query);
$totalFiltered = $totalData;  // when there is no search parameter then total number rows = total number filtered rows.


if( !empty($requestData['search']['value']) ) {
	// if there is a search parameter
	$sql = "SELECT id, judul, pengarang, penerbit, isbn, jumlah_buku, lokasi  ";
	$sql.=" FROM tbl_buku";
	$sql.=" WHERE judul LIKE '%".$requestData['search']['value']."%' ";    // $requestData['search']['value'] contains search parameter
	$sql.=" OR pengarang LIKE '%".$requestData['search']['value']."%' ";
	$sql.=" OR penerbit LIKE '%".$requestData['search']['value']."%' ";
    $sql.=" OR isbn LIKE '%".$requestData['search']['value']."%' ";
    $sql.=" OR lokasi LIKE '%".$requestData['search']['value']."%' ";
	$query=mysqli_query($conn, $sql) or die("ajax-data-buku.php: get PO");
	$totalFiltered = mysqli_num_rows($query); // when there is a search parameter then we have to modify total number filtered rows as per search result without limit in the query 

	$sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."   LIMIT ".$requestData['start']." ,".$requestData['length']."   "; // $requestData['order'][0]['column'] contains colmun index, $requestData['order'][0]['dir'] contains order such as asc/desc , $requestData['start'] contains start row number ,$requestData['length'] contains limit length.
	$query=mysqli_query($conn, $sql) or die("ajax-data-buku.php: get PO"); // again run query with limit
	
} else {	

	$sql = "SELECT id, judul, pengarang, penerbit, isbn, jumlah_buku, lokasi";
	$sql.=" FROM tbl_buku";
	$sql.=" ORDER BY ". $columns[$requestData['order'][0]['column']]."   ".$requestData['order'][0]['dir']."   LIMIT ".$requestData['start']." ,".$requestData['length']."   ";
	$query=mysqli_query($conn, $sql) or die("ajax-data-buku.php: get PO");
	
}

$data = array();
while( $row=mysqli_fetch_array($query) ) {  // preparing an array
	$nestedData=array(); 

	$nestedData[] = $row["id"];
    $nestedData[] = $row["judul"];
	$nestedData[] = $row["pengarang"];
	$nestedData[] = $row["penerbit"];
    $nestedData[] = $row["isbn"];
    $nestedData[] = $row["jumlah_buku"];
    $nestedData[] = $row["lokasi"];
    $nestedData[] = 	
	
	$data[] = $nestedData;
    
}



$json_data = array(
			"draw"            => intval( $requestData['draw'] ),   // for every request/draw by clientside , they send a number as a parameter, when they recieve a response/data they first check the draw number, so we are sending same number in draw. 
			"recordsTotal"    => intval( $totalData ),  // total number of records
			"recordsFiltered" => intval( $totalFiltered ), // total number of records after searching, if there is no searching then totalFiltered = totalData
			"data"            => $data   // total data array
			);

echo json_encode($json_data);  // send data as json format

?>
