<?php
$url_host = 'http://' . $_SERVER['HTTP_HOST'];
$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');
$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);
$url_path = $url_host . $matches[1][0];
$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1836">  
    <div class="container">
        <div class="container-fluid">       
            <div class="col-md-9 product-info">
                <ul class="nav nav-tabs">
                    <li class="active"><a href="#service-one" data-toggle="tab">Description</a></li>
                    <li><a href="#service-two" data-toggle="tab">Comment</a></li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade in active" id="service-one">
                        <div class="product-info">
							Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies mi vitae est. Mauris placerat eleifend leo.
						</div>						
					</div>

                    <div class="tab-pane fade" id="service-two">
                        <form action="#">
                            <div class="form-group form-group-sm">
                                <label for="yourname" class="control-label">Your name</label>
                                <input type="text" class="form-control" id="yourname">
                            </div>


                            <div class="form-group">
                                <label for="subject" class="control-label">Subject</label>
                                <input type="text" class="form-control" id="subject">
                            </div>


                            <div class="form-group">
                                <label for="edit-comment-body-und-0-value">Comment <span class="form-required" title="This field is required.">*</span></label>
                                <textarea class="form-control" id="lastname" cols="60" rows="5"></textarea>
                            </div>
                           
                            <div class="form-action">
                                <button type="submit" class="btn btn-default">Save</button>
                                <button type="submit" class="btn btn-default">Preview</button>
                            </div>
                        </form>
                    </div>

                </div>
                <hr>
            </div>
            <div class="col-md-3"></div>
        </div>
    </div>
    <!-- END TYPE-855 -->
</div>

