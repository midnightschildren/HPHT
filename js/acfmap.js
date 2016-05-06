(function($) {
 
/*
*  render_map
*
*  This function will render a Google Map onto the selected jQuery element
*
*  @type    function
*  @date    8/11/2013
*  @since   4.3.0
*
*  @param   $el (jQuery element)
*  @return  n/a
*/
 
function render_map( $el ) {
 
    // var
    var $markers = $el.find('.marker');
 
    // vars
    var args = {
        zoom        : 13,
        center      : new google.maps.LatLng(0, 0),
        mapTypeId   : google.maps.MapTypeId.ROADMAP
    };
 
    // create map               
    var map = new google.maps.Map( $el[0], args);
 
    // Define the LatLng coordinates for the polygon's path.
    var triangleCoords = [
        {lat: 33.9890195, lng: -118.33070150000003},
        {lat: 34.0036462, lng: -118.33196040000001},
        {lat: 34.0084597, lng: -118.33512740000003},
        {lat: 34.032592, lng: -118.33501330000001},
        {lat: 34.0548637, lng: -118.3230152},
        {lat: 34.0525444, lng: -118.31502639999997},
        {lat: 34.0524044, lng: -118.28421789999999},
        {lat: 34.0276464, lng: -118.23909520000001},
        {lat: 33.9892096, lng: -118.23783960000003}
    ];

  // Construct the polygon.
    var bermudaTriangle = new google.maps.Polygon({
        paths: triangleCoords,
        strokeColor: '#fff',
        strokeOpacity: 0.4,
        strokeWeight: 1,
        fillColor: '#fff',
        fillOpacity: 0.4
    });
    bermudaTriangle.setMap(map);


    // add a markers reference
    map.markers = [];
 
    // add markers
    $markers.each(function(){
 
        add_marker( $(this), map );
 
    });
 
    // center map
    // center_map( map );
    map.setCenter(new google.maps.LatLng(34.024583,-118.289853));



}


 
/*
*  add_marker
*
*  This function will add a marker to the selected Google Map
*
*  @type    function
*  @date    8/11/2013
*  @since   4.3.0
*
*  @param   $marker (jQuery element)
*  @param   map (Google Map object)
*  @return  n/a
*/
 
function add_marker( $marker, map ) {
 
    // var
    var latlng = new google.maps.LatLng( $marker.attr('data-lat'), $marker.attr('data-lng') );
    var iconsym = $marker.attr('data-symb');
    var markercat = $marker.attr('data-cat');
    var text = $marker.html();

    var clusterStyles = [
  {
    textColor: 'white',
    url: 'http://eccla.codisattva.com/wp-content/uploads/2016/02/cluster-red2.png',
    height: 24,
    width: 24
  },
 {
    textColor: 'white',
    url: 'http://eccla.codisattva.com/wp-content/uploads/2016/02/cluster-red2.png',
    height: 24,
    width: 24
  },
 {
    textColor: 'white',
    url: 'http://eccla.codisattva.com/wp-content/uploads/2016/02/cluster-red2.png',
    height: 24,
    width: 24
  }
];
 
    // create marker
    var marker = new google.maps.Marker({
        position    : latlng,
        map         : map,
        category    : markercat,
        icon        : iconsym,
        name        : text
    });
 
    // add to array
    map.markers.push( marker );
 
    // if marker contains HTML, add it to an infoWindow
    if( $marker.html() )
    {
        // create info window
        var infowindow = new google.maps.InfoWindow({
            content     : $marker.html()
        });
 
        // show info window when marker is clicked
        google.maps.event.addListener(marker, 'click', function() {
 
            infowindow.open( map, marker );
 
        });
    }
    var mcOptions = {gridSize: 10, maxZoom: 21, styles: clusterStyles, zoomOnClick: false};
    var markerCluster = new MarkerClusterer(map, map.markers, mcOptions);
    markerCluster.setIgnoreHidden(true);

    google.maps.event.addListener(markerCluster, 'click', function(cluster){
    var content ='';
    
    
    var clickedMarkers = cluster.getMarkers();

    for (var i = 0; i < clickedMarkers.length; i++) {

        var clickedMarkersNames = clickedMarkers[i].name;
        content +=clickedMarkersNames;
    
    }

    var infowindow = new google.maps.InfoWindow();
    infowindow.setPosition(cluster.getCenter());
    infowindow.close();
    infowindow.setContent(content);
    infowindow.open(map);
    });

    google.maps.event.addDomListener(document.getElementById('SelectList'), 'change', function() {

    var map_vis = document.getElementById('SelectList').value;

    if (map_vis == "trip") {

        center_map( map );
        for (i = 0; i < map.markers.length; i++) {
            marker2 = map.markers[i];
            // If is same category or category not picked
            if (marker2.category == map_vis ) {
                marker2.setVisible(true);
            }
            // Categories don't match 
            else {
                marker2.setVisible(false);
            }
        }

    }

    if (map_vis == "schools") {

        map.setCenter(new google.maps.LatLng(34.024583,-118.289853));
        map.setZoom( 13 );
        for (i = 0; i < map.markers.length; i++) {
            marker5 = map.markers[i];
            // If is same category or category not picked
            if (marker5.category == map_vis ) {
                marker5.setVisible(true);
            }
            // Categories don't match 
            else {
                marker5.setVisible(false);
            }
        }
    }

    if (map_vis == "classroom") {

        center_map( map );
        for (i = 0; i < map.markers.length; i++) {
            marker6 = map.markers[i];
            // If is same category or category not picked
            if (marker6.category == map_vis ) {
                marker6.setVisible(true);
            }
            // Categories don't match 
            else {
                marker6.setVisible(false);
            }
        }
    }

    if (map_vis == "resource") {

        center_map( map );
        for (i = 0; i < map.markers.length; i++) {
            marker7 = map.markers[i];
            // If is same category or category not picked
            if (marker7.category == map_vis ) {
                marker7.setVisible(true);
            }
            // Categories don't match 
            else {
                marker7.setVisible(false);
            }
        }
    }

    if (map_vis == "all") {

    map.setCenter(new google.maps.LatLng(34.024583,-118.289853));
    map.setZoom( 12 );
    for (i = 0; i < map.markers.length; i++) {
        marker3 = map.markers[i];
        marker3.setVisible(true);
    }
    var mcOptions = {gridSize: 10, maxZoom: 21, styles: clusterStyles, zoomOnClick: false};
    var markerCluster2 = new MarkerClusterer(map, map.markers, mcOptions);
    markerCluster2.setIgnoreHidden(true);

    google.maps.event.addListener(markerCluster2, 'click', function(cluster2){
    var content ='';
    var clickedMarkers = cluster2.getMarkers();

    for (var i = 0; i < clickedMarkers.length; i++) {
        

    var clickedMarkersNames = clickedMarkers[i].name;
    content +=clickedMarkersNames;
    
    }

    var infowindow = new google.maps.InfoWindow();
    infowindow.setPosition(cluster2.getCenter());
    infowindow.close();
    infowindow.setContent(content);
    infowindow.open(map);


    });
    }

    });


    google.maps.event.addListener(map, 'zoom_changed', function() {

    var mcOptions = {gridSize: 10, maxZoom: 21, styles: clusterStyles, zoomOnClick: false};
    var markerCluster3 = new MarkerClusterer(map, map.markers, mcOptions);
    markerCluster3.setIgnoreHidden(true);
    google.maps.event.addListener(markerCluster3, 'click', function(cluster3){
    var content ='';
    var clickedMarkers = cluster3.getMarkers();

    for (var i = 0; i < clickedMarkers.length; i++) {
        

    var clickedMarkersNames = clickedMarkers[i].name;
    content +=clickedMarkersNames;
    
    }


    var infowindow = new google.maps.InfoWindow();
    infowindow.setPosition(cluster3.getCenter());
    infowindow.close();
    infowindow.setContent(content);
    infowindow.open(map);
    });
    

    });



 
}
 
/*
*  center_map
*
*  This function will center the map, showing all markers attached to this map
*
*  @type    function
*  @date    8/11/2013
*  @since   4.3.0
*
*  @param   map (Google Map object)
*  @return  n/a
*/
 
function center_map( map ) {
 
    // vars
    var bounds = new google.maps.LatLngBounds();
 
    // loop through all markers and create bounds
    $.each( map.markers, function( i, marker ){
    if(marker.getVisible()) {
        var latlng = new google.maps.LatLng( marker.position.lat(), marker.position.lng() );
 
        bounds.extend( latlng );
        }
    });
 
    // only 1 marker?
    if( map.markers.length == 1 )
    {
        // set center of map
        map.setCenter( bounds.getCenter() );
        map.setZoom( 16 );
    }
    else
    {
        // fit to bounds
        map.fitBounds( bounds );
    }
 
}
 
/*
*  document ready
*
*  This function will render each map when the document is ready (page has loaded)
*
*  @type    function
*  @date    8/11/2013
*  @since   5.0.0
*
*  @param   n/a
*  @return  n/a
*/
 
$(document).ready(function(){
 
    $('.acf-map').each(function(){
 
        render_map( $(this) );
 
    });
 
});
 
})(jQuery);