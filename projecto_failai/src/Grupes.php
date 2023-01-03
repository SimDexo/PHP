<?php

class Grupe
{
    private string $ID;
    private string $grupe;
    private string $adresas;
    public string $studentuKiekis;

    public function __construct(string $ID, string $grupe, string $adresas, string $studentuKiekis)
    {
        $this->ID = $ID;
        $this->pavadinimas = $grupe;
        $this->adresas = $adresas;
        $this->SK = $studentuKiekis;
    }

    public function getID(): string
    {
        return $this->ID;
    }

    public function getCode():string
    {
        return $this->grupe;
    }

    public function getAdresas():string
    {
        return $this->adresas;
    }

    public function getStudentuKiekis():string
    {
        return $this->stiudentuKiekis;
    }
}