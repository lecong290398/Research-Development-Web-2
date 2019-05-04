<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);

if (!class_exists('lessc')) {
    $dir_block = dirname($_SERVER['SCRIPT_FILENAME']);
    require_once($dir_block . '/libs/lessc.inc.php');
}

$less = new lessc;

$less->compileFile('less/type-1800.less', 'css/1800.css');


$less->compileFile('less/1809.less', 'css/1809.css');
$less->compileFile('less/1806.less', 'css/1806.css');
$less->compileFile('less/1832.less', 'css/1832.css');
$less->compileFile('less/1833.less', 'css/1833.css');
$less->compileFile('less/1838.less', 'css/1838.css');
$less->compileFile('less/1835.less', 'css/1835.css');
$less->compileFile('less/1836.less', 'css/1836.css');
?>
<!DOCTYPE html>
<html lang='en'>
    <head>
        <title>Single Product</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="css/bootstrap-dropdownhover.css">

        <script src="js/jquery-2.1.4.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/fontawesome.min.js"></script>
        <script src="js/1800.js"></script>
        <script src="js/jquery.min.js"></script>
         <script src="js/1835.js"></script>
        <link rel="stylesheet" href="css/1800.css">
        
        <link href="css/1806.css" rel="stylesheet" type="text/css"/>
        <link href="css/1832.css" rel="stylesheet" type="text/css"/>
        <link href="css/1838.css" rel="stylesheet" type="text/css"/>
        <link href="css/1833.css" rel="stylesheet" type="text/css"/>
        <link href="css/1835.css" rel="stylesheet" type="text/css"/>
         <link href="css/1836.css" rel="stylesheet" type="text/css"/>
        <link href="css/1809.css" rel="stylesheet" type="text/css"/>
       
        
    </head>

    <body>   
        <header>
            <?php $dir_block . include'1800-content.php'; ?>
        </header>
            <?php $dir_block . include'1809-content.php'; ?>
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-xs-12">
                        <?php $dir_block . include'1835-content.php'; ?>
                         <?php $dir_block . include'1836-content.php'; ?>
                        <?php $dir_block . include'1838-content.php'; ?>
                    </div>
                    <div class="col-md-3 col-xs-12"> 
                        <?php $dir_block . include'1832-content.php'; ?>
                        <?php $dir_block . include'1833-content.php'; ?>
                    </div>
                    
                </div>
            </div>
        </div>  
            
      
        <footer>
            <?php $dir_block . include'1806-content.php'; ?>
        </footer>

    </body>
</html>