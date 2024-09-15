<?php
function renderTip($title, $text, $tipColor)
{
?>
    <div class="callout callout-<?= ($tipColor) ?>">
        <h5><?php echo $title ?></h5>
        <p><?php echo $text ?></p>
    </div>
<?php } ?>