<?php
include 'db.php';


$query="select sum(fees) as 'sumfees' from playgrp_fees";
$res=mysqli_query($conn,$query);
$data=mysqli_fetch_array($res);

echo "SUM of fees:".$data['sumfees'];

?>
