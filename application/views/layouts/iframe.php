<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <title>:: <?php echo $layout_title; ?> ::</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <?php include 'elements/head.php'; ?>

    <?php include 'elements/stylesheet-head.php'; ?>
</head>

<body style="background:none;">

<?php tp_flash_msg(); ?>

<div class="container">
    <div class="row">
        <?php echo $layout_content; ?>
        
        <div class="span12">
            <h1>mon iframe</h1>
            
            <ul>
                <li>item</li>
                <li>item</li>
                <li>item</li>
                <li>item</li>
            </ul>
        </div>
    </div>
</div>

<?php include 'elements/script-default.php'; ?>
</body>
</html>
