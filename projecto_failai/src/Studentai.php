<?php

class students
{
    private string $name;
    private string $lastName;
    private string $ID;
    private int $ak;
    private int $grupe;

    Public function __construct(string $name, string $lastName, string $ID, int $ak, int $grupe, )
    {
        $this->name = $name;
        $this->lastName = $lastName;
        $this->ID = $ID;
        $this->ak = $ak;
        $this->grupe = $grupe;
    }
    public function getGrupe(): Grupe
    {
        return $this->grupe;
    }
    public function getName(): Vardas
    {
        return $this->name;
    }
    public function getLastName(): Pavarde
    {
        return $this->lastName;
    }
    public function getID(): ID
    {
        return $this->ID;
    }
    public function getAsmensKodas(): ak
    {
        return $this->ak;
    }
}
