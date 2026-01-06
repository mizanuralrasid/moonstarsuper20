<?php
include 'db.php';

$id = $_GET['id'];
$data = $conn->query("SELECT * FROM applicants WHERE id='$id'")->fetch_assoc();
?>

<!DOCTYPE html>
<html>
<head>
<title>Admit Card</title>
<style>
body { font-family: Arial; background:#f4f6f8; }
#admit {
 width:500px;
 margin:30px auto;
 padding:20px;
 border:2px solid black;
 background:white;
}
button { padding:10px 20px; margin-top:20px; }
</style>
</head>
<body>

<div id="admit">
<h2 align="center">MOON STAR SUPER 20</h2>
<h3 align="center">Entrance Exam Admit Card</h3>
<hr>

<p><b>Name:</b> <?= $data['name'] ?></p>
<p><b>Father's Name:</b> <?= $data['father'] ?></p>
<p><b>Roll No:</b> MS20-<?= $data['id'] ?></p>
<p><b>Class:</b> <?= $data['class'] ?></p>
<p><b>School:</b> <?= $data['school'] ?></p>

<p><b>Exam Date:</b> 15 March 2026</p>
<p><b>Exam Centre:</b> Moon Star Academy</p>

</div>

<center>
<button onclick="window.print()">Download Admit Card</button>
</center>

</body>
</html>
