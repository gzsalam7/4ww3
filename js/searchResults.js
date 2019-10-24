function initMap() {

    var start = { lat: 43.249815, lng: -79.914312 };

    var map = new google.maps.Map(
        document.getElementById('map'), { zoom: 11, center: start });

    var greenHills = new google.maps.Marker({
        position: start,
        map: map,
        title: "Green Hills Park",
        link: "park.html"
    })
    greenHills.addListener('click', function() {
        infowindowGreen.open(map, greenHills);
    });
    var greenContent = "<a href=park.html>" + greenHills.title + "</a> </br> <strong>Type: </strong>Trail </br><strong>Rating: </strong>3.5"
    var infowindowGreen = new google.maps.InfoWindow({
        content: greenContent,
        maxWidth: 200
    });

    var elDorado = new google.maps.Marker({
        position: { lat: 43.24, lng: -79.99 },
        map: map,
        title: "El Dorado Park"
    });
    elDorado.addListener('click', function() {
        infowindowEl.open(map, elDorado);
    });
    var elContent = "<a href=park.html>" + elDorado.title + "</a> </br> <strong>Type: </strong>Trail </br><strong>Rating: </strong>5"
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
    var doggieContent = "<a href=park.html>" + doggieHeaven.title + "</a> </br> <strong>Type: </strong>Dog </br><strong>Rating: </strong>4"
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
    var landContent = "<a href=park.html>" + landFill.title + "</a> </br> <strong>Type: </strong>Children's </br><strong>Rating: </strong>2"
    var infowindowLand = new google.maps.InfoWindow({
        content: landContent,
        maxWidth: 200
    });
}