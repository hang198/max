<?php
$array = [[1,3,2],
        [-1,6,9],
        [1,7,2]];
//$arrayNew = [];
//for ($i = 0; $i < count($array); $i++) {
//    for ($j = 0 ; $j < count($array[$i]); $j++) {
//        array_push($arrayNew,$array[$i][$j]);
//    }
//}
//echo max($arrayNew);
$maxNumber = $array[0][0];
for ($i = 0; $i < count($array); $i++) {
    for ($j = 0; $j < count($array[$i]); $j++) {
        if ($array[$i][$j] > $maxNumber) {
            $maxNumber = $array[$i][$j];
        }
    }
}
echo "Mang la: ";
for ($i = 0; $i < count($array) ; $i++){
    echo "<br>";
    for ($j = 0; $j < count($array[$i]); $j++) {
        echo "<span style= 'width: 40px; display: inline-block'>".$array[$i][$j]."</span>";

    }
}
echo "<br> So lon nhat la: ";
echo $maxNumber;
