<?php
header("Content-Type: text/html; charset=UTF-8");
$q = $_GET["q"] ?? "";
echo "<h1>GET Request Demo</h1>";
echo "Search keyword: " . htmlspecialchars($q, ENT_QUOTES, "UTF-8");
