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
                                <td><?=$s->album_name?></td>
                                <td>
                                    <a>
                                        <button type="button" name="button" class="btn btn-success" aria-haspopup="true" aria-expanded="true" data-toggle="tooltip" data-placement="top" title="Edit Data">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                    </a>
                                    <a href="" style="color: white" onclick="return confirm('Apakah yakin?')">
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
<!-- Modal -->
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
                <input type="submit" class="btn btn-primary" value="Add data" name="add">
            </div>
        </form>
        </div>
    </div>
</div>

