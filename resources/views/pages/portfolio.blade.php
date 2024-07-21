@extends('component.master')
@section('content')
<div id="content-wrap">

<div id="page-header" class="ph-full ph-cap-xxlg ph-center ph-image-cropped ph-image-cover-2 ph-content-parallax">
    <div class="page-header-inner tt-wrap">

        <!-- Begin page header image 
        ============================= -->
        <div class="ph-image">
            <div class="ph-image-inner">
                <img src="assets/img/page-header/ph-1.jpg" alt="Image">
            </div>
        </div>
        <!-- End page header image -->

        <!-- Begin page header caption
        =============================== 
        Use class "max-width-*" to set caption max width if needed. For example "max-width-1000". More info about helper classes can be found in the file "helper.css".
        -->
        <div class="ph-caption">
            <h1 class="ph-caption-title ph-appear">Portfolio</h1>
            <div class="ph-caption-title-ghost ph-appear">Portfolio</div>
            <div class="ph-caption-subtitle ph-appear">Selected Works</div>
        </div> 
        <!-- End page header caption -->

    </div> <!-- /.page-header-inner -->

    <!-- Begin scroll down circle (you can change "data-offset" to set scroll top offset) 
    ============================== -->
    <a href="#page-content" class="scroll-down-circle" data-offset="30">
        <div class="sdc-inner ph-appear">
            <div class="sdc-icon"><i class="fas fa-chevron-down"></i></div>
            <svg viewBox="0 0 500 500">
                <defs>
                    <path d="M50,250c0-110.5,89.5-200,200-200s200,89.5,200,200s-89.5,200-200,200S50,360.5,50,250" id="textcircle"></path>
                </defs>
                <text dy="30">
                    <textPath xlink:href="#textcircle">Scroll down - Scroll down -</textPath>
                </text>
            </svg>
        </div> <!-- /.sdc-inner -->
    </a>
    <!-- End scroll down circle -->

    <!-- Begin made with love 
    ========================== -->
    <div class="made-with-love ph-appear">
        <div class="mwl-inner">
            <div class="mwl-text">Made with</div>
            <div class="mwl-icon"><i class="far fa-heart"></i></div>
        </div>
    </div>
    <!-- End made with love -->
    
</div>
<!-- End page header -->


<!-- *************************************
*********** Begin page content *********** 
************************************** -->
<div id="page-content">

    <!-- =======================
    ///// Begin tt-section /////
    ============================ 
    * You can use padding classes if needed. For example "padding-top-xlg-150", "padding-bottom-xlg-150", "no-padding-top", "no-padding-bottom", etc. Note that each situation may be different and each section may need different classes according to your needs. More info about helper classes can be found in the file "helper.css".
    -->
    <div class="tt-section">
        <div class="tt-section-inner">

            <!-- Begin portfolio grid (works combined with tt-Ggrid!)
            ========================== 
            * Use class "pgi-hover" to enable portfolio grid item hover effect (behavior depends on "ttgr-gap-*" classes below!).
            * Use class "pgi-cap-hover" to enable portfolio grid item caption hover effect (effect only with class "pgi-cap-inside"! Also no effect on mobile devices!).
            * Use class "pgi-cap-center" to position portfolio grid item caption to center.
            * Use class "pgi-cap-inside" to position portfolio grid item caption to inside.
            --> 
            <div id="portfolio-grid" class="pgi-hover">

                <!-- Begin tt-Grid
                =================== 
                * Use class "ttgr-layout-2", "ttgr-layout-3", "ttgr-layout-4" to set grid layout (columns). No class = one column.
                * Use class "ttgr-layout-1-2", "ttgr-layout-2-1", "ttgr-layout-2-3", "ttgr-layout-3-2", "ttgr-layout-3-4" or "ttgr-layout-4-3" to set grid mixed layout (columns).
                * Use class "ttgr-layout-creative-1" or "ttgr-layout-creative-2" to set grid creative mixed layout (no effect with classes "ttgr-portrait", "ttgr-portrait-half", "ttgr-not-cropped" and "ttgr-shifted").
                * Use class "ttgr-portrait" or "ttgr-portrait-half" to enable portrait mode (no effect with classes "ttgr-layout-creative-1", "ttgr-layout-creative-2" and "ttgr-not-cropped").
                * Use class "ttgr-gap-1", "ttgr-gap-2", "ttgr-gap-3", "ttgr-gap-4", "ttgr-gap-5" or "ttgr-gap-6" to add space between items.
                * Use class "ttgr-not-cropped" to enable not cropped mode (effect only with classes "ttgr-layout-2", "ttgr-layout-3" and "ttgr-layout-4").
                * Use class "ttgr-shifted" to enable shifted layout (effect only with classes "ttgr-layout-2", "ttgr-layout-3" and "ttgr-layout-4").
                -->
                <div class="tt-grid ttgr-layout-3 ttgr-gap-3">

                    <!-- Begin tt-Ggrid top content 
                    ================================ -->
                    <div class="tt-grid-top">

                        <!-- Begin tt-Ggrid categories/filter
                        ====================================== -->
                        <div class="tt-grid-categories">

                            <!-- Begin tt-Ggrid categories trigger 
                            ======================================= 
                            * Use class "ttgr-cat-fixed" to enable categories trigger fixed position.
                            -->
                            <div class="ttgr-cat-trigger-wrap ttgr-cat-fixed">
                                <a href="#portfolio-grid" class="ttgr-cat-trigger not-hide-cursor" data-offset="150">
                                    <div class="ttgr-cat-text">
                                        <span data-hover="Open">Filter</span>
                                    </div>
                                    <div class="ttgr-cat-icon">
                                        <span class="magnetic-item"><i class="fas fa-layer-group"></i></span>
                                    </div>
                                </a>
                            </div>
                            <!-- End tt-Ggrid categories trigger -->

                            <!-- Begin tt-Ggrid categories nav 
                            =================================== -->
                            <div class="ttgr-cat-nav">
                                <div class="ttgr-cat-list-holder cursor-close">
                                    <div class="ttgr-cat-list-inner">
                                        <div class="ttgr-cat-list-content">
                                            <ul class="ttgr-cat-list">
                                                <li class="ttgr-cat-close">Close <i class="fas fa-times"></i></li> <!-- For mobile devices! -->
                                                <li class="ttgr-cat-item"><a href="#" class="active">Show All</a></li>
                                                <li class="ttgr-cat-item"><a href="#" data-filter=".branding">Branding</a></li>
                                                <li class="ttgr-cat-item"><a href="#" data-filter=".people">People</a></li>
                                                <li class="ttgr-cat-item"><a href="#" data-filter=".nature">Nature</a></li>
                                                <li class="ttgr-cat-item"><a href="#" data-filter=".creative">Creative</a></li>
                                            </ul>
                                        </div> <!-- /.ttgr-cat-links-content -->
                                    </div> <!-- /.ttgr-cat-links-inner -->
                                </div> <!-- /.ttgr-cat-links-holder -->
                            </div>
                            <!-- End tt-Ggrid categories nav -->

                        </div>
                        <!-- End tt-Ggrid categories/filter-->

                    </div>
                    <!-- End tt-Grid top content -->


                    <!-- Begin tt-Grid items wrap 
                    ============================== -->
                    <div class="tt-grid-items-wrap isotope-items-wrap">

                        <!-- Begin tt-Grid item
                        ======================== -->
                        <div class="tt-grid-item isotope-item people">
                            <div class="ttgr-item-inner">

                                <!-- Begin portfolio grid item 
                                ===============================
                                * Use class "pgi-image-is-light" if needed, it makes the caption visible better if you use light image (only effect if "pgi-cap-inside" is enabled on "portfolio-grid"! Also no effect on small screens!).
                                -->
                                <div class="portfolio-grid-item">
                                    <a href="single-project-1.html" class="pgi-image-wrap" data-cursor="View<br>Project">
                                        <!-- Use class "cover-opacity-*" to set image overlay if needed. For example "cover-opacity-2". Useful if class "pgi-cap-inside" is enabled on "portfolio-grid". Note: It is individual and depends on the image you use. More info about helper classes in file "helper.css". -->
                                        <div class="pgi-image-holder">
                                            <div class="pgi-image-inner anim-zoomin">
                                                <figure class="pgi-image ttgr-height">
                                                    <img src="assets/img/portfolio/portfolio-1.jpg" alt="image">
                                                </figure> <!-- /.pgi-image -->
                                            </div> <!-- /.pgi-image-inner -->
                                        </div> <!-- /.pgi-image-holder -->
                                    </a> <!-- /.pgi-image-wrap -->

                                    <div class="pgi-caption">
                                        <div class="pgi-caption-inner">
                                            <h2 class="pgi-title">
                                                <a href="single-project-1.html">Victorian Girls</a>
                                            </h2>
                                            <div class="pgi-categories-wrap">
                                                <div class="pgi-category">People</div>
                                                <!-- <div class="pgi-category">Varia</div> -->
                                            </div> <!-- /.pli-categories-wrap -->
                                        </div> <!-- /.pgi-caption-inner -->
                                    </div> <!-- /.pgi-caption -->
                                </div>
                                <!-- End portfolio grid item -->

                            </div> <!-- /.ttgr-item-inner -->
                        </div>
                        <!-- End tt-Grid item -->

                        <!-- Begin tt-Grid item
                        ======================== -->
                        <div class="tt-grid-item isotope-item creative">
                            <div class="ttgr-item-inner">

                                <!-- Begin portfolio grid item 
                                ===============================
                                * Use class "pgi-image-is-light" if needed, it makes the caption visible better if you use light image (only effect if "pgi-cap-inside" is enabled on "portfolio-grid"!).
                                -->
                                <div class="portfolio-grid-item">
                                    <a href="single-project-2.html" class="pgi-image-wrap" data-cursor="View<br>Project">
                                        <!-- Use class "cover-opacity-*" to set image overlay if needed. For example "cover-opacity-2". Useful if class "pgi-cap-inside" is enabled on "portfolio-grid". Note: It is individual and depends on the image you use. More info about helper classes in file "helper.css". -->
                                        <div class="pgi-image-holder">
                                            <div class="pgi-image-inner anim-zoomin">
                                                <figure class="pgi-image ttgr-height">
                                                    <img src="assets/img/portfolio/portfolio-2.jpg" alt="image">
                                                </figure> <!-- /.pgi-image -->
                                            </div> <!-- /.pgi-image-inner -->
                                        </div> <!-- /.pgi-image-holder -->
                                    </a> <!-- /.pgi-image-wrap -->

                                    <div class="pgi-caption">
                                        <div class="pgi-caption-inner">
                                            <h2 class="pgi-title">
                                                <a href="single-project-2.html">Smithy</a>
                                            </h2>
                                            <div class="pgi-categories-wrap">
                                                <div class="pgi-category">Creative</div>
                                                <!-- <div class="pgi-category">Varia</div> -->
                                            </div> <!-- /.pli-categories-wrap -->
                                        </div> <!-- /.pgi-caption-inner -->
                                    </div> <!-- /.pgi-caption -->
                                </div>
                                <!-- End portfolio grid item -->

                            </div> <!-- /.ttgr-item-inner -->
                        </div>
                        <!-- End tt-Grid item -->

                        <!-- Begin tt-Grid item
                        ======================== -->
                        <div class="tt-grid-item isotope-item people">
                            <div class="ttgr-item-inner">

                                <!-- Begin portfolio grid item 
                                ===============================
                                * Use class "pgi-image-is-light" if needed, it makes the caption visible better if you use light image (only effect if "pgi-cap-inside" is enabled on "portfolio-grid"!).
                                -->
                                <div class="portfolio-grid-item">
                                    <a href="single-project-3.html" class="pgi-image-wrap" data-cursor="View<br>Project">
                                        <!-- Use class "cover-opacity-*" to set image overlay if needed. For example "cover-opacity-2". Useful if class "pgi-cap-inside" is enabled on "portfolio-grid". Note: It is individual and depends on the image you use. More info about helper classes in file "helper.css". -->
                                        <div class="pgi-image-holder">
                                            <div class="pgi-image-inner anim-zoomin">
                                                <figure class="pgi-video-wrap ttgr-height">
                                                    <video class="pgi-video" loop muted preload="metadata" poster="assets/vids/fashion-week.jpg">
                                                        <source src="assets/vids/fashion-week.mp4" type="video/mp4">
                                                        <source src="assets/vids/fashion-week.webm" type="video/webm">
                                                    </video>
                                                </figure> <!-- /.pgi-video-wrap -->
                                            </div> <!-- /.pgi-image-inner -->
                                        </div> <!-- /.pgi-image-holder -->
                                    </a> <!-- /.pgi-image-wrap -->

                                    <div class="pgi-caption">
                                        <div class="pgi-caption-inner">
                                            <h2 class="pgi-title">
                                                <a href="single-project-3.html">Washion Week</a>
                                            </h2>
                                            <div class="pgi-categories-wrap">
                                                <div class="pgi-category">People</div>
                                                <!-- <div class="pgi-category">Varia</div> -->
                                            </div> <!-- /.pli-categories-wrap -->
                                        </div> <!-- /.pgi-caption-inner -->
                                    </div> <!-- /.pgi-caption -->
                                </div>
                                <!-- End portfolio grid item -->

                            </div> <!-- /.ttgr-item-inner -->
                        </div>
                        <!-- End tt-Grid item -->

                        <!-- Begin tt-Grid item
                        ======================== -->
                        <div class="tt-grid-item isotope-item nature">
                            <div class="ttgr-item-inner">

                                <!-- Begin portfolio grid item 
                                ===============================
                                * Use class "pgi-image-is-light" if needed, it makes the caption visible better if you use light image (only effect if "pgi-cap-inside" is enabled on "portfolio-grid"!).
                                -->
                                <div class="portfolio-grid-item">
                                    <a href="single-project-4.html" class="pgi-image-wrap" data-cursor="View<br>Project">
                                        <!-- Use class "cover-opacity-*" to set image overlay if needed. For example "cover-opacity-2". Useful if class "pgi-cap-inside" is enabled on "portfolio-grid". Note: It is individual and depends on the image you use. More info about helper classes in file "helper.css". -->
                                        <div class="pgi-image-holder">
                                            <div class="pgi-image-inner anim-zoomin">
                                                <figure class="pgi-image ttgr-height">
                                                    <img src="assets/img/portfolio/portfolio-3.jpg" alt="image">
                                                </figure> <!-- /.pgi-image -->
                                            </div> <!-- /.pgi-image-inner -->
                                        </div> <!-- /.pgi-image-holder -->
                                    </a> <!-- /.pgi-image-wrap -->

                                    <div class="pgi-caption">
                                        <div class="pgi-caption-inner">
                                            <h2 class="pgi-title">
                                                <a href="single-project-4.html">Mystery Forest</a>
                                            </h2>
                                            <div class="pgi-categories-wrap">
                                                <div class="pgi-category">Nature</div>
                                                <!-- <div class="pgi-category">Varia</div> -->
                                            </div> <!-- /.pli-categories-wrap -->
                                        </div> <!-- /.pgi-caption-inner -->
                                    </div> <!-- /.pgi-caption -->
                                </div>
                                <!-- End portfolio grid item -->

                            </div> <!-- /.ttgr-item-inner -->
                        </div>
                        <!-- End tt-Grid item -->

                        <!-- Begin tt-Grid item
                        ======================== -->
                        <div class="tt-grid-item isotope-item branding">
                            <div class="ttgr-item-inner">

                                <!-- Begin portfolio grid item 
                                ===============================
                                * Use class "pgi-image-is-light" if needed, it makes the caption visible better if you use light image (only effect if "pgi-cap-inside" is enabled on "portfolio-grid"!).
                                -->
                                <div class="portfolio-grid-item">
                                    <a href="single-project-5.html" class="pgi-image-wrap" data-cursor="View<br>Project">
                                        <!-- Use class "cover-opacity-*" to set image overlay if needed. For example "cover-opacity-2". Useful if class "pgi-cap-inside" is enabled on "portfolio-grid". Note: It is individual and depends on the image you use. More info about helper classes in file "helper.css". -->
                                        <div class="pgi-image-holder">
                                            <div class="pgi-image-inner anim-zoomin">
                                                <figure class="pgi-image ttgr-height">
                                                    <img src="assets/img/portfolio/portfolio-4.jpg" alt="image">
                                                </figure> <!-- /.pgi-image -->
                                            </div> <!-- /.pgi-image-inner -->
                                        </div> <!-- /.pgi-image-holder -->
                                    </a> <!-- /.pgi-image-wrap -->

                                    <div class="pgi-caption">
                                        <div class="pgi-caption-inner">
                                            <h2 class="pgi-title">
                                                <a href="single-project-5.html">Red Package</a>
                                            </h2>
                                            <div class="pgi-categories-wrap">
                                                <div class="pgi-category">Branding</div>
                                                <!-- <div class="pgi-category">Varia</div> -->
                                            </div> <!-- /.pli-categories-wrap -->
                                        </div> <!-- /.pgi-caption-inner -->
                                    </div> <!-- /.pgi-caption -->
                                </div>
                                <!-- End portfolio grid item -->

                            </div> <!-- /.ttgr-item-inner -->
                        </div>
                        <!-- End tt-Grid item -->

                        <!-- Begin tt-Grid item
                        ======================== -->
                        <div class="tt-grid-item isotope-item people">
                            <div class="ttgr-item-inner">

                                <!-- Begin portfolio grid item 
                                ===============================
                                * Use class "pgi-image-is-light" if needed, it makes the caption visible better if you use light image (only effect if "pgi-cap-inside" is enabled on "portfolio-grid"!).
                                -->
                                <div class="portfolio-grid-item">
                                    <a href="single-project-6.html" class="pgi-image-wrap" data-cursor="View<br>Project">
                                        <!-- Use class "cover-opacity-*" to set image overlay if needed. For example "cover-opacity-2". Useful if class "pgi-cap-inside" is enabled on "portfolio-grid". Note: It is individual and depends on the image you use. More info about helper classes in file "helper.css". -->
                                        <div class="pgi-image-holder">
                                            <div class="pgi-image-inner anim-zoomin">
                                                <figure class="pgi-image ttgr-height">
                                                    <img src="assets/img/portfolio/portfolio-5.jpg" alt="image">
                                                </figure> <!-- /.pgi-image -->
                                            </div> <!-- /.pgi-image-inner -->
                                        </div> <!-- /.pgi-image-holder -->
                                    </a> <!-- /.pgi-image-wrap -->

                                    <div class="pgi-caption">
                                        <div class="pgi-caption-inner">
                                            <h2 class="pgi-title">
                                                <a href="single-project-6.html">Studio Shoot</a>
                                            </h2>
                                            <div class="pgi-categories-wrap">
                                                <div class="pgi-category">People</div>
                                                <!-- <div class="pgi-category">Varia</div> -->
                                            </div> <!-- /.pli-categories-wrap -->
                                        </div> <!-- /.pgi-caption-inner -->
                                    </div> <!-- /.pgi-caption -->
                                </div>
                                <!-- End portfolio grid item -->

                            </div> <!-- /.ttgr-item-inner -->
                        </div>
                        <!-- End tt-Grid item -->

                        <!-- Begin tt-Grid item
                        ======================== -->
                        <div class="tt-grid-item isotope-item nature">
                            <div class="ttgr-item-inner">

                                <!-- Begin portfolio grid item 
                                ===============================
                                * Use class "pgi-image-is-light" if needed, it makes the caption visible better if you use light image (only effect if "pgi-cap-inside" is enabled on "portfolio-grid"!).
                                -->
                                <div class="portfolio-grid-item">
                                    <a href="single-project-7.html" class="pgi-image-wrap" data-cursor="View<br>Project">
                                        <!-- Use class "cover-opacity-*" to set image overlay if needed. For example "cover-opacity-2". Useful if class "pgi-cap-inside" is enabled on "portfolio-grid". Note: It is individual and depends on the image you use. More info about helper classes in file "helper.css". -->
                                        <div class="pgi-image-holder">
                                            <div class="pgi-image-inner anim-zoomin">
                                                <figure class="pgi-image ttgr-height">
                                                    <img src="assets/img/portfolio/portfolio-6.jpg" alt="image">
                                                </figure> <!-- /.pgi-image -->
                                            </div> <!-- /.pgi-image-inner -->
                                        </div> <!-- /.pgi-image-holder -->
                                    </a> <!-- /.pgi-image-wrap -->

                                    <div class="pgi-caption">
                                        <div class="pgi-caption-inner">
                                            <h2 class="pgi-title">
                                                <a href="single-project-7.html">Breaking Wave</a>
                                            </h2>
                                            <div class="pgi-categories-wrap">
                                                <div class="pgi-category">Nature</div>
                                                <!-- <div class="pgi-category">Varia</div> -->
                                            </div> <!-- /.pli-categories-wrap -->
                                        </div> <!-- /.pgi-caption-inner -->
                                    </div> <!-- /.pgi-caption -->
                                </div>
                                <!-- End portfolio grid item -->

                            </div> <!-- /.ttgr-item-inner -->
                        </div>
                        <!-- End tt-Grid item -->

                        <!-- Begin tt-Grid item
                        ======================== -->
                        <div class="tt-grid-item isotope-item branding">
                            <div class="ttgr-item-inner">

                                <!-- Begin portfolio grid item 
                                ===============================
                                * Use class "pgi-image-is-light" if needed, it makes the caption visible better if you use light image (only effect if "pgi-cap-inside" is enabled on "portfolio-grid"!).
                                -->
                                <div class="portfolio-grid-item">
                                    <a href="single-project-8.html" class="pgi-image-wrap" data-cursor="View<br>Project">
                                        <!-- Use class "cover-opacity-*" to set image overlay if needed. For example "cover-opacity-2". Useful if class "pgi-cap-inside" is enabled on "portfolio-grid". Note: It is individual and depends on the image you use. More info about helper classes in file "helper.css". -->
                                        <div class="pgi-image-holder">
                                            <div class="pgi-image-inner anim-zoomin">
                                                <figure class="pgi-image ttgr-height">
                                                    <img src="assets/img/portfolio/portfolio-7.jpg" alt="image">
                                                </figure> <!-- /.pgi-image -->
                                            </div> <!-- /.pgi-image-inner -->
                                        </div> <!-- /.pgi-image-holder -->
                                    </a> <!-- /.pgi-image-wrap -->

                                    <div class="pgi-caption">
                                        <div class="pgi-caption-inner">
                                            <h2 class="pgi-title">
                                                <a href="single-project-8.html">Wall Lamp</a>
                                            </h2>
                                            <div class="pgi-categories-wrap">
                                                <div class="pgi-category">Branding</div>
                                                <!-- <div class="pgi-category">Varia</div> -->
                                            </div> <!-- /.pli-categories-wrap -->
                                        </div> <!-- /.pgi-caption-inner -->
                                    </div> <!-- /.pgi-caption -->
                                </div>
                                <!-- End portfolio grid item -->

                            </div> <!-- /.ttgr-item-inner -->
                        </div>
                        <!-- End tt-Grid item -->

                        <!-- Begin tt-Grid item
                        ======================== -->
                        <div class="tt-grid-item isotope-item creative">
                            <div class="ttgr-item-inner">

                                <!-- Begin portfolio grid item 
                                ===============================
                                * Use class "pgi-image-is-light" if needed, it makes the caption visible better if you use light image (only effect if "pgi-cap-inside" is enabled on "portfolio-grid"!).
                                -->
                                <div class="portfolio-grid-item">
                                    <a href="single-project-9.html" class="pgi-image-wrap" data-cursor="View<br>Project">
                                        <!-- Use class "cover-opacity-*" to set image overlay if needed. For example "cover-opacity-2". Useful if class "pgi-cap-inside" is enabled on "portfolio-grid". Note: It is individual and depends on the image you use. More info about helper classes in file "helper.css". -->
                                        <div class="pgi-image-holder">
                                            <div class="pgi-image-inner anim-zoomin">
                                                <figure class="pgi-image ttgr-height">
                                                    <img src="assets/img/portfolio/portfolio-8.jpg" alt="image">
                                                </figure> <!-- /.pgi-image -->
                                            </div> <!-- /.pgi-image-inner -->
                                        </div> <!-- /.pgi-image-holder -->
                                    </a> <!-- /.pgi-image-wrap -->

                                    <div class="pgi-caption">
                                        <div class="pgi-caption-inner">
                                            <h2 class="pgi-title">
                                                <a href="single-project-9.html">Elegant Stoves</a>
                                            </h2>
                                            <div class="pgi-categories-wrap">
                                                <div class="pgi-category">Creative</div>
                                                <!-- <div class="pgi-category">Varia</div> -->
                                            </div> <!-- /.pli-categories-wrap -->
                                        </div> <!-- /.pgi-caption-inner -->
                                    </div> <!-- /.pgi-caption -->
                                </div>
                                <!-- End portfolio grid item -->

                            </div> <!-- /.ttgr-item-inner -->
                        </div>
                        <!-- End tt-Grid item -->

                    </div>
                    <!-- End tt-Grid items wrap  -->

                </div>
                <!-- End tt-Grid -->

            </div>
            <!-- End portfolio grid -->


            <!-- Begin tt-pagination (uncomment below code if you want to use pagination)
            ========================= 
            * Use class "tt-pagin-center" to align center.
            -->
            <!-- <div class="tt-pagination tt-pagin-center anim-fadeinup">
                <div class="tt-pagin-prev">
                    <a href="" class="tt-pagin-item magnetic-item"><i class="fas fa-chevron-left"></i></a>
                </div>
                <div class="tt-pagin-numbers">
                    <a href="#0" class="tt-pagin-item magnetic-item active">1</a>
                    <a href="" class="tt-pagin-item magnetic-item">2</a>
                    <a href="" class="tt-pagin-item magnetic-item">3</a>
                    <a href="" class="tt-pagin-item magnetic-item">4</a>
                </div>
                <div class="tt-pagin-next">
                    <a href="" class="tt-pagin-item tt-pagin-next magnetic-item"><i class="fas fa-chevron-right"></i></a>
                </div>
            </div> -->
            <!-- End tt-pagination -->

        </div> <!-- /.tt-section-inner -->
    </div>
    <!-- End tt-section -->


    <!-- =======================
    ///// Begin tt-section /////
    ============================ 
    * You can use padding classes if needed. For example "padding-top-xlg-150", "padding-bottom-xlg-150", "no-padding-top", "no-padding-bottom", etc. Note that each situation may be different and each section may need different classes according to your needs. More info about helper classes can be found in the file "helper.css".
    -->
    <div class="tt-section padding-bottom-xlg-150">
        <div class="tt-section-inner tt-wrap">

            <!-- Begin page nav 
            ==================== 
            * Use class "tt-pn-stroke" to enable title stroke style.
            * Use class "tt-pn-scroll" to enable hover title scroll. Note: If "tt-pn-hover-title" text is wider than "tt-pn-link" then it scrolls by default. The longer the text, the faster it scrolls.
            -->
            <div class="tt-page-nav tt-pn-scroll">
                <a href="contact.html" class="tt-pn-link anim-fadeinup">
                    <div class="tt-pn-title">Let's talk</div>
                    <div class="tt-pn-hover-title">Let's talk</div>
                </a> <!-- /.tt-pn-link -->

                <div class="tt-pn-subtitle anim-fadeinup">Get in Touch</div>

                <!-- Use if destination page contains page header image -->
                <div class="tt-pn-image">
                    <img src="assets/img/page-header/ph-3.jpg" alt="image">
                </div>
            </div>
            <!-- End page nav -->

        </div> <!-- /.tt-section-inner -->
    </div>
    <!-- End tt-section -->


</div>
<!-- End page content -->



</div>
@endsection