

    <div id="page-wrapper">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Tables</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        DataTables Advanced Tables
                    </div>
                    <!-- /.panel-heading -->
                    <div class="panel-body">
                        <table width="100%" class="table table-striped table-bordered table-hover" id="dataTables-example">
                            <thead>
                            <tr>
                                <th>Date</th>
                                <th>Tweet</th>
                                <th>Likes</th>
                                <th>Retweets</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="even gradeX">
                                <td>January 1st, 2017</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad mini</td>
                                <td class="center">500</td>
                                <td class="center">10</td>
                            </tr>
                            <tr class="odd gradeC">
                                <td>January 1st, 2017</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad mini</td>
                                <td class="center">3000</td>
                                <td class="center">50</td>
                            </tr>
                            <tr class="even gradeA">
                                <td>January 1st, 2017</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad mini</td>
                                <td class="center">40</td>
                                <td class="center">4</td>
                            </tr>
                            <tr class="even gradeX">
                                <td>February 1st, 2017</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad mini</td>
                                <td class="center">400</td>
                                <td class="center">4</td>
                            </tr>
                            <tr class="odd gradeC">
                                <td>February 1st, 2017</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad mini</td>
                                <td class="center">39</td>
                                <td class="center">2</td>
                            </tr>
                            <tr class="even gradeA">
                                <td>February 1st, 2017</td>
                                <td>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad mini</td>
                                <td class="center">81</td>
                                <td class="center">12</td>
                            </tr>
                            </tbody>
                        </table>
                        <!-- /.table-responsive -->
                    </div>
                    <!-- /.panel-body -->
                </div>
                <!-- /.panel -->
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

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

</body>

</html>
