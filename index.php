
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
 var_dump($a+$b). "<br>";
$c = 8 ;
$d = 4;
 var_dump($c-$d). "<br>";
 $e = 8 ;
$f = 4;
 var_dump($e/$f). "<br>";
 $g = 8 ;
$h = 4;
 var_dump($g*$h). "<br>";
 echo "<h2>Prirovnavaci operatory</h2>";
 $i = 8;
 $i++;
 var_dump($i++). "<br>";

 $j = 8;
 $j--; 
  var_dump($j--). "<br>";
  
  $k = 8;
  $l = 4;
  $k+=$l;
  var_dump($k+=$l). "<br>";
  $m = 8;
  $n = 4;
  $m-=$n;
  var_dump($m-=$n). "<br>";
  $o = 8;
  $p = 4;
  $o*=$p;
  var_dump($o*=$p). "<br>";
  $q = 8;
  $r = 4;
  $q/=$r;
  var_dump($q-=$r). "<br>";
  echo "<h2>Porovnavaci operatory</h2>";
  $s = 8;
  $t = 4;
  var_dump($s==$t). "<br>";
  $u = 8;
  $v = 4;
  var_dump($u!=$v). "<br>";
  $w = 8;
  $x = 4;
  var_dump($w>$x). "<br>";
  $y = 8;
  $z = 4;
  var_dump($y<$z). "<br>";
  echo "<h2>Logicke operatory</h2>";
  $A = 8;
  $B = 4;
  var_dump($A||$B). "<br>";
  $C = 8;
  $D = 4;
  var_dump($A&&$B). "<br>";
  $E = 8;
  var_dump(!$E). "<br>";
  ?>








