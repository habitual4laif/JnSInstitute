<?php
include 'dbh.php';

$name = $_POST['name'];
$email = $_POST['email'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$sql = "INSERT into contact (name, email, subject, message)
VALUES ('$name', '$email', '$subject', '$message')";
$result = $dbh->query($sql);

header('Location: contact.php?sent');
