
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Confirmation</title>
</head>
<body>
    <h1>Rohirrim Tour Booking Confirmation</h1>

    <?php
        if (isset($_POST["firstname"]) &&
            isset($_POST["lastname"])) {

            $firstname = $_POST["firstname"];
            $lastname = $_POST["lastname"];
            $age = $_POST["age"];
            $species = $_POST["species"];
            $food = $_POST["food"];
            $bookday = $_POST["bookday"];
            $partysize = $_POST["partysize"];

            echo "<p>First Name: " .
                htmlspecialchars($firstname) . "</p>";

            echo "<p>Last Name: " .
                htmlspecialchars($lastname) . "</p>";

            echo "<p>Age: " .
                htmlspecialchars($age) . "</p>";

            echo "<p>Species: " .
                htmlspecialchars($species) . "</p>";

            echo "<p>Menu Preference: " .
                htmlspecialchars($food) . "</p>";

            echo "<p>Booking Date: " .
                htmlspecialchars($bookday) . "</p>";

            echo "<p>Number of Travellers: " .
                htmlspecialchars($partysize) . "</p>";

            echo "<h2>Booking Options</h2>";

            if (isset($_POST["accom"])) {
                echo "<p>Accommodation</p>";
            }

            if (isset($_POST["4day"])) {
                echo "<p>4 Day Tour</p>";
            }

            if (isset($_POST["10day"])) {
                echo "<p>10 Day Tour</p>";
            }

            echo "<h2>Thank you for your booking!</h2>";

        } else {
            echo "<p>Please submit the booking form first.</p>";
            echo '<p><a href="register.html">Return to form</a></p>';
        }
    ?>
</body>
</html>
