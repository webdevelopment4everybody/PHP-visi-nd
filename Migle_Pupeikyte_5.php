<?php
echo'<h1>5. Masyvai, Migle Pupeikyte</h1>';
echo'<br>';
echo'<h2>Pirma uzduotis.</h2>';

$cols = 10;
$rows = 5;
$mymasyvas = array(array());

for ($i = 0; $i < $cols; $i++) {
  for ($j = 0; $j < $rows; $j++) {
    $myArray[$i][$j] = rand(5,25);
  }
}
echo '<pre>';
print_r($myArray);
echo'<br>';
echo'<h2>Antra uzduotis.</h2>';
echo '<h4>a dalis</h4>';
$count=0;
foreach($myArray as $key1 => $value1){
    foreach($value1 as $key2 => $value2){
        if($value2 > 10){
            $value2;
            $count++;
        }
    }
  }
echo 'Daugiau uz 10: ',$count;
echo'<h2>Antra uzduotis.</h2>';
echo '<h4>b dalis</h4>';
function highestValue($myArray) {
  foreach($myArray as $key => $value) {
      if (is_array($value)) {
          $myArray[$key] = highestValue($value);
      }
  }
    return max($myArray);
}
echo highestValue($myArray);
echo'<h2>Antra uzduotis.</h2>';
echo '<h4>c dalis</h4>';

// $final = array_shift($myArray);
// print_r($final);

// foreach ($final as $key => &$value){
//    $value += array_sum(array_column($myArray, $key));
// }    

// unset($value);
// print_r($final);

$newarr=array();
foreach($myArray as $value){
  foreach($value as $key=>$secondValue){
       if(!isset($newarr[$key])){
          $newarr[$key]=0;
        }
       $newarr[$key]+=$secondValue;
   }
}
print_r($newarr);
echo'<h2>Antra uzduotis.</h2>';
echo '<h4>d dalis</h>';
foreach ($myArray as $key => $value) {
  for($i = 0; $i < 3; $i++){
      array_push($myArray[$key], rand(5, 25));
  }
}
print_r($myArray);
echo'<h2>Antra uzduotis.</h2>';
echo '<h4>e dalis</h>';

$newA=array();
foreach ($myArray as $key => $value){
  if(!isset($newA[$key])){
    $newA[$key]=0;
  }
  $newA[$key] = array_sum($value);
}
  print_r($newA);

echo'<h2>Trecia uzduotis.</h2>';

$array = array();
$raides = 'ABCDEFGHJKLMNOPRSTUVZ';
for ($i=0; $i < 10; $i++) { 
  $rand = rand(2,20);
  $ilgis = strlen($raides);
  for($j=0; $j<$rand;$j++){
    $a = $raides[rand(0,$ilgis-1)];
    $array[$i][$j]=$a;
    
  }
}

function sortValuesRecursive(&$array)
{
    $isArray = false;

    foreach ($array as $key => &$value) {
        if (is_array($value)) {
            $isArray = true;
            sortValuesRecursive($value);
        }
    }

    if ($isArray === false) {
        asort($array);
    }
}

sortValuesRecursive($array);
print_r($array);
echo'<h2>Ketvirta uzduotis.</h2>';

foreach ($array as $key => $value) {
  sort($array);
}
print_r($array);

echo'<h2>Penkta uzduotis.</h2>';

$masyvas = array();
for ($i=0; $i < 30; $i++) { 

  $masyvas[$i] = ['user_id '=> mt_rand(1,1000), 'place_in_row' => mt_rand(0,100)];

}
print_r($masyvas);

echo'<h2>Sesta uzduotis.</h2>';
echo 'Didejancia tvarka user_id, <br>';
asort($masyvas);
print_r($masyvas);
echo 'Mazejancia tvarka place_in_row, <br>';
usort($masyvas, 'sortByOrder');
function sortByOrder($a, $b) {
  return $b['place_in_row'] - $a['place_in_row'];
}
print_r($masyvas);
echo'<h2>Septinta uzduotis.</h2>';

for ($i=0; $i < 30; $i++) { 
  $letter='';
  $letter1 ='';
  for ($j=0; $j < rand(5,15) ; $j++) { 
      
      $letter .= chr(rand(97,122));
      $letter1 .= chr(rand(97,122));
      
    }

  $masyvas[$i]['name']= $letter;
  $masyvas[$i]['surname']= $letter1;

}
print_r($masyvas);
echo'<h2>Astunta uzduotis.</h2>';

$masyvas4 = [];
for ($i=0; $i < 10; $i++) { 
  $masyvo_reiksmes = rand(0, 5);
  if($masyvo_reiksmes == 0){
      $masyvas4[$i] = rand(0, 10);
  } else {
    for ($j=0; $j < $i + 1; $j++) { 
        $masyvas4[$i][$j] = rand(0, 10);
        }
    }
}
print_r($masyvas4);
echo'<h2>Devinta uzduotis.</h2>';
echo 'Masyvo visu reiksmiu suma: ';
$masyvo_ilgis=10;
$suma = 0;
for ($i=0; $i < $masyvo_ilgis; $i++) { 
    $key =  $i;
    $suma += array_sum(array_column($masyvas4,$key));
}
print_r($suma + array_sum($masyvas4));

usort($masyvas4, 
    function($a, $b){
        return (is_array($a) ? array_sum($a) : $a) <=> (is_array($b) ? array_sum($b) : $b);
    }
);

echo '<br>';
print_r($masyvas4);

echo'<h2>Desimta uzduotis.</h2>';

// $masyvas3=[];
// $valuer='#%+*@%';
// $ilgis = strlen($valuer);

// for ($i=0; $i <10 ; $i++) { 
//   for ($j=0; $j <10 ; $j++) { 
//     $shuffled=str_shuffle($valuer);
//     $sub=substr($shuffled,0,1);
//     $masyvas3[$i][$j]=['value '=> $sub];
//     $masyvas3[$i][$j]=['color' => rand_color()];
//     echo "<td>",,"</td>";
//     echo '<p style="width: 8px; height: 10px; display: inline-block;"></p>';

//  }
//  echo '<br>';
// }
// print_r($masyvas3);
// function rand_color() {
//   return '#' . str_pad(dechex(mt_rand(0, 0xFFFFFF)), 6, '0', STR_PAD_LEFT);
// }

echo '=================================================================================== <br>';
 
// $hex = '#';
 
// //Create a loop.
// foreach(array('r', 'g', 'b') as $color){
//     //Random number between 0 and 255.
//     $val = mt_rand(0, 255);
//     //Convert the random number into a Hex value.
//     $dechex = dechex($val);
//     //Pad with a 0 if length is less than 2.
//     if(strlen($dechex) < 2){
//         $dechex = "0" . $dechex;
//     }
//     //Concatenate
//     $hex .= $dechex;
// }
// $valuer='#%+*@%';
// $ilgis = strlen($valuer);
// for ($i=0; $i <10 ; $i++) { 
//   for ($j=0; $j <10 ; $j++) { 
 
//   $shuffled=str_shuffle($valuer);
//     $sub=substr($shuffled,0,1);
//     $masyvas3[$i][$j]=['value '=> $sub];
//     $masyvas3[$i][$j]=['color' => $hex];
//   }
//    echo '<br>';
//   }
//   print_r($masyvas3);
function randomColor(){
  $result = array('value' => $sub, 'color' => '');
  foreach(array($sub) as $col){
    $shuffled=str_shuffle($valuer);
    $sub=substr($shuffled,0,1);
      $rand = mt_rand(0, 255);
      $result['value'][$col] = $rand;
      $dechex = dechex($rand);
      if(strlen($dechex) < 2){
          $dechex = '0' . $dechex;
      }
      $result['color'] .= $dechex;
  }
  return $result;
}

$myColor = randomColor();
print_r($myColor);