<?php
$num_of_team = $_REQUEST['num_of_team'];
$num_of_members = $_REQUEST['num_of_members'];
$servername = "localhost";
$username = "";
$password = "";
$dbname = "logo_quiz";
// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "CREATE DATABASE IF NOT EXISTS logo_quiz";
if ($conn->query($sql) === FALSE) {
    echo "Error creating database: " . $conn->error;
}
$conn->close();

$conn = new mysqli($servername, $username, $password, $dbname);

$sql = "DROP TABLE IF EXISTS team";
if ($conn->query($sql) === FALSE) {
    echo "Error creating table: " . $conn->error."<br>";
}

$sql = "CREATE TABLE team(team_id INT(6) UNSIGNED PRIMARY KEY, team_name VARCHAR(30) UNIQUE NOT NULL, member text NOT NULL, active tinyint(1) default 1)";
if ($conn->query($sql) === FALSE) {
    echo "Error creating table: " . $conn->error."<br>";
}
for ($i=1; $i <= $num_of_team; $i++)
{
    $first = $_REQUEST['name_of_team'.$i];
    $sql = "INSERT INTO team (team_id,team_name, active) VALUES ($i,'$first','1')";
    if ($conn->query($sql) === FALSE) {
        echo "Error insert table: " . $conn->error."<br>";
    }
    $memName = "";
    for ($j=1; $j <= $num_of_members; $j++)
    {
        $second = $_REQUEST['name_of_member'.$i.$j];
        $memName = $second.", ".$memName;
    }
    $sql = "UPDATE team SET member = '$memName' WHERE team_id = $i";
    if ($conn->query($sql) === FALSE) {
        echo "Error update table: " . $conn->error."<br>";
    }
}



//$abc ="";
//for ($j=1; $j <= $num_of_members; $j++)
//{
//    $abc = $abc.' member'.$j.' VARCHAR(30) NULL NOT NULL,';
//}
//$sql = "CREATE TABLE team(team_id INT(6) UNSIGNED PRIMARY KEY, team_name VARCHAR(1) UNIQUE NOT NULL,". $abc. " active tinyint(1) default 1)";
//if ($conn->query($sql) === FALSE) {
//    echo "Error creating table: " . $conn->error."<br>";
//}
//
//for ($i=1; $i <= $num_of_team; $i++)
//{
//    $first = $_REQUEST['name_of_team'.$i];
//    $sql = "INSERT INTO team (team_id,team_name, active) VALUES ($i,'$first','1')";
//    if ($conn->query($sql) === FALSE) {
//        echo "Error insert table: " . $conn->error."<br>";
//    }
//    for ($j=1; $j <= $num_of_members; $j++)
//    {
//        $second = $_REQUEST['name_of_member'.$i.$j];
//        $memberCol = "member$j";
//        $sql = "UPDATE team SET $memberCol = '$second' WHERE team_id = $i";
//        if ($conn->query($sql) === FALSE) {
//            echo "Error update table: " . $conn->error."<br>";
//        }
//    }
//}

$sql = "DROP TABLE IF EXISTS round1_result";
if ($conn->query($sql) === FALSE) {
    echo "Error creating table: " . $conn->error."<br>";
}

$sql = "CREATE TABLE round1_result(team_id INT(6) UNSIGNED PRIMARY KEY, team_name VARCHAR(30) UNIQUE NOT NULL , correct INT(11) default 0, wrong INT(11) default 0, status INT(11) default 0, active tinyint(1) default 1)";
if ($conn->query($sql) === FALSE) {
    echo "Error creating table: " . $conn->error."<br>";
}

for ($i=1; $i <= $num_of_team; $i++)
{
    $first = $_REQUEST['name_of_team'.$i];
    $sql = "INSERT INTO round1_result (team_id,team_name, active) VALUES ($i,'$first','1')";
    if ($conn->query($sql) === FALSE) {
        echo "Error insert table: " . $conn->error."<br>";
    }
}

$sql = "UPDATE logo SET status = '1'";
if ($conn->query($sql) === FALSE) {
    echo "Error update table: " . $conn->error."<br>";
}

$conn->close();
session_start();
$_SESSION["numOfTeam"] = $num_of_team;
$_SESSION["repatLoop"] = 1;
header('Location: /logo_quiz/index.php?');
?>
