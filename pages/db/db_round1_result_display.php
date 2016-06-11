<?php
    $servername = "localhost";
    $username = "";
    $password = "";
    $dbname = "logo_quiz";
    $uid = $_REQUEST['ID'];
    $but = $_REQUEST['Button'];
    $conn = new mysqli($servername, $username, $password, $dbname);
    if($but === 'qualify')
    {
        $sql = "UPDATE round1_result SET active ='1' WHERE team_id ='$uid'";
            if ($conn->query($sql) === FALSE) {
            echo "Error update table: " . $conn->error."<br>";
        }
    }
    if($but === 'disqualify')
    {
        $sql = "UPDATE round1_result SET active ='0' WHERE team_id ='$uid'";
            if ($conn->query($sql) === FALSE) {
            echo "Error update table: " . $conn->error."<br>";
        }
    }
?>
