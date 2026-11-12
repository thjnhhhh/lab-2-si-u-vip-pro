<?php
    require_once("settings.php");

    $conn = mysqli_connect($host, $user, $pwd, $sql_db);

    if (!$conn) {
        die("Ta mất kết nối thật rồi em hỡi" . mysqli_connect_error());
    }

    $query = "SELECT * FROM cars";
    $result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trộm xe</title>
</head>
<body>

    <h1>danh sách xe đã bị trộm</h1>

    <?php
        if (mysqli_num_rows($result) > 0) {
    ?>
        <table border="1">
            <tr>
                <th>Car ID</th>
                <th>hãng</th>
                <th>mẫu</th>
                <th>giá bán</th>
                <th>năm bị trộm</th>
            </tr>

            <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($row['car_id']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['make']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['model']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['price' ]) . "</td>";
                    echo "<td>" . htmlspecialchars($row['yom']) . "</td>";
                    echo "</tr>";
                }
            ?>
        </table>

    <?php
        } else {
            echo "<p>Xe đã bị biến thành phế liệu</p>";
        }

        mysqli_close($conn);
    ?>

</body>
</html>
