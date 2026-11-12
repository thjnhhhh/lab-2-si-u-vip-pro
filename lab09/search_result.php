<?php
    require_once("settings.php");

    $conn = mysqli_connect($host, $user, $pwd, $sql_db);

    if (!$conn) {
        die("Database connection failed: " . mysqli_connect_error());
    }
?>

    <h1>kết quả xe bị trộm</h1>
    <?php
        if (isset($_GET['model']) && trim($_GET['model']) != "") {

            $model = mysqli_real_escape_string($conn, $_GET['model']);

            $sql = "SELECT * FROM cars WHERE price LIKE '%$model%'";

            $result = mysqli_query($conn, $sql);

            if (mysqli_num_rows($result) > 0) {

                echo "<table border='1' cellpadding='5'>";
                echo "<tr>";
                echo "<th>ID</th>";
                echo "<th>hãng</th>";
                echo "<th>mẫu</th>";
                echo "<th>giá</th>";
                echo "<th>năm bị trộm</th>";
                echo "</tr>";

                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . htmlspecialchars($row['car_id']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['make']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['model']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['price']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['yom']) . "</td>";
                    echo "</tr>";
                }

                echo "</table>";

            } else {
                echo "<p>Không có xe để hiển thị vì đã bị giam hết xe</p>";
            }

        } else {
            echo "<p>Làm ơn hãy nhập 1 mẫu xe có thật</p>";
        }

        mysqli_close($conn);
    ?>

    <p><a href="search_form.php">tìm lại mẫu xe mà bạn đã bị trộm</a></p>

</body>
</html>
