<?php
include('header.php');
?>
<div class="clearfix"></div>
<!-- Header Container / End -->

<section class="headings contact_bg">
    <div class="text-heading text-center">
        <div class="container">
            <h1>Contact Us</h1>
            <!-- <h2><a href="index-2.html">Home </a> &nbsp;/&nbsp; Contact Us</h2> -->
            <p class="text-white">We would love to asist you</p>
        </div>
    </div>
</section>
<!-- END SECTION HEADINGS -->

<!-- START SECTION CONTACT US -->
<section class="contact-us">
    <div class="container">
        <div class="row">
            <h3 class="mb-4 col-12">Contact Us</h3>
            <div class="col-lg-8 col-md-12">
                <form id="contactform2ss" class="" enctype="multipart/form-data" method="POST">
                    <div id="success" class="successform">
                        <p class="alert alert-success font-weight-bold" role="alert">Your message was sent successfully!</p>
                    </div>
                    <div id="error" class="errorform">
                        <p>Something went wrong, try refreshing and submitting the form again.</p>
                    </div>
                    <div class="form-group">
                        <input type="text" required class="form-control input-custom input-full" name="name" placeholder="First Name">
                    </div>
                    <div class="form-group">
                        <input type="text" required class="form-control input-custom input-full" name="lastname" placeholder="Last Name">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control input-custom input-full" name="email" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <textarea class="form-control textarea-custom input-full" id="ccomment" name="message" required rows="4" placeholder="Message"></textarea>
                    </div>
                    <button type="submit" id="submit-contact" class="btn btn-primary btn-lg">Submit</button>
                </form>
            </div>
            <div class="col-lg-4 col-md-12 bgc">
                <div class="call-info">
                    <h3>Contact Details</h3>
                    <ul>
                        <li>
                            <div class="info">
                                <i class="fa fa-phone" aria-hidden="true"></i>
                                <p class="in-p"><a href="tel:+13127310048">+1 (312) 731 - 0048</a></p>
                            </div>
                        </li>
                        <li>
                            <div class="info">
                                <i class="fa fa-envelope" aria-hidden="true"></i>
                                <p class="in-p ti"><a href="mailto:hello@themeiteam.com">hello@themeiteam.com</a></p>
                            </div>
                        </li>
                        <li>
                            <div class="info cll">
                                <i class="fa fa-clock-o" aria-hidden="true"></i>
                                <p class="in-p ti">8:00 a.m - 9:00 p.m</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- <div class="property-location mt-5">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2969.170725967958!2d-87.65505018426161!3d41.91068847135256!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x880fd323f79cb3f5%3A0x89b6f79e8d62ebb0!2s939%20W%20North%20Ave%2C%20Chicago%2C%20IL%2060642%2C%20USA!5e0!3m2!1sen!2s!4v1672141624729!5m2!1sen!2s" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div> -->
    </div>
</section>
<!-- END SECTION CONTACT US -->

<?php
include('footer.php');
?>