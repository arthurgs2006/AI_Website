<?php include $_SERVER['DOCUMENT_ROOT'] . '/AIwebsite/includes/components/small-cards.php'; ?>

<div class="w-100 d-flex justify-content-center " style="gap: 5vh;">
    <?php 
    for ($i = 0; $i < 5; $i++) {
        renderSmallCard("ChatGPT", 'The perfect for you', 'ion-bag');
    }
    ?>
</div>