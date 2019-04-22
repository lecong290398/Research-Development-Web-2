<?php
    $url_host = 'http://'.$_SERVER['HTTP_HOST'];
    $pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
    $pattern_uri = '/' . $pattern_document_root . '(.*)$/';
    
    preg_match_all($pattern_uri, __DIR__, $matches);
    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace('\\', '/', $url_path);

    if (!class_exists('lessc')) {
        $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);      
        require_once($dir_block.'/libs/lessc.inc.php');
    }
    
    $less = new lessc;
    $less->compileFile('less/type-1800.less', 'assets/css/css-1800.css');
    
?>
<!DOCTYPE html>
<html lang='en'>
    <head>
        <title>1800</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" href="assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="assets/fontawesome/fontawesome-free-5.8.1-web/css/all.css">
        <link rel="stylesheet" href="assets/wow/animate.css">
        <link rel="stylesheet" href="assets/css/bootstrap-dropdownhover.css">
        <link rel="stylesheet" href="assets/css/css-1800.css">
        <script src="assets/js/jquery-2.1.4.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/fontawesome/fontawesome-free-5.8.1-web/js/all.js"></script>
        <script src="assets/wow/wow.js"></script>
        <script src="assets/js/script.js"></script>
    </head>

    <body>   
        <?php  $dir_block.include'1800-content.php'; ?>

    </body>
    
   
    

    
    
</html>