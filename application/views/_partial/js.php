<!--   Core JS Files   -->
<script src="<?=base_url()?>assets/js/core/jquery.3.2.1.min.js"></script>
<script src="<?=base_url()?>assets/js/core/popper.min.js"></script>
<script src="<?=base_url()?>assets/js/core/bootstrap.min.js"></script>

<!-- jQuery UI -->
<script src="<?=base_url()?>assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="<?=base_url()?>assets/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>

<!-- jQuery Scrollbar -->
<script src="<?=base_url()?>assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>

<!-- Moment JS -->
<script src="<?=base_url()?>assets/js/plugin/moment/moment.min.js"></script>

<!-- Chart JS -->
<script src="<?=base_url()?>assets/js/plugin/chart.js/chart.min.js"></script>

<!-- jQuery Sparkline -->
<script src="<?=base_url()?>assets/js/plugin/jquery.sparkline/jquery.sparkline.min.js"></script>

<!-- Chart Circle -->
<script src="<?=base_url()?>assets/js/plugin/chart-circle/circles.min.js"></script>

<!-- Datatables -->
<script src="<?=base_url()?>assets/js/plugin/datatables/datatables.min.js"></script>

<!-- Bootstrap Notify -->
<script src="<?=base_url()?>assets/js/plugin/bootstrap-notify/bootstrap-notify.min.js"></script>

<!-- Bootstrap Toggle -->
<script src="<?=base_url()?>assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>

<!-- jQuery Vector Maps -->
<script src="<?=base_url()?>assets/js/plugin/jqvmap/jquery.vmap.min.js"></script>
<script src="<?=base_url()?>assets/js/plugin/jqvmap/maps/jquery.vmap.world.js"></script>

<!-- Google Maps Plugin -->
<script src="<?=base_url()?>assets/js/plugin/gmaps/gmaps.js"></script>

<!-- Sweet Alert -->
<script src="<?=base_url()?>assets/js/plugin/sweetalert/sweetalert.min.js"></script>

<!-- Azzara JS -->
<script src="<?=base_url()?>assets/js/ready.min.js"></script>

<!-- CkEditor -->
<script src="<?=base_url()?>assets/plugins/ckeditor/ckeditor.js"></script>

<!-- DatePciker -->
<script src="<?=base_url()?>assets/plugins/datepicker/js/bootstrap-datepicker.js"></script>
<script src="<?=base_url()?>assets/plugins/datepicker/js/bootstrap-datepicker.min.js"></script>

<!-- Other JS -->

<script type="text/javascript">
// Class
function addClass()
{
    CKEDITOR.instances['description'].updateElement()

    var data    = new FormData($('#formAddClass')[0]);

    $.ajax({
        method: "POST",
        url: "<?=base_url('ClassLesson/add')?>",
        data: data,
        // data: $('#formAddClass').serialize(),
        // dataType: 'json',
        async: false,
        processData: false,
        contentType: false,
        success: function(data)
        {
            console.log(data);
            if (data == 'true'){
                swal({
                    title: "Success!",
                    text: "You have successfully add your class!",
                    icon: "success",
                    buttons: {
                        confirm: {
                            text: "Confirm",
                            value: true,
                            visible: true,
                            className: "btn btn-success",
                            closeModal: true
                        }
                    }
                })  
            } else if(data.status == 'false') {
                swal("Error", "You failed to add your class!", {
                    icon : "error",
                    buttons: {        			
                        confirm: {
                            className : 'btn btn-danger'
                        }
                    },
                });
            } else {
                swal("Error", "You failed to add your class [Contact Your Developer]!", {
                    icon : "error",
                    buttons: {        			
                        confirm: {
                            className : 'btn btn-danger'
                        }
                    },
                });
            }
        }
    });
}

// Class
$(document).ready(function(){
    $('#basic-datatables').DataTable({
    });

    $('#multi-filter-select').DataTable( {
        "pageLength": 5,
        initComplete: function () {
            this.api().columns().every( function () {
                var column = this;
                var select = $('<select class="form-control"><option value=""></option></select>')
                .appendTo( $(column.footer()).empty() )
                .on( 'change', function () {
                    var val = $.fn.dataTable.util.escapeRegex(
                        $(this).val()
                        );

                    column
                    .search( val ? '^'+val+'$' : '', true, false )
                    .draw();
                } );

                column.data().unique().sort().each( function ( d, j ) {
                    select.append( '<option value="'+d+'">'+d+'</option>' )
                } );
            } );
        }
    });
});

// User
function userUpdate()
{
    var data = new FormData($('#formUpdateUser')[0]);

    $.ajax({
        method: "POST",
        url: "<?=base_url('Profile/update')?>",
        data: data,
        dataType: 'json',
        processData: false,
        contentType: false,
        success: function(data)
        {
            if (data == true) {
                swal({
                    title: "Success!",
                    text: "You have successfully updated your profile!",
                    icon: "success",
                    buttons: {
                        confirm: {
                            text: "Confirm",
                            value: true,
                            visible: true,
                            className: "btn btn-success",
                            closeModal: true
                        }
                    }
                }).then(function() {
                    window.location = "<?=base_url('Profile')?>"
                });
            } else {
                swal("Error", "You failed to update profile!", {
                    icon : "error",
                    buttons: {        			
                        confirm: {
                            className : 'btn btn-danger'
                        }
                    },
                });
            }
        }
    });
}

</script>