<!DOCTYPE html>
<html>
<body>

<?php

echo "<h3>2D Array</h3>";

$arr = array(
    array(1, 2, 3, 'A'),
    array(1, 2, 'B', 'C'),
    array(1, 'D', 'E', 'F')
);

// Print full array
foreach ($arr as $row) {
    foreach ($row as $val) {
        echo $val . " ";
    }
    echo "<br>";
}

echo "<br><h3>Number Pattern</h3>";

// Number pattern
$numArr = array(
    array(1, 2, 3),
    array(1, 2),
    array(1)
);

foreach ($numArr as $row) {
    foreach ($row as $val) {
        echo $val . " ";
    }
    echo "<br>";
}

echo "<br><h3>Letter Pattern</h3>";

// Letter pattern
$letterArr = array(
    array('A'),
    array('B', 'C'),
    array('D', 'E', 'F')
);

foreach ($letterArr as $row) {
    foreach ($row as $val) {
        echo $val . " ";
    }
    echo "<br>";
}

?>

</body>
</html>