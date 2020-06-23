<?php
echo '<h1>3. Ciklai. Migle Pupeikyte<h1/>';
echo '<br>';
echo '<h2>Pirma uzduotis.</h2>';
echo '<h4>a dalis.</h4>';
$star = '*';
for($i=0; $i<400;$i++){
    // echo $star;
    echo'<p style= "color:pink; display:inline-block;">'.$star.'</p>';
}
echo '<br>';
echo '<h4>b dalis.</h4>';
for($i=0; $i<400;$i+=50){
    echo '<br>';
    for($a=0;$a<50;$a++){
    echo'<p style= "color:pink; display:inline-block;">'.$star.'</p>';
    }
}
echo '<br>';
echo '<h2>Antra uzduotis.</h2>';
$count=0;
for ($i=0; $i < 300; $i++) { 
    $num = rand(0,300);
    if($num >275){
        echo'<p style= "color:red; display:inline-block;">'.$num.'</p>';
    }else{
        echo $num;
    }
    echo ' ';
    if($num>150){
        $count++;
    }
    echo ' ';
}
echo '<br>';
echo 'Didesniu nei 150 yra: ',$count;

echo '<br>';
echo '<h2>Trecia uzduotis.</h2>';

$sk = 77;
$riba=3000;
while (true) {
    echo $sk;
    if (($sk += 77) < $riba) echo ', ';
        else break;
}
echo '<br>';
echo '<h2>Ketvirta uzduotis.</h2>';
$stars='*';
for ($i=0; $i < 100; $i+=10) { 
    echo '<br>';
    for ($j=0; $j <10 ; $j++) { 
        echo'<p style= "color:purple; display:inline-block; width:40px; height:2px;">'.$stars.'</p>';
    }
}

echo '<br>';
echo '<h2>Penkta uzduotis.</h2>';
$stars='*';
for ($i=1; $i<=10; $i++) { 
    echo '<br>';
    for ($j=1; $j<=10; $j++) {
        if($i==$j || $i+$j==10+1){
           echo '<p style= "color:red; display:inline-block; width:40px; height:2px;">'.$stars.'</p>';
        }
        else{
            echo '<p style= "color:purple; display:inline-block; width:40px; height:2px;">'.$stars.'</p>';
        }
    } 
}
echo '<br>';
echo '<h2>Sesta uzduotis.</h2>';
echo '<h4>a dalis.</h4>';
$moneta = rand(0,1);
do{
     $moneta = rand(0,1);
     if($moneta ==0){
         echo 'H';
     }else{
         echo 'S';
     }
}while($moneta == 1); //koliskrenta  nulis
echo '<br>';
echo '<h4>b dalis.</h4>';
$count = 0;
do{
    $moneta = rand(0, 1); // 0 herbas, 1 skaicius
    // echo $moneta;
    if($moneta === 0){
        echo 'H';
        $count++;
    }
    else{
        echo 'S';
    }
    } while($count !== 3);
echo '<br>';
echo '<h4>c dalis.</h4>';
$herbas=0;

$count = 0;
while($herbas<3){
    $moneta = rand(0, 1); // 0 herbas, 1 skaicius
    $count++;
    if ($moneta == 0) {
        echo"H";
        
        $herbas++;
    } else {
        echo"S";
        $herbas = 0;
    }
}
echo"<br> Reikejo ", $count," kartu(-us) mesti, kad iskristu 3 herbai is eiles";

echo '<br>';
echo '<h2>Septinta uzduotis.</h2>';
$count=0;
$ptr=0;
$kzt=0;
do{ 
    $Petro_taskai = rand(10,20);
    $Kazio_taskai = rand(5,25);
    $ptr +=$Petro_taskai;
    $kzt +=$Kazio_taskai;
    if($ptr>=222){
        echo 'Partiją laimėjo: Petras, ',$ptr,'<br>';
    break;
    }
    if($kzt>=222){
    echo 'Partiją laimėjo: ​Kazys, ',$kzt,'<br>';
    break;
    }

$count++;
}while($count<=222);
echo "Kazys surinko: $kzt, Petras surinko: $ptr.";

echo '<br>';
echo '<h2>Astunta uzduotis.</h2>';

$rombas = "<div style = 'display: inline block; max-width: 100vw;margin-left:120px'>";
for ($i=1; $i<=11; $i++) {    //piramide
    $margin = $i*-10;
    $line = "<div style = 'display: inline block; width: 100%;line-height: 20px;font-size: 40px;margin-left:$margin'>";
    foreach (range(1, $i) as $value) {
        $r = rand(0, 255);
        $g = rand(0, 255);
        $b  = rand(0, 255);
        $color = "rgb($r, $g, $b)";
        $line .= "<span style='color:$color;'>*</span>";
    }
    $line .= "</div>";
    $rombas .= $line;
}
for ($i=10; $i>=1; $i--) {//apvesrta piramide
    $margin = $i*-10;
    $line = "<div style = 'display: inline block; width: 100%;line-height: 20px;font-size: 40px;margin-left:$margin'>";
    foreach (range(1, $i) as $value) {
        $r = rand(0, 255);
        $g = rand(0, 255);
        $b  = rand(0, 255);
        $color = "rgb($r, $g, $b)";
        $line .= "<span style='color:$color;'>*</span>";
    }
    $line .= "</div>";
    $rombas .= $line;
}
$rombas .= "</div>";
echo $rombas;

echo '<h2>Devinta uzduotis.</h2>';

$timeStart = microtime(true);
for ($i=0; $i < 1000000; $i++) { 
    $c = '10 bezdzioniu suvalge 20 bananu.';
}
$timeEnd = microtime(true);
$timeViengubos = $timeEnd - $timeStart;
$timeStart = microtime(true);
for ($i=0; $i < 1000000; $i++) { 
    $c = "10 bezdzioniu suvalge 20 bananu.";
}
$timeEnd = microtime(true);
$timeDvigubos = $timeEnd - $timeStart;
echo "Viengubos: $timeViengubos";
echo " <br> Dvigubos: $timeDvigubos";
$difference = $timeDvigubos - $timeViengubos;
echo " <br> Skirtumas: $difference";
echo '<br>';
echo '<h2>Desimta uzduotis.</h2>';

echo '<h4>a dalis.</h4>';
$vinys = 5;
for($i=1;$i<=$vinys;$i++){
    $ikale_jau=0;
    $count=0;
echo ' vinis: ',$i;
while($ikale_jau<=850){
    $ikalimo_gylis=rand(5,20);//5,10,5
    $ikale_jau+=$ikalimo_gylis;//15 =15
    $count++;
}
echo '<br>Prireike smugiu: ',$count;
echo '<br>';
unset($count);
}
echo '<br>';
echo '<h4>b dalis.</h4>';

$vinys = 5;
for($i=1;$i<=$vinys;$i++){
    $ikale_jau=0;
    $count=0;
echo ' vinis: ',$i;
while($ikale_jau<=850){
    $prob=mt_rand(0,1);
    if($prob ==0){
    $ikale_jau+=0;
    }else{
        $ikalimo_gylis=rand(5,20);//5,10,5
        $ikale_jau+=$ikalimo_gylis;//15 =15
    }
    $count++;
}
echo '<br>Prireike smugiu: ',$count;
echo '<br>';
unset($count);
}
echo '<br>';
