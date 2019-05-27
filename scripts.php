<script src="https://d1tdp7z6w94jbb.cloudfront.net/js/jquery-3.3.1.min.js" type="text/javascript" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/webflow.js?v=1557175373" type="text/javascript"></script>
<!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAJnrJ6s1bNd6JbIcL-lTYnUdEO8vtjatw&amp;callback=initMap"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>

<script>


$( window ).on( "load", function() {
    $("#animacion").addClass("animacion-out");




var $sil = $('.alturasil');
var $laser = $('.alturalaser');
var $cool = $('.alturacool');
var $derma = $('.alturaderma');

var heightsil = $sil.height();
var heightlaser = $laser.height();
var heightcool = $cool.height();
var heightderma = $derma.height();

$sil.hide().css({ height : 0 });
$laser.hide().css({ height : 0 });
$cool.hide().css({ height : 0 });
$derma.hide().css({ height : 0 });




contador = 0

$('.titulo-service-1').click(function () {
    
    if ( contador === 1) {
        
        $sil.animate({
            height: 0
        }, 500, function() {
            // Animation complete.
        });
        
        contador = contador -1
    } else {

        $sil.show("fast").animate({
            height: heightsil
        }, 500, function() {
            // Animation complete.
        });
        
        contador = contador +1
    }
        
    return false;
});

$('.titulo-services-2').click(function () {
    
    if ( contador === 1) {
        
        $laser.animate({
            height: 0
        }, 500, function() {
            // Animation complete.
        });
        
        contador = contador -1
    } else {

        $laser.show("fast").animate({
            height: heightlaser
        }, 500, function() {
            // Animation complete.
        });
        
        contador = contador +1
    }
        
    return false;
});

$('.titulo-service-3').click(function () {
    
    if ( contador === 1) {
        
        $cool.animate({
            height: 0
        }, 500, function() {
            // Animation complete.
        });
        
        contador = contador -1
    } else {

        $cool.show("fast").animate({
            height: heightcool
        }, 500, function() {
            // Animation complete.
        });
        
        contador = contador +1
    }
        
    return false;
});

$('.titulo-services-4').click(function () {
    
    if ( contador === 1) {
        
        $derma.animate({
            height: 0
        }, 500, function() {
            // Animation complete.
        });
        
        contador = contador -1
    } else {

        $derma.show("fast").animate({
            height: heightderma
        }, 500, function() {
            // Animation complete.
        });
        
        contador = contador +1
    }
        
    return false;
});

});





//codigo para los carruseles   
//Workshop 

    $('.container-slider').slick({
        infinite: true,
        arrows: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        variableWidth: true,
        centerMode: true,
        
    });

//SILHOUTE

    $('.divazul').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        asNavFor:'.divazul2',
        speed: 500,
        dots:true,
        swipe:false,
        accessibility:false,
        
    });

    $('.divazul2').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
      
        speed: 500,
        swipe:false,
        accessibility:false,
        
        
    });  

//LASERBRUSH

    $('.w-slider').slick({
        infinite: true,
        slidesToShow: 2,
        slidesToScroll: 2,
        arrows:true,
        dots: true,
       
        
    });

//COOLSCULPTING

    $('.cool-slide').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        fade: false,
        asNavFor: '.cool2-slide',
       
        
    });

    $('.cool2-slide').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: false,
        
        
    }); 



//DERMASCULPTING

    $('.slide-halo ').slick({
        infinite: true,
        slidesToShow: 2,
        slidesToScroll: 2,

        
        
    });

    $('.slide-bbl').slick({
        infinite: true,
        slidesToShow: 2,
        slidesToScroll: 2,
       
        
        
    });

    $('.slide-contour').slick({
        infinite: true,
        slidesToShow: 2,
        slidesToScroll: 2, 

    });


  


//codigo para los botones de los carruseles

    //flechas

    //flechas carrusel workshop

    $("#fiwork").click(function () {
        $('.container-slider .slick-prev').trigger('click');
    });

    $("#fdwork").click(function () {
        $('.container-slider .slick-next').trigger('click');
    });


    //flechas servicios

    //silhoutte
    $(".titulo-service-1").click(function () {
        $('.sil .slick-prev').trigger('click');
        $('.sil2 .slick-prev').trigger('click');  
    });

    $(".div-menu-sil").click(function () {
        $('.sil .slick-prev').trigger('click');
        $('.sil2 .slick-prev').trigger('click');      

    });

    $("#fisil").click(function () {
        
        $('.sil .slick-prev').trigger('click');
        $('.sil2 .slick-prev').trigger('click');
    });

    $("#fdsil").click(function () {
       
        $('.sil .slick-next').trigger('click');
        $('.sil2 .slick-next').trigger('click');
    });

    // $('.sil .slick-next').click(function () {
    //     $('.sil2 .slick-next').trigger('click');
    // });

    //laserbrush

    $(".titulo-services-2").click(function () {
        $('.w-slider .slick-prev').trigger('click');
    });


    $(".hover").click(function () {
        $('.slick-next').trigger('click');
    });

    
    $("#filaser").click(function () {
        
        $('.w-slider .slick-prev').trigger('click');
     
    });

    $("#fdlaser").click(function () {
       
        $('.w-slider .slick-next').trigger('click');
    
    });
    
    //coolsculpting

    $(".titulo-service-3").click(function () {
        $(' .col .slick-next').trigger('click');
        $(' .col2 .slick-next').trigger('click');
    });

    $(".estatua2").click(function () {
        $(' .col .slick-next').trigger('click');
        $(' .col2 .slick-next').trigger('click');

    });

    $("#ficol").click(function () {
        
        $('.col .slick-prev').trigger('click');
      
     
    });

    $("#fdcol").click(function () {
       
        $('.col .slick-next').trigger('click');
        
    
    });



    //flechas halo

    $(".titulo-services-4").click(function () {
        $('.slide-halo .slick-next').trigger('click');
        $(' .slide-bbl .slick-next').trigger('click');
        $(' .slide-contour .slick-next').trigger('click');
    });

    $("#fihalo").click(function () {
        $('.slide-halo .slick-prev').trigger('click');
    });

    $("#fdhalo").click(function () {
        $('.slide-halo .slick-next').trigger('click');
    });

    //flechas bbl

    $("#fibbl").click(function () {
        $('.slide-bbl .slick-prev').trigger('click');
    });

    $("#fdbbl").click(function () {
        $('.slide-bbl .slick-next').trigger('click');
    });

    //flechas trl

    $("#fitrl").click(function () {
        $('.slide-contour .slick-prev').trigger('click');
    });

    $("#fdtrl").click(function () {
        $('.slide-contour .slick-next').trigger('click');
    });




//seccion desplegable read more

$(".read-more-about").click(function () {

$(".container-oculto").toggleClass("bajar");
});

$(".read-more-about").click(function () {
$(".container-estatua-3").toggleClass("bajar2");

});



// //codgio para los servicios desplegables

// $(".titulo-service-1").click(function () {
// $(".silhou").slideToggle(1500);
// });
// $(".titulo-services-2").click(function () {
//     $(".laser").slideToggle(1500);
// });
// $(".titulo-service-3").click(function () {
//     $("#cools").slideToggle(1500);
// });
// $(".titulo-services-4").click(function () {
//     $(".derma").slideToggle(1500);
// });


//codigo para los filtros de servicios

//silhouette
$('.menu-imagenes-silhoutte').each( function( i, buttonGroup ) {
    var $buttonGroup = $( buttonGroup );
    $buttonGroup.on( 'click', 'div', function() {
        var filterValue = $(this).attr('data-filter');
        $('.sil').each(function( i ) {			
            $(this).addClass("ocultar");
            $(this).removeClass("mostrar");

            if(filterValue ===  $(this).attr('data-filter')){
                $(this).removeClass("ocultar");
                $(this).addClass("mostrar");
            }
        });
    });
});


$('.menu-imagenes-silhoutte').each( function( i, buttonGroup ) {
    var $buttonGroup = $( buttonGroup );
    $buttonGroup.on( 'click', 'div', function() {
        var filterValue = $(this).attr('data-filter');
        console.log(filterValue);
        $('.sil2').each(function( i ) {			
            $(this).addClass("ocultar");
            $(this).removeClass("mostrar");

            if(filterValue ===  $(this).attr('data-filter')){
                $(this).removeClass("ocultar");
                $(this).addClass("mostrar");
            }
        });
    });
});

//laserbrush

$('.carruselestatuas').each( function( i, buttonGroup ) {
    var $buttonGroup = $( buttonGroup );
    $buttonGroup.on( 'click', 'div', function() {
        var filterValue = $(this).attr('data-filter');
        $('.w-slider').each(function( i ) {			
            $(this).addClass("ocultar");
            $(this).removeClass("mostrar");

            if(filterValue ===  $(this).attr('data-filter')){
                $(this).removeClass("ocultar");
                $(this).addClass("mostrar");
            }
        });
    });
});

//coolsculpting

$('.div-block-52').each( function( i, buttonGroup ) {
    var $buttonGroup = $( buttonGroup );
    $buttonGroup.on( 'click', 'div', function() {
        var filterValue = $(this).attr('data-filter');
        $('.col').each(function( i ) {			
            $(this).addClass("ocultar");
            $(this).removeClass("mostrar");

            if(filterValue ===  $(this).attr('data-filter')){
                $(this).removeClass("ocultar");
                $(this).addClass("mostrar");
            }
        });
    });
});

$('.div-block-52').each( function( i, buttonGroup ) {
var $buttonGroup = $( buttonGroup );
    $buttonGroup.on( 'click', 'div', function() {
    
        var filterValue = $(this).attr('data-filter');
        $('.col2').each(function( i ) {
            $(this).addClass("ocultar");
            $(this).removeClass("mostrar");

            if(filterValue ===  $(this).attr('data-filter')){
                $(this).removeClass("ocultar");
                $(this).addClass("mostrar");
            }
        });
    });
});





//codigo para el mapa
    function initMap() {
        var mapStyles = [
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
    var styledMap = new google.maps.StyledMapType(mapStyles, { name: "Styled Map" });
    var location = { lat: 19.427480, lng: -99.193556 };
    var map = new google.maps.Map(document.getElementById('mapa'), {
        zoom: 15,
        center: location,
        mapTypeControlOptions: {
            mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
        }
    });
    var icon = {
        url: "https://uploads-ssl.webflow.com/5caf66416cad7a327efea85e/5cb51c4ccf58f585f498da4a_pointer.png",
        scaledSize: new google.maps.Size(26.56, 36.62)
    };
    var marker = new google.maps.Marker({
        position: location,
        icon: icon,
        map: map
    });
    map.setOptions({ 'scrollwheel': false });
    map.mapTypes.set('map_style', styledMap);
    map.setMapTypeId('map_style');
    google.maps.event.addListener(marker, 'click', function () {
    window.open('https://goo.gl/maps/jurJWs6c4Nr', '_blank');
    });
};


</script>


