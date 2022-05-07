<?php
include('./inc/header.php');
include('./inc/functions.php');
include('./inc/db.php');
if (!isset($_SESSION['USER_LOGIN'])) {
    header("location: login.php");
}

$sql = "select * from patients order by id desc";
$result = mysqli_query($conn, $sql);

?>


<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <!-- Topbar -->
        <?php include('./inc/top.php'); ?>
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">All Patients</h1>


            <!-- DataTales Example -->
            <div class="card shadow mb-4">
                <!-- <div class="card-header py-3">
                    <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                </div> -->
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Pic</th>
                                    <th>P.Id</th>
                                    <th>P.Name</th>
                                    <th>Illness</th>
                                    <th>TreatMent</th>
                                    <th>Dr.Name</th>
                                    <th>Dr.Email</th>
                                    <th>Nur.Name</th>
                                    <th>H.Ward.No</th>
                                    <th>H.Room.No</th>
                                    <th>Tret.On.Cost</th>
                                    <th>Comments</th>
                                    <th>Delete</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                while ($row = mysqli_fetch_assoc($result)) { ?>
                                    <tr>
                                        <td>
                                            <img src="./uploads/<?=$row['p_pic'];?>" alt="p_pic" style="width:50px; height:auto">
                                        </td>
                                        <td><?= $row['p_id']; ?></td>
                                        <td><?= $row['p_name']; ?></td>
                                        <td><?= $row['p_illness']; ?></td>
                                        <td><?= $row['p_treatment']; ?></td>
                                        <td><?= $row['d_name']; ?></td>
                                        <td><?= $row['d_email']; ?></td>
                                        <td><?= $row['n_name']; ?></td>
                                        <td><?= $row['h_w_number']; ?></td>
                                        <td><?= $row['h_r_number']; ?></td>
                                        <td><?= $row['t_o_cost']; ?></td>
                                        <td><?= $row['d_comments']; ?></td>
                                        <td>
                                            <a class="btn btn-danger" href="delete.php?id=<?=$row['id'];?>">
                                            Delete
                                        </a>
                                        </td>
                                    </tr>
                                <?php  } ?>


                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- End of Main Content -->

    <!-- Footer -->
    <footer class="sticky-footer bg-white">
        <div class="container my-auto">
            <div class="copyright text-center my-auto">
                <span>Copyright &copy; <?php echo SITENAME . "  " . date('Y'); ?></span>
            </div>
        </div>
    </footer>
    <!-- End of Footer -->

</div>
<!-- End of Content Wrapper -->

</div>
<!-- End of Page Wrapper -->

<!-- Scroll to Top Button-->
<a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
</a>

<!-- Logout Modal-->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
        </div>
    </div>
</div>

<?php
include('./inc/footer.php');

?>