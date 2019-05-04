<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1804">

    <div class="row">
        <div class="col-md-12">
            <!-- Portfolio Filter -->
            <div class="portfolio-filter">
                <a href="#" class="active" data-filter="*">All projects</a>
                <a href="#branding" class="" data-filter=".branding">Commercial</a>
                <a href="#design" class="" data-filter=".design">Hospitaly</a>
                <a href="#photography" class="" data-filter=".photography">Office</a>
                <a href="#photography" class="" data-filter=".photography">Residential</a>
            </div>
            <!-- End Portfolio Filter -->

            <!-- Portfolio Gallery Grid -->
            <div class="gallery-isotope" data-lightbox="gallery">

                <!-- Portfolio Item Start -->
                <div class="gallery-item design">
                    <div class="thumb">
                        <img class="img-fullwidth" src="images/p1.jpg" alt="project">
                        <div class="overlay-shade"></div>
                        <div class="text-holder">
                            <div class="title text-center">Eco Green Interior</div>
                        </div>
                    </div>
                </div>
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start -->
                <div class="gallery-item branding photography">
                    <div class="thumb">
                        <img class="img-fullwidth" src="images/p2.jpg" alt="project">
                        <div class="overlay-shade"></div>
                        <div class="text-holder">
                            <div class="title text-center">Modern Elegance Suite</div>
                        </div>
                    </div>
                </div>
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start -->
                <div class="gallery-item branding">
                    <div class="thumb">
                        <img class="img-fullwidth" src="images/p3.jpg" alt="project">
                        <div class="overlay-shade"></div>
                        <div class="text-holder">
                            <div class="title text-center">Apartment Renovation</div>
                        </div>
                    </div>
                </div>

                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start -->
                <div class="gallery-item branding">
                    <div class="thumb">
                        <img class="img-fullwidth" src="images/p4.jpg" alt="project">
                        <div class="overlay-shade"></div>
                        <div class="text-holder">
                            <div class="title text-center">Vimeo Video</div>
                        </div>
                    </div>
                </div>

                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start -->
                <div class="gallery-item branding photography">
                    <div class="thumb">
                        <img class="img-fullwidth" src="images/p5.jpg" alt="project">
                        <div class="overlay-shade"></div>
                        <div class="text-holder">
                            <div class="title text-center">Restaurant In Texas</div>
                        </div>
                    </div>
                </div>

                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start -->
                <div class="gallery-item design">
                    <div class="thumb">
                        <img class="img-fullwidth" src="images/p6.jpg" alt="project">
                        <div class="overlay-shade"></div>
                        <div class="text-holder">
                            <div class="title text-center">Summer House</div>
                        </div>
                    </div>
                </div>
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start -->
                <div class="gallery-item design">
                    <div class="thumb">
                        <img class="img-fullwidth" src="images/p7.jpg" alt="project">
                        <div class="overlay-shade"></div>
                        <div class="text-holder">
                            <div class="title text-center">Luxury Living Room</div>
                        </div>
                    </div>
                </div>
                <!-- Portfolio Item End -->

                <!-- Portfolio Item Start -->
                <div class="gallery-item branding">
                    <div class="thumb">
                        <img class="img-fullwidth" src="images/p8.jpg" alt="project">
                        <div class="overlay-shade"></div>
                        <div class="text-holder">
                            <div class="title text-center">Cozy Bedroom</div>
                        </div>
                    </div>
                </div>

                <!-- Portfolio Item End -->

            </div>
        </div>
    </div>
    <!-- view All project -->
    <div class="view-all-project">
        <a href="#">view all project</a>
    </div>
    <!-- view All project the end -->
</div>