<?php
function czyLiczbaPierwsza($liczba)
{
    if ($liczba <= 1) {
        return false;
    }

    for ($i = 2; $i * $i <= $liczba; $i++) {
        if ($liczba % $i == 0) {
            return false;
        }
    }
    return true;
}

$zakres_poczatek = 1;
$zakres_koniec = 100;

echo "Liczby pierwsze w zakresie od $zakres_poczatek do $zakres_koniec:\n";
for ($liczba = $zakres_poczatek; $liczba <= $zakres_koniec; $liczba++) {
    if (czyLiczbaPierwsza($liczba)) {
        echo $liczba . "\n";
    }
}
?>