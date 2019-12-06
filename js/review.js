// function used to validate login,checks if string is null or empty otherwise and alerts otherwise allows strings
// for the review form
function validateReview() {
    const name = document.forms["review"]["name"].value;
    if (name == "" || name == null) {
        alert("You have to enter the park's name");
        return false;
    }
    // regex for a decimal or whole number only
    const latitude = document.forms["review"]["latitude"].value;
    if (!(/^-?\d{2}(\.\d+)?$/.test(latitude)) || latitude == "") {
        alert("You have to enter a valid latitude for the park");
        return false;
    }
    // regex for a decimal or whole number only
    const longitude = document.forms["review"]["longitude"].value;
    if (!(/^-?\d{2}(\.\d+)?$/.test(longitude)) || longitude == "") {
        alert("You have to enter a valid longitude for the park");
        return false;
    }
    const parkType = document.forms["review"]["parkType"].value;
    if (parkType == "" || parkType == null) {
        alert("You have to select the type if park");
        return false;
    }
    const review = document.forms["review"]["review"].value;
    if (review == "" || review == null) {
        alert("You have to submit a rating");
        return false;
    }
}
//  sets the values of lat and long in review form to users current long and lat using geolocation api
function setCoordinates(pos) {
    var crd = pos.coords;
    document.forms["review"]["latitude"].value = crd.latitude;
    document.forms["review"]["longitude"].value = crd.longitude;
}
// error function in case geolocation api doesnt load
function catchError(err) {
    console.log(`ERROR(${err.code}): ${err.message}`);
}
// uses the geoloc api to get the users current gps locaiton by passing in a function if the api loads and a function if it doesnt
function getCoordinates() {
    navigator.geolocation.getCurrentPosition(setCoordinates, catchError)
}