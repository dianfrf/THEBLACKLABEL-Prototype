<div class="jumbotron albumdetail">
    <div class="container">
        <!-- Back To Artist Profile -->
        <h6>
            <a href="<?=base_url()?>Artist_Detail/<?=$detail->id_artist;?>" class="back"><i class="fas fa-chevron-left fa-xs "></i>Back to Profile</a>
        <?php if($detail->album_order == 1 && $detail->album_order == $last->album_order) {} elseif($detail->album_order == 1) { ?>
            <a href="<?=base_url()?>Album_Detail/<?=$detail->id_artist;?>/<?=$detail->album_order + 1;?>" class="arrow">Next<i class="fas fa-chevron-right fa-xs "></i></a>
            <a class="arrow" style="opacity: 20%; margin-right: 14px"><i class="fas fa-chevron-left fa-xs "></i>Prev</a>
        <?php } elseif($detail->album_order == $last->album_order) { ?>
            <a class="arrow" style="opacity: 20%;">Next<i class="fas fa-chevron-right fa-xs "></i></a>
            <a href="<?=base_url()?>Album_Detail/<?=$detail->id_artist;?>/<?=$detail->album_order - 1;?>" class="arrow" style="margin-right: 14px"><i class="fas fa-chevron-left fa-xs "></i>Prev</a>
        <?php } else { ?>
            <a href="<?=base_url()?>Album_Detail/<?=$detail->id_artist;?>/<?=$detail->album_order + 1;?>" class="arrow">Next<i class="fas fa-chevron-right fa-xs "></i></a>
            <a href="<?=base_url()?>Album_Detail/<?=$detail->id_artist;?>/<?=$detail->album_order - 1;?>" class="arrow" style="margin-right: 14px"><i class="fas fa-chevron-left fa-xs "></i>Prev</a>
        <?php } ?>
        </h6>
        <br><br>
        <!-- Album Name -->
        <h1><?=$detail->album_name;?></h1>
        <!-- Album Release Date -->
        <h4 class="date">Release Date : <?=date("Y.m.d", strtotime($detail->release_date));?></h4>
        <div class="row">
            <div class="col-md-6 col-lg-6">
                <!-- Album Cover -->
                <center><img src="<?=base_url()?>Asset/img/album/<?=$detail->cover;?>" alt="<?=$detail->album_name?>" class="cover lazyload"></center>
            </div>
            <div class="col-md-6 col-lg-6">
                <!-- Album Description -->
                <h4 class="tracklist"><?=$detail->album_description?> Tracklist : </h4>
                <!-- Show All Tracklist -->
                <ol>
                <?php foreach ($tampil_lagu as $lagu) { ?>
                    <li><h5><?=$lagu->title;?> <b class="duration"><?=$lagu->duration;?></b></h5></li>
                <?php } ?>
                </ol>
                <br>
                <!-- Album Media -->
                <h4>Listen on : </h4>
                <a href="<?=$detail->itunes;?>" target="_blank"><img src="<?=base_url()?>Asset/img/itunes.png" alt="Itunes" class="socmed lazyload" title="Apple Music"></a>
                <a href="<?=$detail->spotify;?>" target="_blank"><img src="<?=base_url()?>Asset/img/spotify.png" alt="Spotify" class="socmed lazyload" title="Spotify"></a>
                <a href="<?=$detail->melon;?>" target="_blank"><img src="<?=base_url()?>Asset/img/melon.png" alt="MelOn" class="socmed lazyload" title="MelOn"></a>
                <a href="<?=$detail->genie;?>" target="_blank"><img src="<?=base_url()?>Asset/img/genie.png" alt="Genie" class="socmed lazyload" title="Genie"></a>
                <a href="<?=$detail->bugs;?>" target="_blank"><img src="<?=base_url()?>Asset/img/bugs.png" alt="Bugs" class="socmed lazyload" title="Bugs"></a>
                <a href="<?=$detail->flo;?>" target="_blank"><img src="<?=base_url()?>Asset/img/flo.png" alt="Flo" class="socmed lazyload" title="Flo"></a>
                <a href="<?=$detail->vibe;?>" target="_blank"><img src="<?=base_url()?>Asset/img/vibe.png" alt="Vibe" class="socmed lazyload" title="Vibe"></a>
            </div>
        </div>
        <br><br><br>
    <?php if($count > 0 && $count > 1) { ?>
        <h3>MUSIC VIDEO</h3>
        <!-- Show All Videos -->
        <div id="demo" class="carousel slide" data-ride="carousel" data-interval="false">
            <div class="carousel-inner">
            <?php $i = 0;foreach($tampil_video as $row) {$actives = '';if($i == 0) {$actives = 'active';}?>
                <div class="carousel-item <?=$actives;?>">
                    <div class="conthumb">
                        <center><img src="<?=base_url()?>Asset/img/thumbnail/<?=$row->thumbnail;?>" alt="<?=$row->video_name;?>" class="thumbnail lazyload"></center>
                        <button class="playbtn" data-toggle="modal" data-target="#Modal" data-youtube-id="<?=$row->link;?>"><i class="fas fa-play"></i></button>
                    </div>
                    <p style="text-align: center"><?php $cetak = substr($row->video_name,0,40);If($row->video_name == $cetak) {echo $cetak;}else {echo "$cetak...";}?></p>
                </div>
            <?php $i++; } ?>
            </div>
            <div class="carousel-control-prev">
                <a href="#demo" data-slide="prev"><i class="fas fa-chevron-left"></i></a>
            </div>
            <div class="carousel-control-next" >
                <a href="#demo" data-slide="next"><i class="fas fa-chevron-right"></i></a>
            </div>
        </div>
    <?php } else if($count > 0 && $count == 1) { ?>
        <h3>MUSIC VIDEO</h3>
        <!-- Show All Videos -->
    <?php foreach ($tampil_video as $video) { ?>
        <!-- Video Thumbnail -->
        <div class="conthumb">
            <center><img src="<?=base_url()?>Asset/img/thumbnail/<?=$video->thumbnail;?>" alt="<?=$video->video_name?>" class="thumbnail lazyload"></center>
            <button class="playbtn" data-toggle="modal" data-target="#Modal" data-youtube-id="<?=$video->link;?>"><i class="fas fa-play"></i></button>
        </div>
        <p style="text-align: center"><?php $cetak = substr($video->video_name,0,40);If($video->video_name == $cetak) {echo "$cetak M/V";}else {echo "$cetak...";}?></p>
    <?php } } else {} ?>
        <div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <button class="close" data-dismiss="modal">&times;</button>
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <!-- Play Video -->
                    <center><iframe class="video_popup" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe></center>
                </div>
            </div>
        </div>
    </div>
</div>