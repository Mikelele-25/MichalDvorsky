<?PHP
$cislo1 = 2;
$cislo2 = 5;
echo $cislo1 * $cislo2;
?>
<br>
<br>
<?PHP
echo date('H:i:s');
?>
<br>
<br>
<?PHP
$jmeno = ' ';
echo $jmeno;
$jmeno = 'Michal';
echo $jmeno;
$jmeno = ' ';
echo $jmeno;
$jmeno = 'Dvorsky';
echo $jmeno;
?>
<br>

<?PHP
echo 4+1;
?>

<br>
<?PHP
$a = 2;
$b = 3;
echo $a + $b;
?>
<br>
<br>
<?PHP
$a = 2;
$a++;
echo $a;
?>
<br>
<br>
<?PHP 
$a = 2;
$b = 3;
echo $a += $b;
?>
<br>
<br>
<?PHP
$a = 2;
$a--;
echo $a;
?>
<br>
<br>
<?PHP
$a = 2;
$b = 3;
echo $a-=$b;
?>
<br>
<br>
<?PHP
$a = 2;
$b = 3;
echo $a*=$b;
?>
<br>
<br>
<?PHP
$a = 2;
$b = 3;
echo $a/=$b;
?>
<br>
<br>
<?PHP
$a = 2;
$b = 3;
echo $a==$b;
?>
<br>
<br>
<?PHP
$a = 2;
$b = 3;
echo $a!=$b;
?>
<br>
<br>
<?PHP
$a = 2;
$b = 3;
echo $a>$b;
?>
<br>
<br>
<?PHP
$a = 2;
$b = 3;
echo $a<=$b;
?>
<br>
<br>
<?PHP
$a = 2;
$b = 3;
echo $a||$b;
?>
<br>
<br>
<?PHP
$a = 2;
$b = 2;
echo $a && $b;
?>
<br>
<br>
<?PHP
$a = 2;
$b = 3;
echo $a-$b;
?>
<br>
<br>
<?PHP
$a = 2;
$b = 3;
echo $a/$b;
?>
<br>
<?PHP
$jmeno = 'Michal';

$jmena = array('Michal','Jakub','Dominik');
var_dump($jmeno);
var_dump($jmena);
?>
<br>
<?PHP
$produkty = array('nazev => Mobily','typ => Apple','vaha' => 0.75,'mnozstvi' => 30);
$produkt = array('nazev => Mobily', 'typ => Nokia','vaha' => 1, 'mnozstvi' => 20);
   $produkt1 = array('nazev => Mobily', 'typ => Sony','vaha' => 0.50, 'mnozstvi' => 35);
  $produkt2 = array('nazev => Mobily', 'typ => Alcatel','vaha' => 0.25, 'mnozstvi' => 9);
  $produkt3 = array('nazev => Mobily', 'typ => LG','vaha' => 0.50, 'mnozstvi' => 12);
  $produkt4 = array('nazev => Mobily', 'typ => Blackberry','vaha' => 0.70, 'mnozstvi' => 23);
  $produkt5 = array('nazev => Mobily', 'typ => Motorola','vaha' => 0.90, 'mnozstvi' => 9);
  
    var_dump($produkty);
    var_dump($produkt);
    var_dump($produkt1);
    var_dump($produkt2);
    var_dump($produkt3);
    var_dump($produkt4);
    var_dump($produkt5);
    
    ?>
<br>
<?PHP
echo "<h1> Funkce </h1>";
$jmena = "MartiN,Otakar,oNDRA;SeMir-GerhaN";
var_dump($jmena);
$jmena = str_replace(" ",",", $jmena);
var_dump($jmena);        
$jmena = str_replace(",,",",", $jmena);
var_dump($jmena);
 $jmena = str_replace("-",",", $jmena); 
var_dump($jmena);
$jmena = str_replace(";",",", $jmena);
$jmena = str_replace(",",",", $jmena);
var_dump($jmena);
$jmena = strtolower($jmena);
var_dump($jmena);
$jmena = ucwords($jmena);
var_dump($jmena);
$jmena = explode($jmena);
var_dump($jmena);

?>
<br>
<?PHP
function currency($price, $currency = "USD", $precision = 2) {
  $price = round($price,$precision);       
  $price = number_format($price,$precision)." ,-".$currency;
return $price;
    }
    
echo currency(1000000.59, "$", 2);
echo"<br>";
echo currency(156969.69);
?>
<br>

<?PHP
echo "<h1> Mat.Funkce </h1>";
$a = "A2BD";
$a = hexdec($a);
echo $a;

?>
<br>

<?PHP
    echo "<h1> Sprosta slova cv.1 </h1>";
function isValid($text, $vulgarni) {
    foreach ($vulgarni as $word) {
        if (strpos($text, $word) !== FALSE) {
            return TRUE;
        }
     
    }

    return FALSE;
}
var_dump(isValid("ahoj cau nazdar", ["debil"]));
var_dump(isValid("ahoj cau debil nazdar", ["debil"]));

?>

<br>


<?PHP


?>

    
