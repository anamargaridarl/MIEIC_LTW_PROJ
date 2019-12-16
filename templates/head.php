<?php
    function drawHead($style_locations, $script_locations) {
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Dolce Cabbana</title>
        <meta content="width=device-width, initial-scale=1" name="viewport" />
        <script src="https://kit.fontawesome.com/b142e05368.js" crossorigin="anonymous"></script>
        <?php foreach ($script_locations as $location): ?>
            <script defer src="<?= $location ?>" type="module"></script>
        <?php endforeach; ?>

        <?php foreach ($style_locations as $location): ?>
            <link href="<?= $location ?>" rel="stylesheet">
        <?php endforeach; ?>

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
    <body>
        <div id="page-container">
            <div id="content-wrap">
<?php } ?>