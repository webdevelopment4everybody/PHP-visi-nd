<?php
echo'<h1>4. Masyvai, Migle Pupeikyte</h1>';
echo'<br>';
echo'<h2>Pirma uzduotis.</h2>';


for($i = 0 ; $i < 30; $i++){
    $num[$i] = rand(5,25);
   }
   
echo '<pre>';
print_r($num);
echo '</pre>';
echo'<br>';
echo'<h2>Antra uzduotis.</h2>';
echo '<h4>a dalis</h4>';
$count=0;
foreach($num as $value){
    if($value>10){
         $value;
        $count++;
    }

}
echo 'Daugiau uz 10: ',$count;
echo '<h4>b dalis</h4>';

foreach($num as $value){
    $max=max($num);
}
echo $max;
echo '<h4>c dalis</h4>';
$suma=0;
foreach($num as $value){
    $suma += $value;
}
echo $suma;
echo '<h4>d dalis</h4>';

foreach($num as $i=>$val){
    $naujas[]=$val-$i;
}
print_r( $naujas);

echo '<h4>e dalis</h4>';

for($a=0; $a<10;$a++){

    array_push($naujas,rand(5,25));
}
echo'<pre>';
print_r($naujas);
echo'<pre>';

echo '<h4>f dalis</h4>';
$odd = array();
$even = array();
foreach ($naujas as $k => $v) {
    if ($k % 2 == 0) {
        $even[] = $v;
    }
    else {
         $odd[] = $v;
    }
}
echo'Lyginis:';
print_r($even);
echo'Nelyginis';
print_r($odd);
echo '<h4>g dalis</h4>';

foreach ($even as $key =>$v) {
    if ($v>15) {
        $v = 0;
        $even[$key] = $v;
    }
}
print_r($even);
echo '<h4>h dalis</h4>';

foreach ($even as $k =>$v) {
    if ($even[$k]>10) {
    break;
    }
}
if($even[$k]<10){
echo 'Tokio nera';
}else{
    print_r($k);
}

echo '<h4>i dalis</h4>';
foreach ($even as $k => $v) {
    if ($k % 2 == 0) {
        unset($even[$k]);
    }
}
print_R($even);

echo'<br>';
echo'<h2>Trecia uzduotis.</h2>';
$naujas = [];
$countA=0;
$countB=0;
$countC=0;
$countD=0;

for ($i=0; $i < 200; $i++){ 
    $raides = 'ABCD';
    $ilgis = strlen($raides);
    $a = $raides[rand(0,$ilgis-1)];
    array_push($naujas, $a);
    
}
foreach($naujas as $key=>$v){
    if($v=='A'){
        $countA++;
        // echo 'A raidziu:', $countA++;
    }
    if($v=='B'){
        $countB++;
        // echo 'A raidziu:', $countA++;
    }
    if($v=='C'){
        $countC++;
        // echo 'A raidziu:', $countA++;
    }
    if($v=='D'){
        $countD++;
        // echo 'A raidziu:', $countA++;
    }
  
}
echo "A raidziu: $countA <br>";
echo "B raidziu: $countB <br>";
echo "C raidziu: $countC <br>";
echo "D raidziu: $countD <br>";
print_r($naujas);


echo'<br>';
echo'<h2>Ketvirta uzduotis.</h2>';

sort($naujas);
print_r($naujas);


echo'<br>';
echo'<h2>Penkta uzduotis.</h2>';

// for ($j=0; $j <3 ; $j++) { 
//     $naujas = [];
//     for ($i=0; $i < 5; $i++){ 
//         $raides = 'ABCD';
//         $ilgis = strlen($raides);
//         $a = $raides[rand(0,$ilgis-1)];
//         array_push($naujas, $a);
//     }
//     echo '<pre>';
//     echo'<br>';
//     print_r($naujas);
//     // echo '</pre>';
// }
// echo $naujas[0];

$char='ABCD';
$length = strlen($char);
$random_letter = '';
$array = [];
for($i = 0; $i < 200; $i++){
    $random_letter = $char[rand(0, $length - 1)];
    array_push($array, $random_letter);
}
$char='ABCD';
$length = strlen($char);
$random_letter = '';
$array2 = [];
for($i = 0; $i < 200; $i++){
    $random_letter = $char[rand(0, $length - 1)];
    array_push($array2, $random_letter);
}
$char='ABCD';
$length = strlen($char);
$random_letter = '';
$array3 = [];
for($i = 0; $i < 200; $i++){
    $random_letter = $char[rand(0, $length - 1)];
    array_push($array3, $random_letter);
}

print_r($array2);
print_r($array3);
print_r($array);

foreach($array as $k => $v)
{
    $add[$k] = $v . $array2[$k] .$array3[$k];
    // $sub[$k] = $v - $a2[$k];
}
var_dump($add);
echo'<br>';
echo'<h2>Sesta uzduotis.</h2>';

$my_array =array();
$my_array2=array();
for($i=0;$i<100;$i++){
    $sk=rand(100,900);
    // array_push($my_array,$sk);
    if(!in_array($sk,$my_array)){
        array_push($my_array,$sk);
    }else{
       $i--;
    }
}
for($i=0;$i<100;$i++){
    $sk=rand(100,900);
    // array_push($my_array,$sk);
    if(!in_array($sk,$my_array2)){
        array_push($my_array2,$sk);
    }else{
       $i--;
    }
}
print_r($my_array);
print_r($my_array2);
$result = array_unique($my_array);
var_dump($result);//patikrinau ar tikrai visos unikalios
$result = array_unique($my_array2);
var_dump($result);//pat
echo'<br>';
echo'<h2>Septinta uzduotis.</h2>';

$result = array_diff($my_array, $my_array2);

print_r($result);
echo'<br>';
echo'<h2>Astunta uzduotis.</h2>';

$result1 = array_intersect($my_array, $my_array2);
print_r($result1);
echo'<br>';
echo'<h2>Devinta uzduotis.</h2>';
$result2 = array_combine($my_array, $my_array2);
print_r($result2);
echo'<br>';
echo'<h2>Desimta uzduotis.</h2>';

$arr = [0=>rand(5,25),1=>rand(5,25)];
$next=0;
for ($i=0; $i <9; $i++) { 
    $next = $arr[$i]+$arr[$i+1];
    array_push($arr,$next);
}
print_r($arr);