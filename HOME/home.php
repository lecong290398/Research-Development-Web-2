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

$less->compileFile('less/type-1801.less', 'css/1801.css');

$less->compileFile('less/1802.less', 'css/1802.css');

$less->compileFile('less/1803.less', 'css/1803.css');

$less->compileFile('less/1804.less', 'css/1804.css');

$less->compileFile('less/type-1805.less', 'css/1805.css');

$less->compileFile('less/1806.less', 'css/1806.css');
?>
<!DOCTYPE html>

<html lang='zxx'>
    <head>
        <title>HOME</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="css/owl.carousel.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="css/animate.css">
        <script src="js/jquery-2.1.4.min.js"></script>
        <script src="js/owl.carousel.min.js" ></script>
        <script src="js/bootstrap.min.js" ></script>
        <script src="js/wow.js" ></script>
        <script src="js/jquery-plugin-collection.js" ></script>
        <script src="js/swiper.min.js" ></script>
        <link href="css/swiper.min.css" rel="stylesheet" type="text/css"/>

        <script src="js/1801.js"></script>
        <script src="js/1803.js"></script>
        <script src="js/1804.js"></script>
        <script src="js/1805.js"></script>


        <link href="css/1800.css" rel="stylesheet" type="text/css"/>
        <link href="css/1801.css" rel="stylesheet" type="text/css"/>
        <link href="css/1802.css" rel="stylesheet" type="text/css"/>
        <link href="css/1803.css" rel="stylesheet" type="text/css"/>
        <link href="css/1804.css" rel="stylesheet" type="text/css"/>
        <link href="css/1805.css" rel="stylesheet" type="text/css"/>
        <link href="css/1806.css" rel="stylesheet" type="text/css"/>
    </head>

    <body>  

        <header>
            <?php $dir_block . include'1800-content.php'; ?>

            <?php $dir_block . include'1801-content.php'; ?>
        </header>
        
        
        <?php $dir_block . include'1802-content.php'; ?>

        <?php $dir_block . include'1803-content.php'; ?>

        <?php $dir_block . include'1804-content.php'; ?>

        <?php $dir_block . include'1805-content.php'; ?>
        
        
        <footer>
            <?php $dir_block . include'1806-content.php'; ?>
        </footer>
    </body>
</html>