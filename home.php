<!DOCTYPE html>
<html>
<head>
<title>PLAY AUCTION SYSTEM</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
   
    
body {font-family: "Times New Roman", Georgia, Serif;}
h1, h2, h3, h4, h5, h6 {
  font-family: "Playfair Display";
  letter-spacing: 5px;
}


#slider {
  position:relative;
  width:1400px;
  height: 600px;
  display:block;
  overflow: hidden;
  box-shadow: 0 0 30px rgba(0, 0, 0, 0.3);
  margin-left:auto;
  margin-right:auto;
  margin-top:80px;
}
#slider ul {
  position: relative;
  list-style: none;
  height: 100%;
  width: 10000%;
  padding: 0;
  margin: 0;
  display:block;
  transition: all 750ms ease;
  left: 0;
}
#slider ul li {
  position: relative;
  height: 100%;
 display:block;
  float: left;
}
#slider ul li img{
  width:1400px;
  height: 600px;
  display:block;
}
 
#slider #prev, #slider #next {
  width: 50px;
  line-height: 50px;
  border-radius: 50%;
  font-size: 2rem;
  text-shadow: 0 0 20px rgba(0, 0, 0, 0.6);
  text-align: center;
  color: white;
  text-decoration: none;
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  transition: all 150ms ease;
}
#slider #prev:hover, #slider #next:hover {
  background-color: rgba(0, 0, 0, 0.5);
  text-shadow: 0;
}
#slider #prev {
  left: 10px;
}
#slider #next {
  right: 10px;
}
</style>
</head>
<body>


<!-- Navbar (sit on top) --
<div class="w3-top">
  <div class="w3-bar w3-white w3-padding w3-card" style="letter-spacing:4px;">
    <a href="#home" class="w3-bar-item w3-button">PLAY AUCTION SYSTEM</a>
  
    <div class="w3-right w3-hide-small">
      <a href="#about" class="w3-bar-item w3-button">About</a>
      <a href="#menu" class="w3-bar-item w3-button">Auction</a>
      <a href="#contact" class="w3-bar-item w3-button">Contact</a>
    </div>
  </div>
</div>>
<!-- slider start -->
<div id="slider">
    <ul id="slideWrap"> 
      <li><img src="img\d1.jpg" alt=""></li>
      <li><img src="img\d2.jpg" alt=""></li>
      <li><img src="img\d5.jpg" alt=""></li>
      <li><img src="img\d3.jpg" alt=""></li>
      
    </ul>
    <a id="prev" href="#">&#8810;</a>
    <a id="next" href="#">&#8811;</a>
  </div>
<!-- slider end -->






<div class="w3-content" style="max-width:1100px">
  

  <!-- About Section -->
  <div class="w3-row w3-padding-64" id="about">
    <div class="w3-col m6 w3-padding-large w3-hide-small">
     <img src="img\d7.jpg" class="w3-round w3-image w3-opacity-min" alt="Table Setting" width="600" height="750">
    </div>

    <div class="w3-col m6 w3-padding-large">
      <h1 class="w3-center">About Auction</h1><br>
      <h5 class="w3-center">PLAY AUCTION SYSTEM</h5>
      <p class="w3-large w3-text-red">Play auction web application is the easiest of player auction application in any sport.</p>
      <p class="w3-large w3-text-red">Whether it would be Kabaddi,Hockey,Cricket,Volleyball or any other game.</p>
      <p class="w3-large w3-text-red">The easy to understand functionalities are also present in the player auction web application, anybody can know about the teams,team owners,management and player auction process.</p>
    </div>
  </div>
  
  <hr>
  
  <!-- Menu Section -->
  <div class="w3-row w3-padding-64" id="menu">
    <div class="w3-col l6 w3-padding-large">
      <h1 class="w3-center">OUR FEATURES</h1><br>
      <h4 class="w3-text-blue-brown">Live player data is visible with attractive designs.</h4><br>
      
    
      <h4 class="w3-text-blue-brown">Live update on player points participating in sports league.</h4><br>
      
    
      <h4 class="w3-text-blue-brown">Effective sold out screen.</h4><br>
      
    
      <h4 class="w3-text-blue-brown">Help is available throughout the program.</h4><br>
      
    
      <h4 class="w3-text-blue-brown">All the player action process is auto recorded and the data of unsold players is also auto recorded.</h4><br>
      
    </div>
    
    <div class="w3-col l6 w3-padding-large">
      <img src="img\d1.jpg" class="w3-round w3-image w3-opacity-min" alt="Menu" style="width:100%">
    </div>
  </div>

  <hr>

  <!-- Contact Section -->
  <div class="w3-container w3-padding-64" id="contact">
    <h1>Future Update</h1><br>
    <h2>Live Streaming</h2><br>
    <h3>We provide live streaming in Starsports & Hotstar</h3><br>
     <h3></h3><br>
    <h3><h3><br>
    <div class="w3-col l6 w3-padding-large">
      <img src="img\d1.jpg" class="w3-round w3-image w3-opacity-min" alt="contact" style="width:100%">
   
    
  </div>
  
<!-- End page content -->
</div>

<!-- Footer -->
<footer class="w3-center w3-light-grey w3-padding-32">
  <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="PLAY AUCTION SYSTEM" target="_blank" class="w3-hover-text-green">PLAY AUCTION SYSTEM</a></p>
</footer>
<script>
 var responsiveSlider = function() {

var slider = document.getElementById("slider");
var sliderWidth = slider.offsetWidth;
var slideList = document.getElementById("slideWrap");
var count = 1;
var items = slideList.querySelectorAll("li").length;
var prev = document.getElementById("prev");
var next = document.getElementById("next");

window.addEventListener('resize', function() {
  sliderWidth = slider.offsetWidth;
});

var prevSlide = function() {
  if(count > 1) {
    count = count - 2;
    slideList.style.left = "-" + count * sliderWidth + "px";
    count++;
  }
  else if(count = 1) {
    count = items - 1;
    slideList.style.left = "-" + count * sliderWidth + "px";
    count++;
  }
};

var nextSlide = function() {
  if(count < items) {
    slideList.style.left = "-" + count * sliderWidth + "px";
    count++;
  }
  else if(count = items) {
    slideList.style.left = "0px";
    count = 1;
  }
};

next.addEventListener("click", function() {
  nextSlide();
});

prev.addEventListener("click", function() {
  prevSlide();
});

setInterval(function() {
  nextSlide()
}, 2000);

};

window.onload = function() {
responsiveSlider();  
}
</script>



</body>
</html>
