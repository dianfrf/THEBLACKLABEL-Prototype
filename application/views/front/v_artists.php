<div class="jumbotron artiskonten">
    <div class="container-fluid">
        <h1>ARTISTS</h1>
        <div class="row rowartis">
        <?php foreach($artists as $a) { ?>
            <div class="col-md-6 col-lg-3 colartis">
                <div class="card">
                    <a href="<?=base_url()?>Artist_Detail/<?=$a->id_artist?>">
                        <img src="<?=base_url()?>Asset/img/artists/<?=$a->picture?>" class="lazyload">
                    </a> 
                    <div class="card-body"><h3><?=$a->name?></h3></div>   
                </div>
            </div>
        <?php } ?>
        </div>
    </div>
</div>