<?php
////session_start();
////$param1 = $_GET['param1'];
////$param2 = $_GET['param2'];
////$res = $param1 + $param2;
////$data = array('p1' => $param1, 'p2' => $param2, 'res' => $res );
////$json = json_encode($data);
////echo $json;
//
//echo "test";
//echo '<br>';
//$data = array('p1'=>6545, 'p2'=>789, 'p3'=>987);
//$sum=0;
//foreach($data as $key=>$value){
//    $sum+=$value;
//}
//
//echo $sum;
//
////foreach ($data as $key => $value) {
////    echo $key.": ".$value."<br>";
////}
//echo '<br>';
//$s =0;
//$arr = array(1,2,3,4,5,6,7,8,9);
//for ($i = 0; $i < count($arr); $i++) {
////    echo $arr[$i].'<br>';
//    $s = $s + $arr[$i];
//}
//echo $s;
//
//
//echo '<br>';
//
//$a=23;
//$b=34;
//$c=12;
//
//if (($a>$b) and ($a>$c) and ($b>$c)){
//    echo $a.' '.$b.' '.$c.'<br>';
//}elseif (($a>$b) and ($c>$a) and ($c>$b)){
//    echo $c.' '.$a.' '.$b.'<br>';
//}else
//    echo $b.' '.$a.' '.$c.'<br>';
//
//$kv_array =[
//    [1,2,3],[4,5,6],[7,8,9]
//];
//
//for ($i = 0; $i < count($kv_array); $i++) {
//    for ($j = 0; $j < count($kv_array[$i]); $j++) {
//        echo $kv_array[$i][$j].' '.$kv_array[$i][$j].'<br>';
//
//    }
//}

/**
 * Задача 1
 * Создать функцию вычисления квадрата числа, без использования встроенной функции
 */

function square($a)
{
    return $a * $a;
}
print ("Число в квадрате: ");
echo square(7);

echo "<br>";
/**
 * Задача 2
 * Создать функцию, которая определяет наибольшее значение из двух чисел, без использования встроенной функции
 */

function more($b, $c)
{
    if ($b > $c) {
        print ("первое число больше, чем второе");
    }else{
        print ("Второе число больше, чем первое");
    }
}

echo more(56, 567);

echo "<br>";

/**
 * Задача 3
 * Создать функцию,которая принимает в аргументе массива, определяет максимальный элемент и возвращает его
 */

$arr=[425,254354,5643,57,325,254];
$maxs=0;
for ($i=0;$i<count($arr);$i++){
    if ($arr[$i]>$maxs){
        $maxs=$arr[$i];
    }
    return $maxs;
}
print ("максимальное число: ");
echo $maxs;
echo "<br>";

/**
 * Задача 4
 * Создать функцию, которая вычисляет площадь круга или квадрата, по заданным парамерам
 */

function circle($r)
{
   return 3.14 *($r*$r);
}
print ("Площадь круга: ");
echo circle(6);
echo "<br>";
function square2($s)
{
 return $s * $s;
}
print ("Площадь квадрата: ");
echo square2(54);
echo "<br>";


/**
 * Задача 5
 * Создать функцию, которая определяет длину ассоциативного массива
 */

$mas= array("a1"=> 345, "a2"=>46, "a3"=>5353, "a4"=>434);

function mas_aco($mas)
{
   return count($mas);
}

print ("Длина ассоциативного массива: ");
echo mas_aco($mas);
?>
