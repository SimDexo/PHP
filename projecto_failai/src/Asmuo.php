<?php

include '../src/DuomenuIsvedimas.php';

$asmenuDuomenys = [
    ['vardas' => 'Jonas', 'gimimo_metai' => 1965],
    ['vardas' => 'Petras', 'gimimo_metai' => 1970],
    ['vardas' => 'Antanas', 'gimimo_metai' => 1980],
    ['vardas' => 'Ona', 'gimimo_metai' => 1990],
    ['vardas' => 'Maryte', 'gimimo_metai' => 2000],
    ['vardas' => 'Petras', 'gimimo_metai' => 1986],
    ['vardas' => 'Antanas', 'gimimo_metai' => 2005],
];

$asmenys = array();

foreach ($asmenuDuomenys as $duomenys) {
    $asmuo = new Asmuo($duomenys['vardas'], $duomenys['gimimoMetai']);
    $asmenys[] = $asmuo;
}

class Asmuo {
    private $gimimoMetai;
    public $vardas;

    public function __construct($vardas, $gimimoMetai) {
        $this->vardas = $vardas;
        $this->gimimoMetai = $gimimoMetai;
    }

    public function getVardas() {
        return $this->vardas;
    }

    public function getAmzius() {
        $dabartiniaiMetai = date('Y');
        return $dabartiniaiMetai - $this->gimimoMetai;
    }
}