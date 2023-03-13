<?php
function filter_names($names) {
    $filtered_names = array();
    foreach ($names as $name) {
        if (strlen($name) > 5 && substr($name, 0, 1) == 'A') {
            $filtered_names[] = $name;
        }
    }
    return $filtered_names;
}

$names = array("Alice", "Bob", "Charlie", "Andrew", "Sarah", "Amy", "Alexis");
$filtered_names = filter_names($names);

echo "Names that start with 'A' and have more than 5 characters:\n";
$i = 0;
while ($i < count($filtered_names)) {
    echo $filtered_names[$i] . "\n";
    $i++;
}
?>