<?php if (!isset($_SESSION['user'])) header("Location: login.php"); ?>
<link rel="stylesheet" href="assets/style.css">

<ul class="menu">
    <li><a href="index.php">Home</a></li>
    <li><a href="albums.php">Albums</a></li>
    <li><a href="search.php">Search</a></li>
    <li><a href="logout.php">Logout</a></li>
</ul>
