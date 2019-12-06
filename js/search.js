// function used to validate login,checks if string is null or empty otherwise allows strings
// for the login form
function validateLogin() {
    const user = document.forms["login"]["email"].value;
    if (user == "") {
        alert("You have to fill out email field");
        return false;
    }
    const password = document.forms["login"]["password"].value;
    if (password == "") {
        alert("You have to enter a password");
        return false;
    }
}
//  sets the values of lat and long in review form to users current long and lat using geolocation api
function setCoordinates(pos) {
    var crd = pos.coords;
    document.forms["search"]["latitude"].value = crd.latitude;
    document.forms["search"]["longitude"].value = crd.longitude;
}
// error function in case geolocation api doesnt load
function catchError(err) {
    console.log(`ERROR(${err.code}): ${err.message}`);
}
// uses the geoloc api to get the users current gps locaiton by passing in a function if the api loads and a function if it doesnt
function getCoordinates() {
    navigator.geolocation.getCurrentPosition(setCoordinates, catchError)
}