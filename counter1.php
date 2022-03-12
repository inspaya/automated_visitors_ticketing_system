<?php

<?php

$originalArray=array(21,0,21,9,7,23,25,25);
$maxNumber = max($originalArray);
// Initialize countArray
$countArray=array();
for($i=0;$i<=$maxNumber;$i++){
    $countArray[i] = 0;
}

foreach( $originalArray as $v) {
    $countArray[$v] += $countArray[$v];
}

// Initialize orderedArray
$size = count($originalArray);
$orderedArray = array();
for($i=0;$i<$size-1;$i++){
    $orderedArray[i] = 0;
}
for($j=$size-1;$j>=0;$j--) {
    $order = $countArray[$originalArray[$j]];
    $orderedArray[$order] = $originalArray[$j];
    $countArray[$originalArray[$j]] -= $countArray[$originalArray[$j]];
}
unset($countArray);
print($orderedArray);
?>