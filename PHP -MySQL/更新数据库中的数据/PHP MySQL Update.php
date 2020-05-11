<?php
$con=mysqli_connect("localhost","fk","123456","mydb");
// 检测连接
if (mysqli_connect_errno())
{
    echo "连接失败: " . mysqli_connect_error();
}

 $obj = mysqli_query($con,"UPDATE myguests SET email='sasasa'
WHERE id=1");

echo $obj;

mysqli_close($con);
?>