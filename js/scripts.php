<script src="https://d1tdp7z6w94jbb.cloudfront.net/js/jquery-3.3.1.min.js" type="text/javascript" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script src="<?php echo get_stylesheet_directory_uri(); ?>/js/webflow.js?v=1557175373" type="text/javascript"></script>
  <!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->
  <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAJnrJ6s1bNd6JbIcL-lTYnUdEO8vtjatw&amp;callback=initMap"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>



  <script>



function carruseles () {


//codigo para los carruseles
    $('.divazul').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: true,
        fade: false,
        asNavFor: '.divazul2',
        dots: true,
        
    });

    $('.divazul2').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        asNavFor: '.divazul',
        arrows: false,
        fade: false,
        
        
    });  
    $('.container-slider').slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        variableWidth: true,
    });

     $('.w-slider').slick({
        infinite: true,
        
        slidesToShow: 2,
        slidesToScroll: 2,
        dots: true,
        
    });

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

    
//display none servicios

   
});
carruseles();
function display (){
    $(".servicios").css("display", "none");
}

// function explode(){
//   display()
// }
// setTimeout(explode, 2500);


$(".read-more-about").click(function () {

 $(".container-oculto").toggleClass("bajar");
});

$(".read-more-about").click(function () {
 $(".container-estatua-3").toggleClass("bajar2");
 
});



//codgio para los desplegables
   
$(".titulo-service-1").click(function () {
$(".silhou").slideToggle(1500);
});
$(".titulo-services-2").click(function () {
    $(".laser").slideToggle(1500);
});
$(".titulo-service-3").click(function () {
    $("#cools").slideToggle(1500);
});
$(".titulo-services-4").click(function () {
    $(".derma").slideToggle(1500);
});
  




//codigo para los filtros

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
        console.log(filterValue)
        $('.w-slider    ').each(function( i ) {			
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

//codigo para los botones de los carruseles
    $("#fihalo").click(function () {
         $('.slide-halo .slick-prev').trigger('click');
    });

    $("#fdhalo").click(function () {
        $('.slide-halo .slick-next').trigger('click');
    });

     $("#fibbl").click(function () {
         $('.slide-bbl .slick-prev').trigger('click');
    });

    $("#fdbbl").click(function () {
        $('.slide-bbl .slick-next').trigger('click');
    });

     $("#fitrl").click(function () {
         $('.slide-contour .slick-prev').trigger('click');
    });

    $("#fdtrl").click(function () {
        $('.slide-contour .slick-next').trigger('click');
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

