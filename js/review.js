function validateReview() {
    const name = document.forms["review"]["name"].value;
    if (name == "" || name == null) {
        alert("You have to enter the park's name");
        return false;
    }
    const latitude = document.forms["review"]["latitude"].value;
    if (!(/^\d*\.?\d*$/.test(latitude)) || latitude == "") {
        alert("You have to enter a valid latitude for the park");
        return false;
    }
    const longitude = document.forms["review"]["longitude"].value;
    if (!(/^\d*\.?\d*$/.test(longitude)) || longitude == "") {
        alert("You have to enter a valid longitude for the park");
        return false;
    }
    const parkType = document.forms["review"]["parkType"].value;
    if (parkType == "" || parkType == null) {
        alert("You have to select the type if park");
        return false;
    }
    const Review = document.forms["review"]["Review"].value;
    if (Review == "" || Review == null) {
        alert("You have to submit a rating");
        return false;
    }
}

function setCoordinates(pos) {
    var crd = pos.coords;
    document.forms["review"]["latitude"].value = crd.latitude;
    document.forms["review"]["longitude"].value = crd.longitude;
}

function catchError(err) {
    console.log(`ERROR(${err.code}): ${err.message}`);
}

function getCoordinates() {
    navigator.geolocation.getCurrentPosition(setCoordinates, catchError)
}