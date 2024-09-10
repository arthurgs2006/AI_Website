<!DOCTYPE html>
<html lang="en" style="scroll-behavior: smooth;">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="../../adminlte/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="../../style/style.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
</head>

<body>
    <div class="wrapper bg-gradient-blue-dark d-flex flex-column"
        style="font-family: 'SF Pro Display'; gap: 3vh;">
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/AIwebsite/includes/sections/navbarDashboard.php'; ?>
        <div class="container-fluid d-flex flex-column" style="gap: 3vh;">
            <?php
            include $_SERVER['DOCUMENT_ROOT'] . '/AIwebsite/includes/sections/smallcards.php';
            include $_SERVER['DOCUMENT_ROOT'] . '/AIwebsite/includes/sections/graphicSection.php';
            ?>
        </div>
    </div>
    <div class="bg-dark">
        <?php include $_SERVER['DOCUMENT_ROOT'] . '/AIwebsite/includes/sections/footer.php'; ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" defer></script>
    <script src='../../adminlte/dist/js/adminlte.min.js'></script>
    <script src='../../adminlte/plugins/bootstrap/adminlte.min.js'></script>
    <script src="../../adminlte/plugins/jquery/jquery.min.js"></script>
    <script src="../../adminlte/plugins/chart.js/Chart.min.js"></script>

</body>

</html>