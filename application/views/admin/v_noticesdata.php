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
                    <i class="fas fa-plus"></i> Add Notice
                </button>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Image</th>
                                <th scope="col">Date</th>
                                <th scope="col">Title</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php if ($count > 0) {
                            foreach ($notices as $n) {
                        ?>
                            <tr>
                                <td><?=$start++;?></td>
                                <td>
                                    <?php if($n->notice_img == null)  { ?>
                                        <img src="http://img.youtube.com/vi/<?=$n->link?>/0.jpg" style="width:80px;height:40px;border-radius:10%">
                                    <?php } else { ?>
                                        <img src="<?=base_url()?>Asset/img/notice/<?=$n->notice_img?>" style="width:50px;max-height:50px;border-radius:20%">
                                    <?php } ?>
                                </td>
                                <td><?=$n->date?></td>
                                <td><?=$n->title?></td>
                                <td>
                                    <a onclick="Edit(<?=$n->id_notice?>);">
                                        <button type="button" name="button" class="btn btn-success" aria-haspopup="true" aria-expanded="true" data-toggle="tooltip" data-placement="top" title="Edit Data">
                                            <i class="fas fa-edit"></i>
                                        </button>
                                    </a>
                                    <a href="<?=base_url()?>Notice_Delete/<?=$n->id_notice?>" onclick="return confirm('Are you sure you want to delete this?')">
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
                <?=$this->pagination->create_links();?>
            </div>
        </div>
	</div>
</section>
<!-- Modal -->
<div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Notice Data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form class="form-horizontal" action="<?=base_url('Notice_Add')?>" method="post" enctype="multipart/form-data">
            <div class="modal-body">
                <div class="form-group">
                    <label>Notice Title</label>
                    <input type="text" class="form-control" placeholder="Notice Title" name="title" autocomplete="off" min="0">
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Date</label>
                            <input type="text" class="form-control" placeholder="Ex: 2020-12-12" name="date" autocomplete="off" min="0">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Notice Link</label>
                            <input type="text" class="form-control" placeholder="Ex: oDJ4ct59NC4" name="link" autocomplete="off" min="0">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Notice Description</label>
                    <textarea class="form-control" name="notice_desc" placeholder="Describe here...." autocomplete="off" min="0"></textarea>
                </div>
                <div class="form-group">
                    <label>Image</label>
                    <ul>
                        <li>File size must not exceed 1MB</li>
                    </ul>
                    <input type="file" class="form-control" name="notice_img" autocomplete="off" min="0">
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
<div class="modal fade bd-example-modal-lg" id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Notice Data</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form class="form-horizontal" action="<?=base_url('Notice_Edit')?>" method="post" enctype="multipart/form-data">
            <div class="modal-body">
                <input type="hidden" name="id_notice" id="id_notice">
                <div class="form-group">
                    <label>Notice Title</label>
                    <input type="text" class="form-control" placeholder="Notice Title" name="title" id="title" autocomplete="off" min="0">
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Date</label>
                            <input type="text" class="form-control" placeholder="Ex: 2020-12-12" name="date" id="date" autocomplete="off" min="0">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Notice Link</label>
                            <input type="text" class="form-control" placeholder="Ex: oDJ4ct59NC4" name="link" id="link" autocomplete="off" min="0">
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <label>Notice Description</label>
                    <textarea class="form-control" name="notice_desc" id="notice_desc" placeholder="Describe here...." autocomplete="off" min="0"></textarea>
                </div>
                <div class="form-group">
                    <label>Image</label>
                    <ul>
                        <li>File size must not exceed 1MB</li>
                    </ul>
                    <input type="file" class="form-control" name="notice_img" autocomplete="off" min="0">
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
            url   : '<?=base_url('AdminController/get_notice_id/')?>'+id,
            dataType : 'json',
            success : function(data){
                $('#id_notice').val(data.id_notice);
				$('#title').val(data.title);
                $('#date').val(data.date);
                $('#link').val(data.link);
                $('#notice_desc').val(data.notice_desc);
            }
        });
    }
</script>