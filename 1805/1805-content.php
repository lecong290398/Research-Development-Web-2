<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);
?>
<!-- testiomonials -->
        <div class="type-1805">
            <div class="testimonials">
                <div class="container">
                    <div class="title-main">
                        <h2 class="h2">Customer Says</h2>
                        <div class="separator"><span><i class="fa fa-circle"></i></span></div>
                    </div>

                    <div class="row swiper-container">
                        <div class="swiper-wrapper">
                            <div class=" swiper-slide">
                                <div class="item">
                                    <div class="testimonials-block_i">
                                        <div class="testimonials-block_t"> <span></span>
                                        <p>I have very much enjoyed with your services. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.
                                        </p>
                                        <div class="user_n"> John, Customer</div>
                                    </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class=" swiper-slide">
                                <div class="item">
                                    <div class="testimonials-block_i">
                                        <div class="testimonials-block_t"> <span></span>
                                        <p>I have very much enjoyed with your services. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.
                                        </p>
                                        <div class="user_n"> John, Customer</div>
                                    </div>
                                        
                                    </div>
                                </div>
                            </div>
                            <div class=" swiper-slide">
                                <div class="item">
                                    <div class="testimonials-block_i">
                                        <div class="testimonials-block_t"> <span></span>
                                        <p>I have very much enjoyed with your services. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.
                                        </p>
                                        <div class="user_n"> John, Customer</div>
                                    </div>
                                        
                                    </div>
                                </div>
                            </div>
                             <div class=" swiper-slide">
                                <div class="item">
                                    <div class="testimonials-block_i">
                                        <div class="testimonials-block_t"> <span></span>
                                        <p>I have very much enjoyed with your services. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.
                                        </p>
                                        <div class="user_n"> John, Customer</div>
                                    </div>
                                        
                                    </div>
                                </div>
                            </div>
                           
                        </div>
                        
                        <div class="swiper-pagination"></div>
                        

                    </div>
                </div>
            </div>
        </div>
<!-- /testiomonials -->
