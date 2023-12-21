<?php require_once("admin/cms.php"); ?>
<cms:template title="Blog List">
<cms:editable type="group" name="breadcrumb_blog" label="Breadcrumb Section">
		<cms:editable name="bc_title_blog_list" label="Breadcrumb Title" type="text"/>
        <cms:editable name="bc_image_blog_list" label="Breadcrumb Image" type="image" show_preview="1" preview_width="150" />

	</cms:editable>
</cms:template>
<cms:embed "header.php"/>

    <!-- Start Hero Area -->
    <section class="hero-section height-470" style="background-image:url(<cms:show bc_image_blog_list/>)" data-aos="fade-up">
        <div class="hero-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-hrader text-white text-center">
                            <h1 class="display-2"> <cms:show bc_title_blog_list/> </h1>
                            <div class="page-breadcrumb">
                                <p><a class="text-white" href="index.php">Home</a> > Latest News </p>
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
			
				 <cms:pages masterpage="news198a.php">
                 <div class="col-lg-4 col-sm-6 mb-5" data-aos="fade-up" data-aos-duration="300">
                    <div class="single-blog">
                        <div class="blog-image">
                            <a href="<cms:show k_page_link/>"><img src="<cms:show blog_image/>" class="img-fluid" alt="oemhss"></a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-text">
                                <h4 class="pt-3"><a href="<cms:show k_page_link/>"> <cms:show k_page_title/> </a></h4>
                                <p> <cms:show blog_subtitle/></p>
                                <button class="btn border"><a style="color:#002147;" href="<cms:show k_page_link/>">View More</a></button>
                            </div>
                        </div>
                    </div>
                </div>
                 </cms:pages>
				
									                <!-- <div class="col-lg-4 col-sm-6 mb-5" data-aos="fade-up" data-aos-duration="300">
                    <div class="single-blog">
                        <div class="blog-image">
                            <a href="newse6f0.html?p=103"><img src="admin/uploads/image/news/dist_kal-400x260.jpg" class="img-fluid" alt="oemhss"></a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-text">
                                <h4><a href="newse6f0.html?p=103"> Ossanam English Medium Higher Secondary School Secured Championship in Idukki District Kalolsavam </a></h4>
                            </div>
                        </div>
                    </div>
                </div>
				
									                <div class="col-lg-4 col-sm-6 mb-5" data-aos="fade-up" data-aos-duration="300">
                    <div class="single-blog">
                        <div class="blog-image">
                            <a href="news198a.html?p=101"><img src="admin/uploads/image/kal_web-400x260.jpg" class="img-fluid" alt="oemhss"></a>
                        </div>
                        <div class="blog-content">
                            <div class="blog-text">
                                <h4><a href="news198a.html?p=101"> Ossanam English Medium Higher Secondary School Secured Championship in Sub-district Kalolsavam </a></h4>
                            </div>
                        </div>
                    </div>
                </div>
				 -->
					<!-- pagination --> 
						<div style="clear:both"></div>   
													
            </div>
        </div>
    </div>
    <!-- End Page -->

    <cms:embed "footer.php"/>
<?php COUCH::invoke(); ?>