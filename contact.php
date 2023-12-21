<?php require_once("admin/cms.php"); ?>
<cms:template title="Contact">
<cms:editable type="group" name="breadcrumb_contact" label="Breadcrumb Section">
		<cms:editable name="bc_title_contact" label="Breadcrumb Title" type="text"/>
        <cms:editable name="bc_image_contact" label="Breadcrumb Image" type="image" show_preview="1" preview_width="150" />

	</cms:editable>
    <cms:editable type='group' label="Contact Us Section" name="g_section">
        
            <cms:editable type="text" label="Address"  name="c_info"  />
            <cms:editable type="text" label="Phone Number"  name="c_no"  />
            <cms:editable type="text" label="Email"  name="c_mail"  />

    </cms:editable>
</cms:template>

<cms:embed "header.php"/>
    <!-- End Header -->
    <!-- Start Hero Area -->
    <section class="hero-section height-470" style="background-image:url(<cms:show bc_image_contact/>)" data-aos="fade-up">
        <div class="hero-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-hrader text-white text-center">
                            <h1 class="display-2"><cms:show bc_title_contact/></h1>
                            <div class="page-breadcrumb">
                                <p><a class="text-white" href="index.php">Home</a> > Contact Us</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Area -->



    <!-- Start Page Wrapper-->
    <div class="page-wrapper section-pt">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-3d-5" data-aos="fade-up">
                    <div class="main-content">
                        <div class="contact-from-wrapper-2">
                            <h2 class="section-heading">Get In Touch</h2>
                            <form action="#" class="contact-form mt-4">
                                <div class="row g-4">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" placeholder="Enter Your Name" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="email" class="form-control" placeholder="Enter Your Email" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="phone_number" placeholder="Enter Phone Number" required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="subject" class="form-control" placeholder="Enter Subject">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea name="message" class="form-control" id="message" cols="30" rows="6" placeholder="Write Your Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-12 mx-auto text-center">
                                        <button type="submit">Send Message</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-up">
                    <div class="highlights-section hover_bg text-white p-4">
                        <h4>Need Help ? Have Questions or suggestions? Please Let Us Know </h4>
                        <ul>
                            <li><i class="fas fa-paper-plane"> &nbsp;</i><cms:show c_info/></li>
                            <li><a style="color:white;" href="tel:<cms:show c_no/>"><i class="fas fa-mobile-alt"></i> <cms:show c_no/> </a></li>
                            <li><a style="color:white;" href="mailto:<cms:show c_mail/>"><i class="fas fa-envelope"></i> <cms:show c_mail/></a></li>
                        </ul>
                        <div class="social-links">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="map-area section-ptb-3" data-aos="fade-up"> 
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="embeded-map-area">
                        <div class="mapouter">
                            <div class="gmap_canvas">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d56931.521123362996!2d77.101582!3d9.769353!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b07aecb308a6585%3A0x387d74a2dc2aab5c!2sSt.%20George%20Forane%20Church!5e1!3m2!1sen!2sin!4v1703050056301!5m2!1sen!2sin" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
    </div>
    <!-- End Page Wrapper-->



    <cms:embed "footer.php"/>
<?php COUCH::invoke(); ?>