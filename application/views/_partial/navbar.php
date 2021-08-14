
<nav class="navbar navbar-header navbar-expand-lg">
    <div class="container-fluid">
        <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
            <li class="nav-item dropdown hidden-caret">
                <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
                    <div class="avatar-sm">
                        <img src="<?=base_url()?>assets/img/profile.jpg" alt="..." class="avatar-img rounded-circle">
                    </div>
                </a>
                <ul class="dropdown-menu dropdown-user animated fadeIn">
                    <li>
                        <div class="user-box">
                            <div class="avatar-lg"><img src="<?=base_url()?>assets/img/profile.jpg" alt="image profile" class="avatar-img rounded"></div>
                            <div class="u-text">
                            <h4><?=$this->ion_auth->user()->row()->first_name?></h4>
                                <p class="text-muted"><?=$this->ion_auth->user()->row()->email?></p><a href="profile.html" class="btn btn-rounded btn-danger btn-sm">View Profile</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">My Profile</a>
                        <a class="dropdown-item" href="#">My Balance</a>
                        <a class="dropdown-item" href="#">Inbox</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Account Setting</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="<?=base_url('Dashboard/logout')?>">Logout</a>
                    </li>
                </ul>
            </li>
        </ul>
    </div>
</nav>
