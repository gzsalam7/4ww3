function initMap() {

    var start = { lat: 43.249815, lng: -79.914312 };

    var map = new google.maps.Map(
        document.getElementById('map'), { zoom: 11, center: start });

    var greenHills = new google.maps.Marker({
        position: start,
        map: map,
        title: "Green Hills Park",
        link: "park.html"
    });
}