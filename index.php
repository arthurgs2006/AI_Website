<!DOCTYPE html>
<html lang="en" style="scroll-behavior: smooth;">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AI Website</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="./adminlte/dist/css/adminlte.min.css">
    <link rel="stylesheet" href="./style/style.css">
</head>

<body>
    <div class="wrapper w-100 bg-gradient-blue-dark d-flex flex-column gap-5"
        style="font-family: 'SF Pro Display';">
        <?php include './includes/sections/navbar.php'; ?>
        <?php include './includes/components/carousel.php'; ?>
        <?php include './includes/sections/cards.php'; ?>
        <?php include './includes/sections/gridLayout.php'; ?>
        <?php include './includes/sections/aboutUs.php'; ?>
        <?php include './includes/sections/footer.php'; ?>
    </div>

    <?php include $_SERVER['DOCUMENT_ROOT']. '/AIwebsite/includes/components/linkedScripts.php'?>
</body>
</html>