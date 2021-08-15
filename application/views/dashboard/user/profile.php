<?php $user = $this->ion_auth->user()->row();?>
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
                <h4 class="page-title">User Profile</h4>
                <div class="row">
                    <div class="col-md-8">
                        <div class="card card-with-nav">
                            <div class="card-header">
                                <div class="row row-nav-line">
                                    <ul class="nav nav-tabs nav-line nav-color-secondary" role="tablist">
                                        <li class="nav-item"> <a class="nav-link active show" data-toggle="tab" href="#profile" role="tab" aria-selected="false">Profile</a> </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="card-body">
                                <form action="" enctype="multipart/form-data" id="formUpdateUser">
                                    <div class="row mt-3">
                                        <div class="col-md-6">
                                            <div class="form-group form-group-default">
                                                <label>First Name</label>
                                                <input type="text" class="form-control" name="first" placeholder="First Name" value="<?=$user->first_name?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-group-default">
                                                <label>Last Name</label>
                                                <input type="text" class="form-control" name="last" placeholder="Last Name" value="<?=$user->last_name?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                    <input type="hidden" class="form-control" name="id" value="<?=$user->id?>">
                                        <div class="col-md-6">
                                            <div class="form-group form-group-default">
                                                <label>UserName</label>
                                                <input type="text" class="form-control" name="name" placeholder="Name" value="<?=$user->username?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-group-default">
                                                <label>Email</label>
                                                <input type="email" class="form-control" name="email" placeholder="Email" value="<?=$user->email?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-6">
                                            <div class="form-group form-group-default">
                                                <label>Password</label>
                                                <input type="text" class="form-control" name="password" placeholder="New Password">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-group-default">
                                                <label>Phone</label>
                                                <input type="text" class="form-control" name="phone" placeholder="Phone" value="<?=$user->phone?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3">
                                        <div class="col-md-6">
                                            <div class="form-group form-group-default">
                                                <label>Address</label>
                                                <input type="text" class="form-control" name="address" placeholder="Address" value="<?=$user->address?>">
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group form-group-default">
                                                <label>Company</label>
                                                <input type="text" class="form-control" name="company" placeholder="Company" value="<?=$user->company?>">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-3 mb-1">
                                        <div class="col-md-12">
                                            <div class="form-group form-group-default">
                                                <label>About Me</label>
                                                <textarea class="form-control" name="about" placeholder="About Me" rows="3"><?=$user->about?></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="text-right mt-3 mb-3">
                                        <button type="button" class="btn btn-success" onclick="userUpdate()">Save</button>
                                        <button class="btn btn-danger">Reset</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card card-profile card-secondary">
                            <div class="card-header" style="background-image: url('../assets/img/blogpost.jpg')">
                                <div class="profile-picture">
                                    <div class="avatar avatar-xl">
                                        <img src="<?=base_url()?>assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="user-profile text-center">
                                    <div class="name"><?=$user->first_name.' '.$user->last_name?></div>
                                    <div class="job"><?=$user->company?></div>
                                    <div class="desc"><?=$user->about?></div>
                                    <div class="view-profile">
                                        <a href="#" class="btn btn-secondary btn-block">View Full Profile</a>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer">
                                <div class="row user-stats text-center">
                                    <div class="col">
                                        <div class="number">125</div>
                                        <div class="title">Materi</div>
                                    </div>
                                    <div class="col">
                                        <div class="number">25K</div>
                                        <div class="title">Followers</div>
                                    </div>
                                    <div class="col">
                                        <div class="number">134</div>
                                        <div class="title">Following</div>
                                    </div>
                                </div>
                            </div>
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

</body>
</html>