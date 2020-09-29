//ALT LAB STUFF

// When the user scrolls the page, execute myFunction 
//window.onscroll = function() {myFunction()};

// Get the navbar
var navbar = document.getElementById("wrapper-navbar");

// Get the offset position of the navbar
var sticky = navbar.offsetTop+60;

// Add the sticky class to the navbar when you reach its scroll position. Remove "sticky" when you leave the scroll position
function myFunction() {
  if (window.pageYOffset >= sticky) {
    navbar.classList.add("sticky")
  } else {
    navbar.classList.remove("sticky");
  }
}

if (document.getElementById('weather-block')){
	let weather_data = 'https://rampages.us/extras/doha-weather.php'
   
    jQuery(document).ready(function() {
      var def = new jQuery.Deferred();
      jQuery.ajax({
        url: weather_data,
        jsonp: "cb",
        dataType: 'json',
        success: function(data) {
            console.log(data); //dumps the data to the console to check if the callback is made successfully.
              console.log(data.list[0].weather)
              console.log(data.list[0].main.humidity)
              jQuery('#how-hot').html(data.list[0].main.temp_max + '°<div class="description">'+data.list[0].weather[0].description+'</div><div class="humidity">Humidity index '+data.list[0].main.humidity+'%</div>');
          } //success
      }); //ajax  
    }); //ready
 
}

if (document.getElementById('quiver')){

  for(var i = 0; i < 250; i++){
    makeArrow();
  }

}



function makeArrow (){
 var newDiv = document.createElement('div');
 newDiv.classList.add("arrow");
 var newContent = document.createTextNode(" "); 
  let quiver = document.getElementById('quiver');
  return quiver.appendChild(newDiv);

}

var body = document.getElementsByTagName("body")[0];

body.onmousemove = function(event) {cursorFinder(event)};

function cursorFinder(e) {
    var x = e.clientX;
    var y = e.clientY;
    var coor = "Coordinates: (" + x + "," + y + ")";
  
  
   // document.getElementById("wrapper-navbar").innerHTML = coor;
    var theArrows = document.getElementsByClassName("arrow");
  for(var i = 0; i < theArrows.length; i++){
     var xShapeCenter = getPos(theArrows[i],'x');
     var yShapeCenter = getPos(theArrows[i],'y');
    theArrows[i].style.transform = 'rotate('+ twisterMath(x, y, xShapeCenter, yShapeCenter)+'deg)';
  }
}


//from https://stackoverflow.com/questions/288699/get-the-position-of-a-div-span-tag
function getPos(el, pos) {
    // yay readability
    for (var lx=0, ly=0;
         el != null;
         lx += el.offsetLeft, ly += el.offsetTop, el = el.offsetParent);
     if (pos === 'x'){
       return lx
     } else {
       return ly
     }
}

//from this crazy smart person https://codepen.io/pudinski/pen/xYoVaa/
function twisterMath(x,y, xShapeCenter, yShapeCenter){
  return  Math.atan2(x - xShapeCenter,-(y - yShapeCenter)) *(180 / Math.PI)
}


//category details switcher 
if (document.querySelectorAll(".tri-cat")){
  const buttons = document.querySelectorAll(".tri-cat");
  const catHolder = document.getElementById('cat-detail-holder');
  const catDetails = document.getElementById('cat-details');
  const wear = document.getElementById('wearable-button');
  const product = document.getElementById('product-button');
  const spaces = document.getElementById('spaces-button');
  for (const button of buttons) {
    button.addEventListener('click', function(event) {
      button.classList.toggle('clicked');
      if(button.id == 'product-button'){
         catDetails.innerHTML = `Parasols, fans, cooling bottles, sunglasses, sun creams, etc., are all items designed to protect us from the sun and heat. How could these or other comparable designs be improved upon? What augmentations or enhancements would you make?`;
         catHolder.classList.remove("offset-md-2", "offset-md-3");
         wear.classList.remove('clicked');
         spaces.classList.remove('clicked');
      }
      if(button.id == 'wearable-button'){
        catDetails.innerHTML = "Air conditioning, while keeping us cool, contributes to climate change. Cooling individuals are usually more energy-efficient than cooling an entire building. How could something we wear assist in making our experience of heat more bearable/comfortable?";
        catHolder.classList.add('offset-md-2');
        catHolder.classList.remove("offset-md-1", "offset-md-3");
        product.classList.remove('clicked');
        spaces.classList.remove('clicked');
      }
      if(button.id == 'spaces-button'){
        catDetails.innerHTML = "How does one design spaces – open spaces, interior spaces, parks, or recreational spaces –that can respond to a changing environment? How will our buildings look, what will they be made of?  How will our parks or our cars be redesigned for a hotter environment?";
        catHolder.classList.add('offset-md-3');
        catHolder.classList.remove("offset-md-1", "offset-md-2");
        wear.classList.remove('clicked');
        product.classList.remove('clicked');
      }
    })
  }
}

(function($) {

/*
    Carousel
*/
$('#judges-slider').on('slide.bs.carousel', function (e) {
    /*
        CC 2.0 License Iatek LLC 2018 - Attribution required
    */
    var $e = $(e.relatedTarget);
    var idx = $e.index();
    var itemsPerSlide = 3;
    var totalItems = $('.carousel-item').length;
 
    if (idx >= totalItems-(itemsPerSlide-1)) {
        var it = itemsPerSlide - (totalItems - idx);
        for (var i=0; i<it; i++) {
            // append slides to end
            if (e.direction=="left") {
                $('.carousel-item').eq(i).appendTo('.carousel-inner');
            }
            else {
                $('.carousel-item').eq(0).appendTo('.carousel-inner');
            }
        }
    }
});


//slide on anchor click
 (function($){
    $(document).on('click', 'a[href^=#]', function(e){
        e.preventDefault();
        var id = $(this).attr('href');
        $('html,body').animate({scrollTop: $(id).offset().top}, 500);
    });
})(jQuery);

  })( jQuery );

judgeFlipper();

function judgeFlipper(){
  if(window.location.hash){
      const currentHash = window.location.hash.substr(1);
      console.log(currentHash)
      console.log(document.querySelector('#'+currentHash) && document.querySelector('.judge-holder'))
      if (document.querySelector('#'+currentHash) ){
        document.querySelector('#'+currentHash).classList.add('hover')
      }
  }

}

submissionImageFix();

function submissionImageFix(){
  let newHtml = '';
  if (document.querySelector('#sub-images')){
    const imageDiv = document.querySelector('#sub-images');
    const imageHtml = imageDiv.innerHTML;
    const imageUrls = imageHtml.split('<br>');
    
    imageUrls.forEach((image) => {
        newHtml += '<img class="submission-image" src="' + image + '" alt="Image for submission for project.">'
    })
    imageDiv.innerHTML = newHtml;
  }  
}
