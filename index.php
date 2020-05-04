<?php


require 'tracy/tracy.phar';
use Tracy\Debugger;
Debugger::enable();
Debugger::$strictMode = true;?>
 



?>
<?php
echo "<h2>ECHO VYPIS</h2>";

$Celecislo = 2;
       echo gettype ($Celecislo);

echo '<br>';

$Retezec = "Ahoj";
       echo gettype ($Retezec);

echo '<br>';

$Desetinecislo = 0.5;
       echo gettype ($Desetinecislo);

echo '<br>';

$Logickapromenna = TRUE;
       echo gettype ($Logickapromenna);

echo '<br>';
?>
<br>

<?php
echo "<h2>PRINT VYPIS</h2>";

$Number = 2;
        print gettype ($Number);

echo '<br>';

$Decimals = 0.77;
        print gettype ($Decimals);
        
echo '<br>';        

$Text = "Hello";
        print gettype ($Text);
        
echo '<br>';        
   
$Logicvariable = FALSE;
        print gettype ($Logicvariable);
        
?>
<br>
<?php
echo "<h2> Spojování řetězců</h2>";

echo "text1" . "text2" ; 

?>
<br>
<?php

echo "<h2>Escape sekvence</h2>";
// <img src = "$src" title="$title" alt="$title />
$src = "auto.jpg";
$title = "obraz auta";
echo "<img src=\"$src\"title=\"$title\"alt=\"$title\"/>" . "<br>";

$cena = " 18 Kc";
echo $cena .  "\\";

?>
<br>
<?php
echo "<h2>Aritmeticke operatory</h2>";
$a = 8;
$b = 4;
 dump($a+$b). "<br>";
$c = 8 ;
$d = 4;
 dump($c-$d). "<br>";
 $e = 8 ;
$f = 4;
 dump($e/$f). "<br>";
 $g = 8 ;
$h = 4;
 dump($g*$h). "<br>";
 echo "<h2>Prirovnavaci operatory</h2>";
 $i = 8;
 $i++;
 dump($i++). "<br>";

 $j = 8;
 $j--; 
  dump($j--). "<br>";
  
  $k = 8;
  $l = 4;
  $k+=$l;
  dump($k+=$l). "<br>";
  $m = 8;
  $n = 4;
  $m-=$n;
  dump($m-=$n). "<br>";
  $o = 8;
  $p = 4;
  $o*=$p;
  dump($o*=$p). "<br>";
  $q = 8;
  $r = 4;
  $q/=$r;
  dump($q/=$r). "<br>";
  echo "<h2>Porovnavaci operatory</h2>";
  $s = 8;
  $t = 4;
  dump($s==$t). "<br>";
  $u = 8;
  $v = 4;
  dump($u!=$v). "<br>";
  $w = 8;
  $x = 4;
  dump($w>$x). "<br>";
  $y = 8;
  $z = 4;
  dump($y<$z). "<br>";
  echo "<h2>Logicke operatory</h2>";
  $A = 8;
  $B = 4;
  dump($A||$B). "<br>";
  $C = 8;
  $D = 4;
  dump($A&&$B). "<br>";
  $E = 8;
  dump(!$E). "<br>";
  ?>
<br>
<?php
$michalDvorsky1 = 2;
$michalDvorsky2 = 1 . "<br>";

if(2 > 1); {
echo "DvorskyMichal" . "<br>"; 
}

echo "<br>";

$nmb1 = 25;
$nmb2 = 5;
if ($nmb1 > $nmb2) {
echo "Michal"  . "<br>"; }
else { 
echo "Dvorsky"  . "<br>"; }



$nmb3 = 10;
$nmb4 = 5;
if ($nmb3 > $nmb4){
echo "Dvorsky" . "<br>"; }
else {
    echo "Michal";
}
       echo "<br>";
       
?>
<?php
$cislo1 = 2;
$cislo2 = 1;
if ($cislo1 < $cislo1){ 
echo "Dvorsky" . "<br>"; } 
else {
echo "Michal" . "<br>"; }

 if ($cislo1 < 5) {
     if ($cislo2 < 7) {
     echo "Dvorsky"; }
 }
?>
<br>
<br>
<?php

switch ($michalDvorsky1) {
 case 1:
 echo "1";
 break;
 case 2:
 echo "2";
 break;
 case 3:
     echo"3";
     break;
 case 4:
     echo "4";
     break;
 case 5:
     echo"5";
     break;
 case 6:
     echo"5+";
     break;
 default:
     
     
}
 echo "<br>";
 echo "<br>";
 
    $auta = array(1=>"audi",2=>"bmw",3=>"škoda",4=>"vw",5=>"mergl",6=>"renault",7=>"opel",8=>"toyota",9=>"lamborghini",10=>"hnujdaj");
    dump ($auta);
array (10)
?>
<br>
<?php
$PC1 ["pocitace a software"]["stolni pocitace"]["sestava"] = ["Procesor" => 'Intel i5- 9600KF', "RAM" => 8 ,"Zdroj" => 550, "Vaha" => 5.5,"grafika" => 'RTX 2060'];
$PC2 ["pocitace a software"]["stolni pocitace"]["sestava"] = ["Procesor" => 'Intel Core i7-9700K', "RAM" => 16 ,"Zdroj" => 650, "Vaha" => 5.2,"grafika" => 'RTX 2070'];
$PC3 ["pocitace a software"]["stolni pocitace"]["sestava"] = ["Procesor" => 'Intel i5- 9600KF', "RAM" => 8 ,"Zdroj" => 500, "Vaha" => 5.0,"grafika" => 'RTX 2060S'];
$PC4 ["pocitace a software"]["stolni pocitace"]["sestava"] = ["Procesor" => 'Intel Core i5-9400F', "RAM" => 16 ,"Zdroj" => 700, "Vaha" => 7.5,"grafika" => 'RTX 2060'];
$PC5 ["pocitace a software"]["stolni pocitace"]["sestava"] = ["Procesor" => 'Intel Core i5-8400', "RAM" => 8 ,"Zdroj" => 500, "Vaha" => 5.5,"grafika" => 'GTX 750Ti'];
$PC6 ["pocitace a software"]["stolni pocitace"]["sestava"] = ["Procesor" => 'Intel i5- 9600KF', "RAM" => 8 ,"Zdroj" => 600, "Vaha" => 6.5,"grafika" => 'RTX 2060'];
$PC7 ["pocitace a software"]["stolni pocitace"]["sestava"] = ["Procesor" => 'Intel Core i9-10900X', "RAM" => 32 ,"Zdroj" => 2000, "Vaha" => 10.7,"grafika" => 'RTX 2080Ti'];
$PC8 ["pocitace a software"]["stolni pocitace"]["sestava"] = ["Procesor" => 'Intel Core i7-9700KF', "RAM" => 16 ,"Zdroj" => 450, "Vaha" => 5.5,"grafika" => 'GTX 1660'];
$PC9 ["pocitace a software"]["stolni pocitace"]["sestava"] = ["Procesor" => 'Intel Core i5-9600K', "RAM" => 8 ,"Zdroj" => 550, "Vaha" => 6.3,"grafika" => 'GTX 1600'];
$PC10 ["pocitace a software"]["stolni pocitace"]["sestava"] = ["Procesor" => 'Intel Core i3-8100', "RAM" => 8 ,"Zdroj" => 500, "Vaha" => 5.6,"grafika" => 'GTX 960'];

dump ($PC1,$PC2,$PC3,$PC4,$PC5,$PC6,$PC7,$PC8,$PC9,$PC10);
?>


    
    










