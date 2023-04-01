<?php
include "conn.php";
$sql = "SELECT * FROM `views` WHERE `t1` = 'okay'";
$result = $conn->query($sql);
$row = $result->fetch_assoc();
$num = $row['count'];
$num+=1;
echo $num;
$sql = "UPDATE `views` SET `id`=0,`count`=$num,`t1`='okay',`t2`=1 WHERE `t1` = 'okay'";
$conn -> query($sql);
?>