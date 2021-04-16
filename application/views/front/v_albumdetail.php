<div class="jumbotron albumdetail">
    <div class="container-fluid">
        <h6>
            <a href="<?=base_url()?>Artist_Detail/<?=$detail->id_artist?>" class="back">
                <button><i class="fas fa-chevron-left fa-xs"></i>BACK</button>
            </a>
        <?php if($detail->album_order == 1 && $detail->album_order == $last->album_order) {} elseif($detail->album_order == 1) { ?>
            <a href="<?=base_url()?>Album_Detail/<?=$detail->id_artist;?>/<?=$detail->album_order + 1;?>" class="arrow">
                <button>NEXT<i class="fas fa-chevron-right fa-xs"></i></button>
            </a>
            <a class="arrow" style="opacity:0%; margin-right:7px;">
                <button><i class="fas fa-chevron-left fa-xs"></i>PREV</button>
            </a>
        <?php } elseif($detail->album_order == $last->album_order) { ?>
            <a href="<?=base_url()?>Album_Detail/<?=$detail->id_artist;?>/<?=$detail->album_order - 1;?>" class="arrow">
                <button><i class="fas fa-chevron-left fa-xs"></i>PREV</button>
            </a>
            <a class="arrow" style="margin-right:7px;opacity:0%;">
                <button><i class="fas fa-chevron-left fa-xs"></i>NEXT</button>
            </a>
        <?php } else { ?>
            <a href="<?=base_url()?>Album_Detail/<?=$detail->id_artist;?>/<?=$detail->album_order + 1;?>" class="arrow">
                <button>NEXT<i class="fas fa-chevron-right fa-xs"></i></button>
            </a>
            <a href="<?=base_url()?>Album_Detail/<?=$detail->id_artist;?>/<?=$detail->album_order - 1;?>" class="arrow" style="margin-right:7px">
                <button><i class="fas fa-chevron-left fa-xs"></i>PREV</button>
            </a>
        <?php } ?>
        </h6>
        <br><br>
        <h1><?=$detail->album_name;?></h1>
        <h4 class="date">Release Date : <?=date("Y.m.d", strtotime($detail->release_date));?></h4>
        <div class="row">
            <div class="col-md-12 col-lg-6">
                <img src="<?=base_url()?>Asset/img/album/<?=$detail->cover;?>" alt="<?=$detail->album_name?>" class="cover lazyload">
            </div>
            <div class="col-md-12 col-lg-6 iconalbum">
                <table>
                    <tr>
                        <th colspan="3"><h4 class="tracklist"><?=$detail->album_description?> TRACKLIST : </h4></th>
                    </tr>
                <?php $number = 0; foreach($tampil_lagu as $lagu) { $number++; ?>
                    <tr>
                        <td><h5 class="number"><?php echo $num = sprintf("%02d",$number);?>.</h5></td>
                        <td style="width:100%;">
                            <h5><?=$lagu->title;?> <b class="duration"><?=$lagu->duration;?></b>
                            &nbsp;&nbsp;&nbsp;<?php if($lagu->is_title == 1) { ?><u style="text-decoration:none;color:rgb(182,45,45)">TITLE</u>
                            <?php } elseif($lagu->is_title == 2) { ?><u style="text-decoration:none;color:rgb(45,47,182)">SUB-TITLE</u>
                            <?php } else{} ?></h5>
                        </td>
                        <td><span class="fas fa-caret-down" onclick="Open(<?=$number?>)"></span></td>
                    </tr>
                    <tr id="rowcredit<?=$number?>" style="display:none" class="rowcredit">
                        <td style="border:none"></td>
                        <td colspan="2" style="width:100%;border:none;">
                            <h5>Lyrics by <b class="duration"><?=$lagu->lyricsby;?></b>
                            <br>Composed by <b class="duration"><?=$lagu->composedby;?></b>
                            <br>Arranged by <b class="duration"><?=$lagu->arrangedby;?></b></h5>
                        </td>
                    </tr>
                <?php } ?>
                </table>
                <h4>LISTEN ON : </h4>
                <a href="<?=$detail->itunes;?>" target="_blank"><img src="<?=base_url()?>Asset/img/itunes.png" alt="Itunes" class="socmed lazyload" title="Apple Music"></a>
                <a href="<?=$detail->spotify;?>" target="_blank"><img src="<?=base_url()?>Asset/img/spotify.png" alt="Spotify" class="socmed lazyload" title="Spotify"></a>
                <a href="<?=$detail->melon;?>" target="_blank"><img src="<?=base_url()?>Asset/img/melon.png" alt="MelOn" class="socmed lazyload" title="MelOn"></a>
                <a href="<?=$detail->genie;?>" target="_blank"><img src="<?=base_url()?>Asset/img/genie.png" alt="Genie" class="socmed lazyload" title="Genie"></a>
                <a href="<?=$detail->flo;?>" target="_blank"><img src="<?=base_url()?>Asset/img/flo.png" alt="Flo" class="socmed lazyload" title="Flo"></a>
                <a href="<?=$detail->bugs;?>" target="_blank"><img src="<?=base_url()?>Asset/img/bugs.png" alt="Bugs" class="socmed lazyload" title="Bugs"></a>
                <a href="<?=$detail->vibe;?>" target="_blank"><img src="<?=base_url()?>Asset/img/vibe.png" alt="Vibe" class="socmed lazyload" title="Vibe"></a>
            </div>
        </div>
        <br><br><br>
    <?php if($count > 0 && $count > 1) { ?>
        <h3>MUSIC VIDEO</h3>
        <div id="demo" class="carousel slide" data-ride="carousel" data-interval="false">
            <div class="carousel-inner">
            <?php $i = 0;foreach($tampil_video as $row) {$actives = '';if($i == 0) {$actives = 'active';}?>
                <div class="carousel-item <?=$actives;?>">
                    <div class="conthumb">
                        <center><img src="http://img.youtube.com/vi/<?=$row->link?>/0.jpg" alt="<?=$row->video_name;?>" class="thumbnail lazyload"></center>
                        <button class="playbtn" data-video-id="<?=$row->link;?>"><i class="fas fa-play"></i></button>
                    </div>
                    <p style="text-align: center">'<?=$row->video_name;?>' M/V</p>
                </div>
            <?php $i++; } ?>
            </div>
            <div class="carousel-control-prev"><a href="#demo" data-slide="prev"><i class="fas fa-chevron-left"></i></a></div>
            <div class="carousel-control-next" ><a href="#demo" data-slide="next"><i class="fas fa-chevron-right"></i></a></div>
        </div>
    <?php } else if($count > 0 && $count == 1) { ?>
        <h3>MUSIC VIDEO</h3>
    <?php foreach ($tampil_video as $video) { ?>
        <div class="conthumb">
            <center><img src="http://img.youtube.com/vi/<?=$video->link?>/0.jpg" alt="<?=$video->video_name?>" class="thumbnail lazyload"></center>
            <button class="playbtn" data-video-id="<?=$video->link;?>"><i class="fas fa-play"></i></button>
        </div>
        <p style="text-align: center">'<?=$video->video_name;?>' M/V</p>
    <?php } } else {} ?>
    </div>
</div>