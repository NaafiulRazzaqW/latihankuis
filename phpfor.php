<?php 

#kuis 1
$matriks1 = array(
    array(1, 1, 1, 1, 1),
    array(2, 2, 2, 2, 2),
    array(3, 3, 3, 3, 3),
    array(4, 4, 4, 4, 4),
    array(5, 5, 5, 5, 5),
);

$matrikskolom1 = array(
    1,
    1,
    1,
    1,
    1
);
$matrikskolom2 = array(
    2,
    2,
    2,
    2,
    2
);

// Perulangan untuk mencetak matriks
$index = 0;
foreach($matrikskolom1 as $val1){
$matriks = $matriks1[$index];
$row = 0;
$output = [];
foreach($matriks as $val2){
    $kali = $val2 * $val1;
    $row = $row + $kali;
    array_push($output, $row);
}
$index++;
// echo "<p>$row</p>";

}
$index = 0;
foreach($matrikskolom2 as $val1){
    $matriks = $matriks1[$index];
    $row = 0;
    $output2 = [];
    foreach($matriks as $val2){
        $kali = $val2 * $val1;
        $row = $row + $kali;
        array_push($output2, $row);
    }
    $index++;
    // echo "<p>$row</p>";
    }

    $index = 0;
    foreach($output as $data) {
        echo $data .  " " . $output2[$index] . "<br>";
        $index++;
    }

#kuis 2
$pola = 4;

for($i = 0; $i <= $pola; $i++){
    for($j = $pola; $j > $i; $j--){
        echo " &nbsp; ";
    }
    for($k = 1; $k <= $i; $k++){
        echo "*" ;
    }
    echo "1";
    for($l = 1; $l <= $i; $l++){
        echo "*";
    }
    echo "<br>";
}
echo "<br>";








?>