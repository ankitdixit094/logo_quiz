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

    $sql = "select count(*) as noOfTeam from round2_result where active='1'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $noOfTeam = $row['noOfTeam'];
        }
    }
    $lastNo = $noOfTeam*3;
    if($repatLoop <= $lastNo)
    {
        if(!$_SESSION['trac'])
        {
            $_SESSION['trac']=0;
        }
        if($_SESSION['trac'] >= $noOfTeam)
        {
            $_SESSION['trac']=0;
        }
        $lim = $_SESSION['trac'];
        $sql = "SELECT * FROM team_result_dumy LIMIT $lim,1";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row2 = $result->fetch_assoc()) {
                $team_id = $row2["team_id"];
                $team_name = $row2["team_name"];
            }
            $_SESSION['trac'] = $lim+1;
        }else{
            echo "error in faching usr record";
        }
        $sql = "SELECT l.logo_id, l.logo_name,l.logo_description, l.logo_question, s.location FROM logo l LEFT JOIN small s ON l.logo_id = s.logo_id WHERE l.type LIKE '%3%' and l.status = '1' ORDER BY RAND() LIMIT 1";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $_SESSION["logoId"] = $row["logo_id"];
                $_SESSION["logoNameReal"] = $row["logo_name"];
                //$_SESSION["logoDescription"] = $row["logo_description"];
                $_SESSION["logoLocation"] = $row["location"];
                $_SESSION["logoQuestion"] = $row["logo_question"];
                $logoQuestion = $row["logo_question"];
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
            header('Location: ../pages/round3_result_display.php');
        }

        $logoNameArray = array($_SESSION['logoNameReal']);
        $logoNameForSql = $_SESSION['logoNameReal'];
        $sql ="select logo_name from logo where logo_name != '$logoNameForSql' ORDER BY RAND() LIMIT 3";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $abc = $row['logo_name'];
                array_push($logoNameArray,$abc);
            }
            shuffle($logoNameArray);
        }else{
            echo "Error faching table: " . $conn->error."<br>";
        }

        //$sql2 = "SELECT * FROM team";
        //$result2 = $conn->query($sql2);
        $repatLoop = $repatLoop + 1;
        $_SESSION["repatLoop"] = $repatLoop;
    }else{
        unset($_SESSION['repatLoop']);
        header('Location: ../pages/round3_result_display.php');
        //echo "re";
    }

?>
