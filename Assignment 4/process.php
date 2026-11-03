<?php
if(isset($_POST['submit'])){
    $login = $_POST['login'];
    $password = $_POST['password'];

    // Display them
    echo "<h2>Authentication Details</h2>";
    echo "Login : " . $login . "<br>";
    echo "Password : " . $password . "<br>";

    if($login == "admin" && $password == "1234"){
        echo "Login Successful - Welcome $login";
    } else {
        echo "Invalid Login or Password";
    }
} else {
    echo "No data submitted";
}
?>