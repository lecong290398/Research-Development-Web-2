<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1826">
    <div class="row">
        <div class="col-md-12">
            <div class="content">
                <iframe src="https://www.google.com/maps/embed?pb=!1m10!1m8!1m3!1d15673.172127784113!2d106.80013965!3d10.86530245!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2s!4v1555728232043!5m2!1sen!2s"   allowfullscreen>
                </iframe>
                <form class="contact-form" action="#" method="post"  accept-charset="UTF-8">
                    <section id="section-content">

                        <div class="container">

                            <div class="row">

                                <div class="col-md-8">

                                    <h3>Send Us Message</h3>

                                    <div class="row">

                                        <div class="col-md-4">
                                            <div class="form-item">
                                                <label >
                                                    Your name 
                                                    <span class="form-required" title="This field is required.">*</span>
                                                </label>

                                                <input class="form-control" type="text"  name="name" value="" size="60" maxlength="255">

                                            </div>
                                            <div class="form-item ">

                                                <label >
                                                    Your e-mail address
                                                    <span class="form-required" title="This field is required.">*</span>
                                                </label>

                                                <input class="form-control" type="text"  name="mail" value="" size="60" maxlength="255">

                                            </div>
                                        </div>

                                        <div class="col-md-8">
                                            <div class="form-item">
                                                <label >
                                                    Subject 
                                                    <span class="form-required" title="This field is required.">*</span>
                                                </label>
                                                <input class="form-control" type="text"  name="subject" value="" size="60" maxlength="255">
                                            </div>

                                            <div class="form-item ">
                                                <label >Message 
                                                    <span class="form-required" title="This field is required.">*</span>
                                                </label>
                                                <div class="form-textarea-wrapper">
                                                    <textarea  name="message" cols="60" rows="5" class="form-control">
                                                    </textarea>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <button class="btn">Send message</button>
                                        </div>

                                    </div>
                                    <input type="hidden" name="form_build_id" value="form-tpxH6niY45OiCUa0yBRqTLvJ1rgY6vNQl1CucJQqLBU">

                                </div>
                                <div id="sidebar" class="col-md-4">
                                    <h3>Contact Info</h3>
                                    <address>
                                        <span>100 Mainstreet Center, Sydney</span>
                                        <span><strong>Phone:</strong>(208) 333 9296</span>
                                        <span><strong>Fax:</strong>(208) 333 9298</span>
                                        <span><strong>Email:</strong><a href="mailto:contact@example.com">contact@example.com</a></span>
                                        <span><strong>Web:</strong><a href="#test">http://example.com</a></span>
                                        <span><strong>Open</strong>Sunday - Friday 08:00 - 18:00</span>
                                    </address>
                                </div>
                            </div>
                        </div>
                    </section>
                </form>

            </div>
        </div>
    </div>
</div>