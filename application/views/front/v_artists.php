<div class="jumbotron artiskonten">
    <div class="container">
        <h1>ARTISTS</h1>
        <!-- Show All Artists -->
        <div class="baris">
            <?php foreach($artists as $a) { ?>
            <div class="column colartis">
                <a href="<?=base_url()?>Artist_Detail/<?=$a->id_artist?>">
                    <img src="<?=base_url()?>Asset/img/artists/<?=$a->picture?>" class="lazyload">
                    <div class="artistoverlay">
                        <div class="artistname"><strong><?=$a->name?></strong></div>
                    </div>
                </a>
            </div>
            <?php } ?>
        </div>
    </div>
</div>