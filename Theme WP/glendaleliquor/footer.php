</main>

<?php get_template_part('modals');?>

<footer>
    <div class="join">
        <div class="content-width">
            <div class="title">
                <h4>Join our mailing list <sub>for special offers!</sub></h4>
            </div>
            <div class="form-wrap">
                <form action="#" class="form-join">
                    <label for="email-join"><i class="fa-light fa-envelope"></i></label>
                    <input type="email" name="email-join" id="email-join" placeholder="Example@gmail.com">
                    <button type="submit" class="btn-default btn-small btn-white"><span>Join</span></button>
                </form>
            </div>
        </div>
    </div>
    <div class="content-width">
        <div class="content">
            <div class="item item-1">
                <h6>Contact Us</h6>
                <ul class="menu">
                    <li>Buy LiquorOnline</li>
                    <li><a href="#">www.glendaleliquor.com</a></li>
                    <li>1309-1311 E. Colorado St.</li>
                    <li>Glendale, CA. 91205</li>
                    <li><a href="mailto:Glendaleliquor.info@gmail.com">Glendaleliquor.info@gmail.com</a></li>
                </ul>
            </div>

            <div class="item item-2">
                <h6>Accounts & Orders</h6>
                <ul class="menu">
                    <li><a href="#">Wishlist</a></li>
                    <li><a href="#">Account</a></li>
                    <li><a href="#">Logout</a></li>
                    <li><a href="#">Order Status</a></li>
                    <li><a href="#">Shipping & Returns</a></li>
                </ul>
            </div>
            <div class="item item-3">
                <h6>Quick Links</h6>
                <ul class="menu">
                    <li><a href="#">Information/Mailing List</a></li>
                    <li><a href="#">Blog</a></li>
                    <li><a href="#">Order Status</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms/Conditions</a></li>
                    <li><a href="#">Shipping Policy</a></li>
                    <li><a href="#">Find us</a></li>
                </ul>
            </div>
            <div class="item item-4">
                <h6>Recent Blog Posts</h6>
                <ul class="menu">
                    <li>Ararat brandy</li>
                    <li>Armas wine, Armenia</li>
                    <li>Horse soldier straight bourbon whiskey</li>
                    <li>How to choose your favorite scotch whisky</li>
                </ul>
            </div>
            <div class="item item-5">
                <h6>Connect with Us:</h6>
                <ul class="soc">
                    <li><a href="#"><img src="img/icon-3-1.svg" alt=""></a></li>
                    <li><a href="#"><img src="img/icon-3-2.svg" alt=""></a></li>
                </ul>
            </div>
            <div class="item item-6">
                <h6>Payment methods:</h6>
                <ul class="pay">
                    <li><a href="#"><img src="img/icon-4-1.svg" alt=""></a></li>
                    <li><a href="#"><img src="img/icon-4-2.svg" alt=""></a></li>
                    <li><a href="#"><img src="img/icon-4-3.svg" alt=""></a></li>
                    <li><a href="#"><img src="img/icon-4-4.svg" alt=""></a></li>
                    <li><a href="#"><img src="img/icon-4-5.svg" alt=""></a></li>
                    <li><a href="#"><img src="img/icon-4-6.svg" alt=""></a></li>
                </ul>
            </div>
        </div>

        <div class="bottom">
            <p>© 2024 Glendale Liquor Store</p>
        </div>
    </div>
</footer>

<script>
    function initMap() {
        var uluru = {lat: 34.10409804762296, lng: -118.22702485730728};

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
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDiyT05YehIdz2LrV-QOeRa5M18WfKtlnY&callback=initMap">
</script>

  <?php wp_footer(); ?>
	</body>
</html>
