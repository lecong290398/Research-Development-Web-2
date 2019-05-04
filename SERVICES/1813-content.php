<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1813">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="row">

                    <div class="col-md-3">
                        <h3>
                            <span class="id-color">Residential</span> Design    
                        </h3>
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium 
                        doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore 
                        veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam 
                        voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia

                        <div class="spacer-single"></div>
                        <img typeof="foaf:Image" class="img-responsive" src="images/img1.jpg" width="700" height="337" alt="p4_a" title="p4_a">
                        <div class="spacer-single"></div>

                        <a href="../COMMERCIAL_DESIGN/commercical_desgn.php" class="btn-line">Read More <i class="fa fa-chevron-right"></i></a>    
                    </div>

                    <div class="col-md-3">

                        <h3>
                            <span class="id-color">Commercial</span> Design   
                        </h3>

                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque 
                        laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi
                        architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas
                        sit aspernatur aut odit aut fugit, sed quia<div class="spacer-single"></div>
                        <img typeof="foaf:Image" class="img-responsive" src="images/img2.jpg" width="700" height="337" alt="p3_a." title="p3_a.">

                        <div class="spacer-single"></div>
                        <a href="../COMMERCIAL_DESIGN/commercical_desgn.php" class="btn-line">Read More <i class="fa fa-chevron-right"></i></a>    
                    </div>

                    <div class="col-md-3">

                        <h3>
                            <span class="id-color">Office</span> Design    
                        </h3>

                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque
                        laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi 
                        architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas 
                        sit aspernatur aut odit aut fugit, sed quia<div class="spacer-single"></div>

                        <img typeof="foaf:Image" class="img-responsive" src="images/img3.jpg" width="700" height="337" alt="p2_a" title="p2_a">
                        <div class="spacer-single"></div>

                        <a href="../COMMERCIAL_DESIGN/commercical_desgn.php" class="btn-line">Read More <i class="fa fa-chevron-right"></i></a>    

                    </div>

                    <div class="col-md-3">
                        <h3>

                            <span class="id-color">
                                Hospitally
                            </span> design   
                        </h3>
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium 
                        doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis 
                        et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia 
                        voluptas sit aspernatur aut odit aut fugit, sed quia<div class="spacer-single"></div>

                        <img typeof="foaf:Image" class="img-responsive" src="images/img4.jpg" width="700" height="337" alt="pf (9)" title="pf (9)"><div class="spacer-single"></div>

                        <a href="../COMMERCIAL_DESIGN/commercical_desgn.php" class="btn-line">Read More <i class="fa fa-chevron-right"></i></a>    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>