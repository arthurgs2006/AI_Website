<?php
include $_SERVER['DOCUMENT_ROOT'] . '/AIwebsite/includes/sections/smallcards.php';
?>
<!DOCTYPE html>
<html lang="en" style="scroll-behavior: smooth;">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Settings</title>
</head>

<body class="bg-gradient-blue-dark">
    <div class="wrapper d-flex flex-column"
        style="font-family: 'SF Pro Display'; gap: 3vh;">
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/AIwebsite/includes/sections/navbarDashboard.php'; ?>
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/AIwebsite/includes/sections/profileSection.php' ?>
    </div>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/AIwebsite/includes/components/linkedScripts.php' ?>
    <?php include $_SERVER['DOCUMENT_ROOT'] . '/AIwebsite/includes/sections/footer.php' ?>
</body>

</html>