<?php
session_start();
require_once '../mine/dbh.php';

$first = $_POST['firstName'];
$last = $_POST['lastName'];
$email = $_POST['email'];
$pwd = $_POST['pwd'];
$pwd1 = $_POST['pwd1'];

if (empty($first)){
    header("Location: signup.php?error=empty");
    exit();
}
if (empty($last)){
    header("Location: signup.php?error=empty");
    exit();
}
if (empty($email)){
    header("Location: signup.php?error=empty");
    exit();
}
if (empty($pwd)){
    header("Location: signup.php?error=empty");
    exit();
}
if (empty($pwd1)){
    header("Location: signup.php?error=empty");
    exit();
}
if ($pwd !== $pwd1){
  header("Location: signup.php?error=password");
  exit();
}
else{
    $sql = "SELECT email FROM admin WHERE email='$email'";
    $result = $dbh->query($sql);
    $uidcheck = mysqli_num_rows($result);
    if ($uidcheck > 0){
        header("Location: signup.php?error=username");
        exit();
    }else{
        $encrypted_password = password_hash($pwd, PASSWORD_DEFAULT); //This is how to encrypt passwords
        $encrypted_password1 = password_hash($pwd1, PASSWORD_DEFAULT); //This is how to encrypt passwords
        $sql = "INSERT INTO admin (first, last, email, pwd, pwd1)
        VALUES ('$first', '$last', '$email', '$encrypted_password', '$encrypted_password1')";
        $result = $dbh->query($sql);

        header('Location: login.php?1');  //This takes the user back to the home page after clicking submit button
    }
}
