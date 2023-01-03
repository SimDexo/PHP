<?php

class Kupe extends Automobilis {
    public $atidarytosDurys;

    public function __construct($marke, $modelis, $atidarytosDurys) {
        parent::__construct($marke, $modelis);
        $this->atidarytosDurys = $atidarytosDurys;
    }

    public function informacija() {
        $durys = $this->atidarytosDurys ? "atidarytos" : "uždarytos";
        return parent::informacija() . ", durys: " . $durys;
    }
}

$kupe = new Kupe("Auto1", "auto3", true);
echo $kupe->informacija();