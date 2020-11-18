<div class="jumbotron header">
    <!-- Latest Album Cover -->
    <center><img src="<?=base_url()?>Asset/img/poster/<?=$cover->poster;?>" class="post lazyload"></center>
</div>
<div class="jumbotron home twitter-feed">
    <div class="container">
        <div class="row">
            <div class="col-md-4 bar">
                <h4>NEW RELEASE</h4>
                <a href="<?=base_url()?>Album_Detail/<?=$cover->id_artist?>/<?=$cover->album_order?>"><img src="<?=base_url()?>Asset/img/album/<?=$cover->cover;?>" class="albumart lazyload"></a>
                <h4>MUSIC VIDEO</h4>
                <a href="<?=base_url()?>Multimedia/1"><img src="<?=base_url()?>Asset/img/thumbnail/<?=$satum->thumbnail;?>" class="mv lazyload"></a>
            </div>
            <div class="col-md-4 bar">
                <h4>VIDEO</h4>
                <a href="https://www.youtube.com/watch?v=9f28Pi14g0w&feature=youtu.be" target="_blank"><img src="<?=base_url()?>Asset/img/thumbnail/1.jpg" class="mv lazyload"></a>
                <h4>AUDITION</h4>
                <a href="https://www.instagram.com/theblacklabel_audition" target="_blank"><img src="<?=base_url()?>Asset/img/audition.png" class="albumart lazyload"></a>
            </div>
            <div class="col-md-4 bar">
                <h4>SOCIAL MEDIA</h4>
                <a class="twitter-timeline" href="https://twitter.com/THEBLACKLABEL_" 
                data-chrome="noheader nofooter noborders noscrollbar" 
                data-tweet-limit="2" dnt="true"></a>
            </div>
        </div>
    </div>
</div>
