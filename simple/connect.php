<?php
$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');
$Id = '3';
if (!empty($username)){
if (!empty($password)){
$host = 'medictest2.mysql.database.azure.com';
$dbusername = 'javiert3@medictest2';
$dbuserhost = 'javiert3@medictest2.mysql.database.azure.com';
$dbpassword = '$Tanley1987';
$dbname = 'youtube';
  
  
// Create connection
//$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);//tutorial
  
  
$conn = mysqli_init();
mysqli_real_connect($conn, $host, $dbusername, $dbpassword, $dbname, 3306);
if (mysqli_connect_errno($conn)) {
die('Failed to connect to MySQL: '.mysqli_connect_error());
}

/*if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}*/
else{
$sql = "INSERT INTO account (username, password)
values ('$username','$password')";
if ($conn->query($sql)){
  
echo "New record is inserted sucessfully";
//include 'postpic.php';  
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
else{
echo "Password should not be empty";
die();
}
}
else{
echo "Username should not be empty";
die();
}
?>
