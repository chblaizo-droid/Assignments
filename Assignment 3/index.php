<!DOCTYPE html>
<html>
<head>
    <title>HND 2023 Form</title>
</head>
<body>
<form name="myForm" action="process.php" method="POST" onsubmit="return validateForm()">
    <table border="1">
        <tr>
            <td>Name</td>
            <td><input type="text" name="name" id="name"></td>
        </tr>
        <tr>
            <td>EMail</td>
            <td><input type="text" name="email" id="email"></td>
        </tr>
        <tr>
            <td>Zip Code</td>
            <td><input type="text" name="zip" id="zip"></td>
        </tr>
        <tr>
            <td>Country</td>
            <td>
                <select name="country" id="country">
                    <option value="">[choose yours]</option>
                    <option value="USA">USA</option>
                    <option value="UK">UK</option>
                    <option value="INDIA">INDIA</option>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="Submit" name="submit"></td>
        </tr>
    </table>
</form>
<script src="script.js"></script>
</body>
</html>