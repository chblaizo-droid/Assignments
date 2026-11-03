function validateForm() {
    let name = document.getElementById("name").value;
    let email = document.getElementById("email").value;
    let zip = document.getElementById("zip").value;
    let country = document.getElementById("country").value;

    // Check all data must be entered
    if (name == "" || email == "" || zip == "" || country == "") {
        alert("All fields must be filled");
        return false;
    }

    // Check correct standard email
    let emailPattern = /^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/;
    if (!emailPattern.test(email)) {
        alert("Please enter a valid email address");
        return false;
    }

    return true;
}