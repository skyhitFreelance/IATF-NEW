<?php
require_once('inc/header.php');
?>


<!-- Section - Speakers Start -->
<!--
<section class="bg-white-3">
<div class="container">
<div class="row no-padding-rl no-padding-top padding-8">
<div class="col-md-8 col-md-offset-2 text-center">
<h3 class="font-family-alt font-weight-700 letter-spacing-2 text-uppercase xs-title-small title-medium title-sideline-base-color">Are you an agent looking to connect?</h3>
<p class="font-family-alt margin-3 no-margin-bottom no-margin-rl text-gray-dark-2 text-large">Fill the form below and we will connect you!</p>
</div>
<!-- //.col-md-8 -->
</div>
<!-- //.row -->

</div>
<!-- //.container -->
</section>-->
<!-- //Section - Speakers End -->
<!-- Section - Register Start -->
<section id="register1" class="bg-cover bg-overlay-black-6">
  <div class="overlay">

  </div>
  <div class="container">

    <div class="row">


      <div class="col-sm-6 col-md-6">
        <div class="form-wrapper border-round padding-8" style="background: rgba(0, 0, 0, 0.69);">
          <form action="contact/send_mail_ticket.php?action=agent" method="post" id="form-register">
            <input type="text" placeholder="Your Name" name="name" class="required">
            <input type="text" placeholder="Your Email" name="email" class="required email">
            <input type="text" placeholder="Your Phone Number" name="phone" class="required">
            <input type="text" placeholder="Your Web site (Optional)" name="web" class="required">
            <textarea placeholder="Your Message" name="message" class="required"></textarea>
            <button id="btn-form-register" type="submit" class="btn btn-base-color btn-medium">Submit</button>
          </form>
        </div>
        <!-- //.form-wrapper -->

      </div>
      <!-- //.col-sm-6 -->
      <div class="col-sm-6 col-md-6 xs-text-center">
        <span class="display-block font-family-alt letter-spacing-1 opacity-9 margin-7 no-margin-bottom no-margin-rl text-medium text-uppercase">Fill the form below and we will connect you!</span>
        <h2 class="display-block font-family-alt font-weight-700 letter-spacing-2 margin-5 no-margin-bottom no-margin-rl xs-title-medium title-extra-large-3 text-uppercase ">Are you an agent <br/>looking to connect?</h2>
        <span class="bg-base-color display-inline-block margin-5-5 no-margin-rl separator-line-medium-thick-long"></span>
      </div>
      <!-- //.col-sm-6 -->
    </div>
    <!-- //.row -->
  </div>
  <!-- //.container -->
</section>
<!-- //Section - Register End -->


<?php
require_once('inc/footer.php');
?>
