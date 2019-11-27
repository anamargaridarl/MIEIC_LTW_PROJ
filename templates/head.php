<?php
    function drawHead($style_locations, $script_locations) {
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Houses of the World</title>
        <?php foreach ($script_locations as $location): ?>
            <script defer src="<?= $location ?>" type="module"></script>
        <?php endforeach; ?>

        <?php foreach ($style_locations as $location): ?>
            <link href="<?= $location ?>" rel="stylesheet">
        <?php endforeach; ?>

        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    </head>
<?php } ?>