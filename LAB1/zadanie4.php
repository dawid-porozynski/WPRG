<?php
$tekst = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sed iaculis neque. Integer non ipsum fermentum, fringilla mi vel, hendrerit tortor. Sed malesuada sollicitudin dolor vitae porttitor. Sed scelerisque neque et lacus elementum tempus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean egestas laoreet justo, eu tempus elit placerat sed. Aliquam faucibus felis ac efficitur volutpat."

$tablica_slow = explode(" ", $tekst);

foreach ($tablica_slow as $key => $slowo) {
    $znaki_interpunkcyjne = [',', '.', "'", '"'];
    $ostatni_indeks = strlen($slowo) - 1;
    if (in_array($slowo[$ostatni_indeks], $znaki_interpunkcyjne)) {
        unset($tablica_slow[$key]);
    }
}

$tablica_asocjacyjna = [];
for ($i = 0; $i < count($tablica_slow) - 1; $i += 2) {
    $tablica_asocjacyjna[$tablica_slow[$i]] = $tablica_slow[$i + 1];
}

foreach ($tablica_asocjacyjna as $klucz => $wartosc) {
    echo "$klucz: $wartosc\n";
}
?>