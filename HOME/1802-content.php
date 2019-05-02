<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1802">
    <div class="container">
        <div class="what-we-do">
            <div class="title-main">
                <h2 class="h2">What we do</h2>
                <div class="separator"><span><i class="fa fa-circle"></i></span></div>
            </div>
            <div class="content">
                <div class="row">
                    <div class="col-md-4">
                        <h4 class="title_up">
                            <span class="id-color">Residential</span> Design
                        </h4>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia</p>
                    </div>

                    <div class="col-md-4">
                        <h4 class="title_up">
                            <span class="id-color">Office</span> Design
                        </h4>
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                    </div>

                    <div class="col-md-4">
                        <h4 class="title_up">
                            <span class="id-color">Commercial</span> Design
                        </h4>
                        Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>