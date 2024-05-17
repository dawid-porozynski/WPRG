<?php
$filename = 'counter.txt';

if (!file_exists($filename)) {
    file_put_contents($filename, '1');
    $visits = 1;
} else {
    $visits = file_get_contents($filename);
    $visits = intval($visits) + 1;
    file_put_contents($filename, strval($visits));
}

echo "Number of visits: " . $visits;
?>
