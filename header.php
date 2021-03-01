<!-- header -->
<div id="header">
  <div class="row-1">
    <ul class="nav">
      <li><a href="index.php" class="first">Home</a></li>
      <li><a href="about-us.php">About Us</a></li>
      <li><a href="articles.php" class="last">Our Services</a></li>
      <li><a href="contact-us.php">Contact Us</a></li>
    </ul>
  </div>
  
<!--carousel-->
  <div class="slideshow-container">

      <div class="mySlides fade">
        <div class="numbertext"> </div>
        <img src="images/risk2.jpeg">
        <div class="text"></div>
      </div>

      <div class="mySlides fade">
        <div class="numbertext"> </div>
        <img src="images/alm.jpeg">
        <div class="text"></div>
      </div>

      <div class="mySlides fade">
        <div class="numbertext"> </div>
        <img src="images/complience2.jpeg">
        <div class="text"> </div>
      </div>

    </div>
    <br>

    <div style="text-align:center">
      <span class="dot"></span> 
      <span class="dot"></span> 
      <span class="dot"></span> 
    </div>

  <script>
    var slideIndex = 0;
    showSlides();

    function showSlides() {
      var i;
      var slides = document.getElementsByClassName("mySlides");
      var dots = document.getElementsByClassName("dot");
      for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";  
      }
      slideIndex++;
      if (slideIndex > slides.length) {slideIndex = 1}    
      for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
      }
      slides[slideIndex-1].style.display = "block";  
      dots[slideIndex-1].className += " active";
      setTimeout(showSlides, 5000); // Change image every 3 seconds
    }
  </script>
</div>
