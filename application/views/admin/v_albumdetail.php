<section class="section">
	<div class="section-header">
		<h1>Album Detail</h1>
	</div>
	<div class="section-body">
		<?php if ($this->session->flashdata('msg') != null) { ?>
			<?php echo $this->session->flashdata('msg');?>
		<?php } ?>
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-4">
                        <img src="<?=base_url()?>Asset/img/album/<?=$detail->cover?>" style="width:100%;border-radius:10px">
                        <h5 style="text-align:center"><?=$detail->album_description?></h5>
                    </div>
                    <div class="col-lg-8">
                        <h3><?=$detail->album_name?> by <?=$detail->name?></h3>
                        <h6>Release Date : <?=$detail->release_date?></h6>
                        <br><h6>Link :</h6>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <tbody>
                                    <tr>
                                        <td>Apple Music</td>
                                        <td>
                                            <a href="<?=$detail->itunes?>" target="_blank"><?=$detail->itunes?></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Spotify</td>
                                        <td>
                                            <a href="<?=$detail->spotify?>" target="_blank"><?=$detail->spotify?></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>MelOn</td>
                                        <td>
                                            <a href="<?=$detail->melon?>" target="_blank"><?=$detail->melon?></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Genie</td>
                                        <td>
                                            <a href="<?=$detail->genie?>" target="_blank"><?=$detail->genie?></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Bugs</td>
                                        <td>
                                            <a href="<?=$detail->bugs?>" target="_blank"><?=$detail->bugs?></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Flo</td>
                                        <td>
                                            <a href="<?=$detail->flo?>" target="_blank"><?=$detail->flo?></a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Vibe</td>
                                        <td>
                                            <a href="<?=$detail->vibe?>" target="_blank"><?=$detail->vibe?></a>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <br><h6>Tracklist :</h6>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Title</th>
                                <th scope="col">Duration</th>
                                <th scope="col">Songwriter</th>
                                <th scope="col">Composer</th>
                                <th scope="col">Arranger</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php $no=0;foreach ($tampil_lagu as $s) { $no++;?>
                            <tr>
                                <td><?=$no;?></td>
                                <td><?=$s->title?></td>
                                <td><?=$s->duration?></td>
                                <td><?=$s->lyricsby?></td>
                                <td><?=$s->composedby?></td>
                                <td><?=$s->arrangedby?></td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
                <br><h6>Music Video :</h6>
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Thumbnail</th>
                                <th scope="col">Video Title</th>
                                <th scope="col">Release Date</th>
                                <th scope="col">Link</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php if ($count > 0) { $no=0;
                            foreach ($tampil_video as $v) { $no++;
                        ?>
                            <tr>
                                <td><?=$no;?></td>
                                <td><img src="http://img.youtube.com/vi/<?=$v->link?>/0.jpg" style="width:80px;height:40px;border-radius:10%"></td>
                                <td><?=$v->video_name?></td>
                                <td><?=$v->video_release_date?></td>
                                <td><a href="https://www.youtube.com/watch?v=<?=$v->link?>" target="_blank">https://www.youtube.com/watch?v=<?=$v->link?></a></td>
                            </tr>
                        <?php
                            }
                        } else {
                        ?>
                            <tr>
                                <td colspan="5" style="text-align:center">Data not found.</td>
                            </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
	</div>
</section>