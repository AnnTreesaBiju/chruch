<?php require_once("admin/cms.php");?>
<cms:template title="About Us">
  <cms:editable name="about_section" label="About Section" type="group">
    <cms:editable name="abt_image" label="About Image" type="image" show_preview="1" preview_width="150"/>
    <cms:editable name="abt_title" label="About Title" type="text"/>
    <cms:editable name="abt_des_1" label="About Description 1" type="text"/>
    <cms:editable name="abt_des_2" label="About Description 2" type="text"/>
   

  </cms:editable>
  <cms:editable name="bc_about" label="Breadcrumb Section" type="group">
    <cms:editable name="bc_image_abt" label="Breadcrumb Image" type="image" show_preview="1" preview_width="150"/>
    <cms:editable name="bc_title_abt" label="Page Name" type="text"/>
    
   

  </cms:editable>
  <cms:editable name="vision" label="Vision" type="group">
      <cms:editable name="vision_image" type="image" label="Vision Image" show_preview="1" preview_width="150" />
      <cms:editable name="vision_name" type="text" label="Vision Title" />
      <cms:editable name="vision_des" type="richtext" label="Vision Description" />
  </cms:editable>
  <cms:editable name="mission" label="Mission" type="group">
      <cms:editable name="mission_image" type="image" label="Mission Image" show_preview="1" preview_width="150" />
      <cms:editable name="mission_name" type="text" label="Mission Title" />
      <cms:editable name="mission_des" type="richtext" label="Mission Description" />
  </cms:editable>

  <cms:editable name="card-s" label="Card " type="group">
    <cms:editable name="se_2_title" label="Card Title" type="text" />
    <cms:repeatable name="se_2_card" label="Card Details">
      <cms:editable name="se_2_image" type="image" label="Card Image" show_preview="1" preview_width="150" />
      <cms:editable name="se_2_name" type="text" label="Card Name" />
     
      
    </cms:repeatable>
  </cms:editable>

</cms:template>
<cms:embed "header.php"/>

    <!-- Start Hero Area -->
    <section class="hero-section height-470" style="background-image:url(<cms:show bc_image_abt/>)" data-aos="fade-up">
        <div class="hero-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-hrader text-white text-center">
                            <h1 class="display-2"> <cms:show bc_title_abt/> </h1>
                            <div class="page-breadcrumb">
                                <p><a class="text-white" href="index.php">Home</a> > About  </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Area -->



    <!--Start Page -->
    <div class="page-wrapper section-ptb-3">
        <div class="container">
            <div class="row">
            <div class="col-lg-8 mb-3d-5" data-aos="fade-up" data-aos-delay="400">
                    <!-- Start Blog Details -->
                    <div class="details-wrapper">
                    <div class="details-image mb-4">
                            <img  src="<cms:show abt_image/> " alt="OEMHSS" class="img-fluid w-100">
                        </div>
                        <div class="details-title">
                            <h2> <cms:show abt_title/> </h2>
                        </div>
                       
                        <div class="details-text pt-4">
                            <p>
                            <p style="text-align: justify;"><cms:show abt_des_1/> </p>

                            <p style="text-align: justify;"><cms:show abt_des_2/>&nbsp;</p>

                            <div class="semi_dark_bg row" style="padding:30px; margin-bottom:50px;">
                            <div class="col-md-6 col-sm-12"> <img class="img-fluid "  src="<cms:show vision_image/>" alt=""></div>
                            <div class="col-md-6 col-sm-12">  <h5><strong><cms:show vision_name/></strong></h5>

                         <p style="text-align: justify;"><cms:show vision_des/></p></div>
                              
                            </div>

                            <div class="semi_dark_bg row" style="padding:30px; margin-bottom:50px;">
                                <div class="col-md-6 col-sm-12">
                                    <h5><strong><cms:show mission_name/></strong></h5>
                                     <p style="text-align: justify;"><cms:show mission_des/></p>
                                </div>
                               
<div class="col-md-6 col-sm-12"> 
    <img class="img-fluid"  src="<cms:show mission_image/>" alt="">
</div>
                            </div>
                            </p>
                        </div>
                        <br><br>


                    </div>
                    <!-- End Blog Details -->
                </div>
				
				
				
				<div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
                    <!-- Start Sidebar -->
                    <div class="sidebar-wrapper">
                      
					  
                      <div class="single-widget">
                          <div class="latest-widget border">
                              <h4>Latest News</h4>
							  
							    <cms:pages masterpage="news198a.php">
                                <cms:if display='1'>
                                <div class="single-latest">
                                <div class="latest-image">
                                    <a href="<cms:show k_page_link />"><img class="img-fluid" src="<cms:show blog_image />" alt="oemhss"></a>
                                </div>
                                <div class="latest-content">
                                    <h6><a href="<cms:show k_page_link />"> <cms:show k_page_title /> </a></h6>
                                    <div class="latest-meta">
                                        <span> <cms:show k_page_date /> </span>
                                    </div>
                                </div>
                              </div>
                              </cms:if>
                                </cms:pages>
							                                <!-- <div class="single-latest">
                                <div class="latest-image">
                                    <a href="newse6f0.html?p=103"><img class="img-fluid" src="admin/uploads/image/news/dist_kal-400x260.jpg" alt="oemhss"></a>
                                </div>
                                <div class="latest-content">
                                    <h6><a href="newse6f0.html?p=103"> Ossanam English Medium Higher Secondary School Secured Championship in Idukki District Kalolsavam </a></h6>
                                    <div class="latest-meta">
                                        <span> December 13, 2023 </span>
                                    </div>
                                </div>
                              </div>
							                                <div class="single-latest">
                                <div class="latest-image">
                                    <a href="news198a.html?p=101"><img class="img-fluid" src="admin/uploads/image/kal_web-400x260.jpg" alt="oemhss"></a>
                                </div>
                                <div class="latest-content">
                                    <h6><a href="news198a.html?p=101"> Ossanam English Medium Higher Secondary School Secured Championship in Sub-district Kalolsavam </a></h6>
                                    <div class="latest-meta">
                                        <span> November 16, 2023 </span>
                                    </div>
                                </div>
                              </div> -->
							  							  
                          </div>
                      </div>
					  
					  
                    </div>
                    <!-- End Sidebar -->
                </div>				
                
				
				
            </div>
        </div>
    </div>
    <!--End Page -->

    <!-- Start Our Team Carousel -->
   
    <section class="team-section section-ptb semi_dark_bg" data-aos="fade-up" style="margin-bottom:-50px;">
        <div class="our-team-Section show_navigation" >
            <div class="container pe-md-0 ps-md-0">
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
   
    <!-- End Our Team Carousel -->

    <cms:embed "footer.php"/>
<?php COUCH::invoke();?>