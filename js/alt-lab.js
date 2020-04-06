//ALT LAB STUFF

// When the user scrolls the page, execute myFunction 
window.onscroll = function() {myFunction()};

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