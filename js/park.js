//this function uses the google map api to create a map with one built in marker
function initMap() {
    // the starting location for the map
    var start = { lat: 43.249815, lng: -79.914312 };
    // init the map and places in id map div
    var map = new google.maps.Map(
        document.getElementById('map'), { zoom: 11, center: start });
    //creates a marker on the map at position start with a title and a link
    var greenHills = new google.maps.Marker({
        position: start,
        map: map,
        title: "Green Hills Park",
        link: "park.php"
    });
}