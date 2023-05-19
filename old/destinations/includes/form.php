<div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-text u-text-default u-text-1">Enquire Now</h2>
        <div class="u-container-style u-expanded-width u-group u-radius-50 u-shape-round u-white u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <div class="u-container-style u-group u-hidden-lg u-hover-feature u-group-2" data-animation-name="zoomIn" data-animation-duration="1500" data-animation-direction="" data-animation-delay="0">
              <div class="u-container-layout">
                <div class="u-container-style u-expanded-width u-group u-hidden-lg u-hidden-md u-hidden-sm u-hidden-xs u-group-3">
                  <div class="u-container-layout">
                    <div class="u-rotation-parent u-rotation-parent-1">
                      <div class="u-flip-vertical u-rotate-270 u-shape u-shape-svg u-text-palette-3-light-1 u-shape-1">
                        <svg class="u-svg-link" preserveAspectRatio="none" viewBox="0 0 160 130" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-a5bf"></use></svg>
                        <svg class="u-svg-content" viewBox="0 0 160 130" x="0px" y="0px" id="svg-a5bf" style="enable-background:new 0 0 160 130;"><path d="M141.6,99.5c0.3-0.5,0.6-0.9,0.9-1.4c11.8-19.2,26.1-51.9,10.8-73.1C137.2,2.7,104.7-1.6,80.9,0.5
	C57.8,2.6,35.2,12.2,16.8,28.2C4,39.3-10.7,68.6,11.4,78.1c13.6,5.8,26.8,13,38.5,22.7c12,10,20.6,22.9,35.7,27.5
	C108.6,135.2,128.6,119.9,141.6,99.5L141.6,99.5z"></path></svg>
                      </div>
                    </div>
                    <h3 class="u-align-center u-text u-text-2">Want to know more about this destination?<br>
                      <br>Talk to us Today!
                    </h3>
                  </div>
                </div>
              </div>
            </div>
            <div class="u-form u-form-1">
              <form action="../includes/mailprocessor.php" method="POST" class="u-clearfix u-form-spacing-30 u-form-vertical u-inner-form" source="customphp" name="form" style="padding: 0px;">
                <div class="u-form-group u-form-name">
                  <label for="name-d268" class="u-label">Name</label>
                  <input type="text" placeholder="Enter your Name" id="name-d268" name="name" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-30 u-white" required="">
                </div>
                <div class="u-form-email u-form-group">
                  <label for="email-d268" class="u-label">Email</label>
                  <input type="email" placeholder="Enter a valid email address" id="email-d268" name="email" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-30 u-white" required="">
                </div>
                <div class="u-form-group u-form-phone u-form-group-3">
                  <label for="text-7b16" class="u-label">Phone Number</label>
                  <input type="tel" placeholder="Enter Phone Number" id="text-7b16" name="phone" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-30 u-white" required="required">
                </div>
                <div class="u-form-group u-form-message">
                  <label for="message-d268" class="u-label">Message</label>
                  <textarea placeholder="Enter your message" rows="4" cols="50" id="message-d268" name="message" class="u-border-1 u-border-grey-30 u-input u-input-rectangle u-radius-30 u-white" required=""></textarea>
                </div>


                <input type="hidden" value="<?php echo $pagetitle;?>" name="title">
                <input type="hidden" value="<?php echo $pagefilename;?>" name="page">

                <div class="u-align-center u-form-group u-form-submit" id="turnback">
                  <a href="#" class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-palette-3-light-1 u-radius-30 u-btn-1">Submit</a>
                  <input type="submit" value="submit" name="destination_enq" class="u-form-control-hidden">
                </div>
                
                <?php if(isset($_SESSION['success'])){?>
                <div class="u-form-send-message" style="text-align:center;padding:10px;background-color:green;width:100%; margin-top: 4px;">Thank you! Your message has been sent.</div>
                <?php unset($_SESSION['success']); }?>
              </form>
            </div>
          </div>
        </div>
      </div>