<div class="jumbotron artistdetail">   
    <div class="container-fluid">
        <h6>
            <a href="<?=base_url('Artists')?>" class="back">
                <button><i class="fas fa-chevron-left fa-xs"></i>BACK</button>
            </a>
        <?php if($detail->id_artist == $first->id_artist) { ?>
            <a href="<?=base_url()?>Artist_Detail/<?=$next->id_artist;?>" class="arrow">
                <button>NEXT<i class="fas fa-chevron-right fa-xs"></i></button>
            </a>
            <a class="arrow" style="opacity:0%; margin-right:7px">
                <button><i class="fas fa-chevron-left fa-xs"></i>PREV</button>
            </a>
        <?php } elseif($detail->id_artist == $last->id_artist) { ?>
            <a href="<?=base_url()?>Artist_Detail/<?=$prev->id_artist;?>" class="arrow">
                <button><i class="fas fa-chevron-left fa-xs"></i>PREV</button>
            </a>
            <a class="arrow" style="margin-right:7px; opacity:0%;">
                <button><i class="fas fa-chevron-left fa-xs"></i>NEXT</button>
            </a>
        <?php } else{ ?>
            <a href="<?=base_url()?>Artist_Detail/<?=$next->id_artist;?>" class="arrow">
                <button>NEXT<i class="fas fa-chevron-right fa-xs"></i></button>
            </a>
            <a href="<?=base_url()?>Artist_Detail/<?=$prev->id_artist;?>" class="arrow" style="margin-right:7px">
                <button><i class="fas fa-chevron-left fa-xs"></i>PREV</button>
            </a>
        <?php } ?>
        </h6>
        <br><br>
        <div class="row">
            <div class="col-md-6 col-lg-6 colprof">
                <div class="profbox">
                <img src="<?=base_url()?>Asset/img/artists/<?=$detail->picture?>" alt="<?=$detail->name;?>" class="profil lazyload">
                </div>
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
            <?php if($hitung > 0) { ?>
                <h4>AWARDS :</h4>
                <ul>
                <?php foreach ($tampil_trofi as $trofi) { ?>
                    <li><h5><?=$trofi->year?> <b class="nominasi"><?=$trofi->nomination?></b></h5></li>
                <?php } ?>
                </ul>
                <br>
            <?php } else{}
                if($hitfilm > 0) { ?>
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
            <?php } else {} ?>
            </div>
        </div>
        <br><br><br>
    <?php if($count > 0) { ?>
        <h3>DISCOGRAPHY</h3>
        <div class="row rowalbum" id="loadalbum"></div>
        <div id="pesan"></div>
    <?php } else {} ?>
    </div>
</div>
<script>
    //Load more album
    $(document).ready(function() {
        var url = window.location.href;
        var idx = url.indexOf("Artist_Detail");
        var id = url.substring(idx).split("/")[1];
        var limit = 4;
        var start = 0;
        var action = 'inactive';
        function load_album_data(limit, start, id) {
            $.ajax({
                url: "<?=base_url('TBLController/loadalbum')?>",
                method: "POST",
                data: {limit:limit, start:start, id:id},
                cache: false,
                success:function(data) {
                    $('#loadalbum').append(data);
                    if(data == '') {
                        action = 'active';
                        $("#pesan").html('<center><div class="loader" style="display:none !important"></div></center>');
                    } else {
                        action = 'inactive';
                        $("#pesan").html('<center><div class="loader"></div></center>');
                    }
                }
            });
        }
        if(action == 'inactive') {
            action = 'active';
            load_album_data(limit, start, id);
        }
        $(window).scroll(function() {
            if($(window).scrollTop() + $(window).height() > $("#loadalbum").height() && action == 'inactive') {
                action = 'active';
                start = start + limit;
                setTimeout(function() {
                    load_album_data(limit, start, id);
                }, 1000);
            }
        });
    });
</script>