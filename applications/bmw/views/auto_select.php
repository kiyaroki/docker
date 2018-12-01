<?php
// +----------------------------------------------------------
// | BMW
// +----------------------------------------------------------
// | 2 ITF - 2018-2019
// +----------------------------------------------------------
// | Auto select view
// +----------------------------------------------------------
// | M. Decabooter, J. Janssen
// +----------------------------------------------------------
?>

<?php
$lijstAutos = "";
$huidigeserie = "";

foreach ($autos as $auto) {
    if ($auto->serie != $huidigeserie) {
        $lijstAutos .= "<h3>" . $auto->serie . "</h3>";
        $huidigeserie = $auto->serie;
    }

    // Elke h3 opvullen met alle auto's horende bij de serie
    $lijstAutos .= "<div>" . anchor('auto/info/' . $auto->id, $auto->auto) . "</div>";
}
?>

<!DOCTYPE HTML>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        <?php echo $titel; ?>
    </title>
</head>

<body>
    <?php
        echo toonAfbeelding('/images/logos/autobanner.jpg');
        echo bepaalAchtergrond('/images/logos/background1.jpg');
        echo $lijstAutos;
        echo "</br>" . anchor('home/index', 'Back');
    ?>
</body>

</html>
