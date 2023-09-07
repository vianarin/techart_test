<?php
$per_page = 4;
$current_page = isset($_GET['page']) ? (int)$_GET['page'] : 1;
if ($current_page < 1) {
    $current_page = 1;
}

$offset = ($per_page * $current_page) - $per_page;

$articles_query = mysqli_query($connection, "SELECT * FROM `news` ORDER BY `date` DESC LIMIT $offset, $per_page");
?>
