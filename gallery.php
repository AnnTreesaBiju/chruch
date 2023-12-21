<?php require_once("admin/cms.php"); ?>
<cms:template title="Gallery">
<cms:editable type="group" name="breadcrumb_gallery" label="Breadcrumb Section">
		<cms:editable name="bc_title_gallery" label="Breadcrumb Title" type="text"/>
        <cms:editable name="bc_image_gallery" label="Breadcrumb Image" type="image" show_preview="1" preview_width="150" />

	</cms:editable>
    <cms:editable type='group' label="Gallery Section" name="g_section">
        <cms:repeatable name="g_card" label="Gallery">
            <cms:editable type="image" label="Images"  name="g_image" show_preview="1" preview_width="150" />
        </cms:repeatable>
    </cms:editable>
</cms:template>
<cms:embed "header.php"/>

    <!-- Start Hero Area -->
    <section class="hero-section height-470" style="background-image:url(<cms:show bc_image_gallery/>)" data-aos="fade-up">
        <div class="hero-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-hrader text-white text-center">
                            <h1 class="display-2"> <cms:show bc_title_gallery/> </h1>
                            <div class="page-breadcrumb">
                                <p><a class="text-white" href="index.php">Home</a> > Image Gallery</p>
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
			
				<cms:show_repeatable "g_card">
                <div class="col-lg-3 col-md-6 col-sm-12 mb-5" data-aos="fade-up" data-aos-duration="300">
                    <div class="single-blog">
                        <div class="blog-image">
                            <a><img src="<cms:show g_image/>" class="img-fluid" alt="chruch"></a>
                        </div>
                        
                    </div>
                </div>
                </cms:show_repeatable>
				             
				
					
				
            </div>
        </div>
		
    </div>
    <!-- End Page -->


    <cms:embed "footer.php"/>
<?php COUCH::invoke(); ?>