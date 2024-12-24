<?php

include 'connect.php';

if (isset($_POST['signUp'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    // $password=md5($password);
    echo $name;
    echo $email;
    echo $password;

    $checkEmail = "SELECT * From users where email='$email'";
    $result = $conn->query($checkEmail);
    if ($result->num_rows > 0) {
        header("location: BOOKHAVEN.php");
        echo "Email Address Already Exists !";
    } else {
        $insertQuery = "INSERT INTO users(name,email,password)
                    VALUES ('$name','$email','$password')";
        if ($conn->query($insertQuery) == TRUE) {
            header("location: BOOKHAVEN.php");
        } else {
            echo "Error:" . $conn->error;
        }
    }
}
