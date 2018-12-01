<?php
// +----------------------------------------------------------
// | BMW
// +----------------------------------------------------------
// | 2 ITF - 2018-2019
// +----------------------------------------------------------
// | Auto info view
// +----------------------------------------------------------
// | M. Decabooter, J. Janssen
// +----------------------------------------------------------
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
    <?php echo bepaalAchtergrond('/images/' . $auto->achtergrond); ?>
    <div>
        <?php echo toonAfbeelding('/images/' . $auto->foto); ?>
    </div>
    <div>
        <?php echo "<h3>" . $auto->auto . "</h3>"; ?>
    </div>
    <div>
        <?php echo $auto->opmerking; ?>
    </div>
    <div>
        <?php echo "</br>" . anchor('auto/index', 'Back'); ?>
    </div>
</body>

</html>
