<?php
$con=mysqli_connect("localhost","fk","123456","mydb");
// 检测连接
if (mysqli_connect_errno())
{
    echo "连接失败: " . mysqli_connect_error();
}

$rs = mysqli_query($con,"DELETE FROM myguests WHERE id='1'");
var_dump($rs);
mysqli_close($con);
?>