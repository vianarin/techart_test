<?php
include './includes/config.php';
?>

<?php
$id = $_GET['id'];
$news_article = mysqli_query($connection, "SELECT * FROM `news` WHERE id = '$id'");
$result = mysqli_fetch_assoc($news_article);
?>

<!DOCTYPE html>
<html lang="ru">

<?php include './includes/head.php' ?>

<body>
    <?php
    include './includes/header.php';
    ?>
    <div class="line3"></div>


    <div class="main">

        <div class="container">
            <div class="bread-crumbs">
                <a href="/">Главная</a> <span> / <?php echo $result['title'] ?> </span>
            </div>

            <div class="news-tittle">
                <h1><?php echo $result['title'] ?></h1>
            </div>


            <?php
            $dateString = $result['date'];
            $dateTime = date_create_from_format('Y-m-d H:i:s', $dateString);
            $news_date = $dateTime->format('d.m.Y');
            ?>

            <div class=news-date><?php echo $news_date ?></div>

            <div class="news">

                <div class="news-article">

                    <h2> <?php echo $result['announce'] ?> </h2>
                    <?php echo $result['content'] ?>

                    <div class="back-to-news">
                        <a href="/"> ← НАЗАД К НОВОСТЯМ</a>
                    </div>
                </div>

                <div class="news-img">
                    <img src="images/<?php echo $result['image'] ?>" alt="">
                </div>
            </div>

        </div>
    </div>

    <?php
    include './includes/footer.php';
    ?>

</body>

</html>