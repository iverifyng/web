<!-- Proof of Payment Details -->
<div class="modal modal-fluid fade" id="paymentProof" tabindex="-1" role="dialog" aria-labelledby="modal_1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row justify-content-center py-4">
                    <div class="col-lg-9 pb-4 text-center">
                        <div class="">
                            <img src="../assets/img/svg/bill.svg" class="img-fluid img-center pb-2" style=width:100px;height:100px>
                            <small class="form-text text-muted mt-2"><span style="color: red">NOTE:</span> Account will be credited once payment has be confirmed.</small>
                        </div>
                    </div>
                    <div class="col align-items-center">
                        <div class=col-md-12>
                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" enctype="multipart/form-data">
                                <div class="row align-items-center">
                                    <div class="col-md-6" style="display: none">
                                        <div class="form-group">
                                            <label class="form-control-label">User ID</label>
                                            <input class="form-control" type="text" required name="userID" value="<?php echo $_SESSION['id'] ?>" readonly>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Sender's Account Name</label>
                                            <input class="form-control" type="text" required name="sendersAccName" placeholder="Kelechi Kayode Aminu">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Sender's Bank Name</label>
                                            <input class="form-control" type="text" required name="sendersBank" placeholder="Providus Bank">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Deposited Amount</label>
                                            <div class="input-group input-group-merge">
                                                <input type="text" class="form-control form-control-prepend" required name="amount" placeholder=5100 aria-label="Topup Amount">
                                                <div class=input-group-prepend><span class="input-group-text"><i>₦</i></span></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Upload Proof of Payment <span class="btn-inner--icon" data-toggle="tooltip" data-placement="right" title="Ulpoad Screenshot of your payment">
                                                    <i data-feather="alert-circle"></i></span>
                                            </label>
                                            <input type="file" name="proof" id="proof" required class="custom-input-file" data-multiple-caption="{count} files selected" />
                                            <label for="proof">
                                                <i data-feather="upload"></i>
                                                <span>Choose a file…</span>
                                            </label>
                                        </div>
                                    </div>

                                </div>
                                <div class="pb-2 pt-2">
                                    <button type=submit name="pop_btn" class="btn btn-block btn-dark" onclick="this.classList.toggle('button--loading')">
                                        <span class="button__text">Upload Proof of Payment</span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Employee Select -->
<div class="modal modal-fluid fade" id="employeeSelect" tabindex="-1" role="dialog" aria-labelledby="modal_1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row justify-content-center py-4">
                    <div class="col-lg-9 mb-3 text-center">
                        <div class="">
                            <img src="../assets/img/svg/employee.svg" class="img-fluid img-center pb-2" style="height: 100px; width: 100px">
                            <h6 class="mb-0">Select type of Employee</h6>
                        </div>
                    </div>
                    <div class="row align-items-center text-center">
                        <div class="col-12 mb-3">
                            <button data-toggle="modal" data-dismiss="modal" data-target="#coporateEmployee" class="btn btn-dark btn-icon">
                            <span class="btn-inner--icon">
                                <i data-feather="check-square"></i>
                            </span>
                                <span class="btn-inner--text">Corporate Employee</span>
                            </button>
                        </div>
                        <div class="col-12 mb-3">
                            <button data-toggle="modal" data-dismiss="modal" data-target="#domesticEmployee" class="btn btn-dark btn-icon">
                            <span class="btn-inner--icon">
                                <i data-feather="check-square"></i>
                            </span>
                                <span class="btn-inner--text">Domestic Employee</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Certificate Select -->
<div class="modal modal-fluid fade" id="certificateSelect" tabindex="-1" role="dialog" aria-labelledby="modal_1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row justify-content-center py-4">
                    <div class="col-lg-9 mb-3 text-center">
                        <div class="">
                            <img src="../assets/img/svg/certificate.png" class="img-fluid img-center pb-2" style="height: 100px; width: 100px">
                            <h6 class="mb-0">Select verification range</h6>
                        </div>
                    </div>
                    <div class="row align-items-center text-center">
                        <div class="col-12 mb-3">
                            <button data-toggle="modal" data-dismiss="modal" data-target="#singleCertificate" class="btn btn-dark btn-icon">
                            <span class="btn-inner--icon">
                                <i data-feather="check-square"></i>
                            </span>
                                <span class="btn-inner--text">Single Certificate Verification</span>
                            </button>
                        </div>
                        <div class="col-12 mb-3">
                            <button data-toggle="modal" data-dismiss="modal" data-target="#multipleCertificate" class="btn btn-dark btn-icon">
                            <span class="btn-inner--icon">
                                <i data-feather="check-square"></i>
                            </span>
                                <span class="btn-inner--text">Multiple Certificate Verification</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Single Certificate Verification -->
<div class="modal modal-fluid fade" id="singleCertificate" tabindex="-1" role="dialog" aria-labelledby="modal_1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row justify-content-center py-4">
                    <div class="col-lg-9 pb-4 text-center">
                        <div class="">
                            <img src="../assets/img/svg/certificate.png" class="img-fluid img-center pb-2" style=width:100px;height:100px>
                            <span class="badge badge-soft-primary">
                                Amount: ₦<?php echo number_format($certificateVerification, 0, '.', ','); ?>
                            </span>
                        </div>
                    </div>
                    <div class="col align-items-center">
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
                                            <input class="form-control" type="text" name="amount" value="<?php echo $certificateVerification; ?>" readonly>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Employee First Name</label>
                                            <input class="form-control" required type="text" name="employee_firstName" placeholder="First name">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Employee Last Name</label>
                                            <input class="form-control" required type="text" name="employee_lastName" placeholder="Last name">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-control-label">Upload Employee Certificate</label>
                                            <input type="file" name="certificate" id="certificate" class="custom-input-file" data-multiple-caption="{count} files selected" />
                                            <label for="certificate">
                                                <i data-feather="upload"></i>
                                                <span>Choose a file…</span>
                                            </label>
                                        </div>
                                    </div>

                                </div>
                                <div class="pb-2 pt-2">
                                    <button type=submit name="certificate_employee_btn" onclick="this.classList.toggle('button--loading')" class="btn btn-block btn-dark">
                                        <span class="button__text">Upload Employee Data</span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Corporate Employee Unlimited Details -->
<div class="modal modal-fluid fade" id="coporateEmployee" tabindex="-1" role="dialog" aria-labelledby="modal_1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row justify-content-center py-4">
                    <div class="col-lg-9 pb-4 text-center">
                        <div class="">
                            <img src="../assets/img/svg/employee.svg" class="img-fluid img-center pb-2" style=width:100px;height:100px>
                            <span class="badge badge-soft-primary">
                                Amount: ₦<?php echo number_format($corporateEmployee, 0, '.', ','); ?>
                            </span>
                        </div>
                    </div>
                    <div class="col align-items-center">
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
                                            <input class="form-control" type="text" name="amount" value="<?php echo $corporateEmployee; ?>" readonly>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Employee First Name</label>
                                            <input class="form-control" required type="text" name="employee_firstName" placeholder="First name">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Employee Last Name</label>
                                            <input class="form-control" required type="text" name="employee_lastName" placeholder="Last name">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Upload Means of Identification <span class="btn-inner--icon" data-toggle="tooltip" data-placement="right" title="NIN, Drivers License, Voters Card, International Passport">
                                                    <i data-feather="alert-circle"></i></span>
                                            </label>
                                            <input type="file" name="meansOfID" id="ID" class="custom-input-file" data-multiple-caption="{count} files selected" />
                                            <label for="ID">
                                                <i data-feather="upload"></i>
                                                <span>Choose a file…</span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Upload Employee CV (PDF Format)</label>
                                            <input type="file" name="curriculumVitae" id="CV" class="custom-input-file" data-multiple-caption="{count} files selected" />
                                            <label for="CV">
                                                <i data-feather="upload"></i>
                                                <span>Choose a file…</span>
                                            </label>
                                        </div>
                                    </div>

                                </div>
                                <div class="pb-2 pt-2">
                                    <button type=submit name="corporate_employee_btn" onclick="this.classList.toggle('button--loading')" class="btn btn-block btn-dark">
                                        <span class="button__text">Upload Employee Data</span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Guarantor Details -->
<div class="modal modal-fluid fade" id="guarantorVerification" tabindex="-1" role="dialog" aria-labelledby="modal_1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row justify-content-center py-4">
                    <div class="col-lg-9 pb-4 text-center">
                        <div class="">
                            <img src="../assets/img/svg/guarantor.svg" class="img-fluid img-center pb-2" style=width:100px;height:100px>
                            <span class="badge badge-soft-primary">
                                Amount: ₦<?php echo number_format($guarantorVerification, 0, '.', ','); ?>
                            </span>
                        </div>
                    </div>
                    <div class="col align-items-center">
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
                                            <input class="form-control" type="text" name="amount" value="<?php echo $guarantorVerification ?>" readonly>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Guarantor First Name</label>
                                            <input class="form-control" required type="text" name="guarantor_firstName" placeholder="First name">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Guarantor Last Name</label>
                                            <input class="form-control" required type="text" name="guarantor_lastName" placeholder="Last name">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Guarantor Phone Number</label>
                                            <input class="form-control" required type="text" name="tel" placeholder="0810 234 5678">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Guarantor Residential Address</label>
                                            <input class="form-control" required type="text" name="residential_address" placeholder="House Address">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-control-label">Guarantor Work Address</label>
                                            <textarea class="form-control" placeholder="Office Address" name="work_address" resize="none" rows="3"></textarea>
                                        </div>
                                    </div>


                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Upload Means of Identification <span class="btn-inner--icon text-danger" data-toggle="tooltip" data-placement="right" title="NIN, Drivers License, Voters Card, International Passport">
                                                    <i data-feather="alert-circle"></i></span>
                                            </label>
                                            <input type="file" name="meansOfID" id="GuarantorID" class="custom-input-file" data-multiple-caption="{count} files selected" />
                                            <label for="GuarantorID">
                                                <i data-feather="upload"></i>
                                                <span>Choose a file…</span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Upload any other document</label>
                                            <input type="file" name="otherDocument" id="otherDoc" class="custom-input-file" data-multiple-caption="{count} files selected" />
                                            <label for="otherDoc">
                                                <i data-feather="upload"></i>
                                                <span>Choose a file…</span>
                                            </label>
                                        </div>
                                    </div>

                                </div>
                                <div class="pb-2 pt-2">
                                    <button type=submit name="guarantor_btn" class="btn btn-block btn-dark" onclick="this.classList.toggle('button--loading')">
                                        <span class="button__text">Upload Guarantor Data</span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Domestic Employee Unlimited Details -->
<div class="modal modal-fluid fade" id="domesticEmployee" tabindex="-1" role="dialog" aria-labelledby="modal_1" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row justify-content-center py-4">
                    <div class="col-lg-9 mb-3 text-center">
                        <div class="">
                            <img src="../assets/img/svg/employee.svg" class="img-fluid img-center pb-2" style=width:100px;height:100px>
                            <span class="badge badge-soft-primary">
                                Amount: ₦<?php echo number_format($domesticEmployee, 0, '.', ','); ?>
                            </span>
                        </div>
                    </div>
                    <div class="col align-items-center">
                        <div class=col-md-12>
                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" enctype="multipart/form-data">
                                <div class="row align-items-center pt-2">
                                    <div class="col-md-6" style="display: none">
                                        <div class="form-group">
                                            <label class="form-control-label">User ID</label>
                                            <input class="form-control" type="text" name="userID" value="<?php echo $_SESSION['id'] ?>" readonly>
                                        </div>
                                    </div>

                                    <div class="col-md-6" style="display: none">
                                        <div class="form-group">
                                            <label class="form-control-label">Amount</label>
                                            <input class="form-control" type="text" name="amount" value="<?php echo $domesticEmployee; ?>" readonly>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Employee First Name</label>
                                            <input class="form-control" type="text" name="employee_firstName" placeholder="First name">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Employee Last Name</label>
                                            <input class="form-control" type="text" name="employee_lastName" placeholder="Last name">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Date of Birth</label>
                                            <input type="date" class="form-control" name="date_of_birth" data-toggle="date" placeholder="Select your birth date">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Next of Kin</label>
                                            <input class="form-control" type="text" name="nok_fullName" placeholder="Full Name of Next of Kin">
                                        </div>
                                    </div>
                                </div>

                                <div class="row align-items-center">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-control-label">Home/work address of Next of Kin</label>
                                            <textarea class="form-control" name="nok_address" placeholder="Home/work address of Next of Kin Address" rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row align-items-center">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Relationship with Next of Kin</label>
                                            <input class="form-control" type="text" name="relationship_with_nok" placeholder="What is your connection with Next of Kin">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Guarantor</label>
                                            <input class="form-control" type="text" name="guarantor_fullName" placeholder="Full Name of Guarantor">
                                        </div>
                                    </div>

                                </div>

                                <div class="row align-items-center">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-control-label">Guarantors residential and work address/phone no</label>
                                            <textarea class="form-control" name="guarantor_address" placeholder="Guarantors residential and work address/phone no" rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="row align-items-center">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Relationship with Guarantor.</label>
                                            <input class="form-control" type="text" name="relationship_with_guarantor" placeholder="What is your connection with Guarantor.">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Upload Means of Identification <span class="btn-inner--icon" data-toggle="tooltip" data-placement="top" title="NIN, Drivers License, Voters Card, International Passport">
                                                    <i data-feather="alert-circle"></i></span>
                                            </label>
                                            <input type="file" name="meansOfID" id="IDentity" class="custom-input-file" data-multiple-caption="{count} files selected" />
                                            <label for="IDentity">
                                                <i data-feather="upload"></i>
                                                <span>Choose a file…</span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Passport photograph</label>
                                            <input type="file" name="passportPhoto" id="passport" class="custom-input-file" data-multiple-caption="{count} files selected" />
                                            <label for="passport">
                                                <i data-feather="upload"></i>
                                                <span>Choose a file…</span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Upload any other document </label>
                                            <input type="file" name="otherDocument" id="anyOther" class="custom-input-file" data-multiple-caption="{count} files selected" />
                                            <label for="anyOther">
                                                <i data-feather="upload"></i>
                                                <span>Choose a file…</span>
                                            </label>
                                        </div>
                                    </div>

                                </div>

                                <div class="row align-items-center">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-control-label">Immediate Previous work address</label>
                                            <textarea class="form-control" name="previous_work_address" placeholder="Employee Immediate Previous work address" rows="3"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <div class="pb-2 pt-2">
                                    <button type=submit name="domestic_employee_btn" class="btn btn-block btn-dark" onclick="this.classList.toggle('button--loading')">
                                        <span class="button__text">Upload Employee Data</span>
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>