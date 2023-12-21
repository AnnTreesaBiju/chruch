<?php require_once("admin/cms.php"); ?>
<cms:template title="Blog" clonable='1'>
<cms:editable name="bc_blog" label="Breadcrumb Section" type="group">
        <cms:editable name="bc_image_blog" label="Breadcrumb Image" type="image" show_preview="1" preview_width="150" />
        <cms:editable name="bc_title_blog" label="Page Name" type="text" />

    </cms:editable>
    <cms:editable name='display' type='radio' label='Latest News' desc='Show this News At Multiple pages'
    opt_values='No=0 | Yes=1 ' />
	<cms:editable name="blog_image" label="Blog Images (700 x 360)" type="image" />
	<cms:editable name="blog_title" label="Blog Title" type="text" />
	<cms:editable name="blog_des_1" label="Blog Description" type="richtext" />
	<cms:editable name="blog_des_2" label="Blog Description" type="richtext" />
	<cms:editable name="blog_des_3" label="Blog Description" type="richtext" />
    <cms:editable name="blog_subtitle" label="Blog Subtitle" type="text" />

</cms:template>
<cms:if k_is_page>
<cms:embed "header.php"/>
    <!-- Start Hero Area -->
    <section class="hero-section height-470" style="background-image:url(<cms:show bc_image_blog/>)" data-aos="fade-up">
        <div class="hero-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-hrader text-white text-center">
                            <h1 class="display-2"> <cms:show bc_title_blog/></h1>
                            <div class="page-breadcrumb">
                                <p><a class="text-white" href="index.php">Home</a> > Latest News</p>
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
                         <img src="<cms:show blog_image/>" alt="oemhss" class="img-fluid">
                     </div>
                     <div class="details-title">
                         <h2> <cms:show blog_title/></h2>
                     </div>
                     <div class="details-text pt-4">
                         <p> <p><cms:show blog_des_1/></p>

<p><cms:show blog_des_2/></p>

<p class="text-justify"><cms:show blog_des_3/>&nbsp;</p> </p>
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


    <cms:embed "footer.php"/>
</cms:if>
<?php COUCH::invoke();?>