<!-- Cho 2 số a,b. Tìm USCLN, BSCNN của 2 ab. -->
<?php
$a = 20;
$b= 30;
$c=$a;
$d=$b;
while ($a != $b) {
    if ($a > $b) {
        $a=$a-$b;
    }
    elseif ($a < $b) {
        $b=$b-$a;
    }
    else {
        return $a;
    }
}
echo "USCLN là: $a <br>";
echo "BSCNN là: ".(($c*$d)/$a);
?>