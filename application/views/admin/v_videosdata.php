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
                    <i class="fas fa-plus"></i> Add Video
                </button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Thumbnail</th>
                                <th scope="col">Video Title</th>
                                <th scope="col">Album Name</th>
                                <th scope="col">Release Date</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php if ($count > 0) { $no=0;
                            foreach ($videos as $v) { $no++;
                        ?>
                            <tr>
                                <td><?=$no;?></td>
                                <td><img src="<?=base_url()?>Asset/img/thumbnail/<?=$v->thumbnail?>" style="width:80px;border-radius:10%"></td>
                                <td><?=$v->video_name?></td>
                                <td><?=$v->album_name?></td>
                                <td><?=$v->video_release_date?></td>
                                <td>
                                    <a onclick="Edit(<?=$v->id_video?>);">
                                        <button type="button" name="button" class="btn btn-success" aria-haspopup="true" aria-expanded="true" data-toggle="tooltip" data-placement="top" title="Edit Data">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                    </a>
                                    <a href="<?=base_url()?>Video_Delete/<?=$v->id_video?>" onclick="return confirm('Are you sure you want to delete this?')">
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
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Video Data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form class="form-horizontal" action="<?=base_url('Video_Add')?>" method="post" enctype="multipart/form-data">
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
                    <label>Video Title</label>
                    <input type="text" class="form-control" placeholder="Video Title" name="video_name" autocomplete="off" min="0">
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Release Date</label>
                            <input type="text" class="form-control" placeholder="Ex: 2020-12-12" name="video_release_date" autocomplete="off" min="0">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Video Link</label>
                            <input type="text" class="form-control" placeholder="Ex: oDJ4ct59NC4" name="link" autocomplete="off" min="0">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Thumbnail</label>
                    <ul>
                        <li>File size must not exceed 1MB</li>
                        <li>File resolution must not exceed 1280px x 720px</li>
                    </ul>
                    <input type="file" class="form-control" name="thumbnail" autocomplete="off" min="0">
                </div>
            </div>
            <div class="modal-footer">
                <input type="submit" class="btn btn-primary" value="Add Data">
            </div>
        </form>
        </div>
    </div>
</div>
<!-- EditModal -->
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Video Data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form class="form-horizontal" action="<?=base_url('Video_Edit')?>" method="post" enctype="multipart/form-data">
            <div class="modal-body">
                <input type="hidden" name="id_video" id="id_video">
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
                    <label>Video Title</label>
                    <input type="text" class="form-control" placeholder="Video Title" name="video_name" id="video_name" autocomplete="off" min="0">
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Release Date</label>
                            <input type="text" class="form-control" placeholder="Ex: 2020-12-12" name="video_release_date" id="video_release_date" autocomplete="off" min="0">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Video Link</label>
                            <input type="text" class="form-control" placeholder="Ex: oDJ4ct59NC4" name="link" id="link" autocomplete="off" min="0">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Thumbnail</label>
                    <ul>
                        <li>File size must not exceed 1MB</li>
                        <li>File resolution must not exceed 1280px x 720px</li>
                    </ul>
                    <input type="file" class="form-control" name="thumbnail" autocomplete="off" min="0">
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
            url   : '<?=base_url('AdminController/get_video_id/')?>'+id,
            dataType : 'json',
            success : function(data){
                $('#id_video').val(data.id_video);
				$('#id_album').val(data.id_album).change();
				$('#video_name').val(data.video_name);
                $('#video_release_date').val(data.video_release_date);
                $('#link').val(data.link);
            }
        });
    }
</script>
