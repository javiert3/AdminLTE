<?php
$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');
if (!empty($username)){
if (!empty($password)){
$host = 'medictest2.mysql.database.azure.com';
$dbusername = 'javiert3@medictest2';
$dbpassword = '$Tanley1986';
$dbname = 'youtube';
  
  
// Create connection
$conn = new mysqli ();
mysqli_real_connect($conn, $host, $dbusername, $dbpassword, $dbname, 3306);


if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
  include 'create.php';
  
  mysqli_close($conn);
}
  
/*  
  $username = 'BrandNewProduct';
$password = 'Blue';
//$product_price = 15.5;
if ($stmt = mysqli_prepare($conn, "INSERT INTO account (username, password) VALUES ('$username','$password')")) {
mysqli_stmt_bind_param($stmt, 'ssd', $username, $password);
mysqli_stmt_execute($stmt);
printf("Insert: Affected %d rows\n", mysqli_stmt_affected_rows($stmt));
mysqli_stmt_close($stmt);
}
} 
  
  
  
  
$sql = "INSERT INTO account (username, password) values ('$username','$password')";
//if ($conn->query($sql)){
if ($stmt = mysqli_prepare($conn, "INSERT INTO Account (username, password) values ('$username','$password')")){
echo "New record is inserted sucessfully";
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
mysqli_close($conn);
}
}
else{
echo "Password should not be empty";
die();
}
}
else{
//echo "Username should not be empty";
//die();
}
?>*/
