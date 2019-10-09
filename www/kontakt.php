<?php
$BODY_CLASS = "p-kontakt t-default";
$CURRENT_PAGE = "kontakt";

$TITLE = "Kontakt";

include "./components/header.php";
?>

<main>
    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div>
                        <div class="address">
                            <h2>Ateliér</h2>
                            <address>
                                <p>Sacré Coeur<br>
                                    Holečkova 103/31<br>
                                    150 00, Praha 5<br>
                                    Česká republika</p>
                            </address>
                            <p>
                                <a href="mailto:atelier.jelinkova@jarchitekt.cz" class="a-link basic">atelier.jelinkova@jarchitekt.cz</a><br><br>
                                <a href="tel:00420724784224" class="a-link basic">+420 724 784 224</a>
                            </p>
                        </div>

                        <div class="address">
                            <h2>Fakturační údaje</h2>
                            <p>
                                Ing. arch. Zdeňka Jelínková<br>
                                Vidlatá Seč 40<br>
                                570 01, Litomyšl<br><br>
                                IČO: 04158105<br>
                                DIČ: CZ8958193805<br>
                            </p>
                        </div>
                    </div>

                    <div class="m-socials-contact">
                        <p>
                            <span class="a-separator"></span>
                            <a href="https://www.facebook.com/Jel%C3%ADnkov%C3%A1-Architekt-379877352809160/" target="_blank" class="a-link basic">facebook</a>
                            <span class="a-separator"></span>
                        </p>
                    </div>
                </div>

                <div class="col-lg-8">
                    <div class="a-map" id="map">

                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

<script>
    var map;
    function initMap() {
        var uluru = {lat: 50.075771, lng: 14.398375};
        var map = new google.maps.Map(document.getElementById('map'), {
            center: uluru,
            zoom: 17,
            styles: [
                {
                    "featureType": "all",
                    "elementType": "all",
                    "stylers": [
                        {
                            "saturation": -100
                        },
                        {
                            "gamma": 0.5
                        }
                    ]
                }
            ]
        });
        var marker_image = new google.maps.MarkerImage(
            "<?=$img?>map-marker.png",
            null,
            // The origin for my image is 0,0.
            new google.maps.Point(0, 0),
            // The center of the image is 50,50 (my image is a circle with 100,100)
            new google.maps.Point(25, 25)
        );
        var marker = new google.maps.Marker({
            clickable: true,
            position: uluru,
            icon: marker_image,
            map: map
        });
    }
</script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAtKh4EU7GnZ2Nb44P-PE9_sEH5gaL60FE&callback=initMap" async defer></script>
<?php
include "./components/footer.php";
?>
