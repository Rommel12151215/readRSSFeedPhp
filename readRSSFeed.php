<?php
function readRSSFeed($url) {
   // Lógica para leer un feed RSS
}

$feeds = ["http://example.com/feed1.rss", "http://example.com/feed2.rss"];
$combinedFeed = [];

foreach ($feeds as $feed) {
   $combinedFeed = array_merge($combinedFeed, readRSSFeed($feed));
}

// Lógica para mostrar el feed combinado
?>
