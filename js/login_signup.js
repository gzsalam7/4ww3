// function used to validate login,checks if string is null or empty otherwise allows strings
// for the login form
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

// same as above checks if strings are empty or null and alerts if they are
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
    // this one uses a regex to make sure the email is in proper format before alerting
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