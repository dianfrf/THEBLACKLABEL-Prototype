<div class="jumbotron header">
    <img src="<?=base_url()?>Asset/img/header.png" class="post lazyload">
    <img src="<?=base_url()?>Asset/img/header_mb.png" class="postmb lazyload">
</div>
<div class="jumbotron home">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-6 bar">
                <h4>NEW RELEASE</h4>
                <a href="<?=base_url()?>Album_Detail/<?=$cover->id_artist?>/<?=$cover->album_order?>">
                    <img src="<?=base_url()?>Asset/img/album/<?=$cover->cover;?>" class="albumart lazyload">
                </a>
                <h4>MUSIC VIDEO</h4>
                <a href="<?=base_url()?>Multimedia/0">
                    <div class="notbox">
                        <img src="http://img.youtube.com/vi/<?=$satum->link?>/0.jpg" class="thumb lazyload">
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-md-6 bar">
                <h4>NOTICE</h4>
                <div class="ntccard">
                <?php foreach($notice as $n) { ?>
                    <div class="row">
                        <div class="col-3 col-md-3 col-lg-3">
                        <?php if($n->link != null) { ?>
                            <div class="notbox">
                                <img src="http://img.youtube.com/vi/<?=$n->link?>/0.jpg" class="ntcthumb lazyload">
                            </div>
                        <?php } else{ ?>
                            <img src="<?=base_url()?>Asset/img/notice/<?=$n->notice_img?>" class="ntcimg lazyload">
                        <?php } ?>
                        </div>
                        <div class="col-9 col-md-9 col-lg-9">
                            <a href="<?=base_url()?>Notice_Detail/<?=$n->id_notice?>"><h5><?=$n->title?></h5></a>    
                            <p><?=date("Y.m.d", strtotime($n->date));?></p>
                        </div>
                    </div>
                    <hr>
                <?php } ?>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 bar">
                <h4>MERCH</h4>
                <a href="https://www.ygselect.com/" target="_blank">
                    <img src="<?=base_url()?>Asset/img/shop.jpg" class="mv lazyload">
                </a>
                <h4>AUDITION</h4>
                <a href="https://www.instagram.com/theblacklabel_audition" target="_blank">
                    <img src="<?=base_url()?>Asset/img/audition.jpg" class="albumart lazyload">
                </a>
            </div>
        </div>
    </div>
</div>