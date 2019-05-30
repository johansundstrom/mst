<?php require "assets/conn.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/myStyle.css">
    <title>Document</title>
</head>
<body>

<?php    
    $sql = "SELECT * FROM members";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {

            echo "<div class='grow pic'>";
            echo "<img class='content-image' src='images/team/" . $row["pic"] . "-500.jpg'>";
                echo "<div class='pic-text'>";
                    echo "<h3>This is a title</h3>";
                    echo "<p>This is a short description</p>";
                echo "</div>";
            echo "</div>";

        }
    } else {
        echo "0 results";
    }
    $conn->close();
?>
      
</body>
</html>