<div class="jumbotron noticekonten">
    <div class="container-fluid">
        <h6>
            <a href="<?=base_url()?>Notice/0" class="back">
                <button><i class="fas fa-chevron-left fa-xs"></i>BACK</button>
            </a>
        <?php if($detail->id_notice == $first->id_notice) { ?>
            <a href="<?=base_url()?>Notice_Detail/<?=$next->id_notice;?>" class="arrow">
                <button>NEXT<i class="fas fa-chevron-right fa-xs"></i></button>
            </a>
            <a class="arrow" style="opacity:0%; margin-right:7px">
                <button><i class="fas fa-chevron-left fa-xs"></i>PREV</button>
            </a>
        <?php } elseif($detail->id_notice == $last->id_notice) { ?>
            <a href="<?=base_url()?>Notice_Detail/<?=$prev->id_notice;?>" class="arrow">
                <button><i class="fas fa-chevron-left fa-xs"></i>PREV</button>
            </a>
            <a class="arrow" style="margin-right:7px; opacity:0%;">
                <button><i class="fas fa-chevron-left fa-xs"></i>NEXT</button>
            </a>
        <?php } else{ ?>
            <a href="<?=base_url()?>Notice_Detail/<?=$next->id_notice;?>" class="arrow">
                <button>NEXT<i class="fas fa-chevron-right fa-xs"></i></button>
            </a>
            <a href="<?=base_url()?>Notice_Detail/<?=$prev->id_notice;?>" class="arrow" style="margin-right:7px">
                <button><i class="fas fa-chevron-left fa-xs"></i>PREV</button>
            </a>
        <?php } ?>
        </h6>
        <br><br>
        <h1 class="noticetitle"><?=$detail->title?></h1>
        <h5 style="margin:-2rem 0rem 2rem;text-align:center"><?=date("Y.m.d", strtotime($detail->date));?></h5>
        <div class="row">
            <div class="col-lg-2"></div>
            <div class="col-md-12 col-lg-8">
            <?php if($detail->link != null) { ?>
                <div class="ntcbox">
                    <iframe src="https://www.youtube.com/embed/<?=$detail->link;?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="ntcvideo lazyload"></iframe>
                </div>
            <?php } else { ?>
                <img src="<?=base_url()?>Asset/img/notice/<?=$detail->notice_img?>" class="ntcimg lazyload">
            <?php } ?>
                <p style="margin-top:2rem"><?=$detail->notice_desc?></p>
            </div>
            <div class="col-lg-2"></div>
        </div>
    </div>
</div>