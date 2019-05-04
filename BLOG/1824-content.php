<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1824">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-xs-12">
                <div class="region-content">
                    <ul class="blog-list">
                        <li class="item">
                            <div class="post-content">
                                <div class="post-image">


                                    <img class="img-responsive" src="images/pic-blog-1.jpg" width="700" height="350" alt="">


                                </div>
                                <div class="date-box">
                                    <div class="day">05</div>
                                    <div class="month">Jun</div>
                                </div>
                                <div class="post-text">
                                    <h3 class="single-title"><a href="">5 Things That Take a Room from Good to Great</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.</p>
                                </div>
                                <a href="#" class="btn-more">Read More</a>
                            </div>
                        </li>
                        <li class="item">
                            <div class="post-content">
                                <div class="post-image">


                                    <img class="img-responsive" src="images/pic-blog-1.jpg" width="700" height="350" alt="">


                                </div>
                                <div class="date-box">
                                    <div class="day">05</div>
                                    <div class="month">Jun</div>
                                </div>
                                <div class="post-text">
                                    <h3 class="single-title"><a href="">5 Things That Take a Room from Good to Great</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.</p>
                                </div>
                                <a href="#" class="btn-more">Read More</a>
                            </div>
                        </li>
                        <li class="item">
                            <div class="post-content">
                                <div class="post-image">


                                    <img class="img-responsive" src="images/pic-blog-1.jpg" width="700" height="350" alt="">


                                </div>
                                <div class="date-box">
                                    <div class="day">05</div>
                                    <div class="month">Jun</div>
                                </div>
                                <div class="post-text">
                                    <h3 class="single-title"><a href="">5 Things That Take a Room from Good to Great</a></h3>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat.</p>
                                </div>
                                <a href="#" class="btn-more">Read More</a>
                            </div>
                        </li>
                    </ul>
                    <div class="text-center">
                        <div class="item-list">
                            <ul class="pagination">
                                <li class="active first"><a href="#">1</a></li>
                                <li><a title="Go to page 2" href="#">2</a></li>
                                <li class="next"><a title="Go to next page" href="#">next ›</a></li>
                                <li class="pager-last last"><a title="Go to last page" href="#">last »</a></li>
                            </ul>
                        </div>
                    </div>


                </div>
            </div>
            <div class="col-md-3 col-xs-12">
                <div class="region-sidebar-second">
                    <div id="block-views-blog-recent">
                        <h4>Recent Posts</h4>
                        <div class="small-border"></div>
                        <div class="view-content">
                            <ul>
                                <li>
                                   <a href="#">5 Things That Take a Room from Good to Great</a>
                                </li>
                                <li>
                                   <a href="#">5 Things That Take a Room from Good to Great</a>
                                </li>
                                <li>
                                   <a href="#">5 Things That Take a Room from Good to Great</a>
                                </li>

                            </ul>
                        </div>
                    </div>
                    <div id="block-block-6">
                        <h4>About Us</h4>
                        <div class="small-border"></div>
                        <div class="content">
                            Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni
                        </div>
                    </div>
                    <div id="block-views-tags-blog-tags">
                        <h4>Tags</h4>
                        <div class="small-border"></div>


                        <div class="view-content">
                            <div class="widget_tags">
                                <ul>
                                    <li>
                                        <a href="#">Application</a>
                                    </li>
                                    <li>
                                        <a href="#">Application</a>
                                    </li>
                                    <li>
                                        <a href="#">Application</a>
                                    </li>
                                   
                                </ul>
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
</div>