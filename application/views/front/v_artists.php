<div class="jumbotron artiskonten">
    <div class="container">
        <h1>ARTISTS</h1>
        <!-- Show All Artists -->
        <div class="row rowartis">
            <?php foreach($artists as $a) { ?>
            <div class="col-md-3 colartis">
                <div class="card">
                    <a href="<?=base_url()?>Artist_Detail/<?=$a->id_artist?>">
                        <img src="<?=base_url()?>Asset/img/artists/<?=$a->picture?>" class="lazyload">
                    </a> 
                    <div class="card-body">
                        <div class="artistname"><strong><?=$a->name?></strong></div>
                    </div>   
                </div>
            </div>
            <?php } ?>
        </div>
    </div>
</div>