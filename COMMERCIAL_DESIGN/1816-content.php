<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1816">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-xs-12">
                <div class="sidebar">
                    <ul id="services-list">
                        <li>
                            <a href="#content-tab1" class="active">Residential Design </a>
                        </li>
                        <li>
                            <a href="#content-tab2">Commercial Design</a>
                        </li>
                        <li>
                            <a href="#content-tab3">Office Design</a>
                        </li>
                        <li>
                            <a href="#content-tab4">Hospitally design</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="tab-content">
                <div id="content-tab1" class="tab-pane fade in active">
                    <div class="col-md-9 col-xs-12">
                        <div class="col-md-6">
                            <div class="field-item">
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>
                                <p>Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur.</p>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="img-list">
                                <img src="images/p3_a.jpg" alt="" class="img-responsive">
                                <img src="images/p3_a.jpg" alt="" class="img-responsive">
                            </div>

                        </div>

                    </div>
                </div>
                <div id="content-tab2" class="tab-pane fade ">
                    <div class="col-md-9 col-xs-12">
                        <div class="col-md-6">
                            <div class="field-item">
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>

                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="img-list">
                                <img src="images/p3_a.jpg" alt="" class="img-responsive">
                                <img src="images/p3_a.jpg" alt="" class="img-responsive">
                            </div>

                        </div>

                    </div>
                </div>
                <div id="content-tab3" class="tab-pane fade ">
                    <div class="col-md-9 col-xs-12">
                        <div class="col-md-6">
                            <div class="field-item">
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>

                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="img-list">
                                <img src="images/p3_a.jpg" alt="" class="img-responsive">
                                <img src="images/p3_a.jpg" alt="" class="img-responsive">
                            </div>

                        </div>

                    </div>
                </div>
                <div id="content-tab4" class="tab-pane fade ">
                    <div class="col-md-9 col-xs-12">
                        <div class="col-md-6">
                            <div class="field-item">
                                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.</p>

                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="img-list">
                                <img src="images/p3_a.jpg" alt="" class="img-responsive">
                                <img src="images/p3_a.jpg" alt="" class="img-responsive">
                            </div>

                        </div>

                    </div>
                </div>


            </div>

        </div>
    </div>
</div>