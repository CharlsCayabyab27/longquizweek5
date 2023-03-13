<?php
function findCommonElements($array1, $array2) {
    $common = array();

    foreach ($array1 as $element) {
        if (in_array($element, $array2)) {
            $common[] = $element;
        }
    }

    return $common;
}

$array1 = array(2, 4, 6, 8, 10);
$array2 = array(1, 2, 3, 4, 5);

$commonElements = findCommonElements($array1, $array2);

echo "Common elements between the two arrays: ";
foreach ($commonElements as $element) {
    echo "$element ";
}
?>