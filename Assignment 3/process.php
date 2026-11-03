<?php
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $zip = $_POST['zip'];
    $country = $_POST['country'];

    // 1. Save to hnd2023.txt
    $data = $name . "," . $email . "," . $zip . "," . $country . "\n";
    $file = fopen("hnd2023.txt", "a");
    fwrite($file, $data);
    fclose($file);
    echo "Data saved to hnd2023.txt<br>";
}

// 2. Display file data in HTML table
echo "<h3>Data from hnd2023.txt</h3>";
echo "<table border='1'><tr><th>Name</th><th>Email</th><th>Zip Code</th><th>Country</th></tr>";

if(file_exists("hnd2023.txt")){
    $lines = file("hnd2023.txt");
    foreach($lines as $line){
        $cols = explode(",", trim($line));
        echo "<tr><td>$cols[0]</td><td>$cols[1]</td><td>$cols[2]</td><td>$cols[3]</td></tr>";
    }
}
echo "</table>";
?>

<?php
if(isset($_POST['submit'])){
    if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['zip']) || empty($_POST['country'])){
        die("All fields are required");
    }
    if(!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
        die("Invalid email format");
    }
    echo "Validation passed, proceed to save";
}
?>