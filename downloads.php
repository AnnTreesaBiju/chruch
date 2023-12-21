<?php require_once("admin/cms.php"); ?>
<cms:template title="Georgian Voice Archive">
<cms:editable type="group" name="breadcrumb_gv" label="Breadcrumb Section">
		<cms:editable name="bc_title_gv" label="Breadcrumb Title" type="text"/>
        <cms:editable name="bc_image_gv" label="Breadcrumb Image" type="image" show_preview="1" preview_width="150" />

	</cms:editable>
    <cms:editable type='group' label="Georgian Voice Section" name="gv_section">
        <cms:repeatable name="gv_card" label="Gallery">
        <cms:editable type="text" label="Georgian Voice Name"  name="gv_name"  />
        <cms:editable type="text" label="Georgian Voice Description"  name="gv_des"  />
        <cms:editable type="file" label="Georgian Voice File"  name="gv_file"  />

        </cms:repeatable>
    </cms:editable>
</cms:template>
 
<cms:embed "header.php"/>
    <!-- End Header -->
    <!-- Start Hero Area -->
    <section class="hero-section height-470" style="background-image:url(<cms:show bc_image_gv/>)" data-aos="fade-up">
        <div class="hero-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-hrader text-white text-center">
                            <h1 class="display-2"> <cms:show bc_title_gv/></h1>
                            <div class="page-breadcrumb">
                                <p><a class="text-white" href="index.php">Home</a> >Georgian Voice Archive </p>
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
                <div class="col-lg-8 mb-3d-5">
                    <!-- Start Blog Area -->
                    <div class="blog-area">
					
					  <cms:show_repeatable "gv_card">
                      <div class="single_blog mb-5" data-aos="fade-up">
                    <div class="blog-content event-content border">
                            <div class="post-text p-4 bg-white">
                                <h2><a href="https://drive.google.com/drive/folders/120LcJGDox3UT2QtHrJvtFqYa0Nnol-_f?usp=share_link"><cms:show gv_name/></a></h2>
                                <p><cms:show gv_des/> </p>
                                <a href="<cms:show gv_file/>" class="button_one mb-3"> Download </a>
                            </div>
                        </div>
                     </div>
					 
                      </cms:show_repeatable>
					 					 
                    </div>
                    <!-- End Blog Area -->
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
                                        <span><cms:show k_page_date /></span>
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


    <cms:embed "footer.php"/>
<?php COUCH::invoke(); ?>