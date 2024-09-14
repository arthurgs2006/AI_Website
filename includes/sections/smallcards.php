<?php
include $_SERVER['DOCUMENT_ROOT'] . '/AIwebsite/includes/components/small-card.php';
include $_SERVER['DOCUMENT_ROOT'] . '/AIwebsite/sql/llms.php';

function renderSmallCardsSection($limitArrayCapacity = false)
{
    global $llms;

    if ($limitArrayCapacity) {
        $llmstoShow = array_slice($llms, 0, 3);
    } else {
        $llmstoShow = $llms;
    }
?>
    <div class="d-flex justify-content-center flex-wrap flex-row" style="gap: 5vh;">
        <?php
        foreach ($llmstoShow as $llm) {
            renderSmallCard($llm['name'], $llm['description'], $llm['icon']);
        }
        ?>
    </div>
<?php
}
?>