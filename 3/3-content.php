<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-3">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="panel">
                    <div class="NN">
                       <h3> Sliding Menucard</h3> 
                   </div>
                   <div class="title-1">
                    <div class="hinh" ></div>
                    <p> The sliding menucard will surely impress your customers! Set up and display them side by side, just as on a paper menucard!</p>
                    <a href="#" class="btn">Read more</a>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="panel">
                <div class="NN">
                   <h3> Best Seller</h3>
               </div>
               <div class="title-1">
                <div class="hinh1" ></div>
                <p> The Restaurant is the best selling WordPress Theme for restaurants on Themeforest since 2010!</p>
                <a href="#" class="btn">Read more</a>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="panel">
            <div class="NN">
               <h3> Make a reservation</h3>
           </div>
           <div class="title-1">
            <div class="hinh2" ></div>
            <p> Please let us know what time you're planning your visit.</p>
            <a href="#" class="btn">Read more</a>
        </div>
    </div>
</div>
</div>
</div>
</div>

