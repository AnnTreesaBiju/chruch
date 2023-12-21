<?php require_once('admin/cms.php'); ?>
<cms:template title="Home">
  <cms:editable name="main_slider" type="group" label="Slider Section">
    <cms:repeatable name="slider" label="Main Slider" >
    <cms:editable name="slider_image" label="Slider Image" type="image" show_preview="1" preview_width="150" />
    <cms:editable name="title" label="Title" type="text" />
    <cms:editable name="sub_title" label="Sub Title" type="text" />
  </cms:repeatable>
</cms:editable>

 
  <cms:editable name="marquee_section" label="Marquee Section" type="group">
    <cms:editable name="marquee_des" label="Marquee" type="text" />

  </cms:editable>
  <cms:editable name="welcom_section" label="Welcome Section" type="group">
    <cms:editable name="welcom_image" label="Welcom Image" type="image" show_preview="1" preview_width="150" />
    <cms:editable name="welcom_title" label="Title" type="text" />
    <cms:editable name="welcom_des" label="Description" type="richtext" />

  </cms:editable>

  <cms:editable name="sg_section" label="St.George Section" type="group">
    <cms:editable name="sg_image" label="St.George Image" type="image" show_preview="1" preview_width="150" />
    <cms:editable name="sg_title" label="Title" type="text" />
    <cms:editable name="sg_des_1" label="Description" type="richtext" />
    <cms:editable name="sg_des_2" label="Description" type="richtext" />

  </cms:editable>
 
  <cms:editable name="up_events" label="Upcoming Events" type="group">
    <cms:editable name="upe_title" label="Upcoming Events Title" type="text" />
    <cms:repeatable name="upe_card" label="Upcoming Events Details">
      <cms:editable name="upe_name" type="text" label="Upcoming Events Name" />
      <cms:editable name="upe_des" type="text" label="Upcoming Events Description" />
      <cms:editable name="upe_day" type="text" label="Upcoming Events Day" />
      <cms:editable name="upe_month" type="text" label="Upcoming Events Month" />

    </cms:repeatable>
  </cms:editable>
  <cms:editable name="card" label="Card " type="group">
    <cms:editable name="se_title" label="Card Title" type="text" />
    <cms:repeatable name="se_card" label="Card Details">
      <cms:editable name="se_con" type="text" label="Quotes of Week" />
      <cms:editable name="se_name" type="text" label="Card Name" />
     
      
    </cms:repeatable>
  </cms:editable>

</cms:template>
<cms:embed "header.php"/>


<!-- Start Slider  section -->
<div id="wowslider-container1">
<div class="ws_images"><ul>
		<cms:show_repeatable "slider">
        <li><img src="<cms:show slider_image/>" alt="Welcome to OEMHSS" title="<cms:show title/>" id="wows1_0"/><cms:show sub_title/></li>
        </cms:show_repeatable>
		<!-- <li><img src="assets/images-1/s3.png" alt="Welcome to OEMHSS" title="Welcome to St.George Forane Church" id="wows1_1"/>“For I know the plans I have for you, declares the Lord, plans for welfare and not for evi” —Jeremiah 29:11 </li>
		<li><img src="assets/images-1/s1.png" alt="bootstrap carousel" title="Welcome to St.George Forane Church" id="wows1_2"/>"For God so loved the world that he gave his one and only Son  that whoever believes in him " —John 3:16 </li>
		<li><img src="assets/images-1/s3.png" alt="Welcome to St.George Forane Church" title="Welcome to St.George Forane Church" id="wows1_3"/>"Be kind and compassionate to one another, forgiving each other, just as in Christ God forgave you." —Ephesians 4:32</li> -->
	</ul></div>
	<div class="ws_bullets"><div>
		<a href="#" title="<cms:show title/>"><span>1</span></a>
		<a href="#" title="<cms:show title/>"><span>2</span></a>
		<a href="#" title="<cms:show title/>"><span>3</span></a>
		<a href="#" title="<cms:show title/>"><span>4</span></a>
	</div></div>
<div class="ws_shadow"></div>
</div>	
<script type="text/javascript" src="engine1/wowslider.js"></script>
<script type="text/javascript" src="engine1/script.js"></script>
<!-- End WOWSlider.com BODY section -->

<!-- <marquee style="color:#000; font-size:18px;"> 
	<a href="https://oemhss.sactin.com/online" target="_blank"> <cms:show marquee_des/></a> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
  

</marquee> -->


    <!-- Start Welcome Section -->
    <section class="welcome-section section-pb  mb-5 pb-5" data-aos="fade-in" style="margin-top:45px;">
        <div class="welcome-Section">
            <div class="container pe-md-0 ps-md-0">
                <div class="row">
                 <div class="col-lg-6 mb-3d-5 px-0">
<div class="half_column_image"><img alt="welcome" class="img-fluid equal-height p-4"  src="<cms:show welcom_image/>"/></div>
</div>

<div class="col-lg-6 equal-height">
<div class="half_column_content">
<h1 class="sub-title fs-1"><cms:show welcom_title/></h1>

<p style="text-align: justify;"><cms:show welcom_des/></p>
</div>
</div>
           
                </div>
            </div>
        </div>
    </section>
    <!-- End Welcome Section -->
      <!-- Start Featured Section -->
      <section class="featured-section section-ptb pt-0 " data-aos="fade-up" style="margin-top:-50px;">
        <div class="featured-Section show_navigation" >
            <div class="container pe-md-0 ps-md-0">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title mb-4">
                            <h2>News Updates</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div  class="col-md-12">
                        <div  class="featured-carousel owl-carousel">
                      <cms:pages masterpage="news198a.php">
                      <div  class="single-featured border bg-white" data-aos="fade-up" data-aos-duration="300">
                                <div class="feature-image">
                                    <img src="<cms:show blog_image/>" alt="Featured" class="img-fluid"> 
                                </div>
                                <div style="height:300px;" class="featured-text-and-info border border-top-0">
                                    <div class="feature-content p-4">
                                        <h3><a href="<cms:show k_page_link/>"> <cms:show k_page_title/> </a></h3>
                                        <p>  <p><cms:show blog_subtitle/>&hellip;</p></p>
                                        <a href="<cms:show k_page_link/>" class="button_one mb-3"> View More <i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                      </cms:pages>
						<!-- <div class="single-featured border bg-white" data-aos="fade-up" data-aos-duration="300">
                                <div class="feature-image">
                                    <img src="assets/images-1/abt/who-img-03.jpg" alt="Featured" class="img-fluid"> 
                                </div>
                                <div class="featured-text-and-info border border-top-0">
                                    <div class="feature-content p-4">
                                        <h3><a href="news.php"> Youth Camp Registration Open </a></h3>
                                        <p>  <p>Calling all youth! Registration for our annual summer camp is now open. Secure your spot for a week of growth, fun, and fellowship.&hellip;</p></p>
                                        <a href="news.php" class="button_one mb-3"> View More <i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
						<div class="single-featured border bg-white" data-aos="fade-up" data-aos-duration="300">
                                <div class="feature-image">
                                    <img src="assets\images-1\abt\who-img-01.jpg" alt="Featured" class="img-fluid"> 
                                </div>
                                <div class="featured-text-and-info border border-top-0">
                                    <div class="feature-content p-4">
                                        <h3><a href="news.php">Prayer and Praise Night</a></h3>
                                        <p>  <p>Join us for a special evening of prayer and praise on [Date]. Let's come together to lift our concerns and praises to the Lord&hellip;</p></p>
                                        <a href="news.php" class="button_one mb-3"> View More <i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div> -->
							                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Featured Section -->


	    <!-- Start Events Section -->
    <section class="events-section section-ptb semi_dark_bg mb-0 pb-5" data-aos="fade-up" >
        <div class="events-Section " >
            <div class="container pe-md-0 ps-md-0" style="margin-top:-50px; ">
                <div class="row">
                    <div class="col-lg-6 mb-3d-5" data-aos="fade-up" data-aos-delay="300">
                        <div class="event-content-one border">
						<div class="event-image"><img alt="event image" class="img-fluid" src="<cms:show sg_image/>" style="height: 300px; width: 550px;" /></div>

<div class="event-text p-4 bg-white">
<h2><a href="st-george.php"><cms:show sg_title/> </a></h2>

<p style="text-align: justify;"><cms:show sg_des_1/></p>

<p style="text-align: justify;"><cms:show sg_des_2/>&nbsp;</p>
<a href="st-george.php">View More </a></div>
  
						</div>
                    </div>
                    <div class="col-lg-6" data-aos="fade-up" data-aos-delay="400">
						<div class="section-title text-center mb-4">
                            <h2><cms:show upe_title/></h2>
                        </div>
                        <div class="events-list">
						   <cms:show_repeatable "upe_card">
                           <div class="single-event mb-4">
                                
                                <div class="event-date">
                                    <span>  <cms:show upe_day/> </span>
                                    <p> <cms:show upe_month/> </p>
                                </div>
                                <div class="event-content">
                                    <h5><a href="events153d.html?p=106"><cms:show upe_name/></a></h5>
                                    <p>  <p><cms:show upe_des/>&hellip;</p></p>
                                </div>
                            </div>
                           </cms:show_repeatable>
							                            <!-- <div class="single-event mb-4">
                                <div class="event-date">
                                    <span> 21 </span>
                                    <p> 12 </p>
                                </div>
                                <div class="event-content">
                                    <h5><a href="events9430.html?p=104"> Christmas Celebration </a></h5>
                                    <p>  <p>Get ready for a festive extravaganza! We&#39;re thrilled to announce our Christmas celebrations on December 21st&hellip;</p></p>
                                </div>
                            </div>
																 -->
							
                            <h5 style="float:right;"><a href="news.php"> View More >></a></h5>
							
                        </div>
                           <!-- Start Our Team Carousel -->
    <section class="team-section section-ptb semi_dark_bg pb-0 mb-0" data-aos="fade-up" >
        <div class="our-team-Section show_navigation" style="margin-top:-50px;">
            <div class="container pe-md-0 ps-md-0">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title mb-4">
                            <h3><cms:show se_title/></h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="our-team-carousel-home owl-carousel">
                            <cms:show_repeatable "se_card">
                            <div class="single-team border text-center shadow rounded">
                                <div class="member-image p-4 pb-0">
                                
                                    <p>"<cms:show se_con/>" </p>
                                </div>
                                <div class="member-info default_bg">
                                    <div class="designation">
                                        <a > <h6> <cms:show se_name/></h6> </a>
                                    </div>
                                </div>
                            </div>
                            </cms:show_repeatable>
														<!-- <div class="single-team">
                                <div class="member-image">
                                    <a href="#"> <img src="assets/images-1/abt/g-2.png" alt="our clubs" class="img-fluid"> </a>
                                </div>
                                <div class="member-info default_bg">
                                    <div class="designation">
                                        <a href="#"> <h6>Savior Jesus Christ </h6> </a>
                                    </div>
                                </div>
                            </div>
														<div class="single-team">
                                <div class="member-image">
                                    <a href="#"> <img src="assets/images-1/abt/g-5.png" alt="our clubs" class="img-fluid"> </a>
                                </div>
                                <div class="member-info default_bg">
                                    <div class="designation">
                                        <a href="#"> <h6>Reason for the hope </h6> </a>
                                    </div>
                                </div>
                            </div>
														<div class="single-team">
                                <div class="member-image">
                                    <a href="#"> <img src="assets/images-1/abt/g-4.png" alt="our clubs" class="img-fluid"> </a>
                                </div>
                                <div class="member-info default_bg">
                                    <div class="designation">
                                        <a href="#"> <h6> Almighty God </h6> </a>
                                    </div>
                                </div>
                            </div>
														<div class="single-team">
                                <div class="member-image">
                                    <a href="#"> <img src="assets/images-1/abt/g-3.png" alt="our clubs" class="img-fluid"> </a>
                                </div>
                                <div class="member-info default_bg">
                                    <div class="designation">
                                        <a href="#"> <h6> Lord is my shepherd </h6> </a>
                                    </div>
                                </div>
                            </div>
							  -->
							 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Our Team Carousel -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Events Section -->

  

  <!-- Start Our Team Carousel -->
   <cms:pages masterpage="about5757.php">
  <section class="team-section section-ptb semi_dark_bg" data-aos="fade-up" style="margin-bottom:-50px;">
        <div class="our-team-Section show_navigation pt-0" >
            <div class="container pe-md-0 ps-md-0" style="margin-top:-50px; ">
                <div class="row">
                    <div class="col-md-12">
                        <div class="section-title mb-4">
                            <h2><cms:show se_2_title/></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="our-team-carousel owl-carousel">
                            <cms:show_repeatable "se_2_card">
                            <div class="single-team">
                                <div class="member-image">
                                    <a href="#"> <img src="<cms:show se_2_image/>" alt="our clubs" class="img-fluid"> </a>
                                </div>
                                <div class="member-info default_bg">
                                    <div class="designation">
                                        <a href="#"> <h6> <cms:show se_2_name/></h6> </a>
                                    </div>
                                </div>
                            </div>
                            </cms:show_repeatable>
														<!-- <div class="single-team">
                                <div class="member-image">
                                    <a href="#"> <img src="assets/images-1/abt/g-2.png" alt="our clubs" class="img-fluid"> </a>
                                </div>
                                <div class="member-info default_bg">
                                    <div class="designation">
                                        <a href="#"> <h6>Savior Jesus Christ </h6> </a>
                                    </div>
                                </div>
                            </div>
														<div class="single-team">
                                <div class="member-image">
                                    <a href="#"> <img src="assets/images-1/abt/g-5.png" alt="our clubs" class="img-fluid"> </a>
                                </div>
                                <div class="member-info default_bg">
                                    <div class="designation">
                                        <a href="#"> <h6>Reason for the hope </h6> </a>
                                    </div>
                                </div>
                            </div>
														<div class="single-team">
                                <div class="member-image">
                                    <a href="#"> <img src="assets/images-1/abt/g-4.png" alt="our clubs" class="img-fluid"> </a>
                                </div>
                                <div class="member-info default_bg">
                                    <div class="designation">
                                        <a href="#"> <h6> Almighty God </h6> </a>
                                    </div>
                                </div>
                            </div>
														<div class="single-team">
                                <div class="member-image">
                                    <a href="#"> <img src="assets/images-1/abt/g-3.png" alt="our clubs" class="img-fluid"> </a>
                                </div>
                                <div class="member-info default_bg">
                                    <div class="designation">
                                        <a href="#"> <h6> Lord is my shepherd </h6> </a>
                                    </div>
                                </div>
                            </div>
							  -->
							 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
   </cms:pages>
    <!-- End Our Team Carousel -->



    <cms:embed "footer.php"/>
<?php COUCH::invoke();?>