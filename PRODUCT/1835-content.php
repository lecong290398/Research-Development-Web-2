<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1835">  
    
            <div class="card">
                <div class="wrapper row">
                    <div class="preview col-md-5">
                        <div id='carousel-custom' class='carousel slide' data-ride='carousel'>
                            <div class='carousel-outer'>
                                <!-- me art lab slider -->
                                <div class='carousel-inner '>
                                    <div class='item active'>
                                        <img src="<?php echo $url_path ?>/images/16.jpg" alt='hinh anh' class="zoom-05"/>
                                    </div>
                                    <div class='item'>
                                        <img src="<?php echo $url_path ?>/images/17.jpg" alt='hinh anh'  class="zoom-05"/>
                                    </div>
                                    <div class='item'>
                                        <img src="<?php echo $url_path ?>/images/18.jpg" alt='hinh anh' class="zoom-05" />
                                    </div>

                                    <div class='item'>
                                        <img src="<?php echo $url_path ?>/images/20.jpg" alt='hinh anh' class="zoom-05"/>
                                    </div>
                                    <div class='item'>
                                        <img src="<?php echo $url_path ?>/images/16.jpg" alt='hinh anh' class="zoom-05"/>
                                    </div>
                                    <div class='item'>
                                        <img src="<?php echo $url_path ?>/images/17.jpg" alt='hinh anh' class="zoom-05"/>
                                    </div>

                                </div>

                                <!-- sag sol -->
                                <a class='left carousel-control' href='#carousel-custom' data-slide='prev'>
                                    <span class='glyphicon glyphicon-chevron-left'></span>
                                </a>
                                <a class='right carousel-control' href='#carousel-custom' data-slide='next'>
                                    <span class='glyphicon glyphicon-chevron-right'></span>
                                </a>
                            </div>

                            <!-- thumb -->
                            <ol class='carousel-indicators mCustomScrollbar meartlab'>
                                <li data-target='#carousel-custom' data-slide-to='0' class='active'><img src="<?php echo $url_path ?>/images/16.jpg" alt='' /></li>
                                <li data-target='#carousel-custom' data-slide-to='1'><img src="<?php echo $url_path ?>/images/17.jpg" alt='' /></li>
                                <li data-target='#carousel-custom' data-slide-to='2'><img src="<?php echo $url_path ?>/images/18.jpg" alt='' /></li>
                                <li data-target='#carousel-custom' data-slide-to='3'><img src="<?php echo $url_path ?>/images/20.jpg" alt='' /></li>
                                <li data-target='#carousel-custom' data-slide-to='4'><img src="<?php echo $url_path ?>/images/16.jpg" alt='' /></li>
                                <li data-target='#carousel-custom' data-slide-to='5'><img src="<?php echo $url_path ?>/images/17.jpg" alt='' /></li>
                            </ol>
                        </div>  
                    </div>
                    <div class="details col-md-7">
                        <h1 class="product-title">White Blue Bed</h1>
                        <div class="rating">
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star checked"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                            <span class="fa fa-star"></span>
                        </div>

                        <h4 class="price">$180</h4>

                        <p class="product-description">
                            Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.
                        </p>

                        <div class="wrap-cart-qty col-lg-9" >
                            <div class="input-group">
                                <span><label>Quantity</label></span>
                                <span class="input-group-btn">
                                    <button type="button" class="quantity-left-minus btn btn-danger btn-number"  data-type="minus" data-field="">
                                        <span class="glyphicon glyphicon-minus"></span>
                                    </button>
                                </span>
                                <input type="text" id="quantity" name="quantity" class="form-control input-number" value="1"  >
                                <span class="input-group-btn">
                                    <button type="button" class="quantity-right-plus btn btn-success btn-number" data-type="plus" data-field="">
                                        <span class="glyphicon glyphicon-plus"></span>
                                    </button>
                                </span>
                                <input class="btn form-submit" type="submit" value="Add to cart">

                            </div>

                        </div>


                        <h5 class="caterogy">Caterogy:
                            <span>Misc</span>                               
                        </h5>

                    </div>
                </div>

            </div>
        

   
</div>

