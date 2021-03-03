<div class="jumbotron header">
    <img src="<?=base_url()?>Asset/img/header.png" class="post lazyload">
    <img src="<?=base_url()?>Asset/img/header_mb.png" class="postmb lazyload">
</div>
<div class="jumbotron home twitter-feed">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-6 bar">
                <h4>NEW RELEASE</h4>
                <a href="<?=base_url()?>Album_Detail/<?=$cover->id_artist?>/<?=$cover->album_order?>">
                    <img src="<?=base_url()?>Asset/img/album/<?=$cover->cover;?>" class="albumart lazyload">
                </a>
                <h4>MUSIC VIDEO</h4>
                <a href="<?=base_url()?>Multimedia/1">
                    <img src="<?=base_url()?>Asset/img/thumbnail/<?=$satum->thumbnail;?>" class="mv lazyload">
                </a>
            </div>
            <div class="col-lg-4 col-md-6 bar">
                <h4>MERCH</h4>
                <a href="https://www.ygselect.com/" target="_blank">
                    <img src="<?=base_url()?>Asset/img/shop.jpg" class="mv lazyload">
                </a>
                <h4>AUDITION</h4>
                <a href="https://www.instagram.com/theblacklabel_audition" target="_blank">
                    <img src="<?=base_url()?>Asset/img/audition.png" class="albumart lazyload">
                </a>
            </div>
            <div class="col-lg-4 col-md-12 bar">
                <h4>NOTICE</h4>
                <a class="twitter-timeline" href="https://twitter.com/THEBLACKLABEL_" data-chrome="noheader nofooter noborders noscrollbar" data-tweet-limit="2" dnt="true"></a>
            </div>
        </div>
    </div>
</div>