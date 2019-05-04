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
$less->compileFile('less/1800.less', 'css/1800.css');

$less->compileFile('less/1809.less', 'css/1809.css');

$less->compileFile('less/1804.less', 'css/1804.css');

$less->compileFile('less/1806.less', 'css/1806.css');
?>
<!DOCTYPE html>
<html lang='en'>
    <head>
        <title>GALLERY</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo $url_path ?>/css/bootstrap.min.css">
        <link href="<?php echo $url_path ?>/css/font-awesome.min.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="<?php echo $url_path ?>/css/bootstrap-dropdownhover.css">

        <script src="<?php echo $url_path ?>/js/jquery-2.1.4.min.js"></script>
        <script src="<?php echo $url_path ?>/js/bootstrap.min.js"></script>
        <script src="<?php echo $url_path ?>/js/fontawesome.min.js"></script>
        <script src="<?php echo $url_path ?>/js/1800.js"></script>
		<script src="<?php echo $url_path ?>/js/jquery-plugin-collection.js"></script>
        <script src="<?php echo $url_path ?>/js/1804.js"></script>

        <link rel="stylesheet" href="<?php echo $url_path ?>/css/1800.css">
        <link rel="stylesheet" href="<?php echo $url_path ?>/css/1809.css">
        <link rel="stylesheet" href="<?php echo $url_path ?>/css/1804.css">
        <link rel="stylesheet" href="<?php echo $url_path ?>/css/1806.css">
    </head>

    <body>   
        <header>
            <?php $dir_block . include'1800-content.php'; ?>
        </header>
        <?php $dir_block . include'1809-content.php'; ?>

        <?php $dir_block . include'1804-content.php'; ?>
        
        <footer>
               <?php $dir_block . include'1806-content.php'; ?>
        </footer>
    </body>
</html>