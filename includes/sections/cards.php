<?php include './includes/components/card.php'; ?>
<section class="container-fluid d-flex flex-column">
    <h1 class="p-4 text-white">Why would you use AI?</h1>
    <div class="d-flex flex-wrap justify-content-center pb-5" style="gap: 5vh !important;">
        <?php for ($i = 0; $i < 4; $i++): ?>
            <?php renderCard(); ?>
        <?php endfor; ?>
    </div>
</section>