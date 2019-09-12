<?php
printf("Reading data from table: \n");
$res = mysqli_query($conn, 'SELECT * FROM account');
while ($row = mysqli_fetch_assoc($res)) {
var_dump($row);
}

?>
