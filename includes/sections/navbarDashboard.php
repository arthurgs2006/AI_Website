<?php
include $_SERVER['DOCUMENT_ROOT'] . '/AIwebsite/includes/components/navbarItem.php';

$nav_items = [
    [
        'title' => 'Dashboard',
        'href' => '/AIwebsite/pages/dashboard/main.php'
    ],
    [
        'title' => 'AIs to Use',
        'href' => '/AIwebsite/pages/dashboard/AIsToUse.php'
    ],
    [
        'title' => 'Doubts',
        'href' => '/AIwebsite/pages/dashboard/Doubts.php'
    ]
]
?>

<nav class="navbar navbar-expand navbar-light">
    <ul class="navbar-nav w-100 d-flex align-items-center justify-content-between">
        <li class="nav-item">
            <a href="/AIwebsite/index.php" class="nav-link">
                <img src="<?php echo '/AIwebsite/img/icons/alexa.svg'; ?>" 
                alt="Logo Hipotético do Website">
            </a>
        </li>

        <ul class="navbar-nav d-flex justify-content-center 
        align-items-center flex-grow-1">
            <?php foreach ($nav_items as $item): ?>
                <?php renderNavItens($item) ?>
            <?php endforeach ?>
        </ul>

        <li class="nav-item">
            <?php renderNavItens($item, true) ?>
        </li>
    </ul>
</nav>
