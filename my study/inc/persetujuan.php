<?php
$data = array();

mysqli_connect("localhots","root","","riki");

$result = mysqli_query("SELECT Nama_brg,Harga_Brg FROM persediaan");

while ($row = mysqli_fetch_array($result, MYSQLI_NUM))
{

	array_push($data, array("Nama_brg"=>$row[0],"Harga_Brg"=>$row[1]));
}

echo json_encode($data);

?>