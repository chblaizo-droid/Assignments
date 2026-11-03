<?php
$conn = mysqli_connect("localhost", "root", "", "school");
$result = mysqli_query($conn, "SELECT * FROM SWE");

echo "<table border='1'><tr><th>Name</th><th>Email</th><th>Zip</th><th>Country</th></tr>";
while($row = mysqli_fetch_assoc($result)){
    echo "<tr><td>{$row['name']}</td><td>{$row['email']}</td><td>{$row['zipcode']}</td><td>{$row['country']}</td></tr>";
}
echo "</table>";
?>