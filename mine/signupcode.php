<?php
session_start();
include 'dbh.php';

$first = $_POST['firstName'];
$last = $_POST['lastName'];
$email = $_POST['email'];
$pwd = $_POST['pwd'];
$pwd1 = $_POST['pwd1'];
$gender = $_POST['gender'];

if (empty($first)){
    header("Location: ../mine/signup.php?error=empty");
    exit();
}
if (empty($last)){
    header("Location: ../mine/signup.php?error=empty");
    exit();
}
if (empty($email)){
    header("Location: ../mine/signup.php?error=empty");
    exit();
}
if (empty($pwd)){
    header("Location: ../mine/signup.php?error=empty");
    exit();
}
if (empty($pwd1)){
    header("Location: ../mine/signup.php?error=empty");
    exit();
}
if ($pwd !== $pwd1){
  header("Location: signup.php?error=password");
  exit();
}
else{
    $sql = "SELECT email FROM student_user WHERE email='$email'";
    $result = $dbh->query($sql);
    $uidcheck = mysqli_num_rows($result);
    if ($uidcheck > 0){
        header("Location: ../mine/signup.php?error=username");
        exit();
    }else{
        $encrypted_password = password_hash($pwd, PASSWORD_DEFAULT); //This is how to encrypt passwords
        $encrypted_password1 = password_hash($pwd1, PASSWORD_DEFAULT); //This is how to encrypt passwords
        $sql = "INSERT INTO student_user (first, last, email, pwd, pwd1, regDate, class1, gender, phoneNo, dob, address, image)
        VALUES ('$first', '$last', '$email', '$encrypted_password', '$encrypted_password1', '', '', '$gender', '', '', '', '')";
        $result = $dbh->query($sql);

        header('Location: login.php?1');  //This takes the user back to the home page after clicking submit button
    }
}
