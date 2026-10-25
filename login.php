<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="assets/login.css">
</head>
<body class="login-page">

<div class="login-wrapper">

    <div class="login-box">
        <h1 class="store-name">MISO ARCHIVAL</h1>

<?php
include "config.php";

if (isset($_POST['login'])) {
    $u = $_POST['username'];
    $p = md5($_POST['password']);

    $q = mysqli_query($conn, "SELECT * FROM users WHERE username='$u' AND password='$p'");
    if (mysqli_num_rows($q) == 1) {
        $_SESSION['user'] = $u;
        header("Location: index.php");
    } else {
        $error = "Invalid login!";
    }
}
?>

<form method="post">


    <h2 style="color:#9a6e6e">Login</h2>

    <input type="text" name="username" required><br>
    <input type="password" name="password" required><br>

    <button name="login">Login</button>
    <?php if(isset($error)) echo $error; ?>


</form>

</div>

</div>

</body>
</html>