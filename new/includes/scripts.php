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
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCj2kVmXd9RmgNx-9VFY37YK8fSB9r4qYU&sensor=false"></script>
<script src="js/main.js"></script>


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
      $('.destination-single').click(function(){  
          var destid = $(this).attr("id");

          $.ajax({  
                  url:"processes.php",  
                  method:"POST",  
                  data:{fetch_single_dest:destid}, 
                  dataType: 'json',
                  success:function(data){
                    $('#destModalBody').html(data.description);
                    $('#destModalTitle').html(data.days + " Days " + data.nights + " Nights " + data.location);
                    $('#destModalId').val(data.destination_id);
                  }  
          });
		  
      });  
 });  
</script>

<script> 
 $(document).ready(function(){  
      $('#destBookModal').click(function(){  
          var destid = $('#destModalId').val();
          $('#specificdest').modal("hide");
          $('#bookdest').modal("show");

          $.ajax({  
                  url:"processes.php",  
                  method:"POST",  
                  data:{fetch_single_dest:destid}, 
                  dataType: 'json',
                  success:function(data){
                    $('#destModaldest').val(data.days + " Days " + data.nights + " Nights " + data.location);
                    $('#bookdestId').val(data.destination_id);
                  }  
          });
		  
      });  
 });  
</script>

<script> 
 $(document).ready(function(){  
      $('#customBookModal').click(function(){  
          $('.modal').modal("hide");
          $('#bookcustom').modal("show");
		  
      });  
 });  
</script>


<!--Book Specific destination form-->
<script>
$(document).ready(function() {
  $("#book_dest").submit(function(event) {
    event.preventDefault();
      var x = $("#book_dest").serialize();
      $.ajax({  
        url:"processes.php",  
        type:"POST",  
        data:x,
        crossDomain: true,
        cache: false, 
        beforeSend:function(){  
          $('#book_dest_btn').val("Submitting...");
        }, 
        success:function(data){ 
            var element = document.getElementById("bookdestsuccess");
            element.scrollIntoView();
            $('#bookdestsuccess').html('<span style="color:green;" class="">You Booking Request has been received. We will contact you shortly! <br>Thank You for Choosing Snapshot Tours and Safaris. </span>');
            $('#book_dest input').val("");
            $('#book_dest textarea').val("");
            $('#book_dest_btn').val("Submit");
        }  
});

  });
});
</script>


<!--Book Custom destination form-->
<script>
$(document).ready(function() {
  $("#book_cust").submit(function(event) {
    event.preventDefault();
      var x = $("#book_cust").serialize();
      $.ajax({  
        url:"processes.php",  
        type:"POST",  
        data:x,
        crossDomain: true,
        cache: false, 
        beforeSend:function(){  
          $('#book_cust_btn').val("Submitting...");
        }, 
        success:function(data){ 
            var element = document.getElementById("bookcustsuccess");
            element.scrollIntoView();
            $('#bookcustsuccess').html('<span style="color:green;" class="">You Booking Request has been received. We will contact you shortly! <br>Thank You for Choosing Snapshot Tours and Safaris. </span>');
            $('#book_cust input').val("");
            $('#book_cust textarea').val("");
            $('#book_cust_btn').val("Submit");
        }  
});

  });
});
</script>