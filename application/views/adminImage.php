<!-- Page Content -->
<div class="container main-content">
    <!-- Body -->
    <div>
        <h3 class="title">Hình ảnh</h3>
    </div>
    <div class="col-md-12">

<?php
    foreach ($listImg as $key => $value){
        $codeHtml = '<div class="media">
            <div class="media-left adminimg">
                 <img class="media-object" src="'.base_url().'public/imgs/products/'.$value.'" alt="...">
            </div>
            <div class="media-body">
                <p>'.base_url().'public/imgs/products/'.$value.'</p>
            </div>
        </div>';
        echo $codeHtml;
}
?>
        <h1>--xxx--</h1>
    </div>
</div>