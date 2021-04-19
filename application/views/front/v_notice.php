<div class="jumbotron noticekonten">
    <div class="container-fluid">
        <h1>NOTICE</h1>
        <div class="row">
            <div class="col-lg-5 col-md-5 colnotice noticenew">
            <?php if($lastntc->link != null) { ?>
                <div class="ntcbox">
                    <iframe src="https://www.youtube.com/embed/<?=$lastntc->link;?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="ntcvideo lazyload"></iframe>
                </div>
            <?php } else{ ?>
                <a href="<?=base_url()?>Notice_Detail/<?=$lastntc->id_notice?>">
                    <img src="<?=base_url()?>Asset/img/notice/<?=$lastntc->notice_img?>" class="ntcimg lazyload">
                </a>
            <?php } ?>
                <a href="<?=base_url()?>Notice_Detail/<?=$lastntc->id_notice?>">
                    <h4 style="margin-left:0rem"><?=$lastntc->title?></h4>
                    <h5 style="margin-left:0rem"><?=date("Y.m.d", strtotime($lastntc->date));?></h5>
                </a>
            </div>
            <div class="col-lg-7 col-md-7 colnotice">
                <div class="row rowntc">
                <?php foreach($notice as $n) { ?>
                    <div class="col-lg-4 col-md-6 colntc">
                    <?php if($n->link != null) { ?>
                        <a href="<?=base_url()?>Notice_Detail/<?=$n->id_notice?>">
                            <div class="notbox">
                                <img src="http://img.youtube.com/vi/<?=$n->link?>/0.jpg" class="ntcthumb lazyload">
                            </div>
                        </a>
                    <?php } else{ ?>
                        <a href="<?=base_url()?>Notice_Detail/<?=$n->id_notice?>">
                            <img src="<?=base_url()?>Asset/img/notice/<?=$n->notice_img?>" class="ntcimg lazyload">
                        </a>
                    <?php } ?>
                        <a href="<?=base_url()?>Notice_Detail/<?=$n->id_notice?>">
                            <h4><?=$n->title?></h4>
                            <h5><?=date("Y.m.d", strtotime($n->date));?></h5>
                        </a>
                    </div>
                <?php } ?>
                </div>
            </div>
        </div>
        <hr>
        <?=$this->pagination->create_links();?>
    </div>
</div>