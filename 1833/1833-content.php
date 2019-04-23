<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1833">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-xs-12">

            </div>
            <div class="col-md-3 col-xs-12">
                <div class="region-sidebar-second">
                    
                    
                    <div id="block-views-tags-products-tags">
                        <h4>PRODUCT CATEGORY</h4>
                        <div class="small-border"></div>


                        <div class="view-content">
                            <div class="widget_tags">
                                <ul>
                                    <li>
                                        <a href="#">BED</a>
                                    </li>
                                    <li>
                                        <a href="#">CABINET</a>
                                    </li>
                                    <li>
                                        <a href="#">CHAIR</a>
                                    </li>

                                </ul>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>