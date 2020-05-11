<?php
$x=5;
$y=10;
$m=1;
/**
 * global 关键字用于函数内访问全局变量。
*
   * 在函数内调用函数外定义的全局变量，我们需要在函数中的变量前加上 global 关键字：
 */
function myTest()
{
    global $x,$y;
    $m =9;
    echo "m before $m /t";
    $m = 2;
    $y=$x+$y;
}

myTest();
echo $y; // 输出 15
?>