<?php
function renderCard(
    $showButton = false,
    $hasImg = true,
    $title = 'AI Card',
    $description = 'Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Quis quaerat, aut aperiam tempore laboriosam dolorum dolores,
                consequatur hic inventore, rem non neque iste voluptatibus dolorem.
                Accusamus, facilis fugiat. Quibusdam, voluptatum.',
    $btnContent = 'Access',
    $img_src = '../AIwebsite/img/img1.jpg',
) {
?>
    <div class="bg-white rounded" style="max-width: 30vh;">
        <?php
        if ($hasImg) {
        ?>
            <img src="<?php echo $img_src; ?>"
                class="img-fluid rounded-top w-100" alt="AI Generic Img">
        <?php } ?>
        <div class="container p-3 description">
            <h1><?php echo $title ?></h1>
            <span>
                <?php echo $description ?>
            </span>
        </div>
        <?php if ($showButton) { ?>
            <div class="d-flex justify-content-end 
            align-items-center p-3">
                <a class="btn btn-primary" href="pages/ChatGPT/ai-chatgpt.php"><?php echo $btnContent?></a>
            </div>
        <?php } ?>
    </div>
<?php } ?>