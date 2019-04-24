<?php
    include('./standard.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Chương trình kiểm tra Block</title>
        <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
        <link href="assets/css/styles.css" rel="stylesheet" type="text/css"/>

    </head>
    <body>
        <div class='container'>

            <h1>Chương trình chuẩn hóa block</h1>

            <div class="row">

                <!--SIDEBAR-->
                <div class="col-md-4">
                    <ul>
                        <li><a href="index.php">Check code block</a></li>
                        <li><a href="structure.php">Check & build correct structure</a></li>
                    </ul>
                </div>

                <!--CONTENT-->
                <div class="col-md-8">

                    <form method="GET" action="#">
                        <label for='block_id'>Đường dẫn tới block</label>
                        <input type="text" id ='block_id' name="block_url" value='<?php echo @$_GET['block_url'] ?>'>
                        <span class='hint-text'>Ví dụ: http://localhost/blocks/201/201.php</span>
                        <br>
                        <input type="submit">
                    </form>


                    <!--
                    | @HTML
                    | Using CSS class in HTML but not define
                    |------------------------------------------------------------------------------>
                    <?php if (!empty($_GET) && !empty($_GET['block_url'])): ?>
                        <?php
                        $classes = $standard->checkHtmlCss($_GET['block_url']);
                        ?>
                    <h2>HTML</h2>
                    <span>Class CSS được dùng trong file HTML nhưng không được định nghĩa trong file CSS</span>
                    <br>
                    <caption>Có <b><?php echo count($classes) ?></b> thẻ CSS dư</caption>
                    <table>
                            <tr>
                                <td style="width:100px;">#<?php $counter = 1; ?></td>
                                <td>Class name</td>
                            </tr>
                            <?php if (!empty($classes)): ?>

                                <?php foreach ($classes as $class): ?>
                                    <tr>
                                        <td><?php echo $counter;$counter++ ?></td>
                                        <td><?php echo $class ?></td>
                                    </tr>

                                <?php endforeach; ?>
                            <?php endif; ?>
                    </table>

                    <!--
                    | @CSS
                    | Define CSS but no using
                    |------------------------------------------------------------------------------>
                    <?php
                    $classes = $standard->checkCssHtml($_GET['block_url']);
                    ?>
                    <h2>CSS</h2>
                    <span>Class CSS đã định nghĩa nhưng không được sử dụng trong file HTML</span>
                    <br>
                    <caption>Có <b><?php echo count($classes) ?></b> thẻ CSS dư</caption>
                    <table>
                            <tr>
                                <td style="width:100px;">#<?php $counter = 1; ?></td>
                                <td>Class name</td>
                            </tr>
                            <?php if (!empty($classes)): ?>

                            <?php foreach ($classes as $class): ?>
                                <tr>
                                    <td><?php echo $counter;$counter++ ?></td>
                                    <td><?php echo $class ?></td>
                                </tr>

                            <?php endforeach; ?>
                            <?php endif; ?>
                    </table>

                    <!--
                    | @W3C
                    | Get errors from W3C
                    |------------------------------------------------------------------------------>
                    <h2>W3C</h2>

                    <?php endif;?>
                    </div>
                </div>

            </div>

    </body>
</html>