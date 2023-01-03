<?php

$kint = 1;

$vardas = '<b>Tomauskas</b>';
$specialybe = $_POST['specialybe'] ?? '';
$masyvas = [/** asmenys */];
$amzius = $_POST['amzius'] ?? '';


echo "<table>";
echo "<tr>";
echo "<th>ID</th>";
echo "<th>Vardas</th>";
echo "<th>Amzius</th>";
echo "<th>Profesija</th>";
echo "</tr>";

foreach ($vardas as $index => $asmuo) {

    echo "<tr>";
    echo "<td>" . $index . "</td>";
    echo "<td>" . $asmuo['Vardas'] . "</td>";
    echo "<td>" . $asmuo['Amzius'] . "</td>";
    echo "<td>" . $asmuo['Profesija'] . "</td>";
    echo "</tr>";
}

echo "</table>";

$zmones = array(
    array('Vardas' => 'Tadas', 'Amzius' => 23, 'Profesija' => 'Studentas'),
    array('Vardas' => 'Jonas', 'Amzius' => 33, 'Profesija' => 'Mechanikas'),
    array('Vardas' => 'Gabija', 'Amzius' => 27, 'Profesija' => 'Buhaltere'),
    array('Vardas' => 'Tomas', 'Amzius' => 48, 'Profesija' => 'Santechnikas'),
    array('Vardas' => 'Petras', 'Amzius' => 37, 'Profesija' => 'Vadybininkas'),
    array('Vardas' => 'Ieva', 'Amzius' => 21, 'Profesija' => 'Studente'),
    array('Vardas' => 'Kestutis', 'Amzius' => 30, 'Profesija' => 'Programuotojas'),
);

if (isset($_POST['filter'])) {
    $filter = $_POST['filter'];
} else {
    $filter = 'all';
}


?>

<html>
<head>
    <title>Assign</title>
    <!-- CSS -->
</head>
<body>


<form method="POST">
    <label for="amzius">Amžius nuo:</label>
    <input type="number" name="amzius" id="amzius" value="<?php echo $amzius; ?>">
    <button type="submit">Filtruoti</button>
</form>

<form method="POST">
    <button type="submit" name="filter" value="studentai">Išimti studentus</button>
</form>

<table>
    <tr>
        <th>ID</th>
        <th>Vardas</th>
        <th>Amzius</th>
        <th>Profesija</th>
    </tr>

    <table>
        <?php foreach ($masyvas as $raktas => $asmuo) { ?>
            <tr>
                <td>
                    <?php var_dump($asmuo['amzius']); ?>
                </td>
                <td>
                    <?php echo $vardas; ?>
                </td>
                <td>
                    <?php echo $specialybe; ?>
                </td>
            </tr>
        <?php } ?>
    </table>

    <?php for ($i = 0; $i < count($zmones); $i++): ?>
        <tr>
            <td><?php echo $i; ?></td>
            <td><?php echo $zmones[$i]['Vardas']; ?></td>
            <td><?php echo $zmones[$i]['Amzius']; ?></td>
            <td><?php echo $zmones[$i]['Profesija']; ?></td>
        </tr>
    <?php endfor; ?>

</body>
</html>

