$(function(){

$('#googleMap').gmap3({ 
			action:'init',
            options:{
              center:[-33.454523,-70.616251],
              zoom: 16,
              scrollwheel: false,
              streetViewControl: false,
              disableDefaultUI: true,
              styles:
              [
                {featureType: "all", stylers: [{invert_lightness: true}]},
              	{featureType: "all", stylers: [{saturation: -100}]},
              	{featureType: "all", stylers: [{lightness: 9}]},
              ]
            }
          },
          { action: 'addMarkers',
            markers:[
              {lat:-33.454523, lng:-70.616251, options:{icon:"http://www.brium.cl/white/images/pin.png"}},
            ],
            marker:{
              options:{
                draggable: false,
              },
              
            }
          }
        );
});
    
