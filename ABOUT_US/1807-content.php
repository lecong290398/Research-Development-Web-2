<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1807">
    <div class="block-custom">


        <div class="container">
            <div class="row">
                <div class="container-4 col-md-12">
                    <div class="de-team-list">
                        <div class="team-pic"><img src="images/team_pic_1.jpg" class="img-responsive" alt="" title="" style="margin-top: 0px;"></div>
                        <div class="team-desc " style=" top: 284px;">
                            <h3>John Smith</h3>
                            <p class="lead">Project Manager</p>
                            <div class="small-border"></div>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                            <div class="social"><a href="#"><i class="fa fa-facebook fa-lg"></i></a><a href="#"><i class="fa fa-twitter fa-lg"></i></a><a href="#"><i class="fa fa-google-plus fa-lg"></i></a><a href=""><i class="fa fa-skype fa-lg"></i></a></div>
                        </div>
                    </div>
                    <div class="de-team-list">
                        <div class="team-pic"><img src="images/team_pic_2.jpg" class="img-responsive" alt="" title="" style="margin-top: 0px;"></div>
                        <div class="team-desc " style=" top: 284px;">
                            <h3>John Smith</h3>
                            <p class="lead">Project Manager</p>
                            <div class="small-border"></div>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                            <div class="social"><a href="#"><i class="fa fa-facebook fa-lg"></i></a><a href="#"><i class="fa fa-twitter fa-lg"></i></a><a href="#"><i class="fa fa-google-plus fa-lg"></i></a><a href=""><i class="fa fa-skype fa-lg"></i></a></div>
                        </div>
                    </div>
                    <div class="de-team-list">
                        <div class="team-pic"><img src="images/team_pic_3.jpg" class="img-responsive" alt="" title="" style="margin-top: 0px;"></div>
                        <div class="team-desc " style=" top: 284px;">
                            <h3>John Smith</h3>
                            <p class="lead">Project Manager</p>
                            <div class="small-border"></div>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                            <div class="social"><a href="#"><i class="fa fa-facebook fa-lg"></i></a><a href="#"><i class="fa fa-twitter fa-lg"></i></a><a href="#"><i class="fa fa-google-plus fa-lg"></i></a><a href=""><i class="fa fa-skype fa-lg"></i></a></div>
                        </div>
                    </div>
                    <div class="de-team-list">
                        <div class="team-pic"><img src="images/team_pic_4.jpg" class="img-responsive" alt="" title="" style="margin-top: 0px;"></div>
                        <div class="team-desc " style=" top: 284px;">
                            <h3>John Smith</h3>
                            <p class="lead">Project Manager</p>
                            <div class="small-border"></div>
                            <p>Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                            <div class="social"><a href="#"><i class="fa fa-facebook fa-lg"></i></a><a href="#"><i class="fa fa-twitter fa-lg"></i></a><a href="#"><i class="fa fa-google-plus fa-lg"></i></a><a href=""><i class="fa fa-skype fa-lg"></i></a></div>
                        </div>
                    </div>


                </div>
                
            </div>


        </div>
    </div>
</div>