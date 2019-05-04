<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1838">
    
                <div class="content-product">
                    
                   <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="item">
                                <div class="images-item">
                                    <img src="images/item-5.jpg" alt="" class="img-responsive">
                                </div>
                                <div class="fivestar-item">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                               <h4><a href="#">Artistic Wood Hanger</a></h4>
                                <div class="price-item">
                                    $180.00
                                </div>
                                <div class="btn-item">
                                    <button class="btn-add-cart">Add to cart</button>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="item">
                                <div class="images-item">
                                    <img src="images/2.jpg" alt="" class="img-responsive">
                                </div>
                                <div class="fivestar-item">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                               <h4><a href="#">Classic Circular Table</a></h4>
                                <div class="price-item">
                                    $150.00
                                </div>
                                <div class="btn-item">
                                    <button class="btn-add-cart">Add to cart</button>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="item">
                                <div class="images-item">
                                    <img src="images/item-7.jpg" alt="" class="img-responsive">
                                </div>
                                <div class="fivestar-item">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                               <h4><a href="#">Classic Colorful Chair</a></h4>
                                <div class="price-item">
                                    $190.00
                                </div>
                                <div class="btn-item">
                                    <button class="btn-add-cart">Add to cart</button>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="item">
                                <div class="images-item">
                                    <img src="images/item-8.jpg" alt="" class="img-responsive">
                                </div>
                                <div class="fivestar-item">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                               <h4><a href="#">Minimalist Corner Desk</a></h4>
                                <div class="price-item">
                                    $250.00
                                </div>
                                <div class="btn-item">
                                    <button class="btn-add-cart">Add to cart</button>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="item">
                                <div class="images-item">
                                    <img src="images/item-9.jpg" alt="" class="img-responsive">
                                </div>
                                <div class="fivestar-item">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                               <h4><a href="#">Classic Circular Table</a></h4>
                                <div class="price-item">
                                    $150.00
                                </div>
                                <div class="btn-item">
                                    <button class="btn-add-cart">Add to cart</button>
                                </div>
                                
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="item">
                                <div class="images-item">
                                    <img src="images/item-10.jpg" alt="" class="img-responsive">
                                </div>
                                <div class="fivestar-item">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                </div>
                               <h4><a href="#">Classic Circular Table</a></h4>
                                <div class="price-item">
                                    $150.00
                                </div>
                                <div class="btn-item">
                                    <button class="btn-add-cart">Add to cart</button>
                                </div>
                                
                            </div>
                        </div>
                        
                        
                        
                        
                   </div>
                   <div class="text-center">
                        <div class="item-list">
                            <ul class="pagination">
                                <li class="active first"><a href="#">1</a></li>
                                <li><a title="Go to page 2" href="#">2</a></li>
                                <li class="next"><a title="Go to next page" href="#">next ›</a></li>
                                <li class="pager-last last"><a title="Go to last page" href="#">last »</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                
            
</div>