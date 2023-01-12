<?php
$servername="localhost";
$username="root";
$password="";
$dbname="hytech";


$conn=new mysqli($servername,$username,$password,$dbname);

if($conn->connect_error){
    die("Connection failed: " . $conn->connect);

}else{
    echo "ligação efetuada";
}
?>
