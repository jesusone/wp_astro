// ----------------------------------------------
// # Google Map Customization
// ----------------------------------------------
jQuery(function($) {
    "use strict";
    (function(){

        var map;
        var lat = jQuery('#gmap').attr('data-lat')
        var lng = jQuery('#gmap').attr('data-lng')
        map = new GMaps({
            el: '#gmap',
            lat: lat,
            lng: lng,
            scrollwheel:false,
            zoom: 16,
            zoomControl : true,
            panControl : false,
            streetViewControl : false,
            mapTypeControl: false,
            overviewMapControl: false,
            clickable: false
        });

        var image = '';
        map.addMarker({
            lat: 43.04446,
            lng: -76.130791,
            icon: image,
            animation: google.maps.Animation.DROP,
            verticalAlign: 'bottom',
            horizontalAlign: 'center',
            backgroundColor: '#d3cfcf',
            infoWindow: {
                content: '<div class="map-info"><address>ThemeRegion<br />234 West 25th Street <br />New York</address></div>',
                borderColor: 'red',
            }
        });

        var styles = [ 

            {
                "featureType": "road",
                "stylers": [
                    { "color": "#000000" }
                ]
            },{
                "featureType": "landscape",
                "stylers": [
                    { "color": "#141414" }
                ]
            },{
                "elementType": "labels.text.fill",
                "stylers": [
                    { "color": "#808080" }
                ]
            },{
                "featureType": "poi",
                "stylers": [
                    { "color": "#161616" }
                ]
            },{
                "elementType": "labels.text",
                "stylers": [
                    { "saturation": 1 },
                    { "weight": 0.1 },
                    { "color": "#7f8080" }
                ]
            }

        ];

        map.addStyle({
            styledMapName:"Styled Map",
            styles: styles,
            mapTypeId: "map_style"  
        });

        map.setStyle("map_style");
        }());

});