<?php
$con=mysqli_connect("localhost","fk","123456","mydb");
// 检测连接
if (mysqli_connect_errno())
{
    echo "连接失败: " . mysqli_connect_error();
}

$result = mysqli_query($con,"SELECT * FROM myguests order by id desc ");

while($row = mysqli_fetch_array($result))
{
    echo $row['firstname'];
    echo " " . $row['lastname'];
    echo " " . $row['email'];
    echo "<br>";
}

mysqli_close($con);
?>