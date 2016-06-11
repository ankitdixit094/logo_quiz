<?php
    session_start();
    $servername = "localhost";
    $username = "";
    $password = "";
    $dbname = "logo_quiz";
    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql = "DROP TABLE IF EXISTS round2_result";
    if ($conn->query($sql) === FALSE) {
        echo "Error update table1: " . $conn->error."<br>";
    }
    $sql = "create table round2_result like round1_result";
    if ($conn->query($sql) === FALSE) {
        echo "Error update table2: " . $conn->error."<br>";
    }
    $sql = "INSERT INTO round2_result (team_id,team_name, active) SELECT team_id,team_name, active FROM round1_result WHERE active ='1'";
    if ($conn->query($sql) === FALSE) {
        echo "Error update table3: " . $conn->error."<br>";
    }

    $sql = "DROP TABLE IF EXISTS team_result_dumy";
    if ($conn->query($sql) === FALSE) {
        echo "Error update table1: " . $conn->error."<br>";
    }
    $sql = "create table team_result_dumy like round1_result";
    if ($conn->query($sql) === FALSE) {
        echo "Error update table2: " . $conn->error."<br>";
    }
    $sql = "INSERT INTO team_result_dumy (team_id,team_name, active) SELECT team_id,team_name, active FROM round1_result WHERE active ='1'";
    if ($conn->query($sql) === FALSE) {
        echo "Error update table3: " . $conn->error."<br>";
    }
    session_unset();
    session_destroy();
    header('Location: ../index.php');
?>
