<?php include "config.php"; include "header.php"; ?>

<div class="breadcrumb">Home > Search</div>

<form method="get">
    <input type="text" name="q" placeholder="Search albums">
    <button>Search</button>
</form>

<?php
if (isset($_GET['q'])) {
    $q = $_GET['q'];
    $res = mysqli_query($conn,
        "SELECT * FROM albums WHERE title LIKE '%$q%' OR artist LIKE '%$q%'");

    echo '<div class="search-results">';
    while ($row = mysqli_fetch_assoc($res)) {
        echo "<p>{$row['title']} - {$row['artist']}</p>";
    }
    echo '</div>';
}
?>
<br><br>
<br><br>
<br><br>
<?php include "footer.php"; ?>
