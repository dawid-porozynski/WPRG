<?php
$filename = 'links.txt';

if (file_exists($filename)) {
    $file = fopen($filename, 'r');
    echo "<ul>";
    while (!feof($file)) {
        $line = fgets($file);
        $parts = explode(';', $line);
        if (count($parts) == 2) {
            $url = trim($parts[0]);
            $description = trim($parts[1]);
            echo "<li><a href='$url'>$description</a></li>";
        }
    }
    fclose($file);
    echo "</ul>";
} else {
    echo "File not found.";
}
?>
