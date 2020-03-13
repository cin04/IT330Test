<?php
        $servername = "it330servercastro.mysql.database.azure.com";
        $username = "Cindy@it330servercastro";
        $password = "Castro1234";
        $dbname = "it330db";

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT id, description, count FROM inventory";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            // output data of each row
            while($row = $result->fetch_assoc()) {
                echo "id: " . $row["id"]. " - Product: " . $row["description"]. " -Count " . $row["count"]. "<br>";
            }
        } else {
            echo "0 results";
        }
        $conn->close();
?>
