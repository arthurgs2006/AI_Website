<?php
function renderCard($showButton = false)
{
?>
    <div class="bg-white rounded" style="max-width: 30vh;">
        <img src="<?php echo '../AIwebsite/img/img1.jpg'; ?>"
            class="img-fluid rounded-top w-100" alt="AI Generic Img">
        <div class="container p-3 description">
            <h1>AI Card</h1>
            <span>
                Lorem ipsum dolor sit amet consectetur adipisicing elit.
                Quis quaerat, aut aperiam tempore laboriosam dolorum dolores,
                consequatur hic inventore, rem non neque iste voluptatibus dolorem.
                Accusamus, facilis fugiat. Quibusdam, voluptatum.
            </span>
        </div>
        <?php if ($showButton) { ?>
            <div class="d-flex justify-content-end 
            align-items-center p-3">
                <button class="btn btn-primary">Access</button>
            </div>
        <?php } ?>
    </div>
<?php } ?>