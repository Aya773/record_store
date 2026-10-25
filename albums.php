<?php include "config.php"; include "header.php"; ?>

<div class="breadcrumb">Home > Albums</div>
<div class="album-grid">
<div class="pagination-container">
<?php
$limit = 4;
$page = isset($_GET['page']) ? $_GET['page'] : 1;
$start = ($page - 1) * $limit;

$result = mysqli_query($conn, "SELECT * FROM albums LIMIT $start, $limit");

while ($row = mysqli_fetch_assoc($result)) {
    echo "<div class='album'>
            <img src='images/{$row['image']}' alt='{$row['title']}' class='album-img'>
            <h3>{$row['title']}</h3>
            <p><strong>Artist:</strong> {$row['artist']}</p>
            <p><strong>Genre:</strong> {$row['genre']}</p>
          </div>";
}




$total = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM albums"));
$pages = ceil($total / $limit);

for ($i = 1; $i <= $pages; $i++) {
    echo "<a href='albums.php?page=$i'>$i</a> ";
}

?>
</div>
</div>
<?php include "footer.php"; ?>
