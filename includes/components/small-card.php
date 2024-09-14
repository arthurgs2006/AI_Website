<?php function renderSmallCard($title, $description, $icon)
{ ?>
    <div class="small-box bg-info"
    style="width: 30vh;">
        <div class="inner">
            <h3><?php echo $title ?></h3>

            <p><?php echo $description ?></p>
        </div>
        <div class="icon">
            <i class="ion <?php echo $icon ?>"></i>
        </div>
        <a href="#" class="small-box-footer mb-0">
            Use <?php echo $title ?>
            <i class="bi bi-arrow-up-right-circle-fill"></i>>
        </a>
    </div>
<?php } ?>