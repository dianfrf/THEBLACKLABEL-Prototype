<div class="jumbotron multimed">
    <div class="container">
        <h1>MULTIMEDIA</h1>
        <!-- Latest Video -->
        <center><iframe id="expandedImg" src="https://www.youtube.com/embed/<?=$satum->link;?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="lazyload"></iframe></center>
        <!-- Video Title -->
        <p id="imgtext"><b><?=$satum->video_name;?></b><br><?=$satum->name;?> - <?=date("Y.m.d", strtotime($satum->release_date));?></p>
        <!-- Show All Videos -->
        <br><br><br>
        <h3>MULTIMEDIA LIST</h3>
        <div class="baris">
        <?php foreach ($tampil_multimedia as $multimedia) { ?>
            <div class="kolom gridthumb">
                <!-- Video Thumbnail -->
                <div class="tmcov">
                    <img src="<?=base_url()?>Asset/img/thumbnail/<?=$multimedia->thumbnail;?>" alt="https://www.youtube.com/embed/<?=$multimedia->link;?>" class="thumb lazyload" onclick="myFunction(this)" id="<b><?=$multimedia->video_name;?></b><br><?=$multimedia->name;?> | <?=date("Y.m.d", strtotime($multimedia->release_date));?>">
                </div>
                <p class="dsc"><b><?php $cetak = substr($multimedia->video_name,0,37);If($multimedia->video_name == $cetak) {echo $cetak;}else {echo "$cetak...";}?></b><br><?=$multimedia->name;?> - <?=date("Y.m.d", strtotime($multimedia->video_release_date));?></p>
            </div>
        <?php } ?>
        </div>
        <hr>
        <center>
        <?php for ($i=1; $i<=$pages; $i++){ ?>
            <a href="<?=base_url()?>Multimedia/<?=$i?>">
                <button id="<?=$i == $page ? "btnpagingactive" : "btnpaging"?>"><?=$i?></button>
            </a>
        <?php } ?> 
        </center>
    </div>
</div>