<section class="section">
	<div class="section-header">
		<h1><?=$PageTitle;?></h1>
	</div>
	<div class="section-body">
		<?php if ($this->session->flashdata('msg') != null) { ?>
			<?php echo $this->session->flashdata('msg');?>
		<?php } ?>
        <div class="card">
            <div class="card-header">
                <h4 class="d-inline"><?=$PageTitle;?></h4>
                <button type="button" name="button" class="btn btn-primary" data-toggle="modal" data-target="#addModal">
                    <i class="fas fa-plus"></i> Add Album
                </button>
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
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php if ($count > 0) { $no=0;
                            foreach ($albums as $a) { $no++;
                        ?>
                            <tr>
                                <td><?=$no;?></td>
                                <td><img src="<?=base_url()?>Asset/img/album/<?=$a->cover?>" style="width:50px;border-radius:20%"></td>
                                <td><?=$a->album_name?></td>
                                <td><?=$a->name?></td>
                                <td><?=$a->release_date?></td>
                                <td>
                                    <a onclick="Edit(<?=$a->id_album?>);">
                                        <button type="button" name="button" class="btn btn-success" aria-haspopup="true" aria-expanded="true" data-toggle="tooltip" data-placement="top" title="Edit Data">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                    </a>
                                    <a href="<?=base_url()?>Album_Delete/<?=$a->id_album?>" onclick="return confirm('Are you sure you want to delete this?')">
                                        <button type="button" name="button" class="btn btn-danger" data-toggle="tooltip" data-placement="top" title="Delete Data">
                                            <i class="fas fa-trash"></i>
                                        </button>
                                    </a>
                                </td>
                            </tr>
                        <?php
                            }
                        } else {
                        ?>
                        <tr>
                            <td colspan="6" style="text-align:center">Data not found.</td>
                        </tr>
                        <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
	</div>
</section>
<!-- Modal -->
<div class="modal fade bd-example-modal-lg" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Album Data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form class="form-horizontal" action="<?=base_url('Album_Add')?>" method="post" enctype="multipart/form-data">
            <div class="modal-body">
                <div class="form-group">
                    <label>Artist Name</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class=" icon-bulb"></i></div>
                        <select class="selectpicker form-control" data-style="form-control btn-default" name="id_artist">
                            <option value="" disabled selected>--Choose--</option>
                        <?php foreach ($artists as $art): ?>
                            <option value="<?=$art->id_artist?>"><?=$art->name?></option>
                        <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label>Album Name</label>
                    <input type="text" class="form-control" placeholder="Album Name" name="album_name" autocomplete="off" min="0">
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Release Date</label>
                            <input type="text" class="form-control" placeholder="Ex: 2020-12-12" name="release_date" autocomplete="off" min="0">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Album Order</label>
                            <input type="number" class="form-control" placeholder="Ex: 1" name="album_order" autocomplete="off" min="0">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Album Description</label>
                            <input type="text" class="form-control" placeholder="Ex: 1st FULL ALBUM" name="album_description" autocomplete="off" min="0">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Itunes Link</label>
                            <input type="text" class="form-control" placeholder="Itunes Link" name="itunes" autocomplete="off" min="0">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Spotify Link</label>
                            <input type="text" class="form-control" placeholder="Spotify Link" name="spotify" autocomplete="off" min="0">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>MelOn Link</label>
                            <input type="text" class="form-control" placeholder="MelOn Link" name="melon" autocomplete="off" min="0">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Genie Link</label>
                            <input type="text" class="form-control" placeholder="Genie Link" name="genie" autocomplete="off" min="0">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Bugs Link</label>
                            <input type="text" class="form-control" placeholder="Bugs Link" name="bugs" autocomplete="off" min="0">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Flo Link</label>
                            <input type="text" class="form-control" placeholder="Flo Link" name="flo" autocomplete="off" min="0">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Vibe Link</label>
                            <input type="text" class="form-control" placeholder="Vibe Link" name="vibe" autocomplete="off" min="0">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Album Cover</label>
                    <ul>
                        <li>File size must not exceed 1MB</li>
                        <li>File resolution must not exceed 500px x 500px</li>
                    </ul>
                    <input type="file" class="form-control" name="cover" autocomplete="off" min="0">
                </div>
            </div>
            <div class="modal-footer">
                <input type="submit" class="btn btn-primary" value="Add data">
            </div>
        </form>
        </div>
    </div>
</div>
<!-- EditModal -->
<div class="modal fade bd-example-modal-lg" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Album Data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form class="form-horizontal" action="<?=base_url('Album_Edit')?>" method="post" enctype="multipart/form-data">
            <div class="modal-body">
                <input type="hidden" name="id_album" id="id_album">
                <div class="form-group">
                    <label>Artist Name</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class=" icon-bulb"></i></div>
                        <select class="selectpicker form-control" data-style="form-control btn-default" name="id_artist" id="id_artist">
                            <option value="" disabled selected>--Choose--</option>
                        <?php foreach ($artists as $art): ?>
                            <option value="<?=$art->id_artist?>"><?=$art->name?></option>
                        <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label>Album Name</label>
                    <input type="text" class="form-control" placeholder="Album Name" name="album_name" id="album_name" autocomplete="off" min="0">
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Release Date</label>
                            <input type="text" class="form-control" placeholder="Ex: 2020-12-12" name="release_date" id="release_date" autocomplete="off" min="0">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Album Order</label>
                            <input type="number" class="form-control" placeholder="Ex: 1" name="album_order" id="album_order" autocomplete="off" min="0">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Album Description</label>
                            <input type="text" class="form-control" placeholder="Ex: 1st FULL ALBUM" name="album_description" id="album_description" autocomplete="off" min="0">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Itunes Link</label>
                            <input type="text" class="form-control" placeholder="Itunes Link" name="itunes" id="itunes" autocomplete="off" min="0">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Spotify Link</label>
                            <input type="text" class="form-control" placeholder="Spotify Link" name="spotify" id="spotify" autocomplete="off" min="0">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>MelOn Link</label>
                            <input type="text" class="form-control" placeholder="MelOn Link" name="melon" id="melon" autocomplete="off" min="0">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Genie Link</label>
                            <input type="text" class="form-control" placeholder="Genie Link" name="genie" id="genie" autocomplete="off" min="0">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Bugs Link</label>
                            <input type="text" class="form-control" placeholder="Bugs Link" name="bugs" id="bugs" autocomplete="off" min="0">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Flo Link</label>
                            <input type="text" class="form-control" placeholder="Flo Link" name="flo" id="flo" autocomplete="off" min="0">
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="form-group">
                            <label>Vibe Link</label>
                            <input type="text" class="form-control" placeholder="Vibe Link" name="vibe" id="vibe" autocomplete="off" min="0">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Album Cover</label>
                    <ul>
                        <li>File size must not exceed 1MB</li>
                        <li>File resolution must not exceed 500px x 500px</li>
                    </ul>
                    <input type="file" class="form-control" name="cover" autocomplete="off" min="0">
                </div>
            </div>
            <div class="modal-footer">
                <input type="submit" class="btn btn-success" value="Edit Data">
            </div>
        </form>
        </div>
    </div>
</div>
<script>
    function Edit(id){
        $('#editModal').modal('show');
        $.ajax({
            type  : 'GET',
            url   : '<?=base_url('AdminController/get_album_id/')?>'+id,
            dataType : 'json',
            success : function(data){
                $('#id_album').val(data.id_album);
				$('#id_artist').val(data.id_artist).change();
				$('#album_name').val(data.album_name);
                $('#release_date').val(data.release_date);
                $('#album_order').val(data.album_order);
                $('#album_description').val(data.album_description);
                $('#itunes').val(data.itunes);
                $('#spotify').val(data.spotify);
                $('#melon').val(data.melon);
                $('#genie').val(data.genie);
                $('#bugs').val(data.bugs);
                $('#flo').val(data.flo);
                $('#vibe').val(data.vibe);
            }
        });
    }
</script>