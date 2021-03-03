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
                    <i class="fas fa-plus"></i> Add Artist
                </button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Picture</th>
                                <th scope="col">Artist Name</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php if ($count > 0) { $no=0;
                            foreach ($artists as $a) { $no++;
                        ?>
                            <tr>
                                <td><?=$no;?></td>
                                <td><img src="<?=base_url()?>Asset/img/artists/<?=$a->picture?>" style="width:50px;border-radius:50%"></td>
                                <td><a href="<?=base_url()?>ArtistDetail/<?=$a->id_artist?>"><?=$a->name?></a></td>
                                <td>
                                    <a onclick="Edit(<?=$a->id_artist?>);">
                                        <button type="button" name="button" class="btn btn-success" aria-haspopup="true" aria-expanded="true" data-toggle="tooltip" data-placement="top" title="Edit Data">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                    </a>
                                    <a href="<?=base_url()?>Artist_Delete/<?=$a->id_artist?>" onclick="return confirm('Are you sure you want to delete this?')">
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
                            <td colspan="4" style="text-align:center">Data not found.</td>
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
            <h5 class="modal-title" id="exampleModalLabel">Add Artist Data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form class="form-horizontal" action="<?=base_url('Artist_Add')?>" method="post" enctype="multipart/form-data">
            <div class="modal-body">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" placeholder="Name" name="name" autocomplete="off" min="0">
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea class="form-control" name="description" placeholder="Describe artist here...." autocomplete="off" min="0"></textarea>
                </div>
                <div class="form-group">
                    <label>Commercials</label>
                    <textarea class="form-control" name="commercial" placeholder="Add commercials here...." autocomplete="off" min="0"></textarea>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Instagram</label>
                            <input type="text" class="form-control" placeholder="Instagram Link" name="instagram" autocomplete="off" min="0">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Facebook</label>
                            <input type="text" class="form-control" placeholder="Facebook Link" name="facebook" autocomplete="off" min="0">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Twitter</label>
                            <input type="text" class="form-control" placeholder="Twitter Link" name="twitter" autocomplete="off" min="0">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Soundcloud</label>
                            <input type="text" class="form-control" placeholder="Soundcloud Link" name="soundcloud" autocomplete="off" min="0">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Picture</label>
                    <ul>
                        <li>File size must not exceed 1MB</li>
                        <li>File resolution must not exceed 500px x 500px</li>
                    </ul>
                    <input type="file" class="form-control" name="picture" autocomplete="off" min="0">
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
            <h5 class="modal-title" id="exampleModalLabel">Edit Artist Data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form class="form-horizontal" action="<?=base_url('Artist_Edit')?>" method="post" enctype="multipart/form-data">
            <div class="modal-body">
                <input type="hidden" name="id_artist" id="id_artist">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" placeholder="Name" name="name" id="name" autocomplete="off" min="0">
                </div>
                <div class="form-group">
                    <label>Description</label>
                    <textarea class="form-control" name="description" id="description" placeholder="Describe artist here...." autocomplete="off" min="0"></textarea>
                </div>
                <div class="form-group">
                    <label>Commercials</label>
                    <textarea class="form-control" name="commercial" id="commercial" placeholder="Add commercials here...." autocomplete="off" min="0"></textarea>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Instagram</label>
                            <input type="text" class="form-control" placeholder="Instagram Link" name="instagram" id="instagram" autocomplete="off" min="0">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Facebook</label>
                            <input type="text" class="form-control" placeholder="Facebook Link" name="facebook" id="facebook" autocomplete="off" min="0">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Twitter</label>
                            <input type="text" class="form-control" placeholder="Twitter Link" name="twitter" id="twitter" autocomplete="off" min="0">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Soundcloud</label>
                            <input type="text" class="form-control" placeholder="Soundcloud Link" name="soundcloud" id="soundcloud" autocomplete="off" min="0">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Picture</label>
                    <ul>
                        <li>File size must not exceed 1MB</li>
                        <li>File resolution must not exceed 500px x 500px</li>
                    </ul>
                    <input type="file" class="form-control" name="picture" autocomplete="off" min="0">
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
            url   : '<?=base_url('AdminController/get_artist_id/')?>'+id,
            dataType : 'json',
            success : function(data){
				$('#id_artist').val(data.id_artist);
                $('#name').val(data.name);
                $('#description').val(data.description);
                $('#commercial').val(data.commercial);
                $('#instagram').val(data.instagram);
                $('#facebook').val(data.facebook);
                $('#twitter').val(data.twitter);
                $('#soundcloud').val(data.soundcloud);
            }
        });
    }
</script>