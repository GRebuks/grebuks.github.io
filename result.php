<?php
include_once("dbconn.php");
$dbconn = new dbconn();
$con = $dbconn->db();
if($_SERVER["REQUEST_METHOD"] === "POST") {
    if($stmt = $con->prepare("INSERT INTO `contact` (`name`, `contact`, `message`, `date_sent`) VALUES (?, ?, ?, ?);")) {
        $date = date("Y-m-d");
        $stmt->bind_param("ssss", $_POST["name"], $_POST["contact"], $_POST["message"], $date);
        $stmt->execute();
    }
    header("Location: index.php");
    exit();
}
