<?php
include 'db.php';

$name   = $_POST['name'];
$father = $_POST['father'];
$dob    = $_POST['dob'];
$phone  = $_POST['phone'];
$school = $_POST['school'];
$class  = $_POST['class'];

$sql = "INSERT INTO applicants(name,father,dob,phone,school,class)
        VALUES('$name','$father','$dob','$phone','$school','$class')";

if ($conn->query($sql)) {
    $serial = $conn->insert_id; // SERIAL NUMBER
    header("Location: admit.php?id=$serial");
} else {
    echo "Application Failed";
}
?>
