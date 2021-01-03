<div class="jumbotron artistdetail">   
    <div class="container">
        <h6>
            <a href="<?=base_url('Artists')?>" class="back">
                <button><i class="fas fa-chevron-left fa-xs"></i>BACK TO LIST</button>
            </a>
        <?php if($detail->id_artist == 1) { ?>
            <a href="<?=base_url()?>Artist_Detail/<?=$detail->id_artist + 1;?>" class="arrow">
                <button>NEXT<i class="fas fa-chevron-right fa-xs"></i></button>
            </a>
            <a class="arrow" style="opacity:0%; margin-right:7px">
                <button><i class="fas fa-chevron-left fa-xs"></i>PREV</button>
            </a>
        <?php } elseif($detail->id_artist == $last->id_artist) { ?>
            <a href="<?=base_url()?>Artist_Detail/<?=$detail->id_artist - 1;?>" class="arrow">
                <button><i class="fas fa-chevron-left fa-xs"></i>PREV</button>
            </a>
            <a class="arrow" style="margin-right:7px; opacity:0%;">
                <button><i class="fas fa-chevron-left fa-xs"></i>PREV</button>
            </a>
        <?php } else{ ?>
            <a href="<?=base_url()?>Artist_Detail/<?=$detail->id_artist + 1;?>" class="arrow">
                <button>NEXT<i class="fas fa-chevron-right fa-xs"></i></button>
            </a>
            <a href="<?=base_url()?>Artist_Detail/<?=$detail->id_artist - 1;?>" class="arrow" style="margin-right:7px">
                <button><i class="fas fa-chevron-left fa-xs"></i>PREV</button>
            </a>
        <?php } ?>
        </h6>
        <br><br>
        <div class="row">
            <div class="col-md-6 col-lg-6">
                <img src="<?=base_url()?>Asset/img/artists/<?=$detail->picture?>" alt="<?=$detail->name;?>" class="profil lazyload">
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="row">
                    <div class="col-md-7"><h1 class="name"><?=$detail->name;?></h1></div>
                    <div class="col-md-5">
                        <center class="iconartist">
                            <?php if($detail->soundcloud != null) { ?>
                                <a href="<?=$detail->soundcloud;?>" target="_blank"><img src="<?=base_url()?>Asset/img/soundcloud.png" alt="Soundcloud" class="socmed lazyload"></a>
                            <?php } else { ?>
                                <a href="<?=$detail->soundcloud;?>" target="_blank" style="display:none"><img src="<?=base_url()?>Asset/img/soundcloud.png" alt="Soundcloud" class="socmed lazyload"></a>
                            <?php } if($detail->facebook != null) { ?>
                                <a href="<?=$detail->facebook;?>" target="_blank"><img src="<?=base_url()?>Asset/img/fb.png" alt="Facebook" class="socmed lazyload"></a>
                            <?php } else { ?>
                                <a href="<?=$detail->facebook;?>" target="_blank" style="display:none"><img src="<?=base_url()?>Asset/img/fb.png" alt="Facebook" class="socmed lazyload"></a>
                            <?php } if($detail->twitter != null) { ?>
                                <a href="<?=$detail->twitter;?>" target="_blank"><img src="<?=base_url()?>Asset/img/twitter.png" alt="Twitter" class="socmed lazyload"></a>
                            <?php } else { ?>
                                <a href="<?=$detail->twitter;?>" target="_blank" style="display:none"><img src="<?=base_url()?>Asset/img/twitter.png" alt="Twitter" class="socmed lazyload"></a>
                            <?php } if($detail->instagram != null) { ?>
                                <a href="<?=$detail->instagram;?>" target="_blank"><img src="<?=base_url()?>Asset/img/ig.png" alt="Instagram" class="socmed lazyload"></a>
                            <?php } else { ?>
                                <a href="<?=$detail->instagram;?>" target="_blank" style="display:none"><img src="<?=base_url()?>Asset/img/ig.png" alt="Instagram" class="socmed lazyload"></a>
                            <?php } ?>
                        </center>
                    </div>
                </div>
                <hr>
                <p><?=$detail->description;?></p>
                <br>
            <?php if($hitfilm > 0) { ?>
                <h4>FILMOGRAPHY :</h4>
                <ul>
                <?php foreach ($tampil_film as $tf) { ?>
                    <li><h5><?=$tf->year;?> <b class="nominasi"><?=$tf->film_title;?></b></h5></li>
                <?php } ?>
                </ul>
                <br>
            <?php } else {}
                if($detail->commercial != null) { ?>
                <h4>COMMERCIALS :</h4>
                <p><?=$detail->commercial?></p>
            <?php } else{}
                if($hitung > 0) { ?>
                <h4>AWARDS :</h4>
                <ul>
                <?php foreach ($tampil_trofi as $trofi) { ?>
                    <li><h5><?=$trofi->year?> <b class="nominasi"><?=$trofi->nomination?></b></h5></li>
                <?php } ?>
                </ul>
                <br>
            <?php } else {} ?>
            </div>
        </div>
        <br><br><br>
    <?php if($count > 0) { ?>
        <h3>DISCOGRAPHY</h3>
        <div class="row rowalbum" id="loadalbum"></div>
    <?php } else {} ?>
    </div>
</div>