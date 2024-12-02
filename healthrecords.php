<?php
$id = filter_input(INPUT_POST, "id", FILTER_VALIDATE_INT);
$allergy1 = isset($_POST["allergy1"]) ? $_POST["allergy1"] : "";
$allergy2 = isset($_POST["allergy2"]) ? $_POST["allergy2"] : "";
$allergy3 = isset($_POST["allergy3"]) ? $_POST["allergy3"] : "";
$allergy4 = isset($_POST["allergy4"]) ? $_POST["allergy4"] : "";
$allergy5 = isset($_POST["allergy5"]) ? $_POST["allergy5"] : "";

$problem1 = isset($_POST["problem1"]) ? $_POST["problem1"] : "";
$problem2 = isset($_POST["problem2"]) ? $_POST["problem2"] : "";
$problem3 = isset($_POST["problem3"]) ? $_POST["problem3"] : "";
$problem4 = isset($_POST["problem4"]) ? $_POST["problem4"] : "";
$problem5 = isset($_POST["problem5"]) ? $_POST["problem5"] : "";

$vaccination1 = isset($_POST["vaccination1"]) ? $_POST["vaccination1"] : "";
$vaccination2 = isset($_POST["vaccination2"]) ? $_POST["vaccination2"] : "";
$vaccination3 = isset($_POST["vaccination3"]) ? $_POST["vaccination3"] : "";
$vaccination4 = isset($_POST["vaccination4"]) ? $_POST["vaccination4"] : "";
$vaccination5 = isset($_POST["vaccination5"]) ? $_POST["vaccination5"] : "";

$operation1 = isset($_POST["operation1"]) ? $_POST["operation1"] : "";
$operation2 = isset($_POST["operation2"]) ? $_POST["operation2"] : "";
$operation3 = isset($_POST["operation3"]) ? $_POST["operation3"] : "";

$host = "localhost";
$dbname = "myfirstdatabase";
$username = "root";
$password = ""; 

$conn = mysqli_connect($host, $username, $password, $dbname);

if (mysqli_connect_errno()) {
    die("Connection error: " . mysqli_connect_error());
}

$sql = "INSERT INTO Healthrecord (id, allergy1, allergy2, allergy3, allergy4, allergy5, problem1, problem2, problem3, problem4, problem5, vaccination1, vaccination2, vaccination3, vaccination4, vaccination5, operation1, operation2, operation3) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = mysqli_stmt_init($conn);

if (!mysqli_stmt_prepare($stmt, $sql)) {
    die(mysqli_error($conn));
}

mysqli_stmt_bind_param($stmt, "sssssssssssssssssss", $id, $allergy1, $allergy2, $allergy3, $allergy4, $allergy5, $problem1, $problem2, $problem3, $problem4, $problem5, $vaccination1, $vaccination2, $vaccination3, $vaccination4, $vaccination5, $operation1, $operation2, $operation3);
mysqli_stmt_execute($stmt);
echo "Record saved";
?>
