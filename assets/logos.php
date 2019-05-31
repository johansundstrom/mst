<?php 
    $path = $_SERVER['DOCUMENT_ROOT'];
    $path .= "/assets/conn.php"; 
    include_once($path);
?>

<h4>We proudly present our partners</h4>
<div class="grid-container mb-4">

    <?php    
        $sql = "SELECT * FROM sponsors";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {

                echo '<div class="item item-' . $row["place"] . '">';
                echo '<a href="' . $row["url"] . '">';
                    echo '<div include-html="/images/logos/svg/' . $row["pic"] . '.svg"></div>';
                echo '</a>';
                echo '</div>';

            }
        } else {
            echo "0 results";
        }
        $conn->close();
    ?>   
    
</div>