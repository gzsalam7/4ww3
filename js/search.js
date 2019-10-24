function validateLogin() {
    const user = document.forms["login"]["username"].value;
    if (user == "") {
        alert("You have to fill out Username field");
        return false;
    }
    const password = document.forms["login"]["password"].value;
    if (password == "") {
        alert("You have to enter a password");
        return false;
    }
}

function setCoordinates(pos) {
    var crd = pos.coords;
    document.forms["search"]["latitude"].value = crd.latitude;
    document.forms["search"]["longitude"].value = crd.longitude;
}

function catchError(err) {
    console.log(`ERROR(${err.code}): ${err.message}`);
}

function getCoordinates() {
    navigator.geolocation.getCurrentPosition(setCoordinates, catchError)
}