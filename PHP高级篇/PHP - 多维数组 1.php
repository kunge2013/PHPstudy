<?php
/***
 *
 * 多维数组是包含一个或多个数组的数组。
 * 在多维数组中，主数组中的每一个元素也可以是一个数组，子数组中的每一个元素也可以是一个数组。
 *
 *
 */
$sites = array
(
    "runoob"=>array
    (
        "菜鸟教程",
        "http://www.runoob.com"
    ),
    "google"=>array
    (
        "Google 搜索",
        "http://www.google.com"
    ),
    "taobao"=>array
    (
        "淘宝",
        "http://www.taobao.com"
    )
);
print("<pre>"); // 格式化输出数组
print_r($sites);
print("</pre>");
?>