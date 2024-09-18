<?php include './includes/components/infoCard.php';
renderInfoCard(
    "The future is Now!",
    "Come and Taste It",
    "bg-gradient-blue-dark text-light"
);
?>
<div class="d-flex container-fluid p-5" id="useAI">
    <div class="col d-flex flex-column" style="gap: 5vh !important;">
        <div class="row d-flex justify-content-center"
            style="gap: 5vh !important;">
            <?php for ($i = 0; $i < 8; $i++): ?>
                <?php renderCard(true, true); ?>
            <?php endfor; ?>
        </div>
    </div>
</div>
<?php include_once './includes/components/card.php'; ?>