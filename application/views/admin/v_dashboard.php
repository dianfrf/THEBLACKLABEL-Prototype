<section class="section">
	<div class="row">
		<div class="col-md-4">
			<div class="card card-statistic-2">
				<div class="card-icon shadow-primary bg-primary">
					<i class="fas fa-user"></i>
				</div>
				<div class="card-wrap">
					<div class="card-header"><h4>Total Artists</h4></div>
					<div class="card-body"><?=$totartists?></div>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card card-statistic-2">
				<div class="card-icon shadow-primary bg-primary">
					<i class="fas fa-play"></i>
				</div>
				<div class="card-wrap">
					<div class="card-header"><h4>Total Albums</h4></div>
					<div class="card-body"><?=$totalbums?></div>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card card-statistic-2">
				<div class="card-icon shadow-primary bg-primary">
					<i class="fas fa-music"></i>
				</div>
				<div class="card-wrap">
					<div class="card-header"><h4>Total Songs</h4></div>
					<div class="card-body"><?=$totsongs?></div>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card card-statistic-2">
				<div class="card-icon shadow-primary bg-primary">
					<i class="fas fa-video"></i>
				</div>
				<div class="card-wrap">
					<div class="card-header"><h4>Total Videos</h4></div>
					<div class="card-body"><?=$totvideos?></div>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card card-statistic-2">
				<div class="card-icon shadow-primary bg-primary">
					<i class="fas fa-film"></i>
				</div>
				<div class="card-wrap">
					<div class="card-header"><h4>Total Filmography</h4></div>
					<div class="card-body"><?=$totfilms?></div>
				</div>
			</div>
		</div>
		<div class="col-md-4">
			<div class="card card-statistic-2">
				<div class="card-icon shadow-primary bg-primary">
					<i class="fas fa-award"></i>
				</div>
				<div class="card-wrap">
					<div class="card-header"><h4>Total Awards</h4></div>
					<div class="card-body"><?=$totawards?></div>
				</div>
			</div>
		</div>
	</div>
	<div class="card">
		<div class="card-header">
			<h4 class="d-inline">Albums Data</h4>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-striped">
					<thead>
						<tr>
							<th scope="col">No</th>
							<th scope="col">Album Cover</th>
							<th scope="col">Album Name</th>
							<th scope="col">Artist Name</th>
							<th scope="col">Release Date</th>
						</tr>
					</thead>
					<tbody>
					<?php if ($totalbums > 0) { $no=0;
						foreach ($albums as $a) { $no++;
					?>
						<tr>
							<td><?=$no;?></td>
							<td><img src="<?=base_url()?>Asset/img/album/<?=$a->cover?>" style="width:50px;border-radius:20%"></td>
							<td><a href="<?=base_url()?>AlbumDetail/<?=$a->id_album?>"><?=$a->album_name?></a></td>
							<td><a href="<?=base_url()?>ArtistDetail/<?=$a->id_artist?>"><?=$a->name?></a></td>
							<td><?=$a->release_date?></td>
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
			<a href="<?=base_url('Albums_Data')?>"><button class="btn btn-success">More</button></a>
		</div>
	</div>
	<div class="card">
		<div class="card-header">
			<h4 class="d-inline">Artists Data</h4>
		</div>
		<div class="card-body">
			<div class="table-responsive">
				<table class="table table-striped">
					<thead>
						<tr>
							<th scope="col">No</th>
							<th scope="col">Picture</th>
							<th scope="col">Artist Name</th>
						</tr>
					</thead>
					<tbody>
					<?php if ($totartists > 0) { $no=0;
						foreach ($artists as $ar) { $no++;
					?>
						<tr>
							<td><?=$no;?></td>
							<td><img src="<?=base_url()?>Asset/img/artists/<?=$ar->picture?>" style="width:50px;border-radius:50%"></td>
							<td><a href="<?=base_url()?>ArtistDetail/<?=$ar->id_artist?>"><?=$ar->name?></a></td>
						</tr>
					<?php
						}
					} else {
					?>
					<tr>
						<td colspan="3" style="text-align:center">Data not found.</td>
					</tr>
					<?php } ?>
					</tbody>
				</table>
			</div>
			<a href="<?=base_url('Artists_Data')?>"><button class="btn btn-success">More</button></a>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-6 col-md-12">
			<div class="card">
				<div class="card-header">
					<h4 class="d-inline">Songs Data</h4>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-striped">
							<thead>
								<tr>
									<th scope="col">No</th>
									<th scope="col">Title</th>
									<th scope="col">Duration</th>
									<th scope="col">Album Name</th>
								</tr>
							</thead>
							<tbody>
							<?php if ($totsongs > 0) { $no=0;
								foreach ($songs as $s) { $no++;
							?>
								<tr>
									<td><?=$no;?></td>
									<td><?=$s->title?></td>
									<td><?=$s->duration?></td>
									<td><a href="<?=base_url()?>AlbumDetail/<?=$s->id_album?>"><?=$s->album_name?></a></td>
								</tr>
							<?php
								}
							} else {
							?>
							<tr>
								<td colspan="4" style="text-align:center">Data not found.</td>
							</tr>
							<?php } ?>
							</tbody>
						</table>
					</div>
					<a href="<?=base_url('Songs_Data')?>"><button class="btn btn-success">More</button></a>
				</div>
			</div>
		</div>
		<div class="col-lg-6 col-md-12">
			<div class="card">
				<div class="card-header">
					<h4 class="d-inline">Videos Data</h4>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-striped">
							<thead>
								<tr>
									<th scope="col">No</th>
									<th scope="col">Thumbnail</th>
									<th scope="col">Video Title</th>
									<th scope="col">Release Date</th>
								</tr>
							</thead>
							<tbody>
							<?php if ($totvideos > 0) { $no=0;
								foreach ($videos as $v) { $no++;
							?>
								<tr>
									<td><?=$no;?></td>
									<td><img src="<?=base_url()?>Asset/img/thumbnail/<?=$v->thumbnail?>" style="width:80px;border-radius:10%"></td>
									<td><?=$v->video_name?></td>
									<td><?=$v->video_release_date?></td>
								</tr>
							<?php
								}
							} else {
							?>
							<tr>
								<td colspan="4" style="text-align:center">Data not found.</td>
							</tr>
							<?php } ?>
							</tbody>
						</table>
					</div>
					<a href="<?=base_url('Videos_Data')?>"><button class="btn btn-success">More</button></a>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-lg-6 col-md-12">
			<div class="card">
				<div class="card-header">
					<h4 class="d-inline">Filmography Data</h4>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-striped">
							<thead>
								<tr>
									<th scope="col">No</th>
									<th scope="col">Year</th>
									<th scope="col">Film Title</th>
									<th scope="col">Artist Name</th>
								</tr>
							</thead>
							<tbody>
							<?php if ($totfilms > 0) { $no=0;
								foreach ($films as $f) { $no++;
							?>
								<tr>
									<td><?=$no;?></td>
									<td><?=$f->year?></td>
									<td><?=$f->film_title?></td>
									<td><a href="<?=base_url()?>ArtistDetail/<?=$f->id_artist?>"><?=$f->name?></a></td>
								</tr>
							<?php
								}
							} else {
							?>
							<tr>
								<td colspan="4" style="text-align:center">Data not found.</td>
							</tr>
							<?php } ?>
							</tbody>
						</table>
					</div>
					<a href="<?=base_url('Films_Data')?>"><button class="btn btn-success">More</button></a>
				</div>
			</div>
		</div>
		<div class="col-lg-6 col-md-12">
			<div class="card">
				<div class="card-header">
					<h4 class="d-inline">Awards Data</h4>
				</div>
				<div class="card-body">
					<div class="table-responsive">
						<table class="table table-striped">
							<thead>
								<tr>
									<th scope="col">No</th>
									<th scope="col">Year</th>
									<th scope="col">Award and Nomination</th>
									<th scope="col">Artist Name</th>
								</tr>
							</thead>
							<tbody>
							<?php if ($totawards > 0) { $no=0;
								foreach ($awards as $a) { $no++;
							?>
								<tr>
									<td><?=$no;?></td>
									<td><?=$a->year?></td>
									<td><?=$a->nomination?></td>
									<td><a href="<?=base_url()?>ArtistDetail/<?=$a->id_artist?>"><?=$a->name?></a></td>
								</tr>
							<?php
								}
							} else {
							?>
							<tr>
								<td colspan="4" style="text-align:center">Data not found.</td>
							</tr>
							<?php } ?>
							</tbody>
						</table>
					</div>
					<a href="<?=base_url('Awards_Data')?>"><button class="btn btn-success">More</button></a>
				</div>
			</div>
		</div>
	</div>
</section>