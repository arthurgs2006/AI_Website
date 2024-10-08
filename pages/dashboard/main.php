<?php
include $_SERVER['DOCUMENT_ROOT'] . '/AIwebsite/includes/sections/smallcards.php';
?>
<!DOCTYPE html>
<html lang="en" style="scroll-behavior: smooth;">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body>
    <div class="wrapper bg-gradient-blue-dark d-flex flex-column"
        style="font-family: 'SF Pro Display'; gap: 3vh;">
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/AIwebsite/includes/sections/navbarDashboard.php'; ?>
        <div class="container d-flex flex-column" style="gap: 3vh;">
            <?php
                renderSmallCardsSection(true);
            ?>
            <?php include $_SERVER['DOCUMENT_ROOT'] . '/AIwebsite/includes/sections/graphicSection.php'; ?>
        </div>
    </div>
    <div class="bg-dark">
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/AIwebsite/includes/sections/footer.php'; ?>
    </div>

    <?php include $_SERVER['DOCUMENT_ROOT'] . '/AIwebsite/includes/components/linkedScripts.php' ?>

</body>

</html>