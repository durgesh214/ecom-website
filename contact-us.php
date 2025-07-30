<?php include('header.php') ?>
<!-- Header end --> 

<!--inner header start-->
<div class="inner-heading">
  <div class="container">
    <h3>Contact Us</h3>
  </div>
</div>
<!--inner header end--> 

<!--inner content start-->
<div class="inner-content">
<div class="container">
<div class="map">
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3439665.432443288!2d-85.46682153897846!3d32.65815950542019!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88f136c51d5f8157%3A0x6684bc10ec4f10e7!2sGeorgia!5e0!3m2!1sen!2s!4v1489996839236" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen=""></iframe>
    </div>
    
<div class="contact-wrap">
      <div class="row">
        <div class="col-md-8 column">
          <div class="contact-form">
            <div id="message"></div>
            <form method="post" action="http://www.malikhassan.com/html/construction/contact.php" name="contactform" id="contactform">
              <div class="row">
                <div class="col-md-6">
                  <input name="name" type="text" id="name" placeholder="Full Name">
                </div>
                <div class="col-md-6">
                  <input type="text" placeholder="Phone Number">
                </div>
                <div class="col-md-12">
                  <input name="email" type="text" id="email" placeholder="Email">
                </div>
                <div class="col-md-12">
                  <textarea rows="4" name="comments" id="comments" placeholder="Message"></textarea>
                </div>
                <button title="" class="button" type="submit" id="submit">Submit Now</button>
              </div>
            </form>
          </div>
        </div>
        
        <div class="col-md-4 column">
          <div class="contact-now">
            <div class="contact"> <span><i class="fa fa-home"></i></span>
              <div class="information"> <strong>Address:</strong>
                <p>315 Bajaj House, 97 Nehru Place, New Delhi (India)-110019</p>
              </div>
            </div>
            <!-- Contact Info -->
            <div class="contact"> <span><i class="fa fa-envelope"></i></span>
              <div class="information"> <strong>Email Address:</strong>
                <p>info@rbcgroup.co.in</p>
              </div>
            </div>
            <!-- Contact Info -->
            <div class="contact"> <span><i class="fa fa-phone"></i></span>
              <div class="information"> <strong>Phone No:</strong>
                <p>+91-9596699332</p>
              </div>
            </div>
            <!-- Contact Info --> 
          </div>
          <!-- Contact Now --> 
        </div>
      </div>
    </div>
</div>
</div>
<!--inner content end--> 
<?php include('footer.php') ?>