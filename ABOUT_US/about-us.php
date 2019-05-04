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

 $less->compileFile('less/1807.less', 'css/1807.css');
$less->compileFile('less/1809.less', 'css/1809.css');
$less->compileFile('less/1806.less', 'css/1806.css');
$less->compileFile('less/type-1805.less', 'css/1805.css');
$less->compileFile('less/1808.less', 'css/1808.css');
$less->compileFile('less/1812.less', 'css/1812.css');
?>
<!DOCTYPE html>
<html lang='en'>
    <head>
        <title>About us</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="css/bootstrap-dropdownhover.css">

        <script src="js/jquery-2.1.4.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        <script src="js/fontawesome.min.js"></script>
        <script src="js/1800.js"></script>
        <script src="js/1805.js"></script>
        <script src="js/swiper.min.js" ></script>
        <link href="css/swiper.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="css/1800.css">
         <link href="css/1805.css" rel="stylesheet" type="text/css"/>
        <link href="css/1806.css" rel="stylesheet" type="text/css"/>
        <link href="css/1807.css" rel="stylesheet" type="text/css"/>
        <link href="css/1808.css" rel="stylesheet" type="text/css"/>
        <link href="css/1809.css" rel="stylesheet" type="text/css"/>
        <link href="css/1812.css" rel="stylesheet" type="text/css"/>
    </head>

    <body>   
        <header>
            <?php $dir_block . include'1800-content.php'; ?>
        </header>
            <?php $dir_block . include'1809-content.php'; ?>
            <?php $dir_block . include'1808-content.php'; ?>
            <?php $dir_block . include'1807-content.php'; ?>
            <?php $dir_block . include'1805-content.php'; ?>
            <?php $dir_block . include'1812-content.php'; ?>
      
        <footer>
            <?php $dir_block . include'1806-content.php'; ?>
        </footer>

    </body>
</html>