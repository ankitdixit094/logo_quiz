<?php
    $servername = "localhost";
    $username = "";
    $password = "";
    $dbname = "logo_quiz";
    $conn = new mysqli($servername, $username, $password, $dbname);
    session_start();
    if(!$_SESSION["repatLoop"])
    {
        $_SESSION["repatLoop"] = 1;
    }
    $repatLoop = $_SESSION["repatLoop"];
    $numOfTeam = $_SESSION["numOfTeam"];
    $lastNo = $numOfTeam*3;
    if($repatLoop <= $lastNo)
    {
        $sql = "SELECT l.logo_id, l.logo_name,l.logo_description, s.location FROM logo l LEFT JOIN small s ON l.logo_id = s.logo_id WHERE l.type LIKE '%1%' and l.status = '1' ORDER BY RAND() LIMIT 1";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $_SESSION["logoId"] = $row["logo_id"];
                $_SESSION["logoName"] = $row["logo_name"];
                $_SESSION["logoDescription"] = $row["logo_description"];
                $_SESSION["logoLocation"] = $row["location"];
                $quesNo = $repatLoop;
                $logoId = $row["logo_id"];
                $sql = "UPDATE logo SET status = '0' WHERE logo_id = $logoId;";
                if ($conn->query($sql) === FALSE) {
                    echo "Error update table: " . $conn->error."<br>";
                }
            }
        }else{
            unset($_SESSION['repatLoop']);
            echo "error: while faching logo may be no new logo exist.";
            header('Location: ../pages/round1_result_display.php');
        }

        $sql2 = "SELECT * FROM team";
        $result2 = $conn->query($sql2);
        $repatLoop = $repatLoop + 1;
        $_SESSION["repatLoop"] = $repatLoop;
    }else{
        unset($_SESSION['repatLoop']);
        header('Location: ../pages/round1_result_display.php');
        //echo "re";
    }

?>
