<?php function renderInfoCard(
    $title = 'The future is now!', 
    $description = 'Come and Taste it',
    $className = '')
{ ?>
    <section class="container-fluid d-flex  <?php echo $className ?> align-items-center justify-content-center" style="min-height: 50vh;">
        <div class="d-flex  flex-column align-items-center">
            <h1><?php echo $title ?></h1>
            <span>
                <?php echo $description ?>
            </span>
        </div>
    </section>
<?php } ?>