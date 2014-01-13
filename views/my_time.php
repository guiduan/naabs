<?php require_once "../config.php"; ?>
<!DOCTYPE html>
<html>

<head>
    <?php require_once SITEROOT."/templates/top.php"; ?>
</head>

<body>
    <noscript>
        <h3>This service requires javascript to be enabled.</h3>
        <h4>Please turn it on in your browser and refresh the page for proper operation.</h4>
    </noscript>

    <?php require_once SITEROOT."/templates/top_menu.php"; ?>

    <!--// Page title -->
    <h3>My Time</h3>

    <div class="well well-lg">
        <p>`My Time` content here.</p>
        <p>Counter of time remaining.</p>
    </div>

    <?php require_once SITEROOT."/templates/add_time_form.php"; ?>

    <?php require_once SITEROOT."/templates/bottom.php"; ?>

</body>
</html>