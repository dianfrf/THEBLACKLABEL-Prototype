<div class="jumbotron artistdetail">   
    <div class="container">
        <!-- Back To Artists list -->
        <h6>
            <a href="<?=base_url('Artists')?>" class="back"><i class="fas fa-chevron-left fa-xs "></i>Back to List</a>
        <?php if($detail->id_artist == 1) { ?>
            <a href="<?=base_url()?>Artist_Detail/<?=$detail->id_artist + 1;?>" class="arrow">Next<i class="fas fa-chevron-right fa-xs "></i></a>
            <a class="arrow" style="opacity: 20%; margin-right: 14px"><i class="fas fa-chevron-left fa-xs "></i>Prev</a>
        <?php } elseif($detail->id_artist == $last->id_artist) { ?>
            <a class="arrow" style="opacity: 20%;">Next<i class="fas fa-chevron-right fa-xs "></i></a>
            <a href="<?=base_url()?>Artist_Detail/<?=$detail->id_artist - 1;?>" class="arrow" style="margin-right: 14px"><i class="fas fa-chevron-left fa-xs "></i>Prev</a>
        <?php } else{ ?>
            <a href="<?=base_url()?>Artist_Detail/<?=$detail->id_artist + 1;?>" class="arrow">Next<i class="fas fa-chevron-right fa-xs "></i></a>
            <a href="<?=base_url()?>Artist_Detail/<?=$detail->id_artist - 1;?>" class="arrow" style="margin-right: 14px"><i class="fas fa-chevron-left fa-xs "></i>Prev</a>
        <?php } ?>
        </h6>
        <br><br>
        <div class="row">
            <div class="col-md-6 col-lg-6">
                <!-- Artist Photo -->
                <img src="<?=base_url()?>Asset/img/artists/<?=$detail->picture?>" alt="<?=$detail->name;?>" class="profil lazyload">
            </div>
            <div class="col-md-6 col-lg-6">
                <div class="row">
                    <div class="col-md-7">
                        <!-- Artist Name -->
                        <h1 class="name"><?=$detail->name;?></h1>
                    </div>
                    <div class="col-md-5">
                        <center>
                            <!-- Artist Media -->
                            <?php if($detail->soundcloud != null) { ?>
                                <a href="<?=$detail->soundcloud;?>" target="_blank"><img src="<?=base_url()?>Asset/img/soundcloud.png" alt="Soundcloud" class="socmed lazyload"></a>
                            <?php } else {} ?>
                            <?php if($detail->facebook != null) { ?>
                                <a href="<?=$detail->facebook;?>" target="_blank"><img src="<?=base_url()?>Asset/img/fb.png" alt="Facebook" class="socmed lazyload"></a>
                            <?php } else {} ?>
                            <?php if($detail->twitter != null) { ?>
                                <a href="<?=$detail->twitter;?>" target="_blank"><img src="<?=base_url()?>Asset/img/twitter.png" alt="Twitter" class="socmed lazyload"></a>
                            <?php } else {} ?>
                            <?php if($detail->instagram != null) { ?>
                                <a href="<?=$detail->instagram;?>" target="_blank"><img src="<?=base_url()?>Asset/img/ig.png" alt="Instagram" class="socmed lazyload"></a>
                            <?php } else {} ?>
                        </center>
                    </div>
                </div>
                <hr>
                <!-- Artist Description -->
                <p><?=$detail->description;?></p>
                <br>
            <?php if($hitfilm > 0) { ?>
                <h4>FILMOGRAPHY :</h4>
                <!-- Show All Filmography -->
                <ul>
                <?php foreach ($tampil_film as $tf) { ?>
                    <li><h5><?=$tf->tahun;?> <b class="nominasi"><?=$tf->nama_film;?></b></h5></li>
                <?php } ?>
                </ul>
                <br>
            <?php } else {}
                if($detail->commercial != null) { ?>
                <h4>COMMERCIALS :</h4>
                <!-- Show All Commercials -->
                <p><?=$detail->commercial?></p>
            <?php } else{}
                if($hitung > 0) { ?>
                <h4>AWARDS :</h4>
                <!-- Show All Awards -->
                <ul>
                <?php foreach ($tampil_trofi as $trofi) { ?>
                    <li><h5><?=$trofi->tahun?> <b class="nominasi"><?=$trofi->nominasi?></b></h5></li>
                <?php } ?>
                </ul>
                <br>
            <?php } else {} ?>
            </div>
        </div>
        <br><br><br>
    <?php if($count > 0) { ?>
        <h3>DISCOGRAPHY</h3>
        <!-- Show All Artist Albums -->
        <div class="row rowalbum" id="loadalbum"></div>
    <?php } else {} ?>
    </div>
</div>