<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1829">
    <div class="pane-content">
        <div  class="section" data-speed="5" data-type="background">
            <a href="contact-2.html" class="btn">Get Quotation <i class="fa fa-chevron-right"></i> </a> 
        </div>
    </div>
</div>