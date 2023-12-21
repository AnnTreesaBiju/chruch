<?php require_once("admin/cms.php"); ?>
<cms:template title="Administartion">
    <cms:editable name="bc_ad" label="Breadcrumb Section" type="group">
        <cms:editable name="bc_image_ad" label="Breadcrumb Image" type="image" show_preview="1" preview_width="150" />
        <cms:editable name="bc_title_ad" label="Page Name" type="text" />

    </cms:editable>
    <cms:editable name="ad_section" label="Administration Section" type="group">
        <cms:repeatable name="ad_card" label="Administrations" >
        <cms:editable name="ad_img" label="Administration Image" type="image" show_preview="1" preview_width="150" />
        <cms:editable name="ad_name" label="Administration Name" type="text" />
        <cms:editable name="ad_pos" label="Administration Postion" type="text" />
        </cms:repeatable>


    </cms:editable>



</cms:template>

<cms:embed "header.php"/>
    <!-- Start Hero Area -->
    <section class="hero-section height-470" style="background-image:url(<cms:show bc_image_ad/>)"
        data-aos="fade-up">
        <div class="hero-area">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="page-hrader text-white text-center">
                            <h1 class="display-2"><cms:show bc_title_ad/> </h1>
                            <div class="page-breadcrumb">
                                <p><a class="text-white" href="index.php">Home</a> > About > Administration </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Hero Area -->


    <!-- Start Our Team Carousel -->
    <section class="team-section section-pt" data-aos="fade-up">
        <div class="our-team-area">
            <div class="container">
                <div class="row">


                 <cms:show_repeatable "ad_card">
                 <div class="col-lg-4 col-sm-6 mb-5">
                        <div class="our-teachers-wrapper shadow-lg">
                            <div class="single-team bg-white text-center">
                                <div class="member-image-2">
                                    <img src="<cms:show ad_img/> " alt="team member">
                                   
                                </div>
                                <h5 class="pt-3"><cms:show ad_name/></h5>
                                <p><cms:show ad_pos/></p>
                            </div>
                        </div>
                    </div>
                 </cms:show_repeatable>
<!-- 
                    <div class="col-lg-4 col-sm-6 mb-5">
                        <div class="our-teachers-wrapper shadow-lg">
                            <div class="single-team bg-white text-center">
                                <div class="member-image-2">
                                    <img src="admin/uploads/image/staff/sheena-stephen.jpg" alt="team member">
                                </div>
                                <h6>fghghgygy</h6>
                                <p>vgfgyy</p>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 mb-5">
                        <div class="our-teachers-wrapper shadow-lg">
                            <div class="single-team bg-white">
                                <div class="member-image-2">
                                    <img src="admin/uploads/image/staff/sushamma-r-pillai.jpg" alt="team member">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 mb-5">
                        <div class="our-teachers-wrapper shadow-lg">
                            <div class="single-team bg-white">
                                <div class="member-image-2">
                                    <img src="admin/uploads/image/staff/template.jpg" alt="team member">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 mb-5">
                        <div class="our-teachers-wrapper shadow-lg">
                            <div class="single-team bg-white">
                                <div class="member-image-2">
                                    <img src="admin/uploads/image/staff/ajit-mariya-abraham.jpg" alt="team member">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 mb-5">
                        <div class="our-teachers-wrapper shadow-lg">
                            <div class="single-team bg-white">
                                <div class="member-image-2">
                                    <img src="admin/uploads/image/staff/ambil-augustine.jpg" alt="team member">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 mb-5">
                        <div class="our-teachers-wrapper shadow-lg">
                            <div class="single-team bg-white">
                                <div class="member-image-2">
                                    <img src="admin/uploads/image/staff/ansita-joseph.jpg" alt="team member">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 mb-5">
                        <div class="our-teachers-wrapper shadow-lg">
                            <div class="single-team bg-white">
                                <div class="member-image-2">
                                    <img src="admin/uploads/image/staff/arya-jayakumar.jpg" alt="team member">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 mb-5">
                        <div class="our-teachers-wrapper shadow-lg">
                            <div class="single-team bg-white">
                                <div class="member-image-2">
                                    <img src="admin/uploads/image/staff/athulya-thomas.jpg" alt="team member">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 mb-5">
                        <div class="our-teachers-wrapper shadow-lg">
                            <div class="single-team bg-white">
                                <div class="member-image-2">
                                    <img src="admin/uploads/image/staff/beena-thomas.jpg" alt="team member">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 mb-5">
                        <div class="our-teachers-wrapper shadow-lg">
                            <div class="single-team bg-white">
                                <div class="member-image-2">
                                    <img src="admin/uploads/image/staff/bineesh-augustine.jpg" alt="team member">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 mb-5">
                        <div class="our-teachers-wrapper shadow-lg">
                            <div class="single-team bg-white">
                                <div class="member-image-2">
                                    <img src="admin/uploads/image/staff/cicimol-joseph.jpg" alt="team member">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 mb-5">
                        <div class="our-teachers-wrapper shadow-lg">
                            <div class="single-team bg-white">
                                <div class="member-image-2">
                                    <img src="admin/uploads/image/staff/davis-t-j.jpg" alt="team member">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 mb-5">
                        <div class="our-teachers-wrapper shadow-lg">
                            <div class="single-team bg-white">
                                <div class="member-image-2">
                                    <img src="admin/uploads/image/staff/deepa-soman.jpg" alt="team member">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 mb-5">
                        <div class="our-teachers-wrapper shadow-lg">
                            <div class="single-team bg-white">
                                <div class="member-image-2">
                                    <img src="admin/uploads/image/staff/dominic-savio-m-c.jpg" alt="team member">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 mb-5">
                        <div class="our-teachers-wrapper shadow-lg">
                            <div class="single-team bg-white">
                                <div class="member-image-2">
                                    <img src="admin/uploads/image/staff/jose-varghese.jpg" alt="team member">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 mb-5">
                        <div class="our-teachers-wrapper shadow-lg">
                            <div class="single-team bg-white">
                                <div class="member-image-2">
                                    <img src="admin/uploads/image/staff/josmy-thomas.jpg" alt="team member">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 mb-5">
                        <div class="our-teachers-wrapper shadow-lg">
                            <div class="single-team bg-white">
                                <div class="member-image-2">
                                    <img src="admin/uploads/image/staff/leelamma-narayanan.jpg" alt="team member">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 mb-5">
                        <div class="our-teachers-wrapper shadow-lg">
                            <div class="single-team bg-white">
                                <div class="member-image-2">
                                    <img src="admin/uploads/image/staff/litty-sebastian.jpg" alt="team member">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 mb-5">
                        <div class="our-teachers-wrapper shadow-lg">
                            <div class="single-team bg-white">
                                <div class="member-image-2">
                                    <img src="admin/uploads/image/staff/lovely-varghese.jpg" alt="team member">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 mb-5">
                        <div class="our-teachers-wrapper shadow-lg">
                            <div class="single-team bg-white">
                                <div class="member-image-2">
                                    <img src="admin/uploads/image/staff/manu-sakai.jpg" alt="team member">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 mb-5">
                        <div class="our-teachers-wrapper shadow-lg">
                            <div class="single-team bg-white">
                                <div class="member-image-2">
                                    <img src="admin/uploads/image/staff/mary-joseph.jpg" alt="team member">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 mb-5">
                        <div class="our-teachers-wrapper shadow-lg">
                            <div class="single-team bg-white">
                                <div class="member-image-2">
                                    <img src="admin/uploads/image/staff/meriya-thomas.jpg" alt="team member">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 mb-5">
                        <div class="our-teachers-wrapper shadow-lg">
                            <div class="single-team bg-white">
                                <div class="member-image-2">
                                    <img src="admin/uploads/image/staff/mettildamma-thomas.jpg" alt="team member">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 mb-5">
                        <div class="our-teachers-wrapper shadow-lg">
                            <div class="single-team bg-white">
                                <div class="member-image-2">
                                    <img src="admin/uploads/image/staff/milu-annie-chacko.jpg" alt="team member">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 mb-5">
                        <div class="our-teachers-wrapper shadow-lg">
                            <div class="single-team bg-white">
                                <div class="member-image-2">
                                    <img src="admin/uploads/image/staff/mini-roy.jpg" alt="team member">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 mb-5">
                        <div class="our-teachers-wrapper shadow-lg">
                            <div class="single-team bg-white">
                                <div class="member-image-2">
                                    <img src="admin/uploads/image/staff/neenumol-antony.jpg" alt="team member">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 mb-5">
                        <div class="our-teachers-wrapper shadow-lg">
                            <div class="single-team bg-white">
                                <div class="member-image-2">
                                    <img src="admin/uploads/image/staff/p-j-thomas.jpg" alt="team member">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 mb-5">
                        <div class="our-teachers-wrapper shadow-lg">
                            <div class="single-team bg-white">
                                <div class="member-image-2">
                                    <img src="admin/uploads/image/staff/pradheeshkumar-n-r.jpg" alt="team member">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 mb-5">
                        <div class="our-teachers-wrapper shadow-lg">
                            <div class="single-team bg-white">
                                <div class="member-image-2">
                                    <img src="admin/uploads/image/staff/rahul-p-r.jpg" alt="team member">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 mb-5">
                        <div class="our-teachers-wrapper shadow-lg">
                            <div class="single-team bg-white">
                                <div class="member-image-2">
                                    <img src="admin/uploads/image/staff/rency-siby.jpg" alt="team member">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 mb-5">
                        <div class="our-teachers-wrapper shadow-lg">
                            <div class="single-team bg-white">
                                <div class="member-image-2">
                                    <img src="admin/uploads/image/staff/salamma-philip.jpg" alt="team member">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 mb-5">
                        <div class="our-teachers-wrapper shadow-lg">
                            <div class="single-team bg-white">
                                <div class="member-image-2">
                                    <img src="admin/uploads/image/staff/sasinas-n-v.jpg" alt="team member">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 mb-5">
                        <div class="our-teachers-wrapper shadow-lg">
                            <div class="single-team bg-white">
                                <div class="member-image-2">
                                    <img src="admin/uploads/image/staff/sha-abraham.jpg" alt="team member">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 mb-5">
                        <div class="our-teachers-wrapper shadow-lg">
                            <div class="single-team bg-white">
                                <div class="member-image-2">
                                    <img src="admin/uploads/image/staff/shaji-joseph.jpg" alt="team member">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 mb-5">
                        <div class="our-teachers-wrapper shadow-lg">
                            <div class="single-team bg-white">
                                <div class="member-image-2">
                                    <img src="admin/uploads/image/staff/sherly-abraham.jpg" alt="team member">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 mb-5">
                        <div class="our-teachers-wrapper shadow-lg">
                            <div class="single-team bg-white">
                                <div class="member-image-2">
                                    <img src="admin/uploads/image/staff/shine-sebastian.jpg" alt="team member">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 mb-5">
                        <div class="our-teachers-wrapper shadow-lg">
                            <div class="single-team bg-white">
                                <div class="member-image-2">
                                    <img src="admin/uploads/image/staff/shyni-sabu.jpg" alt="team member">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 mb-5">
                        <div class="our-teachers-wrapper shadow-lg">
                            <div class="single-team bg-white">
                                <div class="member-image-2">
                                    <img src="admin/uploads/image/staff/sr-lincy-maria.jpg" alt="team member">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 mb-5">
                        <div class="our-teachers-wrapper shadow-lg">
                            <div class="single-team bg-white">
                                <div class="member-image-2">
                                    <img src="admin/uploads/image/staff/sreevidya-mani-p.jpg" alt="team member">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 mb-5">
                        <div class="our-teachers-wrapper shadow-lg">
                            <div class="single-team bg-white">
                                <div class="member-image-2">
                                    <img src="admin/uploads/image/staff/sruthy-p-joseph.jpg" alt="team member">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 mb-5">
                        <div class="our-teachers-wrapper shadow-lg">
                            <div class="single-team bg-white">
                                <div class="member-image-2">
                                    <img src="admin/uploads/image/staff/sunu-p-p.jpg" alt="team member">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 mb-5">
                        <div class="our-teachers-wrapper shadow-lg">
                            <div class="single-team bg-white">
                                <div class="member-image-2">
                                    <img src="admin/uploads/image/staff/susan-joseph.jpg" alt="team member">
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-sm-6 mb-5">
                        <div class="our-teachers-wrapper shadow-lg">
                            <div class="single-team bg-white">
                                <div class="member-image-2">
                                    <img src="admin/uploads/image/staff/tinu-mathew.jpg" alt="team member">
                                </div>
                            </div>
                        </div>
                    </div> -->

                </div>
            </div>
        </div>
    </section>
    <!-- End Our Team Carousel -->

    <cms:embed "footer.php"/>
</html>
<?php COUCH::invoke();?>