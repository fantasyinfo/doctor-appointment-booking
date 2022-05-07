<?php

include('./inc/header.php');
include('./inc/functions.php');
include('./inc/db.php');
if (!isset($_SESSION['USER_LOGIN'])) {
    header("location: login.php");
}
$msg = "";
if (isset($_POST['submit'])) {
    $picarr = $_FILES['p_pic'];
    $patientPicName = uploadPic($picarr);
    $patientId = getSafeData($_POST['p_id']);
    $patientName = getSafeData($_POST['p_name']);
    $patientIllness = getSafeData($_POST['p_illness']);
    $patientTreatMent = getSafeData($_POST['p_treatment']);
    $doctorName = getSafeData($_POST['d_name']);
    $doctorEmail = getSafeData($_POST['d_email']);
    $nurseName = getSafeData($_POST['n_name']);
    $hospitalWardNumber = getSafeData($_POST['h_w_number']);
    $hospitalRoomNumber = getSafeData($_POST['h_r_number']);
    $currencySymbol = getSafeData($_POST['currency_symbol']);
    $totalOnGoingCost = getSafeData($_POST['t_o_cost']);
    $doctorComments = getSafeData($_POST['d_comments']);
                                      
   $sql = "insert into patients (p_id,p_pic,p_name,p_illness,p_treatment,d_name,d_email,n_name,h_w_number,h_r_number,currency_symbol, t_o_cost,d_comments) values ('{$patientId}','{$patientPicName}','{$patientName}','{$patientIllness}','{$patientTreatMent}','{$doctorName}','{$doctorEmail}','{$nurseName}',{$hospitalWardNumber},{$hospitalRoomNumber},'{$currencySymbol}',{$totalOnGoingCost},'{$doctorComments}')";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        $msg = "Patient Data Inserted Successfully";
    }
}

?>

<!-- Content Wrapper -->
<div id="content-wrapper" class="d-flex flex-column">

    <!-- Main Content -->
    <div id="content">

        <?php include('./inc/top.php'); ?>

        <!-- Begin Page Content -->
        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="d-sm-flex align-items-center justify-content-between mb-4">
                <h1 class="h3 mb-0 text-gray-800">Add New Patient</h1>
            </div>
            <?php if ($msg != "") { ?>
                <div class="alert alert-success">
                    <?= $msg; ?>
                </div>
            <?php } ?>
            <div class="row">


                <div class="col-xl-8 col-lg-7 justify-content-center align-item-center">
                    <form method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label>Patient Pic:</label>
                            <input type="file" name="p_pic" class="form-control-file" id="exampleFormControlFile1">
                        </div>

                        <div class="form-group">
                            <label>Patient Id:</label>
                            <input type="text" class="form-control" name="p_id" placeholder="2315562">
                        </div>

                        <div class="form-group">
                            <label>Patient Name:</label>
                            <input type="text" class="form-control" name="p_name" placeholder="John Doe">
                        </div>
                        <div class="form-group">
                            <label>Patient illness:</label>
                            <input type="text" class="form-control" name="p_illness" placeholder="Fever">
                        </div>
                        <div class="form-group">
                            <label>Type of Treatment:</label>
                            <input type="text" class="form-control" name="p_treatment" placeholder="Heart">
                        </div>
                        <div class="form-group">
                            <label>Doctor Name:</label>
                            <input type="text" class="form-control" name="d_name" placeholder="Dr . Gaurav">
                        </div>
                        <div class="form-group">
                            <label>Doctor Email Id:</label>
                            <input type="email" class="form-control" name="d_email" placeholder="getdocgaurav@email.com">
                        </div>
                        <div class="form-group">
                            <label>Nurse (RN) Name:</label>
                            <input type="text" class="form-control" name="n_name" placeholder="misssweaty">
                        </div>
                        <div class="form-group">
                            <label>Hospital Ward Number:</label>
                            <input type="number" class="form-control" name="h_w_number" placeholder="22">
                        </div>
                        <div class="form-group">
                            <label>Room Number:</label>
                            <input type="number" class="form-control" name="h_r_number" placeholder="9">
                        </div>
                        <div class="form-group">
                            <label>Treatment Ongoing Cost:</label>
                            <div class="row">
                                <div class="col-md-1">
                                    <select name="currency_symbol">
                                        <option value="d">$</option>
                                        <option value="e">€</option>
                                        <option value="p">£</option>
                                    </select>
                                </div>
                                <div class="col-md-11">
                                    <input type="text" class="form-control" name="t_o_cost" placeholder="1500">
                                </div>
                            </div>


                        </div>
                        <div class="form-group">
                            <label>Comments:</label>
                            <input type="text" class="form-control" name="d_comments" placeholder="need to shift to emegency ward now">
                        </div>

                        <button type="submit" name="submit" class="btn btn-success btn-block">Add New Patient</button>
                    </form>
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
                <a class="btn btn-primary" href="logout.php">Logout</a>
            </div>
        </div>
    </div>
</div>
<?php
include('./inc/footer.php');

?>