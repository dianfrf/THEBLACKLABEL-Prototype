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
                    <i class="fas fa-plus"></i> Add Filmography
                </button>
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
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php if ($count > 0) { $no=0;
                            foreach ($films as $f) { $no++;
                        ?>
                            <tr>
                                <td><?=$no;?></td>
                                <td><?=$f->year?></td>
                                <td><?=$f->film_title?></td>
                                <td><a href="<?=base_url()?>ArtistDetail/<?=$f->id_artist?>"><?=$f->name?></a></td>
                                <td>
                                    <a onclick="Edit(<?=$f->id_filmography?>);">
                                        <button type="button" name="button" class="btn btn-success" aria-haspopup="true" aria-expanded="true" data-toggle="tooltip" data-placement="top" title="Edit Data">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                    </a>
                                    <a href="<?=base_url()?>Film_Delete/<?=$f->id_filmography?>" onclick="return confirm('Are you sure you want to delete this?')">
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
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Filmography Data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form class="form-horizontal" action="<?=base_url('Film_Add')?>" method="post">
            <div class="modal-body">
                <div class="form-group">
                    <label>Artist Name</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class=" icon-bulb"></i></div>
                        <select class="selectpicker form-control" data-style="form-control btn-default" name="id_artist">
                            <option value="" disabled selected>--Choose--</option>
                        <?php foreach ($artists as $a): ?>
                            <option value="<?=$a->id_artist?>"><?=$a->name?></option>
                        <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label>Film Title</label>
                    <input type="text" class="form-control" placeholder="Film Title" name="film_title" autocomplete="off" min="0">
                </div>
                <div class="form-group">
                    <label>Year of Release</label>
                    <input type="number" class="form-control" placeholder="Ex: 2020" name="year" autocomplete="off" min="0">
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
<div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Filmography Data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form class="form-horizontal" action="<?=base_url('Film_Edit')?>" method="post">
            <div class="modal-body">
                <input type="hidden" name="id_filmography" id="id_filmography">
                <div class="form-group">
                    <label>Artist Name</label>
                    <div class="input-group">
                        <div class="input-group-addon"><i class=" icon-bulb"></i></div>
                        <select class="selectpicker form-control" data-style="form-control btn-default" name="id_artist" id="id_artist">
                            <option value="" disabled selected>--Choose--</option>
                        <?php foreach ($artists as $a): ?>
                            <option value="<?=$a->id_artist?>"><?=$a->name?></option>
                        <?php endforeach; ?>
                        </select>
                    </div>
                </div>
                <div class="form-group">
                    <label>Film Title</label>
                    <input type="text" class="form-control" placeholder="Film Title" name="film_title" id="film_title" autocomplete="off" min="0">
                </div>
                <div class="form-group">
                    <label>Year of Release</label>
                    <input type="number" class="form-control" placeholder="Ex: 2020" name="year" id="year" autocomplete="off" min="0">
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
            url   : '<?=base_url('AdminController/get_film_id/')?>'+id,
            dataType : 'json',
            success : function(data){
                $('#id_filmography').val(data.id_filmography);
				$('#id_artist').val(data.id_artist).change();
				$('#film_title').val(data.film_title);
                $('#year').val(data.year);
            }
        });
    }
</script>
