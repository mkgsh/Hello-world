<?php 
$x=5; // 全局变量 

function myTest() 
{ 
    $y=10; // 局部变量 
    echo "====="; 
    echo "变量 x 为: $x"; 
    echo "--"; 
    echo "变量 y 为: $y"; 
}  

myTest(); 

echo "====="; 
echo "变量 x 为: $x"; 
echo "--"; 
echo "变量 y 为: $y"; 
?>1