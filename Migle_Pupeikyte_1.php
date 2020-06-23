<?php
echo '<h1> 1.Kintamieji ir salygos, Migle Pupeikyte</h1>';
echo '<h2>Pirma uzduotis</h2>';

    $name = 'Migle';
    $surname = 'Pupeikyte';
    $my_birh_date =1998;
    $year_now = 2020;
    $my_age= $year_now - $my_birh_date;

 echo "As esu $name $surname. Man yra $my_age metai.";

echo '<br>';
echo '<h2>Antra uzduotis</h2>';

    $a=rand(0,4);
    $b=rand(0,4);
    if($a>$b & $b!=0){
        $c = $a/$b;
        echo round($c, 2);
    }else if($a<$b && $a != 0){
        $c = $b/$a;
        echo round($c, 2);
    }else{
        echo 'reiksmes lygios';
    }

echo '<br>';
echo '<h2>Trecia uzduotis</h2>';

    $a=rand(0,25);
    $b=rand(0,25);
    $c=rand(0,25);
    if(($a<$b && $b<$c) || ($a>$b && $b>$c)){
        echo $b;
    }elseif(($b>$a && $a<$c) || ($b>$a && $a>$c)){
        echo $a;
    }else{
        echo $c;
    }

echo '<br>';
echo '<h2>Ketvirta uzduotis</h2>';

    $a=rand(1,10);
    $b=rand(1,10);
    $c=rand(1,10);
    // $a=4;
    // $b=5;
    // $c=7;

    if(($a+$b>$c) && ($a+$c>$b) &&($b+$c>$a)){
        echo 'trikampis gali egzistuoti';
    }else{
        echo 'trikampis neegzistuoja';
    }

echo '<br>';
echo '<h2>Penkta uzduotis</h2>';

    echo $a=rand(0,2);
    echo $b=rand(0,2);
    echo $c=rand(0,2);
    echo $d=rand(0,2);
echo '<br>';
    $suma_0=0;
    $suma_1=0;
    $suma_2=0;

    if($a == 0 ){
    $suma_0+=1;
    }if($b == 0 ){
        $suma_0+=1;
    }if($c == 0 ){
        $suma_0+=1;
    }if($d == 0 ){
        $suma_0+=1;
    }
    echo 'nuliu: ', $suma_0;
    if($a==1){
        $suma_1+=1;
    }if($b==1){
        $suma_1+=1;
    }if($c==1){
        $suma_1+=1;
    }if($d==1){
        $suma_1+=1;
    }
    echo ' ,vienetu: ', $suma_1;

    if($a==2){
        $suma_2+=1;
    }if($b==2){
        $suma_2+=1;
    }if($c==2){
        $suma_2+=1;
    }if($d==2){
        $suma_2+=1;
    }
    echo ' ,dvejetu: ', $suma_2;

echo '<br>';
echo '<h2>Sesta uzduotis</h2>';

$sk1 =rand(1,6);
$string = "<h$sk1>$sk1</h$sk1>";
$spec_char= htmlspecialchars($string);
echo $string= "<h$sk1>$spec_char</h$sk1>";
echo '<br>';
echo '<h2>Septinta uzduotis</h2>';

$pirmas = rand(-10,10);
$antras = rand(-10,10);
$trecias = rand(-10,10);

if($pirmas<0 ){
    echo'<p style= "color: green;">' .$pirmas.'<p/>';
}
if($antras<0){
    echo'<p style= "color: green;">' .$antras.'<p/>';
}
if($trecias <0){
    echo'<p style= "color: green;">' .$trecias.'<p/>';
}
if($pirmas==0 ){
    echo'<p style= "color: red;">' .$pirmas.'<p/>';
}
if($antras==0){
    echo'<p style= "color: red;">' .$antras.'<p/>';
}
if($trecias==0){
    echo'<p style= "color: red;">' .$trecias.'<p/>';
}
if($pirmas >0){
    echo'<p style= "color: blue;">' .$pirmas.'<p/>';
}
if($antras>0){
    echo'<p style= "color: blue;">' .$antras.'<p/>';
}
if($trecias>0){

    echo'<p style= "color: blue;">' .$trecias.'<p/>';
}
echo '<br>';
echo '<h2>Astunta uzduotis</h2>';

$zvakes = rand(5,3000);

if($zvakes>=1000 && $zvakes<2000){
    $nuolaida = $zvakes * 0.3;
    $kaina =$zvakes - $nuolaida; 
    echo 'Nupirko zvakiu: ',$zvakes,', sumokejo: ', $kaina;
}elseif($zvakes>2000){
    $nuolaida = $zvakes * 0.4;
    $kaina =$zvakes - $nuolaida; 
    echo 'Nupirko zvakiu: ',$zvakes,', sumokejo: ', $kaina;
}else{
    $kaina = $zvakes *1;
    echo 'Nupirko zvakiu: ',$zvakes,', sumokejo: ', $kaina;
}

echo '<br>';
echo '<h2>Devinta uzduotis</h2>';

echo $one=rand(0,100);
echo '<br>';
echo $two =rand(0,100);
echo '<br>';
echo $three = rand(0,100);
echo '<br>';
// $one=8;
// $two =40;
// $three = 65;
$amount=3;

$average = ($one +$two +$three)/$amount;
$average = round($average,0);
echo $average;
echo '<br>';
if(($one>10 && $one<90)&&($two>10 && $two<90)&&($three>10 && $three<90)){
    $average = ($one +$two +$three)/3;
    $average = round($average,0);
    echo $average;
}
elseif(($one>10 && $one<90)&&($two>10 && $two<90)){
    $average = ($one +$two)/2;
    $average = round($average,0);
    echo $average;
    
}
elseif(($two>10 && $two<90)&&($three>10 && $three<90)){
    $average = ($three +$two)/2;
    $average = round($average,0);
    echo $average;
}
elseif(($one>10 && $one<90)&&($three>10 && $three<90)){
    $average = ($three +$two)/2;
    $average = round($average,0);
    echo $average;
}
elseif($one>10 && $one<90){
    $average = $one/1;
    $average = round($average,0);
    echo $average;
}
elseif($two>10 && $two<90){
    $average = $two/1;
    $average = round($average,0);
    echo $average;
}
elseif($three>10 && $three<90){
    $average = $three /1;
    $average = round($average,0);
    echo $average;
}

echo '<br>';
echo '<h2>Desimta uzduotis</h2>';
//  echo $hours;

echo '<br>';

$hours = rand(0,12);
$minutes = rand(0,60);
$seconds = rand(0,60);
            
$additional_seconds = rand(0,300);
echo $hours,':',$minutes,':',$seconds;
echo '<br>';
echo $additional_seconds;
$seconds+=$additional_seconds;
if($seconds >=60){
    $seconds/= 60;
    $minutes +=floor($seconds);
    $seconds = $seconds-floor($seconds);
     $seconds *=60;
    // $seconds
}
if($minutes>=60){
    $minutes/= 60;
    $hours +=floor($minutes);
    $minutes = $minutes-floor($minutes);
     $minutes *=60;
}

echo '<br>';
echo $hours,':',$minutes,':',$seconds;

echo '<br>';
echo '<h2>Vienuolikta uzduotis</h2>';
$first=rand(1000,9999);
$second=rand(1000,9999);
$third=rand(1000,9999);
$fourth=rand(1000,9999);
$fifth=rand(1000,9999);
$sixth=rand(1000,9999);

if($first >$second){
    $temp = $first;
    $first=$second;
    $second=$temp;
}
if($first >$third){
    $temp = $first;
    $first=$third;
    $third=$temp;
}
if($first>$fourth){
    $temp = $first;
    $first=$fourth;
    $fourth=$temp;
}
if($first >$fifth){
    $temp = $first;
    $first=$fifth;
    $fifth=$temp;
}
if($first >$sixth){
    $temp = $first;
    $first=$sixth;
    $sixth=$temp;
}
if($second >$third){
    $temp = $second;
    $second=$third;
    $third=$temp;
}
if($second >$fourth){
    $temp = $second;
    $second=$fourth;
    $fourth=$temp;
}
if($second >$fifth){
    $temp = $second;
    $second=$fifth;
    $fifth=$temp;
}
if($second >$sixth){
    $temp = $second;
    $second=$sixth;
    $sixth=$temp;
}
if($third >$fourth){
    $temp = $third;
    $third=$fourth;
    $fourth=$temp;
}
if($third >$fifth){
    $temp = $third;
    $third=$fifth;
    $fifth=$temp;
}
if($third >$sixth){
    $temp = $third;
    $third=$sixth;
    $sixth=$temp;
}
if($fourth >$fifth){
    $temp = $fourth;
    $fourth=$fifth;
    $fifth=$temp;
}
if($fourth >$sixth){
    $temp = $fourth;
    $fourth=$sixth;
    $sixth=$temp;
}
if($fifth>$sixth){
    $temp = $fifth;
    $fifth=$sixth;
    $sixth=$temp;
}
echo $first,"<br>",$second,"<br>", $third,"<br>", $fourth,"<br>", $fifth,"<br>", $sixth;





// echo '<br><h2>bandymas su formatavimu</h2>';
// $number = 12.34556;
// echo $english_format_number = number_format($number, 3);