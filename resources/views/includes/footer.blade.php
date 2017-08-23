<div id="copyright text-right">© Copyright 2017 Internet NinjaCats</div>


<!-- Global Scripts -->
<script src="{{ asset('/js/app.js')}}"></script>

<!-- jQuery -->

<script src="{{ asset('/start_bootstrap/vendor/jquery/jquery.min.js')}}"></script>

<!-- Bootstrap Core JavaScript -->
<script src="{{ asset('/start_bootstrap/vendor/bootstrap/js/bootstrap.min.js')}}"></script>

<!-- Metis Menu Plugin JavaScript -->
<script src="{{ asset('/start_bootstrap/vendor/metisMenu/metisMenu.js')}}">  </script>

<!-- DataTables JavaScript -->

<script src="{{ asset('/start_bootstrap/vendor/datatables/js/jquery.dataTables.min.js')}}"> </script>
<script src="{{ asset('/start_bootstrap/vendor/datatables-plugins/dataTables.bootstrap.min.js')}}"> </script>
<script src="{{ asset('/start_bootstrap/vendor/datatables-responsive/dataTables.responsive.js')}}"> </script>


<!-- Custom Theme JavaScript -->
<script src="{{ asset('/dist/js/sb-admin-2.js')}}"> </script>



<!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
            responsive: true
        });
    });
</script>