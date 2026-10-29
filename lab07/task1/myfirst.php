
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>My First PHP</title>
</head>
<body>
    <?php
        $marks = array(85, 85, 95);
        $marks[1] = 90;

        $ave = ($marks[0] + $marks[1] + $marks[2]) / 3;

        if ($ave >= 50) {
            $status = "PASSED";
        } else {
            $status = "FAILED";
        }

        echo "<p>Average: " . $ave . "</p>";
        echo "<p>Status: " . $status . "</p>";
    ?>
</body>
</html>
