<?php
    $error = "";

    if (isset($_GET["error"])) {
        $error = "Invalid username or password!";
    }
?>

<?php include("header.inc"); ?>

<h2>Login Page</h2>

<?php
    if ($error != "") {
        echo "<p>" . htmlspecialchars($error) . "</p>";
    }
?>

<form method="post" action="process.php">

    <p>
        <label for="username">Username:</label>
        <input type="text" name="username" id="username">
    </p>

    <p>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password">
    </p>

    <input type="hidden" name="token" value="A1234567">

    <p>
        <input type="submit" value="Login">
        <input type="reset" value="Reset">
    </p>

</form>

<?php include("footer.inc"); ?>
