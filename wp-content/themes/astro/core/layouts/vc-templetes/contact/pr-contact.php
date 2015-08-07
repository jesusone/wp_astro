<?php
  global $contacPr;
?>
<!-- Contact Section========================================================== -->
<section id="contact" class="section-content">
<div class="row bgSilver">
    <div class="col-md-4 col-sm-12 item_bottom bgDark text-center">
        <!-- Section Title -->
        <div class="section-title white text-center">
            <h1><?php echo $contacPr['con_title'] ;?></h1>
            <p class="section-desc">
                 <?php echo $contacPr['con_desc'] ; ?>
            </p>
        </div>
        <!-- End Section Title -->
    </div>
    <div class="col-md-8 col-sm-12 bgWhite sec_title_content">
        <div class="row item_fade_in">
            <div class="col-md-10 col-md-offset-1">
                <div class="form-respond text-center">
                </div>
                <form method="post" name="contactform" id="contactform" class="form validate item_bottom" role="form">
                    <div class="form-group">
                        <input type="text" name="name" id="name" class="form-control required" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" id="email" class="form-control required email" placeholder="Email">
                    </div>
          <div class="form-group">
                        <input type="text" name="phone" id="phone" class="form-control" placeholder="Phone">
                    </div>
                    <div class="form-group">
                        <textarea name="message" id="message" class="form-control input-lg required" rows="9" placeholder="Enter Message"></textarea>
                    </div>
                    <div class="form-group text-center">
                        <input type="submit" id="contactForm_submit" class="btn btn-promsu btn-full" value="Submit">
                    </div>
                    <!-- antispam code -->
                    <div class="antispam">
                        <input type="text" value="" name="url"/>
                    </div>
                </form>
            </div>
        </div>
        <!-- End form contact -->
    </div>
</div>
</section>
<!-- End Contact Section======================================================== -->
