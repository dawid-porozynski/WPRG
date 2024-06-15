<?php

class NoweAuto {
    protected $model;
    protected $cenaEuro;
    protected $kursEuroPLN;

    public function __construct($model, $cenaEuro, $kursEuroPLN) {
        $this->model = $model;
        $this->cenaEuro = $cenaEuro;
        $this->kursEuroPLN = $kursEuroPLN;
    }

    public function ObliczCene() {
        return $this->cenaEuro * $this->kursEuroPLN;
    }
}

class AutoZDodatkami extends NoweAuto {
    private $alarm;
    private $radio;
    private $klimatyzacja;

    public function __construct($model, $cenaEuro, $kursEuroPLN, $alarm, $radio, $klimatyzacja) {
        parent::__construct($model, $cenaEuro, $kursEuroPLN);
        $this->alarm = $alarm;
        $this->radio = $radio;
        $this->klimatyzacja = $klimatyzacja;
    }

    public function ObliczCene() {
        $cenaBazowaPLN = parent::ObliczCene();
        $cenaDodatkow = $this->alarm + $this->radio + $this->klimatyzacja;
        return $cenaBazowaPLN + ($cenaDodatkow * $this->kursEuroPLN);
    }
}

class Ubezpieczenie extends AutoZDodatkami {
    private $procentUbezpieczenia;
    private $lataPosiadania;

    public function __construct($model, $cenaEuro, $kursEuroPLN, $alarm, $radio, $klimatyzacja, $procentUbezpieczenia, $lataPosiadania) {
        parent::__construct($model, $cenaEuro, $kursEuroPLN, $alarm, $radio, $klimatyzacja);
        $this->procentUbezpieczenia = $procentUbezpieczenia;
        $this->lataPosiadania = $lataPosiadania;
    }

    public function ObliczCene() {
        $cenaSamochoduZDodatkami = parent::ObliczCene();
        $procentPosiadania = (100 - $this->lataPosiadania) / 100;
        $cenaUbezpieczenia = $this->procentUbezpieczenia * ($cenaSamochoduZDodatkami * $procentPosiadania);
        return $cenaSamochoduZDodatkami + $cenaUbezpieczenia;
    }
}


$auto = new Ubezpieczenie("Audi A4", 30000, 4.5, 500, 1000, 1500, 0.05, 3);
echo "Cena końcowa samochodu z dodatkami i ubezpieczeniem: " . $auto->ObliczCene() . " PLN";

?>
