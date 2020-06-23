<?php
echo'<h1>6. Funkcijos, Migle Pupeikyte</h1>';
echo'<br>';
echo'<h2>=================================Pirma uzduotis.=========================================</h2>';
function h1($tekstas){
    $h1t="<h1>$tekstas</h1>";
    return $h1t;
}
echo h1('Funkcijos');
echo'<br>';
echo'<h2>=================================Antra uzduotis.=========================================</h2>';

function h2($tekstas, $tagai){
    $h1t="<h$tagai>$tekstas</h$tagai>";
    return $h1t;
}
echo h2('Funkcijos',3);

echo'<br>';
echo'<h2>=================================Trecia uzduotis.=========================================</h2>';

function tag3($tagH) {
	$number = preg_replace( '/\D/', '', html_entity_decode($tagH) );
  	echo "<h1> $number </h1>".'</br>';
}
$kintamasis= "labas";
tag3($kintamasis = md5(time()));
 echo'<br>';
echo'<h2>=================================Ketvirta uzduotis.=========================================</h2>';
function division($Sveikas_sk){
    $count=0;
    if($Sveikas_sk )
    if(is_array($Sveikas_sk) || is_int($Sveikas_sk) ){     
        for($i=1;$i<$Sveikas_sk; $i++){
            if($Sveikas_sk%$i==0 && $i != $Sveikas_sk && $i != 1){
                $count++;
            }
        }  
    }else{
        echo ' Tik sveikas skaicius ir masyvas gali but!';
        exit;
    }
    return $count;
}
echo division(4);
echo'<br>';
echo'<h2>=================================Penkta uzduotis.=========================================</h2>';
$masyvas =[];
$a=[];
$count=0;
for ($i=0; $i < 10; $i++) { 
    $masyvas[$i]=rand(1,10);
   if(division($masyvas[$i])){
        array_push($a, $masyvas[$i]);  
    }
}
sort($a);
echo '<pre>';
print_r($masyvas);
print_r($a);
echo '<br>';


function swap(&$arr, $a, $b) {
    $tmp = $arr[$a];
    $arr[$a] = $arr[$b];
    $arr[$b] = $tmp;
}
echo'<h2>=================================Sesta uzduotis.=========================================</h2>';
$masyvas3 = [];
for ($i=0; $i < 100; $i++) { 
    $masyvas3[$i] = rand(333, 777);
    if(!division($masyvas3[$i])){
        echo ($masyvas3[$i]);
        unset($masyvas3[$i]);
        echo '<br>';
    }
}
print_r($masyvas3);
echo'<br>';
echo'<h2>=================================Septinta uzduotis.=========================================</h2>';
function add($mas){
    $m=[];
    foreach(range(1,rand(10,20)) as $val){
        $m[]=rand(0,10);
    }
    if(empty($mas)){
        $last_key = count($m);
        $m[$last_key]=0;
        return $m;
    }
    $last_key = count($m);
    $m[$last_key]=$mas;
    return $m;
}
$masyvas=[];
foreach (range(1,rand(10,30)) as $value) {
    $masyvas = add($masyvas);
}
print_r($masyvas);
echo'<br>';
echo'<h2>=================================Astunta uzduotis.=========================================</h2>';

function suma($array,$suma=0){
    foreach ($array as $val){
        if(is_array($val)){
            suma($val,$suma);
        }
        else{
            $suma +=$val;
        }
    }
    return $suma;
}
print_r(suma($masyvas));

echo'<br>';
echo'<h2>=================================Devinta uzduotis.=========================================</h2>';

$masyvas_devintos = [];
function bandom(){
    static $callCount = 0;
    $callCount++;
for ($i=1; $i < 4; $i++) { 
    $skaiciuks = rand(1, 33);
    $masyvas_devintos[] = rand(1, 33); 
}
do{
        foreach ($masyvas_devintos as $key => $value) {
            if(isPrime($value)){
                array_push($masyvas_devintos, rand(1, 33));
            } 
            else{
            break;
            }
        }
        return $masyvas_devintos;
} while(!isPrime($value));
}
print_r(bandom($masyvas_devintos));
function isPrime($number) {
    $n = abs($number);
    $i = 2;
    while ($i <= sqrt($n))
    {
        if ($n % $i == 0) {
            return false;
        }
        $i++;
    }
    return true;
}
echo'<br>';
echo'<h2>=================================Desimta uzduotis.=========================================</h2>';
$arr4 = [];
for($i = 0; $i<10; $i++){
    for($j = 0; $j<10; $j++){
        $arr4[$i][$j] = rand(1, 100);
    }
}
function primeAverage ($arr4){
    $primeSum = 0;
    $primeCount = 0;
    foreach($arr4 as $arr){
        foreach($arr as $number){
            if(division($number) == 0){
                $primeSum += $number;
                $primeCount++;
            }
        }
    }
    return $primeSum / $primeCount;
}
function findLowNumber($arr4){
    $lowestNumber = 999;
    foreach($arr4 as &$arr){
        foreach($arr as &$number){
            if($number < $lowestNumber){
                $lowestNumber = $number;
            }
        }
    }
    return $lowestNumber;
}
$sumCounter = 0;
while(primeAverage($arr4) < 70){
    $sumCounter++;
    $lowNumber = findLowNumber($Arr10);
    foreach($Arr10 as $key => &$arr){
        foreach($arr as $key2 => &$number){
            if($lowNumber == $number){
                $number += 3;
                break;
            }
        }
    }
}
