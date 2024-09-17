<?php include '../../includes/components/infoCard.php'; ?>
<!DOCTYPE html>
<html lang="en" style="scroll-behavior: smooth;">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ChatGPT</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../adminlte/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="../../style/style.css">
</head>

<body>
    <div class="wrapper w-100 bg-gradient-blue-dark d-flex flex-column text-white"
        style="font-family: 'SF Pro Display';">
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/AIwebsite/includes/sections/navbarDashboard.php';
        renderInfoCard('ChatGPT', 'Know everything with him.')
        ?>
        <div class="container">
            <?php include '../../includes/sections/AIselectedLayout.php' ?>
        </div>

        <?php include '../../includes/sections/footer.php'; ?>
    </div>

    <?php include $_SERVER['DOCUMENT_ROOT'] . '/AIwebsite/includes/components/linkedScripts.php' ?>
</body>

</html>