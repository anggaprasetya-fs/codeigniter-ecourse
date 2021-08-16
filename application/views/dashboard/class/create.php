<?php
// Declare
$user   = $this->ion_auth->user()->row();
$author = $user->username.' - '.$user->first_name.' '.$user->last_name;
?>
<!-- Header -->
<?php $this->load->view('_partial/head')?>
<!-- End Header -->

<!-- Wrapper -->
<div class="wrapper">
    <div class="main-header" data-background-color="purple">
        <!-- Logo Header -->
        <?php $this->load->view('_partial/logo')?>
        <!-- End Logo Header -->

        <!-- Navbar Header -->
        <?php $this->load->view('_partial/navbar')?>
        <!-- End Navbar -->
    </div>

    <!-- Sidebar -->
    <?php $this->load->view('_partial/sidebar')?>
    <!-- End Sidebar -->

    <div class="main-panel">
        <div class="content">
            <div class="page-inner">
                <h4 class="page-title">Create Class</h4>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-with-nav">
                            <div class="card-header"><br>
                                <a href="<?=base_url('ClassLesson/listClass')?>" class="btn btn-warning btn-sm"><i class="fas fa-list"></i>  List Class</a>
                            </div>
                            <div class="card-body">
                                <form action="" enctype="multipart/form-data" id="formAddClass">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="title">Name <small class="text-danger">*</small></label>
                                                <input type="text" name="title" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="title">Author</label>
                                                <input type="text" name="author" class="form-control" value="<?=$author?>" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="title">Estimate <small class="text-danger">*</small></label>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <input type="number" class="form-control" name="num_estimate" placeholder="Number" required>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <select class="form-control" style="width: 100%;" name="estimate" id="estimate" required>
                                                            <option value="#">- Select Period -</option>
                                                            <option value="Month">Month</option>
                                                            <option value="Week">Week</option>
                                                            <option value="Day">Day</option>
                                                            <option value="Hour">Hour</option>
                                                            <option value="Minute">Minute</option>
                                                            <option value="Second">Second</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="title">Tag <small class="text-danger">(Separate with comma)</small></label>
                                                <input type="text" name="tag" class="form-control" placeholder="Ex: coding, english, etc,">
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="title">Image <small class="text-danger">*</small></label>
                                                <input type="file" name="image" class="form-control" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="form-group">
                                                <label for="#description">Description <small class="text-danger">*</small></label>
                                                <textarea name="description" id="description" cols="30" rows="10" class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Start</label>
                                                <input type="text" id="start" name="start" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">End</label>
                                                <input type="text" id="end" name="end" class="form-control" required>
                                            </div>
                                        </div>
                                        <div class="col-md-4">
                                            <div class="form-group">
                                                <label for="">Status</label><br>
                                                <label class="form-radio-label">
                                                    <input class="form-radio-input" type="radio" name="status" value="1" checked>
                                                    <span class="form-radio-sign">Publish</span>
                                                </label>
                                                <label class="form-radio-label ml-3">
                                                    <input class="form-radio-input" type="radio" name="status" value="0">
                                                    <span class="form-radio-sign">Archive</span>
                                                </label>
                                            </div>
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <button type="button" class="btn btn-success" onclick="addClass()"><i class="fas fa-check"></i> Done</button>
                                            <button type="button" class="btn btn-danger"><i class="fas fa-times"></i> Cancel</button>
                                        </div>
                                    </div>
                                </form>
                            <div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</div>
</div>
<!-- End Wrapper -->

<!-- JS -->
<?php $this->load->view('_partial/js')?>
<!-- End JS -->

<script type="text/javascript">
CKEDITOR.replace('description');

$('#start').datepicker({
    format: "dd-mm-yyyy",
    todayBtn: "linked",
    clearBtn: true,
    autoclose: true
});
$('#end').datepicker({
    format: "dd-mm-yyyy",
    todayBtn: "linked",
    clearBtn: true,
    autoclose: true
});
</script>

</body>
</html>