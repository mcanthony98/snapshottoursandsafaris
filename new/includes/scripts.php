<div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" /><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F9C400" /></svg></div>
<script src="js/jquery.min.js"></script>
<script src="js/jquery-migrate-3.0.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/jquery.waypoints.min.js"></script>
<script src="js/jquery.stellar.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.magnific-popup.min.js"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.animateNumber.min.js"></script>
<script src="js/bootstrap-datepicker.js"></script>
<script src="js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&amp;sensor=false"></script>
<script src="js/google-map.js"></script>
<script src="js/main.js"></script>

<script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-23581568-13');
</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/vaafb692b2aea4879b33c060e79fe94621666317369993" integrity="sha512-0ahDYl866UMhKuYcW078ScMalXqtFJggm7TmlUtp0UlD4eQk0Ixfnm5ykXKvGJNFjLMoortdseTfsRT8oCfgGA==" data-cf-beacon='{"rayId":"7a41974e6b10b19c","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2023.2.0","si":100}' crossorigin="anonymous"></script>

<!--subscribe to newsletter-->
<script>
$(document).ready(function() {
  $("#subnewsletter").submit(function(event) {
    event.preventDefault();
      var x = $("#subnewsletter").serialize();
      $.ajax({  
        url:"processes.php",  
        type:"POST",  
        data:x,
        crossDomain: true,
        cache: false, 
        beforeSend:function(){  
          $('#subbtn').val("Loading...");
        }, 
        success:function(data){ 
            if(data == '0'){
              $('#subtext').html('<span style="color:red;" class="">You are already subscribed to our Newsletter!</span>');
            }else{
              $('#subtext').html('<span style="color:green;" class="">Welcome to our Newsletter. You are now subscribed!</span>');
            }
            $('#subbtn').val("Subscribe");
            $('#subemail').val("");
        }  
});

  });
});
</script>

<!--Contact us form-->
<script>
$(document).ready(function() {
  $("#contForm").submit(function(event) {
    event.preventDefault();
      var x = $("#contForm").serialize();
      $.ajax({  
        url:"processes.php",  
        type:"POST",  
        data:x,
        crossDomain: true,
        cache: false, 
        beforeSend:function(){  
          $('#contbtn').val("Sending...");
        }, 
        success:function(data){ 
            $('#conttext').html('<span style="color:green;" class="">Your Message has been sent successfully! We will contact you shortly via the email provided!</span>');
            $('#contForm input').val("");
            $('#contForm textarea').val("");
            $('#contbtn').val("Send Message");
        }  
});

  });
});
</script>
<script>
$(document).ready(function(){
      var counter = 1;
      $(".mySlides").hide();
      //$("#p1").fadeIn(3000).fadeOut(4000);
      function showText(no){

        $("#caro"+no).show();
        $("#caro"+no).delay(6500).fadeOut(500, function(){document.getElementById("caro"+no).style.display = "none";});
       
      }
      function hideText(no){
        document.getElementById("caro"+no).style.display = "none";
      }
      showText(counter);
      setInterval (function () {
        counter++;

        if(counter == 4){
          counter = 1;
        }
        showText(counter);
    }, 7000);

});
</script>
