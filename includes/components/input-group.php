<?php function inputGroup($inputType, $inputName, $iconClass)
{ ?>

    <div class="input-group mb-3">
        <input type="<?php echo $inputType ?>" class="form-control" 
        placeholder="<?php echo $inputName ?>">
        <div class="input-group-append">
            <div class="input-group-text">
                <span class="<?php echo $iconClass ?>"></span>
            </div>
        </div>
    </div>

<?php } ?>