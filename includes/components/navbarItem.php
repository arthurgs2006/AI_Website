<?php
function renderNavItens($item, $isLogin = 0)
{
    if ($isLogin == 0) { ?>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="<?php echo $item['href']; ?>" class="nav-link">
                <?php echo $item['title']; ?>
            </a>
        </li>
    <?php } else if ($isLogin == 1) { ?>
        <li class="nav-item justify-self-end d-flex flex-row">
            <a href="/AIwebsite/pages/AccountSettings/profile.php" class="nav-link">
                Profile Settings
                <img src="/AIwebsite/img/icons/person-fill.svg" alt="Account Icon">
            </a>
        </li>
    <?php } else { ?>
        <li class="nav-item justify-self-end d-flex flex-row">
            <a href="./pages/AccountPages/login.php" class="nav-link">
                Login
                <img src="/AIwebsite/img/icons/person-fill.svg" alt="Account Icon">
            </a>
        </li>
<?php }
}
?>