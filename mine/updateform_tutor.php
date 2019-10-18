<?php
session_start();
include 'dbh.php';
$id = $_SESSION['id'];

if (isset($_SESSION['id'])){
	$sql = "SELECT * FROM tutor_user WHERE id='$id'";
	$result = $dbh->query($sql);
	$results = mysqli_fetch_assoc($result);
}

$pwd = $results['pwd'];
$pwd1 = $results['pwd1'];

if (isset($_POST['update_info'])){
    $file = $_FILES['image'];
    $fileName = $file['name'];
    $fileTmpName = $file['tmp_name']; //Tmp is the temporary location of the file
    $fileSize = $file['size'];
    $fileError = $file['error'];
    $fileType = $file['type'];

    //This tell what kind of files we want to allow
    $fileExtension = explode('.', $fileName);
    $fileActualExtension = strtolower(end($fileExtension));
    //strtolower() is a string that changes all letters to lowercase. end() gets the last piece of data from array

    //This has the information inside as the kind of files we want them to upload.
    $allowed = array('jpg', 'jpeg', 'png');

    //This check if there are any of the $allowed in what was uploaded
    if(in_array($fileActualExtension, $allowed)){
        if($fileError === 0){
            if($fileSize < 1000000){
                $fileNewName = uniqid('', true).".".$fileActualExtension;

// These two lines upload the image first while the other two (some lines down) makes the image accessible for display
                $fileDestination = 'assets/'.$fileNewName;
                move_uploaded_file($fileTmpName, $fileDestination);//This function uploads the file

                $sql = "INSERT INTO tutor_user (image) VALUES ('$fileDestination')";
                $result = $dbh->query($sql);


          $first = $_POST['firstName'];
          $last = $_POST['lastName'];
          $email = $_POST['email'];
          $joinDate = $_POST['joinDate'];
          $degree = $_POST['degree'];
          $gender = $_POST['gender'];
          $number = $_POST['number'];
          $dob = $_POST['dob'];
          $address = $_POST['address'];
					$bio = $_POST['bio'];
          $image = $_POST['image'];

          // This two lines makes the image available together with other properties of the product
                $fileDe = 'assets/'.$fileNewName;
                move_uploaded_file($fileTmpName, $fileDe);

            if (empty($first)){
                header("Location: tutor_update.php?error=empty");
                exit();
            }
            if (empty($last)){
                header("Location: tutor_update.php?error=empty");
                exit();
            }
            if (empty($email)){
                header("Location: tutor_update.php?error=empty");
                exit();
            }
            if (empty($number)){
                header("Location: tutor_update.php?error=empty");
                exit();
            }
            if (empty($address)){
                header("Location: tutor_update.php?error=empty");
                exit();
            }
            else{
                $sql = "UPDATE tutor_user SET first='$first', last='$last',
                 joinDate='$joinDate', degree='$degree', gender='$gender', phoneNo='$number',
                 dob='$dob', address='$address', bio='$bio', image='$fileDe' WHERE email='$email'";
                $result = $dbh->query($sql);

                    header('Location: tutorDashboard.php?100');  //This takes the user back to the home page after clicking submit button
                }

              }else {
                            echo "Your file is too large!";
                          }
                }else {
                    echo "There was an error uploading your file.";
                  }
            } else{
              echo "This file is not accepted";
      }

  }
