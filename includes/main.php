<?php include 'pagination.php' ?>

<main class="main">
    <div class="container">
        <h1 id="H1news">Новости</h1>
        <div class='news'>
            <?php while ($articles = mysqli_fetch_assoc($articles_query)) { ?>
                <article class='news-item'>
                    <div class='news-date'>
                        <?php include 'includes/new_date.php' ?>
                    </div>
                    <h3><?php echo $articles['title']; ?></h3>
                    <?php echo $articles['announce']; ?>
                    <a href="page.php?id=<?php echo $articles['id']; ?>"><?php echo 'Подробнее →'; ?></a>
                </article>

            <?php } ?>
        </div>
        <?php include 'includes/page_changer.php' ?>
    </div>
</main>