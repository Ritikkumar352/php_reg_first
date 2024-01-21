<?php

include("process.php");
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h2>Index page</h2>
    <h2>Trial Registration Form</h2>
    <form action="index.php" method="post">
        Name: <br>
        <input type="text" name="name" id=""> <br>

        Paaword: <br>
        <input type="password" name="password" id=""> <br>

        Email: <br>
        <input type="email" name="email" id=""> <br>

        <input type="submit" name="submit" id="" value="register"> <br>

        <a href="welcome.php">Welcome php</a>
    </form>
</body>

</html>


<?php


    echo $name;

// $name = $_POST["name"];
// $password = $_POST["password"];
// $email = $_POST["email"];


// echo $name . "<br>", $password . "<br>", $email . "<br>"; // check vlaues in variable

// // Insert to db

// $sql = "INSERT INTO people(name,password,email)
//             VALUES('$name','$password','$email')";


// if (mysqli_query($conn, $sql)) {
//     echo "New record created successfully";
// } else {
//     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
// }




// mysqli_close($conn);
?>