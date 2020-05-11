<?php
class Car
{
    /**
     * @var string 对象数据类型也可以用于存储数据。

    在 PHP 中，对象必须声明。

    首先，你必须使用class关键字声明类对象。类是可以包含属性和方法的结构。

    然后我们在类中定义数据类型，然后在实例化的类中使用数据类型：
     */

    var $color;
    function __construct($color="green") {
        $this->color = $color;
    }
    function what_color() {
        return $this->color;
    }
}
 $carbon = new Car("red");
var_dump($carbon );
?>