<?php

include("db.php");


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $password = $_POST["password"];
    $email = $_POST["email"];


    echo $name . "<br>", $password . "<br>", $email . "<br>"; // check vlaues in variable

    //checking if email is already registered

    $checkEmail = "SELECT * FROM people WHERE email='$email'  ";
    $result = mysqli_query($conn, $checkEmail);
    if (mysqli_num_rows($result) > 0) {
        echo "Email already exists!";
    } else {
        // Insert to db

        $sql = "INSERT INTO people(name,password,email)
            VALUES('$name','$password','$email')";


        if (mysqli_query($conn, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
    mysqli_close($conn);
}


?>