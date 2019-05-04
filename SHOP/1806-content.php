<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1806">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <p>
                    <img alt="LOGO" class="logo-small" src="images/Footer_F4.png" />
                    <br />
                    We are team based on Brookylin. Our expertise on Interior Design. 
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, 
                    totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi 
                    architecto beatae vitae dicta sunt explicabo.
                </p>
            </div>
            <div class="col-md-4">
                <h3 class="latestBlog">Latest Blog</h3>
                <ul>
                    <li class="item">
                        <a href="#">5 Things That Take a Room from Good to Great</a>

                    </li>
                    <li class="item">
                        <a href="content/functional-and-stylish-wall-wall-shelves.html">
                            Functional and Stylish Wall-to-Wall Shelves
                        </a>

                    </li>
                    <li class="item">
                        <a href="#">
                            9 Unique and Unusual Ways to Display Your TV
                        </a>

                    </li>
                    <li class="item">
                        <a href="#">
                            How to Make a Huge Impact With Multiples
                        </a>

                    </li>
                </ul>    
            </div>
            <div class="col-md-4">
                <h3 >Contact Us</h3>
                <div class="address">
                    <span>100 Mainstreet Center, Sydney</span>
                    <span><strong>Phone:</strong>(208) 333 9296</span>
                    <span><strong>Fax:</strong>(208) 333 9298</span>
                    <span><strong>Email:</strong><a href="mailto:contact@archi-interior.com">contact@archi-interior.com</a></span>
                    <span><strong>Web:</strong><a href="#">http://archi-interior.com</a></span>
                </div>
            </div>
        </div>
    </div>
    <div class="subfooter">
        <div class="row">
            <div class="container">
                <div class="col-md-6">
                    © Copyright 2016 - Archi by Designesia 
                </div>
                <div class="col-md-6 ">
                  
                        <div class="social-icons">
                            <a href="#"><i class="fa fa-facebook fa-lg"></i></a>
                            <a href="#"><i class="fa fa-twitter fa-lg"></i></a>
                            <a href="#"><i class="fa fa-rss fa-lg"></i></a>
                            <a href="#"><i class="fa fa-google-plus fa-lg"></i></a>
                            <a href="#"><i class="fa fa-skype fa-lg"></i></a>
                            <a href="#"><i class="fa fa-dribbble fa-lg"></i></a>
                        </div>
                    
                </div>
            </div>
        </div>
    </div>
    <a href="#" id="back-to-top"></a>
</div>