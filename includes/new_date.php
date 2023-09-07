<?php
$dateString = $articles['date'];
$dateTime = date_create_from_format('Y-m-d H:i:s', $dateString);
$news_date = $dateTime->format('d.m.Y');
echo $news_date
?>