<?php
$owoce = ["jabłko", "banan", "pomarańcza"];

foreach ($owoce as $owoc) {
    $dlugosc = strlen($owoc);
    echo "Owoc od tyłu: ";
    for ($i = $dlugosc - 1; $i >= 0; $i--) {
        echo $owoc[$i];
    }
    echo "\n";

    if (strtolower($owoc[0]) === 'p') {
        echo "Zaczyna się na literę 'p'.\n";
    }
}
?>