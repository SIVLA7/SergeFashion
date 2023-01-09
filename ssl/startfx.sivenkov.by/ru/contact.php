<?php include_once 'header.php'; ?>
<link rel="stylesheet" href="../common/css/contact.css">
<section class="section section-contact">
    <div class="container">
        <h2 class="contact-title section-title title">Контакты компании</h2>
        <div class="row">
            <div class="col-xl-6 col-lg-6 col-md-6 order-xl-1 order-lg-1 order-md-1 order-sm-2 order-2">
                <div class="contact-form">
                    <h4 class="contact-form-title title">Контактная форма</h4>
                    <form id="contact-form" class="contact-form" action="#" method="post" role="form" data-toggle="validator">
                        <div class="row">
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input class="form-input form-group form-control" id="name" type="text" name="name" placeholder="Имя" pattern="[A-Za-zА-Яа-яЁё]{3,}" required>
                                    <div class="error-popover">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-6">
                                <div class="form-group">
                                    <input class="form-input form-group form-control" id="email" type="email" name="email" placeholder="Эл. почта"  pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <textarea class="form-input form-group form-control" id="message" name="message" cols="10" rows="4" placeholder="Ваше сообщение" style="height: 200px; " data-minlength="6" required></textarea>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <button class="btn form-btn form-btn-sm cover-btn" type="submit">
                                        <span>ОТПРАВИТЬ</span>
                                        <b></b>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
            <div class="col-xl-6 col-lg-6 col-md-6 order-xl-2 order-lg-2 order-md-2 order-sm-1 order-1">
                <div class="contact-content">
                    <div class="contact-info contact-info-top">
                        <span class="contact-info-icon">
                            <img src="../common/images/icons/email.png" alt="">
                        </span>
                        <div class="contact-details">
                            <h4 class="contact-details-title">Эл. почта</h4>
                            <ul class="contact-details-list">
                                <li>
                                    <span> Поддержка: </span>support@startfx.com
                                </li>
                                <li>
                                    <span>Отдел Маркетинга: </span>adv@startfx.com
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="contact-info contact-info-bottom">
                        <span class="contact-info-icon">
                            <img src="../common/images/icons/phone.png" alt="">
                        </span>
                        <div class="contact-details">
                            <h4 class="contact-details-title">Телефон для связи:</h4>
                            <ul class="contact-details-list">
                                <li>
                                    <span>Россия </span>+74992210375
                                </li>
                                <li>
                                    <span>Великобритания </span>+442039360928
                                </li>
                                <li>
                                    <span>Германия  </span>+4930255579970
                                </li>
                                <li>
                                    <span>Швейцария </span>+41315087461
                                </li>
                            </ul>
                            <ul class="contact-details-list">
                                <li>
                                    <span>Грузия </span>+995706777049
                                </li>
                                <li>
                                    <span>ЮАР </span>+27104426053
                                </li>
                                <li>
                                    <span>Австрия </span>+43720775635
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="section section-location js-scroll-block">
   <div class="container">
       <div class="location-details text-center">
           <div class="location-details-icon">
               <img src="../common/images/icons/location.png" alt="">
           </div>
           <h4 class="location-details-title">Адрес</h4>
           <h5 class="location-details-place">Грузия, Тбилиси, Сандро Еули №3</h5>
       </div>
       <div class="row">
           <div class="col-lg-12">
               <div class="contact-map">
                   <div class="contact-google-map" id="google-map"></div>
               </div>
           </div>
        </div>
   </div>
</section>
<!-- Form Message-->
<div class="contact-message-modal"></div>
<?php include_once 'footer.php'; ?>
<script src="../common/js/popper.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCxvP66_Xk1ts77oL2Z7EpDxhDD_jMg-D0"></script>
<script>
    google.maps.event.addDomListener(window, 'load', init);
    function init() {
        var mapOptions = {
            zoom: 12,

            scrollwheel:false,

            // The latitude and longitude to center the map
            center: new google.maps.LatLng(41.7205126,44.7155503,19.08),

            // Map styles
            styles: [{
                "featureType": "water",
                "elementType": "geometry",
                "stylers": [{
                    "color": "#e9e9e9"
                },
                    {
                        "lightness": 17
                    }
                ]
            },
                {
                    "featureType": "landscape",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#f5f5f5"
                    },
                        {
                            "lightness": 20
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "geometry.fill",
                    "stylers": [{
                        "color": "#ffffff"
                    },
                        {
                            "lightness": 17
                        }
                    ]
                },
                {
                    "featureType": "road.highway",
                    "elementType": "geometry.stroke",
                    "stylers": [{
                        "color": "#ffffff"
                    },
                        {
                            "lightness": 29
                        },
                        {
                            "weight": 0.2
                        }
                    ]
                },
                {
                    "featureType": "road.arterial",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#ffffff"
                    },
                        {
                            "lightness": 18
                        }
                    ]
                },
                {
                    "featureType": "road.local",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#ffffff"
                    },
                        {
                            "lightness": 16
                        }
                    ]
                },
                {
                    "featureType": "poi",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#f5f5f5"
                    },
                        {
                            "lightness": 21
                        }
                    ]
                },
                {
                    "featureType": "poi.park",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#dedede"
                    },
                        {
                            "lightness": 21
                        }
                    ]
                },
                {
                    "elementType": "labels.text.stroke",
                    "stylers": [{
                        "visibility": "on"
                    },
                        {
                            "color": "#ffffff"
                        },
                        {
                            "lightness": 16
                        }
                    ]
                },
                {
                    "elementType": "labels.text.fill",
                    "stylers": [{
                        "saturation": 36
                    },
                        {
                            "color": "#333333"
                        },
                        {
                            "lightness": 40
                        }
                    ]
                },
                {
                    "elementType": "labels.icon",
                    "stylers": [{
                        "visibility": "off"
                    }]
                },
                {
                    "featureType": "transit",
                    "elementType": "geometry",
                    "stylers": [{
                        "color": "#f2f2f2"
                    },
                        {
                            "lightness": 19
                        }
                    ]
                },
                {
                    "featureType": "administrative",
                    "elementType": "geometry.fill",
                    "stylers": [{
                        "color": "#fefefe"
                    },
                        {
                            "lightness": 20
                        }
                    ]
                },
                {
                    "featureType": "administrative",
                    "elementType": "geometry.stroke",
                    "stylers": [{
                        "color": "#fefefe"
                    },
                        {
                            "lightness": 17
                        },
                        {
                            "weight": 1.2
                        }
                    ]
                }
            ]
        };

        var mapElement = document.getElementById('google-map');

        var map = new google.maps.Map(mapElement, mapOptions);

        // Marker
        var marker = new google.maps.Marker({
            position: new google.maps.LatLng(41.7205126,44.7155503,19.08),
            map: map,
            title: 'Startfx',
            icon: "../common/images/icons/pointMap.png",
            animation: google.maps.Animation.BOUNCE
        });
    }
</script>

<script src="../common/js/ajax-mail.js"></script>
<script src="../common/js/plugins.js"></script>
<script src="../common/js/home.js"></script>
