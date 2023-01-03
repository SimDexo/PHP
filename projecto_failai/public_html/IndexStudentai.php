<?php

$arr = ['vardas' => 'Petras','pavarde' => 'Jonaitis', 'amzius' => 25];
$jsonString = json_encode($arr);

$jsonStringNew = '{"vardas":"Petras","pavarde":"Jonaitis","amzius":25}';
$naujasMasyvas = json_decode($jsonStringNew,true);

/** @return array ...*/

function gautiStudentus(): array
{
    $studentai = [];
    $studentai[] = ['vardas' => 'Jonas', 'pavarde' => 'Jonaitis', 'amzius' => 25];
    $studentai[] = ['vardas' => 'Petras', 'pavarde' => 'Petraitis', 'amzius' => 30];
    $studentai[] = ['vardas' => 'Antanas', 'pavarde' => 'Antanaitis', 'amzius' => 35];

    return $studentai;

}

$studentai = gautiStudentus();

/**
 * @param array $studentai
 * @return void
 */

function printStudents(array $studentai): void{}

//printStudents($studentai);

//echo json_encode($studentai);

function gautiStudentoAmziu(array $studentas): int
{
    return $studentas['amzius'];
}

function gautiStudentuAmziausSuma(array $studentai): int
{
    $suma = 0;
    foreach ($studentai as $studentas) {
        $suma += gautiStudentoAmziu($studentas);
    }

    return $suma;
}

function skaiciuotiStudentuAmziausVidurki(array $studentai): float
{
    $suma = gautiStudentuAmziausSuma($studentai);
    $kiekis = count($studentai);

    return $suma / $kiekis;
}