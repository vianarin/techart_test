<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $new_article = mysqli_query($connection, "SELECT * FROM `news` WHERE id = $id");
    $result = mysqli_fetch_assoc($new_article);
} else {
    $result = [];
}

if (!isset($result['title'])) {
    $result['title'] = "Новости";
}
?>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $result['title'] ?></title>
    <link rel="stylesheet" href="styles/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
</head>