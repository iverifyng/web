<?php
include "../config/db.php";
include "./components/header.php";
include "./components/navbar.php";
include "./components/walletbalance.php";
require_once "../controllers/query.php";

?>

    <section class="bg-section-secondary">
        <div class=container>
            <div class=row>
                <div class=col-lg-12>
                    <div class="row mx-n2">
                        <div class="col-lg-12 px-2">
                            <div class=card>
                                <div class=card-body>
                                    <div class="align-items-center">
                                        <div class="text-center">
                                            <img src="../assets/img/svg/certificate.png" class="img-fluid img-center pb-2" style=width:100px;height:100px>
                                            <span class="badge badge-soft-primary">
                                                Amount: ₦5,000.00
                                            </span>
                                        </div>
                                        <div class="col align-items-center pt-4">
                                            <div class=col-md-12>
                                                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" enctype="multipart/form-data">
                                                <div class="row align-items-center">
                                                    <div class="col-md-6" style="display: none">
                                                        <div class="form-group">
                                                            <label class="form-control-label">User ID</label>
                                                            <input class="form-control" type="text" name="userID" value="<?php echo $_SESSION['id'] ?>" readonly>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6" style="display: none">
                                                        <div class="form-group">
                                                            <label class="form-control-label">Amount</label>
                                                            <input class="form-control" type="text" name="amount" value="5000" readonly>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-control-label">Number of Employees</label>
                                                            <input class="form-control" required type="number"  placeholder="0">
                                                        </div>
                                                    </div>


                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-control-label">Upload Spreadsheet with Employee Details <span class="btn-inner--icon text-danger" data-toggle="tooltip" data-placement="right" title="Microsoft excel(Spreadsheet)">
                                                    <i data-feather="alert-circle"></i></span>
                                                            </label>
                                                            <input type="file" name="meansOfID" id="ID" class="custom-input-file" data-multiple-caption="{count} files selected" multiple />
                                                            <label for="ID">
                                                                <i data-feather="upload"></i>
                                                                <span>Choose a file…</span>
                                                            </label>
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label class="form-control-label">Upload Employee Certificate(s)</label>
                                                            <input type="file" name="curriculumVitae" id="CV" class="custom-input-file" data-multiple-caption="{count} files selected" multiple />
                                                            <label for="CV">
                                                                <i data-feather="upload"></i>
                                                                <span>Choose a file…</span>
                                                            </label>
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 pt-3">
                                                        <button type=submit name="domestic_employee_btn" class="btn btn-block btn-dark">Upload Certifcate Data</button>
                                                    </div>
                                                </div>
                                            </form>
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
    </section>




<?php include "./components/footer.php"; ?>