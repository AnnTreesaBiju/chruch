<?php require_once("admin/cms.php");?>
<cms:template title="St George">
<cms:editable name="bc_sg" label="Breadcrumb Section" type="group">
    <cms:editable name="bc_image_sg" label="Breadcrumb Image" type="image" show_preview="1" preview_width="150"/>
    <cms:editable name="bc_title_sg" label="Page Name" type="text"/>

  </cms:editable>
  <cms:editable name="sg_section" label="St George Section" type="group">
    <cms:editable name="sg_image" label="St George Image" type="image" show_preview="1" preview_width="150"/>
    <cms:editable name="sg_title" label="St George Title" type="text"/>
    <cms:editable name="sg_des_1" label="St George Description 1" type="text"/>
    <cms:editable name="sg_des_2" label="St George Description 2" type="text"/>
    <cms:editable name="sg_des_3" label="St George Description 3" type="text"/>
    <cms:editable name="sg_bd" label="St George Born Details" type="text"/>
    <cms:editable name="sg_dd" label="St George Died Details" type="text"/>
    <cms:editable name="sg_pb" label="St George Place of buria" type="text"/>


  </cms:editable>
 


</cms:template>

<cms:embed "header.php"/>
    <!-- Start Hero Area -->
    <section class="hero-section height-470" style="background-image:url(<cms:show bc_image_sg/>)" data-aos="fade-up">
        <div class="hero-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-hrader text-white text-center">
                            <h1 class="display-2"> <cms:show bc_title_sg/></h1>
                            <div class="page-breadcrumb">
                                <p><a class="text-white" href="index.php">Home</a> > St George  </p>
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
                         <img src="<cms:show sg_image/>" alt="OEMHSS" class="img-fluid">
                     </div>
                     <div class="details-title">
                         <h2> <cms:show sg_title/></h2>
                     </div>
                     
                     <div class="details-text pt-4">
                         <p> <p style="text-align: justify;"><cms:show sg_des_1/></p>

<p style="text-align: justify;"><cms:show sg_des_2/></p>

<p style="text-align: justify;"><cms:show sg_des_3/></p>

<p style="text-align: justify;">&nbsp;<strong>Born: </strong> <cms:show sg_bd/><br />
<em><strong>Died:</strong>  <cms:show sg_dd/></em><br />
<em><strong>Place of buria: </strong> <cms:show sg_pb/> </em></p> </p>
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
<?php COUCH::invoke();?>