<?php

$title = get_sub_field('title');
$hours_title = get_sub_field('hours_title');
$hours = get_sub_field('hours');
$location_title = get_sub_field('location_title');
$location = get_sub_field('location');
$map = get_sub_field('map');
$lat = $map['lat'];
$lng = $map['lng'];

$api = get_field('google_map_api_key', 'options');

?>

<section class="map-section">
    <div class="content-width">
        <div class="text">
            <?php if($title):?>
                <h2><?= $title;?></h2>
            <?php endif;?>
            <?php if($hours):?>
                <div class="item">
                    <?php if($hours_title):?>
                        <h6><i class="fa-light fa-clock"></i><?= $hours_title;?></h6>
                    <?php endif;?>
                    <?= $hours;?>
                </div>
            <?php endif;?>
            <?php if($location):?>
                <div class="item">
                    <?php if($location_title):?>
                        <h6><i class="fa-light fa-location-dot"></i><?= $location_title;?></h6>
                    <?php endif;?>
                    <p><?= $location;?></p>
                </div>
            <?php endif;?>
        </div>
        <div class="map-wrap">
            <div id="map"></div>
        </div>
    </div>
</section>

<script>
    function initMap() {
        var uluru = {lat: <?= $lat?$lat:'34.10409804762296';?>, lng: <?= $lng?$lng:'-118.22702485730728';?>};

        var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 16,
            center: uluru,
            mapTypeControl: false,
            scrollwheel: false,
            zoomControl: false,
            disableDefaultUI: true,
            styles:   [
                {
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#f5f5f5"
                        }
                    ]
                },
                {
                    "elementType": "labels.icon",
                    "stylers": [
                        {
                            "visibility": "off"
                        }
                    ]
                },
                {
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#616161"
                        }
                    ]
                },
                {
                    "elementType": "labels.text.stroke",
                    "stylers": [
                        {
                            "color": "#f5f5f5"
                        }
                    ]
                },
                {
                    "featureType": "administrative.land_parcel",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#bdbdbd"
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#eeeeee"
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#757575"
                        }
                    ]
                },
                {
                    "featureType": "poi.park",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#e5e5e5"
                        }
                    ]
                },
                {
                    "featureType": "poi.park",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#9e9e9e"
                        }
                    ]
                },
                {
                    "featureType": "road",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#ffffff"
                        }
                    ]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#757575"
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#dadada"
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#616161"
                        }
                    ]
                },
                {
                    "featureType": "road.local",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#9e9e9e"
                        }
                    ]
                },
                {
                    "featureType": "transit.line",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#e5e5e5"
                        }
                    ]
                },
                {
                    "featureType": "transit.station",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#eeeeee"
                        }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "geometry",
                    "stylers": [
                        {
                            "color": "#c9c9c9"
                        }
                    ]
                },
                {
                    "featureType": "water",
                    "elementType": "labels.text.fill",
                    "stylers": [
                        {
                            "color": "#9e9e9e"
                        }
                    ]
                }
            ]
        });


        var marker = new google.maps.Marker({
            position: uluru,
            map: map,

        });
    }
</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=<?= $api;?>&callback=initMap">
</script>