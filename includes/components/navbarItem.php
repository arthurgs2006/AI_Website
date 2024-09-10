<?php
function renderNavItens($item, $isLogin = false)
{
?>
    <?php if (!$isLogin) { ?>
        <li class="nav-item d-none d-sm-inline-block">
            <a href="<?php echo $item['href']; ?>" class="nav-link">
                <?php echo $item['title']; ?>
            </a>
        </li>
    <?php } else { ?>
        <li class="nav-item justify-self-end d-flex flex-row">
            <a href="./pages/AccountPages/login.php" class="nav-link">
                Login
                <img src="<?php echo '/AIwebsite/img/icons/person-fill.svg'; ?>"
                    alt="Account Icon">
            </a>
        </li>
<?php }
} ?>