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
                    <i class="fas fa-plus"></i> Add Song
                </button>
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
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php if ($count > 0) { $no=0;
                            foreach ($songs as $s) { $no++;
                        ?>
                            <tr>
                                <td><?=$no;?></td>
                                <td><?=$s->title?></td>
                                <td><?=$s->duration?></td>
                                <td><a href="<?=base_url()?>AlbumDetail/<?=$s->id_album?>"><?=$s->album_name?></a></td>
                                <td>
                                    <a onclick="Edit(<?=$s->id_song?>);">
                                        <button type="button" name="button" class="btn btn-success" aria-haspopup="true" aria-expanded="true" data-toggle="tooltip" data-placement="top" title="Edit Data">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                    </a>
                                    <a href="<?=base_url()?>Song_Delete/<?=$s->id_song?>" onclick="return confirm('Are you sure you want to delete this?')">
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
<!-- AddModal -->
<div class="modal fade bd-example-modal-lg" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Song Data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form class="form-horizontal" action="<?=base_url('Song_Add')?>" method="post" enctype="multipart/form-data">
            <div class="modal-body">
                <div class="form-group">
                    <label>Album Name</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class=" icon-bulb"></i></div>
                        <select class="selectpicker form-control" data-style="form-control btn-default" name="id_album">
                            <option value="" disabled selected>--Choose--</option>
                        <?php foreach ($albums as $a): ?>
                            <option value="<?=$a->id_album?>"><?=$a->album_name?> by <?=$a->name?></option>
                        <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" placeholder="Title" name="title" autocomplete="off" min="0">
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Duration</label>
                            <input type="text" class="form-control" placeholder="Ex: 3'12''" name="duration" autocomplete="off" min="0">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Track Number</label>
                            <input type="number" class="form-control" placeholder="Ex: 1" name="tracknumber" autocomplete="off" min="0">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Title Track</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class=" icon-bulb"></i></div>
                                <select class="selectpicker form-control" data-style="form-control btn-default" name="is_title">
                                    <option value="" disabled selected>--Choose--</option>
                                    <option value="1">Yes</option>
                                    <option value="0">No</option>
                                    <option value="2">Subtitle</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Songwriter</label>
                    <input type="text" class="form-control" placeholder="Ex: Teddy, R.Tee, 24" name="lyricsby" autocomplete="off" min="0">
                </div>
                <div class="form-group">
                    <label>Composer</label>
                    <input type="text" class="form-control" placeholder="Ex: Teddy, R.Tee, 24" name="composedby" autocomplete="off" min="0">
                </div>
                <div class="form-group">
                    <label>Arranger</label>
                    <input type="text" class="form-control" placeholder="Ex: Teddy, R.Tee, 24" name="arrangedby" autocomplete="off" min="0">
                </div>
            </div>
            <div class="modal-footer">
                <input type="submit" class="btn btn-primary" value="Add Data" name="add">
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
            <h5 class="modal-title" id="exampleModalLabel">Edit Song Data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form class="form-horizontal" action="<?=base_url('Song_Edit')?>" method="post">
            <div class="modal-body">
                <input type="hidden" name="id_song" id="id_song">
                <div class="form-group">
                    <label>Album Name</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class=" icon-bulb"></i></div>
                        <select class="selectpicker form-control" data-style="form-control btn-default" name="id_album" id="id_album">
                            <option value="" disabled selected>--Choose--</option>
                        <?php foreach ($albums as $a): ?>
                            <option value="<?=$a->id_album?>"><?=$a->album_name?> by <?=$a->name?></option>
                        <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label>Title</label>
                    <input type="text" class="form-control" placeholder="Title" name="title" id="title" autocomplete="off" min="0">
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Duration</label>
                            <input type="text" class="form-control" placeholder="Ex: 3'12''" name="duration" id="duration" autocomplete="off" min="0">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Track Number</label>
                            <input type="number" class="form-control" placeholder="Ex: 1" name="tracknumber" id="tracknumber" autocomplete="off" min="0">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <label>Title Track</label>
                            <div class="input-group">
                                <div class="input-group-addon"><i class=" icon-bulb"></i></div>
                                <select class="selectpicker form-control" data-style="form-control btn-default" name="is_title" id="is_title">
                                    <option value="" disabled selected>--Choose--</option>
                                    <option value="1">Yes</option>
                                    <option value="0">No</option>
                                    <option value="2">Subtitle</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Songwriter</label>
                    <input type="text" class="form-control" placeholder="Ex: Teddy, R.Tee, 24" name="lyricsby" id="lyricsby" autocomplete="off" min="0">
                </div>
                <div class="form-group">
                    <label>Composer</label>
                    <input type="text" class="form-control" placeholder="Ex: Teddy, R.Tee, 24" name="composedby" id="composedby" autocomplete="off" min="0">
                </div>
                <div class="form-group">
                    <label>Arranger</label>
                    <input type="text" class="form-control" placeholder="Ex: Teddy, R.Tee, 24" name="arrangedby" id="arrangedby" autocomplete="off" min="0">
                </div>
            </div>
            <div class="modal-footer">
                <input type="submit" class="btn btn-success" value="Edit Data" name="edit">
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
            url   : '<?=base_url('AdminController/get_song_id/')?>'+id,
            dataType : 'json',
            success : function(data){
                $('#id_song').val(data.id_song);
				$('#id_album').val(data.id_album).change();
				$('#title').val(data.title);
                $('#duration').val(data.duration);
                $('#tracknumber').val(data.tracknumber);
                $('#is_title').val(data.is_title).change();
                $('#lyricsby').val(data.lyricsby);
                $('#composedby').val(data.composedby);
                $('#arrangedby').val(data.arrangedby);
            }
        });
    }
</script>

