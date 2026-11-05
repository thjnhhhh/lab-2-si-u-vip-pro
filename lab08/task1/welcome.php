<?php session_start();

    if (isset($_SESSION["user"])) {
        $username = $_SESSION["user"];
    } else {
        header("Location: login.php");
        exit();
    }
?>

<?php include("header.inc"); ?>

<h2>Welcome!</h2>

<p>
    Welcome, <?php echo htmlspecialchars($username); ?>!
</p>

<p>You have successfully logged in.</p>

<p>
    <a href="logout.php">Logout</a>
</p>

<?php include("footer.inc"); ?>
