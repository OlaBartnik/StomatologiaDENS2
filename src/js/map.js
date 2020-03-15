
function map() {

    mapboxgl.accessToken = 'pk.eyJ1IjoiYXhkYWRhY3oiLCJhIjoiY2p1MDd5ZmRiMjBzZzRhbHo5dDFweWx4aCJ9.FNAE9mAdO-SOD9DySqgU6g';
    var map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/axdadacz/ck5i35chk0nvj1imvwul65ymp',
        zoom: 15,
        center: [20.9777248, 52.234896]
    });



    map.on("load", function () {
        /* Image: An image is loaded and added to the map. */
        map.loadImage("/wordpress/wp-content/themes/DENS2/images/marker.png", function (error, image) {
            if (error) throw error;
            map.addImage("custom-marker", image);
            /* Style layer: A style layer ties together the source and image and specifies how they are displayed on the map. */
            map.addLayer({
                id: "markers",
                type: "symbol",
                /* Source: A data source specifies the geographic coordinate where the image marker gets placed. */
                source: {
                    type: "geojson",
                    data: {
                        type: "FeatureCollection",
                        features: [{
                            "type": "Feature",
                            "geometry": {
                                "type": "Point",
                                "coordinates": ["20.9772000", "52.234896"]
                            }
                        }]
                    }
                },
                layout: {
                    "icon-image": "custom-marker",
                    'icon-size': 0.09
                }
            });
        });
    });
}






export default map;