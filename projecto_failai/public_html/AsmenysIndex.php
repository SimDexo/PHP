<?php

include '../src/Asmuo.php';
include '../src/DuomenuIsvedimas.php';

// Sukam cikla su kiekvienu įrašu iš $asnemuDuomanys masyvo
// ir kiekvieną kartą sukuriam naują new Asmuo() objektą
// naujai sukurtą objektą įdedam į $asmenys masyvą
// Sukuriate Klasę DuomanuIsvedimas
// Klasėje DuomanuIsvedimas sukuriame metodą isvestiAsmenis($asmenys)
// Metodas isvestiAsmenis($asmenys) turi atspausdinti visus asmenis
// BONUS: Metodas isvestiAsmenisPagalData($asmenys, $gmmd) turi atspausdinti asmenis pagal gimimo metus
// BONUS: Metodas isvestiAsmenisLentele($asmenys) turi atspausdinti asmenis <table> HTML elemente

foreach (/** Čia kažkas bus */) {
    $asmuo = new Asmuo('Jonas', 1990);
    /** Čia kažkas bus */
}

/** Čia kažkas bus */

$asmenuDuomenys = array(
    array('vardas' => 'Tomas', 'gimimoMetai' => 1990),
    array('vardas' => 'Jonas', 'gimimoMetai' => 1985),
    array('vardas' => 'Ona', 'gimimoMetai' => 1995),
);
$asmenys = array(
    new Asmuo('Tomas', 1990),
    new Asmuo('Jonas', 1985),
    new Asmuo('Ona', 1995),
);
