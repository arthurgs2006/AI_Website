<?php
function renderDoubtCard($ID, $title, $description)
{
?>
    <div class="card">
        <div class="card-header" id="heading<?php echo $ID; ?>" data-toggle="collapse" data-target="#collapse<?php echo $ID; ?>"
            aria-expanded="false" aria-controls="collapse<?php echo $ID; ?>">
            <h4 class="card-title">
                <?php echo $title; ?>
            </h4>
        </div>
        <div id="collapse<?php echo $ID; ?>" class="collapse"
            aria-labelledby="heading<?php echo $ID; ?>"
            data-parent="#accordion">
            <div class="card-body">
                <?php echo $description; ?>
            </div>
        </div>
    </div>


<?php } ?>