<?php

$named =$_POST['price'];
$dec=$_POST['dec'];

$server = "84.201.184.150";
$login = "090302-istb-21_v";
$pass = "fpJh2gfmff";
$name_db = "090302-istb-21_vel";

$link = mysqli_connect($server, $login,$pass,$name_db);
$link->set_charset("utf8");

$sql = "INSERT INTO velocity (price, description) VALUES ('$named', '$dec')";
if ($link->query($sql) === TRUE){
    echo "данные отправленые";
} else{
    echo "Error: " . $sql . "<br>" . $sql->error;
}
?>
<button type="submit"><a href="index.php">На главную</a></button>