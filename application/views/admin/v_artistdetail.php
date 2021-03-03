<section class="section">
	<div class="section-header">
		<h1>Artist Detail</h1>
	</div>
	<div class="section-body">
		<?php if ($this->session->flashdata('msg') != null) { ?>
			<?php echo $this->session->flashdata('msg');?>
		<?php } ?>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-4">
                        <img src="<?=base_url()?>Asset/img/artists/<?=$detail->picture?>" style="width:100%;border-radius:10px">
                    </div>
                    <div class="col-lg-8">
                        <h3><?=$detail->name?></h3>
                        <p><?=$detail->description?></p>
                        <br><h6>Social Media :</h6>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <tbody>
                                    <tr>
                                        <td>Instagram</td>
                                        <td>
                                            <a href="<?=$detail->instagram?>" target="_blank"><?=$detail->instagram?></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Facebook</td>
                                        <td>
                                            <a href="<?=$detail->facebook?>" target="_blank"><?=$detail->facebook?></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Twitter</td>
                                        <td>
                                            <a href="<?=$detail->twitter?>" target="_blank"><?=$detail->twitter?></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Soundcloud</td>
                                        <td>
                                            <a href="<?=$detail->soundcloud?>" target="_blank"><?=$detail->soundcloud?></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            <?php if($hitfilm > 0) { ?>
                <br><h6>Filmography :</h6>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Year</th>
                                <th scope="col">Film Title</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $no=0; foreach ($tampil_film as $f) { $no++;?>
                            <tr>
                                <td><?=$no;?></td>
                                <td><?=$f->year?></td>
                                <td><?=$f->film_title?></td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            <?php } else {}
            if($detail->commercial != null) { ?>
                <br><h6>Commercials :</h6>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <tbody>
                            <tr>
                                <td><?=$detail->commercial;?></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            <?php } else {}?>
                <br><h6>Awards :</h6>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Year</th>
                                <th scope="col">Award and Nomination</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php if ($hitung > 0) { $no=0;
                            foreach ($tampil_trofi as $a) { $no++;
                        ?>
                            <tr>
                                <td><?=$no;?></td>
                                <td><?=$a->year?></td>
                                <td><?=$a->nomination?></td>
                            </tr>
                        <?php }} else {?>
                            <tr>
                                <td colspan="3" style="text-align:center">Data not found.</td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            <?php if($count > 0) { ?>
                <br><h6>Discography :</h6>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Album Cover</th>
                                <th scope="col">Album Name</th>
                                <th scope="col">Release Date</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $no=0; foreach ($tampil_album as $al) { $no++;?>
                            <tr>
                                <td><?=$no;?></td>
                                <td><img src="<?=base_url()?>Asset/img/album/<?=$al->cover?>" style="width:50px;border-radius:20%"></td>
                                <td>
                                    <a href="<?=base_url()?>AlbumDetail/<?=$al->id_album?>"><?=$al->album_name?></a>
                                </td>
                                <td><?=$al->release_date?></td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            <?php } else {} ?>
            </div>
        </div>
	</div>
</section>