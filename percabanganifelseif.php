<?php
$nilai = 74;
if ($nilai > 90) {
    $grade = "A";
} elseif($nilai > 80){
    $grade = "B";
} elseif($nilai > 70){
    $grade = "C";
} elseif($nilai > 60){
    $grade = "D";
} elseif($nilai > 50){
}
echo "Nilai anda: $nilai<br>";
echo "Grade: $grade";
?>