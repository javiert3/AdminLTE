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
//$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);//tutorial
$conn = mysqli_init();
mysqli_real_connect($conn, $host, $dbusername, $dbpassword, $db_name, 3306);

if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO account (username, password)
values ('$username','$password')";
if ($conn->query($sql)){
echo "New record is inserted sucessfully";
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
