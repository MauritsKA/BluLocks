 <footer>
  <a id="bottom"></a>
 	<div class="topfooter section">
    <div class="container">
      <div class="row">
      <div class="col-sm-6">
        <div class="contactleft">
      	   <h3>Say hi</h3>
          
  
    <p>Would you like to know more? I'd love to grab a coffee and discuss possible ideas and opportunities. I am open to any challenge in urban planning, safety and project management.</p>
      
 
        </div>
		  </div>
		  <div class="col-sm-6">
        <div class="contactright">
  			  <h3>Contact</h3>
          <div class="contactitem"> <i class="contactfeather" data-feather="search"></i><span class="contacttext">KVK 66996422</span></div>
          <div class="contactitem"> <i class="contactfeather" data-feather="mail"></i><span class="contacttext"><a href="mailto:hj@crimefreecities.com">info@blulocks.com</a></span></div>
          <div class="contactitem"> <i class="contactfeather" data-feather="map-pin"></i><span class="contacttext"><a href="https://www.google.nl/maps/place/President+Kennedylaan+10,+3971+KP+Driebergen-Rijsenburg/@52.0514027,5.2889554,17z/data=!3m1!4b1!4m5!3m4!1s0x47c65ce081ff0293:0x557ae8943224e3ca!8m2!3d52.0514027!4d5.2911441">Delft, Nederland</a></span></div>
          <div class="contactitem"> <i class="contactfeather" data-feather="phone"> </i><a href="tel:+316 43216660"><span class="contacttext">06 43216660</a></span></div>
        </div>
  		</div>
  	</div>
  </div>  
 </div>
 	<div class="subfooter">
    <div class="container">
      <span> &copy; 2018 <a href="https://www.linkedin.com/in/mauritskorthalsaltes">Maurits</a></span>
          
      <span style="float:right"><a href="#top" class="up">    <span data-feather="chevrons-up"></span></a></span>
    </div>
  </div>      
</footer>   


</body>
</html>

<!-- General functionalities -->
<script>
var open = false; // menu colouring variable
var menuBackground = false; // up & down variable

//// Events
$(function() {
  setheight(); // of carousel
  menuColoring(); 
});

$(window).scroll(function () {
  menuColoring();

  setcolor(); //resetcolor and instantly set new color
});

$(window).resize(function() {
  resetheight();

  if ($(window).width() > 768) {
    $(".navbar-light").css("background-color", "");
  } else{
    setcolor();
  }  //Set new color depending on window size

});

//// Actions
$("#locale option[value='{{\App::getLocale()}}']").attr("selected","selected");

$("a[href='#top']").click(function() {
  $("html, body").animate({ scrollTop: 0 }, "slow");
  return false;
});

$("a[href='#bottom']").click(function() {

  //window.location.href = "http://localhost/crimefreecities/public/contact";
$("html, body").animate({ scrollTop:  $(document).height() - $( window ).height() }, "slow");
  return false;
});

//// Functions

// Menu scroll up & down color 
function menuColoring() {
    var scrollPosition = $(window).scrollTop();
    var menu = $('.navbar');

    if (!menuBackground && scrollPosition > 0) {
        menuBackground = true;
        menu.addClass('withBackground');
    }

    if (menuBackground && scrollPosition === 0) {
        menuBackground = false;
        menu.removeClass('withBackground');
    }
}  

// Set background overlay in mobile mode 
function setcolor() {

  $(".navbar-light").css("background-color", ""); 

    if (menuBackground == false){
    if( open == true && $(window).width() < 768){
    $(".navbar-light").css( "background-color", "rgba(85,85,85,0.85)" )

    } else {
    $(".navbar-light").css("background-color", "");
    }
  }
}

// Menu hamburger animation
function cross(x) {
  if (!$('.navbar-collapse').hasClass( "collapsing" )){
      if(open == false) {
        open = true;
        setcolor()
        x.classList.toggle("change")
      } else {
        open = false;
        setcolor()
        x.classList.toggle("change")
      }
  } 
}

// Height management for carousel
function setheight(){
  var height = Math.max.apply(Math, $(".covercarousel .carousel-item").map(function () {
    return $(this).height(); 
  })); 
  $('.covercarousel .carousel-item').css('min-height',height);
}

function resetheight(){
  $('.covercarousel .carousel-item').css('min-height',"");
  setheight();
}
</script>

<!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<!-- Icons -->
    <script src="https://unpkg.com/feather-icons/dist/feather.min.js"></script>
    <script>
      feather.replace()
    </script>