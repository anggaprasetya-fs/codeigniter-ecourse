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
                <h4 class="page-title">Class List</h4>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card card-with-nav">
                            <div class="card-header"><br>
                                <button type="button" class="btn btn-warning btn-sm"><i class="fas fa-plus"></i>  Create Class</button>
                            </div>
                            <div class="card-body">
                            <div class="table-responsive">
                                <table id="basic-datatables" class="display table table-striped table-hover" >
                                    <thead>
                                        <tr class="font-weight-bold">
                                            <th>Name</th>
                                            <th>Position</th>
                                            <th>Office</th>
                                            <th>Age</th>
                                            <th>Start date</th>
                                            <th>Salary</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Tiger Nixon</td>
                                            <td>System Architect</td>
                                            <td>Edinburgh</td>
                                            <td>61</td>
                                            <td>2011/04/25</td>
                                            <td>$320,800</td>
                                        </tr>
                                        <tr>
                                            <td>Garrett Winters</td>
                                            <td>Accountant</td>
                                            <td>Tokyo</td>
                                            <td>63</td>
                                            <td>2011/07/25</td>
                                            <td>$170,750</td>
                                        </tr>
                                    </tbody>
                                </table>
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