<?php
include $_SERVER['DOCUMENT_ROOT'] . '/AIwebsite/includes/components/doubtCard.php';
include $_SERVER['DOCUMENT_ROOT'] . '/AIwebsite/sql/doubts.php';
?>

<div id="accordion">
    <?php
    if (isset($doubts) && is_array($doubts)) {
        foreach ($doubts as $doubt) {
            renderDoubtCard($doubt['ID'], $doubt['title'], $doubt['description']);
        }
    } else {
        echo "No doubts available.";
    }
    ?>
</div>