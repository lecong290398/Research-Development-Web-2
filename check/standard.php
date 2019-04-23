<?php
include ('./config.php');

/*
|-----------------------------------------------------------------------
| Manage standard structure of block
|-----------------------------------------------------------------------
| Correct format:
| ID
| ---ID.php
| ---ID-content.php
| ---ID-screenshot.png
| ---css
| -------bootstrap-min-3.7.css
| -------font-awesome-min-.css
| -------ID.css
| ---js
| -------jQuery-min-2.js
| -------bootstrap-min-2.js
| ---libs
| ---less
| ---images
| ---fonts
|
|
*/
class standard {

    //base directory
    private $root_dir;

    //list of path of block
    private $dir_blocks;


    private $ids_structure_yes;
    private $ids_structure_no;

    //write to log files
    public $log_files = [
        'structure_yes' => 'logs/log_structure_yes.txt',
        'structure_no' => 'logs/log_structure_no.txt',
        'dir_blocks' => 'logs/dir_blocks.txt'
    ];

    public $php_files = [];
    public $less_files = [];
    public $screenshot_files = [];

    //check number of blocks
    public $max_blocks = 0;

    public function __construct($root_dir) {

        $this->root_dir = $root_dir;

        fclose(fopen($this->log_files['structure_yes'], 'w'));
        fclose(fopen($this->log_files['structure_no'], 'w'));
        fclose(fopen($this->log_files['dir_blocks'], 'w'));
    }

    /**
     *
     * @param STRING $dir_block path of block
     * @param INT $id block id
     */
    private function initPHPFiles($dir_block, $id) {
        $this->php_files = [
            $dir_block."\\{$id}.php",
            $dir_block."\\{$id}-content.php",
        ];
    }

    /**
     *
     * @param STRING $dir_block path of block
     * @param INT $id block id
     */
    private function initLESSFiles($dir_block, $id) {
        $this->less_files = [
            'less' => $dir_block."\less\\{$id}.less",
        ];
    }

    /**
     *
     * @param STRING $dir_block path of block
     * @param INT $id block id
     */
    private function initScreenshotFiles($dir_block, $id) {
        $this->screenshot_files = [
            'jpg' => $dir_block."\\{$id}-screenshot.jpg",
            'png' => $dir_block."\\{$id}-screenshot.png"
        ];
    }

    /**
     * Get dir of block
     */
    public function setDirBlocks() {

        if (is_dir($this->root_dir)) {

            $this->dir_blocks = [];

            $dir_blocks = scandir($this->root_dir);

            foreach ($dir_blocks as $id) {
                $id = (int)$id;
                if ($id > 0) {
                    $this->dir_blocks[] = realpath($this->root_dir.'/'.$id);
                }

            }
            return TRUE;
        }
        return FALSE;
    }

    /**
     *
     * @param STRING $dir_block
     * @return boolean
     */
    public function setLESS($dir_block, $id){

        $flag = TRUE;

        $id = basename($dir_block);

        $this->initLESSFiles($dir_block, $id);

        $less_files = glob(realpath($dir_block.'/less').'\*.{less, Less, LESS}', GLOB_BRACE);

        if (count($less_files) == 1) {

            $less_file = strtolower(realpath(reset($less_files)));

            $path_info = pathinfo($less_file);

            if (!in_array($less_file, $this->less_files)) {

                rename($less_file, $this->less_files[strtolower($path_info['extension'])]);

            }

            $flag = TRUE;

        } else {

            $flag = FALSE;

        }

        return $flag;
    }

    /**
     *
     * @param STRING $dir_block
     * @return BOOLEAN
     */
    public function setPHP($dir_block){

        $flag = TRUE;

        $id = basename($dir_block);

        $this->initPHPFiles($dir_block, $id);

        $php_files = glob(realpath($dir_block).'\*.php');

        if (count($php_files) == 1) {

            $php_file = realpath(reset($php_files));

            if (in_array($php_file, $this->php_files)) {

                if (strcmp($php_file, $this->php_files[0]) == 0) {
                    copy($php_file, $this->php_files[1]);
                } else {
                    copy($php_file, $this->php_files[0]);
                }

            } else {
                copy($php_file, $this->php_files[0]);
                rename($php_file, $this->php_files[1]);
            }


        } elseif (count($php_files) == 2) {

            foreach ($php_files as $php_file) {

                    if (!in_array($php_file, $this->php_files)) {
                        $flag = FALSE;
                        break;
                    }
                }

        } else {
            $flag  = FALSE;
        }

        return $flag;
    }

    /**
     *
     * @param STRING $dir_block
     * @return boolean
     */
    public function setScreenshot($dir_block){

        $flag = TRUE;

        $id = basename($dir_block);

        $this->initScreenshotFiles($dir_block, $id);

        $screenshot_files = glob(realpath($dir_block).'\*.{png,jpg,PNG,JPG}', GLOB_BRACE);

        if (count($screenshot_files) == 1) {

            $screenshot_file = strtolower(realpath(reset($screenshot_files)));

            $path_info = pathinfo($screenshot_file);

            if (!in_array($screenshot_file, $this->screenshot_files)) {

                rename($screenshot_file, $this->screenshot_files[strtolower($path_info['extension'])]);

            }

            $flag = TRUE;

        } else {

            $flag = FALSE;

        }

        return $flag;
    }

    /**
     * Write log structure
     */
    public function writeLogs(){

        //structure yes
        if (!empty($this->correct_format_IDs)) {
            foreach ($this->correct_format_IDs as $id) {
                file_put_contents($this->log_files['structure_yes'], $id.PHP_EOL, FILE_APPEND);
            }
        }

        //structure no
        if (!empty($this->not_format_IDs)) {
            foreach ($this->not_format_IDs as $id) {
                file_put_contents($this->log_files['structure_no'], $id.PHP_EOL, FILE_APPEND);
            }
        }
    }

    /**
     * Build block to correct structure
     */
    public function buildStructure(){

        $this->setDirBlocks();

        if ($this->dir_blocks) {
            $index = 0;
            foreach ($this->dir_blocks as $dir_block) {

                if ($this->max_blocks && ($index > $this->max_blocks)) {
                    break;
                }

                $index++;

                file_put_contents($this->log_files['dir_blocks'], $dir_block.PHP_EOL, FILE_APPEND);

                if (is_dir($dir_block)) {

                    $id = basename($dir_block);

                    $flag = $this->setPHP($dir_block);

                    $flag = $this->setScreenshot($dir_block) ? $flag : FALSE;

                    $flag = $this->setLESS($dir_block, $id) ? $flag : FALSE;

                    if ($flag) {

                        $this->correct_format_IDs[] = $id;

                    } else {

                        $this->not_format_IDs[] = $id;

                    }
                }
            }

            $this->writeLogs();
        }

    }

    /**
     * Write list of dir blocks to files
     */
    public function buildContent(){

        $this->setDirBlocks();

        if ($this->dir_blocks) {
            $index = 0;
            foreach ($this->dir_blocks as $dir_block) {

                if ($this->max_blocks && ($index > $this->max_blocks)) {
                    break;
                }

                $index++;

                if (is_dir($dir_block)) {

                    $id = basename($dir_block);

                    $this->useLESS($dir_block, $id);
                    $this->useCSS($dir_block, $id);
                    $this->useContent($dir_block, $id);
                    //$this->removeImage($dir_block, $id);
                    //$this->removeCSS($dir_block, $id);
                    //$this->removeHTML($dir_block, $id);

                }
            }

        }

    }

    /**
     *
     * @param STRING $dir_block
     * @param INT $id
     */
    public function useLESS($dir_block, $id) {

        $file_block = $dir_block."/$id.php";
        if (file_exists($file_block)) {
            //get content of file $id.php
            $content_block = file_get_contents($file_block);

            /**
             * replay less file name
             */
            $pattern = '/less\/.*?\.less/';
            $content_block = preg_replace($pattern, "/$id.less", $content_block);
            file_put_contents($file_block, $content_block);

        }
    }
    public function useCSS($dir_block, $id) {
        $file_block = $dir_block."/$id.php";
        if (file_exists($file_block)) {
            //get content of file $id.php
            $content_block = file_get_contents($file_block);

            //pattern
            $pattern = '/css\/[a-zA-Z0-9_-]*\.css/';

            //search
            $content_block = preg_replace($pattern, "css/$id.css", $content_block);
            file_put_contents($file_block, $content_block);

        }
    }

    /**
     * Standard block content
     *      1. $ID.php
     *          - Add PHP script at the start of file
     *          - Remove PHP LESS script in head tag

     * @param STRING $dir_block
     * @param INT $id
     */
    public function useContent($dir_block, $id) {
        $file_block = $dir_block."/$id.php";
        if (file_exists($file_block)) {
            //get content of file $id.php
            $content_block = file_get_contents($file_block);

            /**
             * remove PHP script at the start of file
             */

            $pattern = '/([\s\S]*?<html.*?>)/';
            preg_match_all($pattern, $content_block, $matches);
            if (!empty($matches[1][0])) {
                $content_block = preg_replace($pattern, "
<!DOCTYPE html>
<html lang='vi' xmlns='http://www.w3.org/1999/xhtml'>", $content_block);
            }

            /**
             * remove PHP script for include LESS
             */
            $pattern = '/(<head>[\s\S]*?)(<\?php[\t\s\n]*?if[\s\S]*?\?>)/';
            preg_match_all($pattern, $content_block, $matches);

            if (!empty($matches[1][0])) {
                $content_block = preg_replace($pattern, "$1", $content_block);
            }

            /**
             * Sub-content
             */
            $pattern = '/<body>[\s\S]*?<?php.*?include[\s\S]*?<\/body>/';

            //search sub-content
            preg_match_all($pattern, $content_block, $matches);

            if (empty($matches[0])) {

                //$id-content.php
                $pattern = '/<body>([\s\S]*?)<\/body>/';
                preg_match_all($pattern, $content_block, $matches);

                $body_content = '<?php
                                        $url_host = "http://".$_SERVER["HTTP_HOST"];
                                        $pattern_document_root = addcslashes(realpath($_SERVER["DOCUMENT_ROOT"]), "$sala");
                                        $pattern_uri = "/" . $pattern_document_root . "(.*)$/";

                                        preg_match_all($pattern_uri, __DIR__, $matches);
                                        $url_path = $url_host . $matches[1][0];
                                        $url_path = str_replace("\\\", "/", $url_path);

                                ?>'.$matches[1][0];

                file_put_contents($dir_block."/$id-content.php", $body_content);

                //$id.php
                $pattern = '/<body>[\s\S]*?<\/body>/';
                $content_block = preg_replace($pattern, '<body><?php include("'.$id. '-content.php")?></body>', $content_block);

                file_put_contents($file_block, $content_block);
            }

            /**
             * Add PHP script at the start of file
             */
            $content_block = '<?php
    include "../config.php";

    $url_host = "http://".$_SERVER["HTTP_HOST"];
    $pattern_document_root = addcslashes(realpath($_SERVER["DOCUMENT_ROOT"]), $sala);
    $pattern_uri = "/" . $pattern_document_root . "(.*)$/";

    preg_match_all($pattern_uri, __DIR__, $matches);

    $url_path = $url_host . $matches[1][0];
    $url_path = str_replace("\\\", "/", $url_path);

    if (!class_exists("lessc")) {
        include ("libs/lessc.inc.php");
    }
    $less = new lessc;
    $less->compileFile("less/'. $id .'.less", "css/'.$id.'.cs");

?>'.$content_block;
            file_put_contents($file_block, $content_block);
        }

    }
    public function removeImage($dir_block, $id) {

    }
    public function removeCSS($dir_block, $id) {

    }
    public function removeHTML($dir_block, $id) {

    }

    /**
     * Check CSS class using in HTML page but No define in CSS file
     * @param STRING $url is url of block
     * @return ARRAY list of residual CSS
     * @date 7/3/2018
     */
    public function checkHtmlCss($url){
            $remove_classes = [];
            $page_content = file_get_contents($url);

            if (!empty($page_content)) {

                $patterns = [
                    //get list of class name are using in HTML page
                    'class' => '/class="(.*?)"/',
                    //get list of CSS files
                    'link_css' => '/<link.*?href=[\'\"](.*?)[\'\"].*rel="stylesheet".*?>/',
                ];

                //get list of css contents
                $css_contents = [];
                preg_match_all($patterns['link_css'], $page_content, $_csses);

                if (!empty($_csses[1])) {
                    foreach ($_csses[1] as $_css) {
                        $url_css = file_get_contents($_css);
                        if (empty($url_css)) {
                            echo 'Không tìm thấy file css';
                        }
                        $css_contents[] = file_get_contents($_css);
                    }
                }

                //get list of using csses in page
                preg_match_all($patterns['class'], $page_content, $_classes);
                if (!empty($_classes[1])) {

                    $classes = $_classes[1];

                    foreach ($classes as $class) {

                        $class = trim($class);

                        if (!empty($class)) {

                            $sub_classes = explode(' ', $class);

                            foreach ($sub_classes as $item) {

                                //each CSS class checking in all CSS files
                                if (!empty($item)) {
                                    $flag = FALSE;
                                    if (!empty($css_contents)) {
                                        foreach ($css_contents as $_css_content) {
                                            if (!$flag) {
                                                $flag = strpos($_css_content, $item);
                                            }
                                        }
                                        if (!$flag) {
                                            $remove_classes[$item] = $item;
                                        }
                                    }

                                }
                            }
                        }
                    }
                }
            }
            return $remove_classes;
    }

    /**
     * Check defined CSS name in CSS file but not using in HTML page
     * Current just check only custom CSS file
     * Not check bootstrap and font-awesome
     * @param STRING $url block page
     * @return ARRAY list of residual CSS
     */
    public function checkCssHtml($url) {
        $remove_classes = [];
        $page_content = file_get_contents($url);

        if (!empty($page_content)) {

            $patterns = [
                //get list of class name are using in HTML page
                'class' => '/class="(.*?)"/',
                //get list of CSS files
                'link_css' => '/<link.*?href=[\'\"](.*?)[\'\"].*rel="stylesheet".*?>/',
            ];

            //get list of css contents
            $css_contents = [];
            preg_match_all($patterns['link_css'], $page_content, $_csses);

            if (!empty($_csses[1])) {
                foreach ($_csses[1] as $_css) {
                    $url_css = file_get_contents($_css);
                    if (empty($url_css)) {
                        echo 'Không tìm thấy file css';
                    }
                    $css_contents[] = file_get_contents($_css);
                }
            }

            //get list of using csses in page
            $css_using = [];
            preg_match_all($patterns['class'], $page_content, $_classes);
            if (!empty($_classes[1])) {

                $_classes = $_classes[1];

                foreach ($_classes as $key => $_class) {

                    $_class = trim($_class);

                    if (!empty($_class)) {

                        $_sub_classes = explode(' ', $_class);

                        foreach ($_sub_classes as $item) {

                            //each CSS class checking in all CSS files
                            if (!empty($item)) {
                                $item = trim($item);
                                $css_using[] = $item;
                            }
                        }
                    }
                }
            }//end if css_using

            /**
             * get list of defined CSS class
             */
            $css_define = [];
            $css_files = [];
            //get list of necessary CSS file
            if (!empty($_csses[1])) {

                $not_check_css_files = ['bootstrap', 'font-awesome'];

                if (!empty($not_check_css_files)) {
                    foreach ($_csses[1] as $_css_file) {

                        $flag = TRUE;
                        foreach ($not_check_css_files as $no_using) {

                            if (strpos($_css_file, $no_using)) {
                                $flag = FALSE;
                            }
                        }
                        if ($flag) {
                            $css_files[] = $_css_file;
                        }
                    }
                }

            }
            //get list of defined in CSS files
            if (!empty($css_files)) {
                $patterns = array_merge($patterns, array(
                    'defined' => '/(\..*?){/',
                ));
                foreach ($css_files as $_css_file) {
                    $css_content = file_get_contents($_css_file);
                    preg_match_all($patterns['defined'], $css_content, $_defined_css);

                    if (!empty($_defined_css[1])) {
                        foreach ($_defined_css[1] as $_d_c) {
                            $_d_c = trim($_d_c);

                            $sub_classes = explode(' ', $_d_c);

                            if (!empty($sub_classes)) {
                                foreach ($sub_classes as $_item) {
                                    $_item = trim($_item);
                                    if (!empty($_item)) {
                                        if (!in_array($_item, $css_define)) {
                                            $css_define[] = $_item;
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }//end if defined css

            if (!empty($css_define) && !empty($css_using)) {
                $patterns = array_merge($patterns, array(
                    'class_name' => '/^\./',
                    'tag_name' => '/^[a..z]/',
                    'id_name' => '/^#/',
                    'atr' => '/:.*/'
                ));
                foreach ($css_define as $_item) {
                    //remove hover
                    $_item = preg_replace($patterns['atr'], '', $_item);
                    //class name
                    $preg = preg_match($patterns['class_name'], $_item);
                    if ($preg) {
                        $_item = substr($_item, 1);
                        if (!in_array($_item, $css_using)) {
                            $remove_classes[] = $_item;
                        }
                    }

                    //html tag name

                    //id name
                }
            }
        }//end if empty page_content

        return $remove_classes;
    }
}

$standard = new standard(ROOT_DIR);

$standard->buildContent();
