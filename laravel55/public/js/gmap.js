//googlemap
var geocoder;
var map;
var latlng;

function initMap() {
    // Create an array of styles.
    var styles = [{
        "elementType": "geometry",
        "stylers": [{
            "color": "#ebe3cd"
        }]
    }, {
        "elementType": "labels.text.fill",
        "stylers": [{
            "color": "#523735"
        }]
    }, {
        "elementType": "labels.text.stroke",
        "stylers": [{
            "color": "#f5f1e6"
        }]
    }, {
        "featureType": "administrative",
        "elementType": "geometry.stroke",
        "stylers": [{
            "color": "#c9b2a6"
        }]
    }, {
        "featureType": "administrative.land_parcel",
        "elementType": "geometry.stroke",
        "stylers": [{
            "color": "#dcd2be"
        }]
    }, {
        "featureType": "administrative.land_parcel",
        "elementType": "labels.text.fill",
        "stylers": [{
            "color": "#ae9e90"
        }]
    }, {
        "featureType": "landscape.natural",
        "elementType": "geometry",
        "stylers": [{
            "color": "#dfd2ae"
        }]
    }, {
        "featureType": "poi",
        "elementType": "geometry",
        "stylers": [{
            "color": "#dfd2ae"
        }]
    }, {
        "featureType": "poi",
        "elementType": "labels.text.fill",
        "stylers": [{
            "color": "#93817c"
        }]
    }, {
        "featureType": "poi.park",
        "elementType": "geometry.fill",
        "stylers": [{
            "color": "#a5b076"
        }]
    }, {
        "featureType": "poi.park",
        "elementType": "labels.text.fill",
        "stylers": [{
            "color": "#447530"
        }]
    }, {
        "featureType": "road",
        "elementType": "geometry",
        "stylers": [{
            "color": "#f5f1e6"
        }]
    }, {
        "featureType": "road.arterial",
        "elementType": "geometry",
        "stylers": [{
            "color": "#fdfcf8"
        }]
    }, {
        "featureType": "road.highway",
        "elementType": "geometry",
        "stylers": [{
            "color": "#f8c967"
        }]
    }, {
        "featureType": "road.highway",
        "elementType": "geometry.stroke",
        "stylers": [{
            "color": "#e9bc62"
        }]
    }, {
        "featureType": "road.highway.controlled_access",
        "elementType": "geometry",
        "stylers": [{
            "color": "#e98d58"
        }]
    }, {
        "featureType": "road.highway.controlled_access",
        "elementType": "geometry.stroke",
        "stylers": [{
            "color": "#db8555"
        }]
    }, {
        "featureType": "road.local",
        "elementType": "labels.text.fill",
        "stylers": [{
            "color": "#806b63"
        }]
    }, {
        "featureType": "transit.line",
        "elementType": "geometry",
        "stylers": [{
            "color": "#dfd2ae"
        }]
    }, {
        "featureType": "transit.line",
        "elementType": "labels.text.fill",
        "stylers": [{
            "color": "#8f7d77"
        }]
    }, {
        "featureType": "transit.line",
        "elementType": "labels.text.stroke",
        "stylers": [{
            "color": "#ebe3cd"
        }]
    }, {
        "featureType": "transit.station",
        "elementType": "geometry",
        "stylers": [{
            "color": "#dfd2ae"
        }]
    }, {
        "featureType": "water",
        "elementType": "geometry.fill",
        "stylers": [{
            "color": "#b9d3c2"
        }]
    }, {
        "featureType": "water",
        "elementType": "labels.text.fill",
        "stylers": [{
            "color": "#92998d"
        }]
    }];

    // Create a new StyledMapType object, passing it the array of styles,
    // as well as the name to be displayed on the map type control.
    var styledMap = new google.maps.StyledMapType(styles, { name: "Styled Map" });

    geocoder = new google.maps.Geocoder();
    latlng = new google.maps.LatLng(25.039237, 121.550549);
    var myOptions = {
        zoom: 17,
        scrollwheel: false,
        center: latlng,
        mapTypeControl: false,
        streetViewControl: true,
        panControl: false,
        zoomControl: true,
        zoomControlOptions: {
            style: google.maps.ZoomControlStyle.SMALL
        },
        scaleControl: false,
        mapTypeControlOptions: {
            mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
        }
    };

    map = new google.maps.Map(document.getElementById("gmap"), myOptions);
    //Associate the styled map with the MapTypeId and set it to display.
    map.mapTypes.set('map_style', styledMap);
    map.setMapTypeId('map_style');
    map.setCenter(latlng);
    var image = 'images/flag.png';
    var marker = new google.maps.Marker({
        map: map,
        position: latlng,
        animation: google.maps.Animation.DROP,
        title: "谷德网络科技行销有限公司",
        icon: image
    });

}

function moveToDarwin() {
    //map.setCenter(latlng);
    map.panTo(latlng);
}

