<?php
$last_one_new = mysqli_query($connection, "SELECT * FROM `news` ORDER BY `date` DESC LIMIT 1;");
$last_article = mysqli_fetch_assoc($last_one_new);
?>

<div class='last-one' style="background-image: url('images/<?php echo $last_article['image']; ?>');">
    <div class="container">
        <div class="banner">
            <h1><?php echo $last_article['title']; ?></h1>
        </div>
        <div class="banner">
            <h3><?php echo $last_article['announce']; ?></h3>
        </div>
    </div>
</div>