<?php
    $servername = "localhost";
    $username = "";
    $password = "";
    $dbname = "logo_quiz";
    $conn = new mysqli($servername, $username, $password, $dbname);
    session_start();
    $logoId = $_SESSION["logoId"];
    $sql = "SELECT l.logo_id, l.logo_name,l.logo_description, f.location FROM logo l LEFT JOIN full f ON l.logo_id = f.logo_id WHERE l.logo_id = '$logoId'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $logoId = $row["logo_id"];
            $logoName = $row["logo_name"];
            $logoDescription = $row["logo_description"];
            $location = $row["location"];
        }
    }else{
        echo "error: while faching.";
    }
?>
