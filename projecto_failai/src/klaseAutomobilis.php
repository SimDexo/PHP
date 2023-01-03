<?php

class Automobilis {
    public $marke;
    public $modelis;

    public function __construct($marke, $modelis) {
        $this->marke = $marke;
        $this->modelis = $modelis;
    }

    public function informacija() {
        return "Automobilio markė: " . $this->marke . ", modelis: " . $this->modelis;
    }
}

$automobilis = new Automobilis("Auto1", "auto3");
echo $automobilis->informacija();