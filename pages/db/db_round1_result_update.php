<?php
    $servername = "localhost";
    $username = "";
    $password = "";
    $dbname = "logo_quiz";
    $conn = new mysqli($servername, $username, $password, $dbname);
    session_start();
    $ansByTeam = $_SESSION["ansByTeam"];
    if($_POST['submit'] === 'correct')
    {
        $sql = "SELECT * FROM round1_result WHERE team_id = '$ansByTeam'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $correct = $row["correct"];
                $wrong = $row["wrong"];
                //echo $correct."<br>".$wrong;
                //echo $_POST['submit'];
            }
            $correct = $correct+1;
            $sql = "UPDATE round1_result SET correct = '$correct' WHERE team_id = '$ansByTeam'";
            if ($conn->query($sql) === FALSE) {
                echo "Error update table: " . $conn->error."<br>";
            }
            $sat1 = $correct-$wrong;
            $sql = "UPDATE round1_result SET status = '$sat1' WHERE team_id = '$ansByTeam'";
            if ($conn->query($sql) === FALSE) {
                echo "Error update table: " . $conn->error."<br>";
            }
            header('Location: ../round1.php');
        }else{
            echo "error: in faching data";
        }
    }

    if($_POST['submit'] === 'wrong')
    {
        $sql = "SELECT * FROM round1_result WHERE team_id = '$ansByTeam'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $correct = $row["correct"];
                $wrong = $row["wrong"];
                //echo $correct."<br>".$wrong;
                //echo $_POST['submit'];
            }
            $wrong = $wrong+1;
            $sql = "UPDATE round1_result SET wrong = '$wrong' WHERE team_id = '$ansByTeam'";
            if ($conn->query($sql) === FALSE) {
                echo "Error update table: " . $conn->error."<br>";
            }
            $sat2 = $correct-$wrong;
            $sql = "UPDATE round1_result SET status = '$sat2' WHERE team_id = '$ansByTeam'";
            if ($conn->query($sql) === FALSE) {
                echo "Error update table: " . $conn->error."<br>";
            }
            header('Location: ../round1.php');
        }else{
            echo "error: in faching data";
        }
    }

    if($_POST['submit'] === '')
    {
        header('Location: ../round1.php');
    }
?>
