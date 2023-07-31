
<!--Start-footer-->
<footer>
  <div class="container">
    <div class="row">
      <div class="col-md-4">
        <div class="fst-box">
          <h3>SIGN UP FOR EMAILS</h3>
          <p>We'll only send you the good stuff. Promise.</p>

          <div class="mail-box">
            <input type="text" placeholder="Enter Your Email">
            <button type="button">subscribe</button>
          </div>

        </div>
      </div>

      <div class="col-md-3">
        <div class="scd-box">
          <h3>EXCLUSIVE PRODUCTS</h3>

          <ul>
            <li><a href="rings.php">RINGS</a></li>
            <li><a href="earings.php">EARRINGS</a></li>
            <li><a href="bracelets.php">BRACELETS</a></li>
            <li><a href="necklaces.php">NECKLACES</a></li>
            <li><a href="others.php">OTHERS & KIDS</a></li>
          </ul>

        </div>
      </div>

       <div class="col-md-2">
        <div class="scd-box">
          <h3>NEED HELP?</h3>

          <ul>
            <li><a href="client-service.php">CLIENT SERVICES</a></li>
            <li><a href="delivery-and-in-store-pick-up.php">DELIVERY AND IN-STORE PICK UP</a></li>
            <li><a href="exchanges-and-returns.php">EXCHANGES & RETURNS</a></li>
            <li><a href="payment.php">PAYMENT</a></li>
            <li><a href="gift-card.php">GIFT CARDS</a></li>
            <li><a href="faq.php">FAQS</a></li>
          </ul>

        </div>
      </div>

       <div class="col-md-3">  
        <div class="scd-box">
          <h3>ABOUT A-JEWELS</h3>

           <ul>
            <li><a href="about.php">ABOUT US</a></li>
            <li><a href="testimonial.php">CLIENT TESTIMONIALS</a></li>
            <li><a href="our-store.php">OUR STORE</a></li>
            <li><a href="contact.php">CONTACT US</a></li>
            <li><a href="privacy-policy.php">PRIVACY POLICY</a></li>
          </ul>

        </div>
      </div>

    </div>

    <div class="footer-social">
      <div class="row">
        <div class="col-md-12 text-center">
          <ul>
            <li>FOLLOW US</li>
            <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
            <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
          </ul>
          <p>@2021 A-JEWELS</p>
        </div>
      </div>
    </div>

  </div>
</footer>
<!--End-footer-->





    <script src="js/bootstrap.bundle.min.js"></script>
    <script defer src="js/script.js" ></script>
    <script defer src="https://unpkg.com/flickity@2/dist/flickity.pkgd.min.js" ></script>

    <script type="text/javascript" src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>

    <script>
        var header = $('.header')
        $(window).scroll(function() {
          if ($(window).scrollTop() > 300) {

            
            header.addClass('dark-header');
          } else {
            
            header.removeClass('dark-header');
          }
        });
</script>

            <script>
			$(document).ready(function(){
			  $(".review-cmt").click(function(){
			    $(".review-form").slideToggle();
			  });
			});
			</script>



    <script>
      $(document).ready(function(){
      $("#testimonial-slider").owlCarousel({
          items:3,
          itemsDesktop:[1000,2],
          itemsDesktopSmall:[979,2],
          itemsTablet:[768,1],
          pagination:false,
          navigation:true,
          autoPlay:true
      });
  });
      </script>

  <script>
      $(document).ready(function(){
      $("#testimonial-slider-to").owlCarousel({
          items:6,
          itemsDesktop:[1000,2],
          itemsDesktopSmall:[979,2],
          itemsTablet:[768,1],
          pagination:false,
          navigation:false,
          autoPlay:true
      });
  });
      </script>

        <script>
      $(document).ready(function(){
      $("#testimonial-slider-three").owlCarousel({
          items:4,
          itemsDesktop:[1000,2],
          itemsDesktopSmall:[979,2],
          itemsTablet:[768,1],
          pagination:false,
          navigation:false,
          autoPlay:true
      });
  });
      </script>

      <script>
      $(document).ready(function(){
      $("#testimonial-slider-for").owlCarousel({
          items:3,
          itemsDesktop:[1000,2],
          itemsDesktopSmall:[979,2],
          itemsTablet:[768,1],
          pagination:false,
          navigation:false,
          autoPlay:true
      });
  });
      </script>
      
<script>
  (function(){
  // Get inputs by container
  $('.double-slider input[type="range"]').on('input', function(e){    
      // Split the elements From/To Slider and From/To values so you can handle them separtely 
      const fromSlider = $(this).parent().children('input[type="range"].from'),
          toSlider = $(this).parent().children('input[type="range"].to'),
          fromValue = parseInt($(this).parent().children('input[type="range"].from').val()),
          toValue = parseInt($(this).parent().children('input[type="range"].to').val()),
          currentlySliding = $(this).hasClass('from') ? 'from' : 'to',
          outputElemFrom = $(this).parent().children('.value-output.from'),
          outputElemTo = $(this).parent().children('.value-output.to');

      // Check which slider has been adjusted and prevent them from crossing each other 
      if(currentlySliding == 'from' && fromValue >= toValue){
        fromSlider.val((toValue - 1));
        fromValue = (toValue - 1);
      } else if(currentlySliding == 'to' && toValue <= fromValue){
        toSlider.val((fromValue + 1)); 
        toValue = (fromValue + 1);
      }

      // Updating the output values so they mirror the current slider's value
      outputElemFrom.html(fromValue);
      outputElemTo.html(toValue);

      // Caluculating and setting the progressbar widths    
      $('.progressbar_from').css('width', ((fromSlider.width() / parseInt(fromSlider[0].max)) * fromSlider[0].value)  + "px");
      $('.progressbar_to').css('width', (toSlider.width() - ((toSlider.width() / parseInt(toSlider[0].max)) * toSlider[0].value))  + "px");
  
  });
})();
</script>


<script>
  
$('.btn-number').click(function(e){
    e.preventDefault();
    
    fieldName = $(this).attr('data-field');
    type      = $(this).attr('data-type');
    var input = $("input[name='"+fieldName+"']");
    var currentVal = parseInt(input.val());
    if (!isNaN(currentVal)) {
        if(type == 'minus') {
            
            if(currentVal > input.attr('min')) {
                input.val(currentVal - 1).change();
            } 
            if(parseInt(input.val()) == input.attr('min')) {
                $(this).attr('disabled', true);
            }

        } else if(type == 'plus') {

            if(currentVal < input.attr('max')) {
                input.val(currentVal + 1).change();
            }
            if(parseInt(input.val()) == input.attr('max')) {
                $(this).attr('disabled', true);
            }

        }
    } else {
        input.val(0);
    }
});
$('.input-number').focusin(function(){
   $(this).data('oldValue', $(this).val());
});
$('.input-number').change(function() {
    
    minValue =  parseInt($(this).attr('min'));
    maxValue =  parseInt($(this).attr('max'));
    valueCurrent = parseInt($(this).val());
    
    name = $(this).attr('name');
    if(valueCurrent >= minValue) {
        $(".btn-number[data-type='minus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Sorry, the minimum value was reached');
        $(this).val($(this).data('oldValue'));
    }
    if(valueCurrent <= maxValue) {
        $(".btn-number[data-type='plus'][data-field='"+name+"']").removeAttr('disabled')
    } else {
        alert('Sorry, the maximum value was reached');
        $(this).val($(this).data('oldValue'));
    }
});

$(".input-number").keydown(function (e) {
    // Allow: backspace, delete, tab, escape, enter and .
    if ($.inArray(e.keyCode, [46, 8, 9, 27, 13, 190]) !== -1 ||
         // Allow: Ctrl+A
        (e.keyCode == 65 && e.ctrlKey === true) || 
         // Allow: home, end, left, right
        (e.keyCode >= 35 && e.keyCode <= 39)) {
             // let it happen, don't do anything
             return;
    }
    // Ensure that it is a number and stop the keypress
    if ((e.shiftKey || (e.keyCode < 48 || e.keyCode > 57)) && (e.keyCode < 96 || e.keyCode > 105)) {
        e.preventDefault();
    }
});
    
    
    
</script>


  </body>
</html>