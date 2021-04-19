<div class="jumbotron multimed">
    <div class="container-fluid">
        <h1>MULTIMEDIA</h1>
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-md-12 col-lg-8">
                <div class="ifbox">
                    <iframe id="expandedImg" src="https://www.youtube.com/embed/<?=$satum->link;?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="lazyload"></iframe>
                </div>
            </div>
            <div class="col-lg-2"></div>
        </div>
        <p id="imgtext"><b><?=$satum->video_name;?></b><br><?=$satum->name;?> | <?=date("Y.m.d", strtotime($satum->release_date));?></p>
        <br><br><br>
        <h3>MULTIMEDIA LIST</h3>
        <div class="row">
        <?php foreach ($tampil_multimedia as $multimedia) { ?>
            <div class="col-lg-3 col-md-6 colmultimed">
                <div class="tmcov">
                    <img src="http://img.youtube.com/vi/<?=$multimedia->link?>/0.jpg" alt="https://www.youtube.com/embed/<?=$multimedia->link;?>" class="thumb lazyload" onclick="myFunction(this)" id="<b><?=$multimedia->video_name;?></b><br><?=$multimedia->name;?> | <?=date("Y.m.d", strtotime($multimedia->release_date));?>">
                </div>
                <p class="dsc">
                    <b><?php $cetak = substr($multimedia->video_name,0,30);If($multimedia->video_name == $cetak) {echo $cetak;}else {echo "$cetak...";}?></b>
                    <br><?=$multimedia->name;?> | <?=date("Y.m.d", strtotime($multimedia->video_release_date));?>
                </p>
            </div>
        <?php } ?>
        </div>
        <hr>
        <?=$this->pagination->create_links();?>
    </div>
</div>
<script>
    //Change video
    function myFunction(imgs) {
        var expandImg = document.getElementById("expandedImg");
        var imgText = document.getElementById("imgtext");
        expandImg.src = imgs.alt;
        imgText.innerHTML = imgs.id;
        $("html, body").animate({scrollTop: 0}, 300);
    }
</script>