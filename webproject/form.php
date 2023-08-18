
<?php
    include("database.php");

    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM users
            WHERE username = '{$username}'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    if($password == $row["password"]) {
        header("Location: map.html");
    }
    else {
        header("Location: falsepassword.html");
    }

    mysqli_close($conn);
?>