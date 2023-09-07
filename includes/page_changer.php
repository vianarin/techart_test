<?php

$total_count_q = mysqli_query($connection, "SELECT COUNT(`id`) as `total_count` from `news`");
$total_count = mysqli_fetch_assoc($total_count_q)['total_count'];
$total_pages = ceil($total_count / $per_page);

$prev_page = $current_page - 1;
$next_page = $current_page + 1;

?>
<div class='pagination'>
    <?php

    if ($prev_page > 0) {
        echo "<a href=\"?page={$prev_page}#H1news\">←</a>";
    }

    for ($i = 1; $i <= $total_pages; $i++) {
        if ($i === $current_page) {
            echo "<span>{$i}</span>";
        } else {
            echo "<a href=\"?page={$i}\">{$i}</a>";
        }
    }

    if ($next_page <= $total_pages) {
        echo "<a href=\"?page={$next_page}#H1news\">→</a>";
    }
    ?>
</div>