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
              jQuery('#how-hot').html(data.list[0].main.temp_max + '°<div class="description">'+data.list[0].weather[0].description+'</div>');
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
         catDetails.innerHTML = "I know about products";
         catHolder.classList.remove("offset-md-4", "offset-md-8");
         wear.classList.remove('clicked');
         spaces.classList.remove('clicked');
      }
      if(button.id == 'wearable-button'){
        catDetails.innerHTML = "I know about wearable";
        catHolder.classList.add('offset-md-4');
        catHolder.classList.remove("offset-md-8");
        product.classList.remove('clicked');
        spaces.classList.remove('clicked');
      }
      if(button.id == 'spaces-button'){
        catDetails.innerHTML = "I know about space";
        catHolder.classList.add('offset-md-8');
        catHolder.classList.remove("offset-md-4");
        wear.classList.remove('clicked');
        product.classList.remove('clicked');
      }
    })
  }
}
