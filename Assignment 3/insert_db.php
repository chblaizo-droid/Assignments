<?php
$conn = mysqli_connect("localhost", "root", "", "school");

if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $zip = $_POST['zip'];
    $country = $_POST['country'];

    $sql = "INSERT INTO SWE (name, email, zipcode, country) VALUES ('$name', '$email', '$zip', '$country')";
    mysqli_query($conn, $sql);
    echo "Record inserted";
}
?>