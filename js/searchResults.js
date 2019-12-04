//  function to add map to searchResults with all the markers of the returned results
function initMap() {

    var start = { lat: 43.249815, lng: -79.914312 };
    // creates new map at id map element on page
    var map = new google.maps.Map(
        document.getElementById('map'), { zoom: 11, center: start });
    // adds new marker at position start with a name and link
    var greenHills = new google.maps.Marker({
            position: start,
            map: map,
            title: "Green Hills Park",
            link: "park.php"
        }) // adds listener for a click and open an infowindow
    greenHills.addListener('click', function() {
        infowindowGreen.open(map, greenHills);
    }); // infowindow shows content which is a link with the name and rating
    var greenContent = "<a href=park.php>" + greenHills.title + "</a> </br> <strong>Type: </strong>Trail </br><strong>Rating: </strong>3.5"
    var infowindowGreen = new google.maps.InfoWindow({
        content: greenContent,
        maxWidth: 200
    });
    // added 3 more markers below
    var elDorado = new google.maps.Marker({
        position: { lat: 43.24, lng: -79.99 },
        map: map,
        title: "El Dorado Park"
    });
    elDorado.addListener('click', function() {
        infowindowEl.open(map, elDorado);
    });
    var elContent = "<a href=park.php>" + elDorado.title + "</a> </br> <strong>Type: </strong>Trail </br><strong>Rating: </strong>5"
    var infowindowEl = new google.maps.InfoWindow({
        content: elContent,
        maxWidth: 200
    });

    var doggieHeaven = new google.maps.Marker({
        position: { lat: 43.28, lng: -79.91 },
        map: map,
        title: 'Doggie Heaven Hills'
    });
    doggieHeaven.addListener('click', function() {
        infowindowDoggie.open(map, doggieHeaven);
    });
    var doggieContent = "<a href=park.php>" + doggieHeaven.title + "</a> </br> <strong>Type: </strong>Dog </br><strong>Rating: </strong>4"
    var infowindowDoggie = new google.maps.InfoWindow({
        content: doggieContent,
        maxWidth: 200
    });

    var landFill = new google.maps.Marker({
        position: { lat: 43.21, lng: -79.81 },
        map: map,
        title: "Public LandFill Sandlot"
    });
    landFill.addListener('click', function() {
        infowindowLand.open(map, landFill);
    });
    var landContent = "<a href=park.php>" + landFill.title + "</a> </br> <strong>Type: </strong>Children's </br><strong>Rating: </strong>2"
    var infowindowLand = new google.maps.InfoWindow({
        content: landContent,
        maxWidth: 200
    });
}