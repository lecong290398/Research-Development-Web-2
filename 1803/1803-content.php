<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1803">
    <div class="container">
        <h3>Our Process</h3>
        <div class="separator">
            
            <hr>
        </div>
    
    <div class="tab">
        <div  class="tablinks circle "  style="    border: 2px solid #fff; background: none; color: #fff"  onclick="openCity(event, 'Meet')">Meet & Agree</div>
        <div   class="tablinks circle "  onclick="openCity(event, 'Idea')">Idea & Concept</div>
        <div  class="tablinks circle "   onclick="openCity(event, 'Design')" >Design & Create</div>
        <div  class="tablinks circle "   onclick="openCity(event, 'Build')" >Build & Install</div>
    </div> 
    <div id="Meet" class="tabcontent" style="display: block;">
        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, 
            eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem 
            quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt.
            Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, 
            sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam.</p>
    </div>
    <div id="Idea" class="tabcontent" style="display: none;">
        <p>Events created with the Prism Library are typed events. This means you can take advantage of compile-time type checking to detect errors before you run the application. In the Prism Library, the EventAggregator allows subscribers or publishers to locate a specific EventBase. The event aggregator also allows for multiple publishers and multiple subscribers, as shown in the following illustration..</p>
    </div>
    <div id="Design" class="tabcontent" style="display: none;">
        <p>The EventAggregator provides multicast publish/subscribe functionality. This means there can be multiple publishers that raise the same event and there can be multiple subscribers listening to the same event. Consider using the EventAggregator to publish an event across modules and when sending a message between business logic code, such as controllers and presenters.</p>
    </div>
    <div id="Build" class="tabcontent" style="display: none;">
        <p>The Prism Library provides an event mechanism that enables communications between loosely coupled components in the application. This mechanism, based on the event aggregator service, allows publishers and subscribers to communicate through events and still do not have a direct reference to each other.</p> 
    </div>
    </div>
</div>