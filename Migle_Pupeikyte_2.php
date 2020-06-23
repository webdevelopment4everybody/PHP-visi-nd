<?php
echo'<h1>2. Stringai (movie edition) Migle Pupeikyte</h1>';
echo'<br>';
echo'<h2>Pirma uzduotis.</h2>';

$name = "Jonas";
$surname = "Jonaitis";

if((strlen($name))<(strlen($surname))){
    echo $name;
}else{
    echo $surname;
}
echo'<br>';
echo'<h2>Antra uzduotis.</h2>';

$name = "Antanas";
$surname = "Antanaitis";

echo strtoupper($name),' ';
echo strtolower($surname);

echo'<br>';
echo'<h2>Trecia uzduotis.</h2>';

$name = "Aktore";
$surname="Aktoraite";
echo $new = substr($name,0,1);
echo $new2 = substr($surname, 0,1);

echo'<br>';
echo'<h2>Ketvirta uzduotis.</h2>';

$name = "Grazina";
$surname="Grazinaite";
echo $new = substr($name,-3,3);
echo $new2 = substr($surname, -3,3);//nuo 3 pozicijos nuo galo, kerpam 3.

echo'<br>';
echo'<h2>Penkta uzduotis.</h2>';

$str="An American in Paris";
$new_str=strtolower($str);

echo $newstr = str_replace( 'a','*', $new_str);

echo'<br>';
echo'<h2>Sesta uzduotis.</h2>';

$str2="An American in Paris";
$str2_to_lower=strtolower($str2);

echo substr_count($str2_to_lower, 'a');

echo'<br>';
echo'<h2>Septinta uzduotis.</h2>';

// $str3="Breakfast at Tiffany's";
// $str3= "2001: A Space Odyssey" ;
$str3="It's a Wonderful Life";
$str3_to_lower=strtolower($str3);
echo $newstr = str_replace( ['a','e','i','o','u'],'', $str3_to_lower);

echo'<br>';
echo'<h2>Astunta uzduotis.</h2>';

echo $a='Star Wars: Episode '.str_repeat(' ', rand(0,5)). rand(1,9) . ' - A New Hope';
echo '<br>';
echo $episode_number=(int)filter_var($a, FILTER_SANITIZE_NUMBER_INT);//nuima nereikalingus char,isskyrus +/- ir skaicius

echo'<br>';
echo'<h2>Devinta uzduotis.</h2>';

// $str4="Don't Be a Menace to South Central While Drinking Your Juice in the Hood";
$str4="Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale";
$arr1= explode(" ",$str4);
print_r($arr1);
echo '<br>';
$count=0;

foreach ($arr1 as $word) {
    if(mb_strlen($word) <= 5) {
        echo $word,'(',mb_strlen($word),')','<br>';
        $count++;
    }
}
echo 'Viso zodziu yra: ',$count;
echo'<br>';
echo'<h2>Desimta uzduotis.</h2>';

$alphabet='abcdefghijklmnopqrstuvwxyz';
$length=3;
echo $shuffled_alphabet= str_shuffle($alphabet);
echo '<br>';
echo $final= substr($shuffled_alphabet, 0,$length);

echo'<br>';
echo'<h2>Vienuolikta uzduotis.</h2>';

$str5= "Don't Be a Menace to South Central While Drinking Your Juice in the Hood";
$str6="Tik nereikia gąsdinti Pietų Centro, geriant sultis pas save kvartale";

$length=10;
$joined_str=$str5." ".$str6;
$to_array = explode(" ",$joined_str);
$shuffled_arr = shuffle($to_array);
$sliced_array = array_slice($to_array,0,$length);
echo '<br>', join(" ",$sliced_array),".";

