<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1832">
    
        
           
            
                <div class="region-sidebar-second">
                    <div id="block-views-products-recent">
                        <h4>TOP RATED</h4>
                        <div class="small-border"></div>
                        <div class="view-content">
                            <ul>
                                <li>
                                    <img  class="img-responsive" src="images/2.jpg"  alt="product" title="product">
                                    <div class="text">
                                       <a href="#">Classic Circular Table</a>
                                        <div class="price">
                                            $160.00
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <img  class="img-responsive" src="images/18.jpg"  alt="product" title="product">
                                    <div class="text">
                                       <a href="#">Decorative Fabric Sofa</a>
                                        <div class="price">
                                            $180.00
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <img  class="img-responsive" src="images/17.jpg"  alt="product" title="product">
                                    <div class="text">
                                       <a href="#">Classic Wood Chair</a>
                                        <div class="price">
                                            $120.00
                                        </div>
                                    </div>
                                </li>

                            </ul>
                        </div>
                    </div>
                    
                    
                </div>
          
</div>