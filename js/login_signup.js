function validateLogin() {
    const user = document.forms["login"]["username"].value;
    if (user == "" || user == null) {
        alert("You have to fill out Username field");
        return false;
    }
    const password = document.forms["login"]["password"].value;
    if (password == "" || password == null) {
        alert("You have to enter a password");
        return false;
    }
}

function validateSignup() {
    const firstName = document.forms["signup"]["firstName"].value;
    if (firstName == "" || firstName == null) {
        alert("You have to enter a firstName");
        return false;
    }
    const lastName = document.forms["signup"]["lastName"].value;
    if (lastName == "" || lastName == null) {
        alert("You have to enter a lastName");
        return false;
    }
    const username = document.forms["signup"]["username"].value;
    if (username == "" || username == null) {
        alert("You have to enter a username");
        return false;
    }
    const email = document.forms["signup"]["email"].value;
    if (!(/^[^@]+@[^@]+\.[a-zA-Z]{2,}$/.test(email)) || email == null) {
        alert("Enter a valid email address");
        return (false)
    }
    const password = document.forms["signup"]["password"].value;
    if (password == "" || password == null) {
        alert("You have to enter a password");
        return false;
    }
}