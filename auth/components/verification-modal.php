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
                                    <button type=submit name="pop_btn" class="btn btn-block btn-dark">Upload Proof of Payment</button>
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
                                Amount: ₦8,500.00
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
                                    <button type=submit name="domestic_employee_btn" class="btn btn-block btn-dark">Upload Employee Data</button>
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
                                Amount: ₦8,500.00
                            </span>
                        </div>
                    </div>
                    <div class="col align-items-center">
                        <div class=col-md-12>
                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" enctype="multipart/form-data">
                                <h6>Personal Data</h6>
                                <div class="row align-items-center">
                                    <div class="col-md-6" style="display: none">
                                        <div class="form-group">
                                            <label class="form-control-label">User ID</label>
                                            <input class="form-control" type="text" name="userID" value="<?php echo $_SESSION['id'] ?>" readonly>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Employee First Name</label>
                                            <input class="form-control" type="text" placeholder="First name">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Employee Last Name</label>
                                            <input class="form-control" type="text" placeholder="Last name">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Other Names</label>
                                            <input class="form-control" type="text" placeholder="Other names">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Date of Birth</label>
                                            <input type="date" class="form-control" data-toggle="date" placeholder="Select your birth date">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Gender</label>
                                            <select class="custom-select">
                                                <option disabled selected>Select option</option>
                                                <option value="Female">Female</option>
                                                <option value="Male">Male</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Religion</label>
                                            <select class="custom-select">
                                                <option disabled selected>Select option</option>
                                                <option value="Christian">Christian</option>
                                                <option value="Muslim">Muslim</option>
                                                <option value="Others">Others</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Marital Status</label>
                                            <select class="custom-select">
                                                <option disabled selected>Select option</option>
                                                <option value="Single">Single</option>
                                                <option value="Married">Married</option>
                                                <option value="Divorced">Divorced</option>
                                                <option value="Separated">Separated</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Educational Qualification</label>
                                            <select class="custom-select">
                                                <option disabled selected>Select option</option>
                                                <option value="Senior Secondary Certificate Examination (SSCE)">Senior Secondary Certificate Examination (SSCE)</option>
                                                <option value="Ordinary National Diploma (OND)">Ordinary National Diploma (OND)</option>
                                                <option value="Higher National Diploma (HND)">Higher National Diploma (HND)</option>
                                                <option value="Bachelor Degree (BD)">Bachelor Degree (BD)</option>
                                                <option value="Masters Degree (MD)">Masters Degree (MD)</option>
                                                <option value="PhD">PhD</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Phone Number</label>
                                            <input class="form-control" type="tel" placeholder="0801 234 5678">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Next of Kin</label>
                                            <input class="form-control" type="text" placeholder="Full Name of Next of Kin">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Emergency Contact</label>
                                            <input class="form-control" type="tel" placeholder="Who to call in the case of emergency">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Strength</label>
                                            <input class="form-control" type="text" placeholder="What motivates you?">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Weakness</label>
                                            <input class="form-control" type="text" placeholder="What affects your performance?">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Upload Means of Identification <span class="btn-inner--icon" data-toggle="tooltip" data-placement="top" title="NIN, Drivers License, Voters Card, International Passport">
                                                    <i data-feather="alert-circle"></i></span>
                                            </label>
                                            <input type="file" name="file-1[]" id="file-1" class="custom-input-file" data-multiple-caption="{count} files selected" />
                                            <label for="file-1">
                                                <i data-feather="upload"></i>
                                                <span>Choose a file…</span>
                                            </label>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">State Of Origin</label>
                                            <select class="custom-select">
                                                <option disabled selected>Select State Of Origin</option>
                                                <option value="Abia">Abia</option>
                                                <option value="Adamawa">Adamawa</option>
                                                <option value="Akwa Ibom">Akwa Ibom</option>
                                                <option value="Anambra">Anambra</option>
                                                <option value="Bauchi">Bauchi</option>
                                                <option value="Bayelsa">Bayelsa</option>
                                                <option value="Benue">Benue</option>
                                                <option value="Borno">Borno</option>
                                                <option value="Cross River">Cross River</option>
                                                <option value="Delta">Delta</option>
                                                <option value="Ebonyi">Ebonyi</option>
                                                <option value="Edo">Edo</option>
                                                <option value="Ekiti">Ekiti</option>
                                                <option value="Enugu">Enugu</option>
                                                <option value="Abuja">FCT - Abuja</option>
                                                <option value="Gombe">Gombe</option>
                                                <option value="Imo">Imo</option>
                                                <option value="Jigawa">Jigawa</option>
                                                <option value="Kaduna">Kaduna</option>
                                                <option value="Kano">Kano</option>
                                                <option value="Katsina">Katsina</option>
                                                <option value="Kebbi">Kebbi</option>
                                                <option value="Kogi">Kogi</option>
                                                <option value="Kwara">Kwara</option>
                                                <option value="Lagos">Lagos</option>
                                                <option value="Nasarawa">Nasarawa</option>
                                                <option value="Niger">Niger</option>
                                                <option value="Ogun">Ogun</option>
                                                <option value="Ondo">Ondo</option>
                                                <option value="Osun">Osun</option>
                                                <option value="Oyo">Oyo</option>
                                                <option value="Plateau">Plateau</option>
                                                <option value="Rivers">Rivers</option>
                                                <option value="Sokoto">Sokoto</option>
                                                <option value="Taraba">Taraba</option>
                                                <option value="Yobe">Yobe</option>
                                                <option value="Zamfara">Zamfara</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">LGA/Village/Town</label>
                                            <input class="form-control" type="text" placeholder="LGA/Village/Town">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Permanent Home</label>
                                            <input class="form-control" type="text" placeholder="Permanent home address">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Village Market</label>
                                            <input class="form-control" type="text" placeholder="Village Market">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Nearest Catholic Church in Village</label>
                                            <textarea class="form-control" placeholder="Nearest Catholic Church in Village" resize="none" rows="2"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Nearest School/Landmark in Village</label>
                                            <textarea class="form-control" placeholder="Nearest School/Landmark in Village" resize="none" rows="2"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Directions to Village</label>
                                            <textarea class="form-control" placeholder="Directions to Village" rows="1"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Name of Church Attended</label>
                                            <input class="form-control" type="text" placeholder="Name of Church Attended">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">State Of Residence</label>
                                            <select class="custom-select">
                                                <option disabled selected>Select State Of Residence</option>
                                                <option value="Abia">Abia</option>
                                                <option value="Adamawa">Adamawa</option>
                                                <option value="Akwa Ibom">Akwa Ibom</option>
                                                <option value="Anambra">Anambra</option>
                                                <option value="Bauchi">Bauchi</option>
                                                <option value="Bayelsa">Bayelsa</option>
                                                <option value="Benue">Benue</option>
                                                <option value="Borno">Borno</option>
                                                <option value="Cross River">Cross River</option>
                                                <option value="Delta">Delta</option>
                                                <option value="Ebonyi">Ebonyi</option>
                                                <option value="Edo">Edo</option>
                                                <option value="Ekiti">Ekiti</option>
                                                <option value="Enugu">Enugu</option>
                                                <option value="Abuja">FCT - Abuja</option>
                                                <option value="Gombe">Gombe</option>
                                                <option value="Imo">Imo</option>
                                                <option value="Jigawa">Jigawa</option>
                                                <option value="Kaduna">Kaduna</option>
                                                <option value="Kano">Kano</option>
                                                <option value="Katsina">Katsina</option>
                                                <option value="Kebbi">Kebbi</option>
                                                <option value="Kogi">Kogi</option>
                                                <option value="Kwara">Kwara</option>
                                                <option value="Lagos">Lagos</option>
                                                <option value="Nasarawa">Nasarawa</option>
                                                <option value="Niger">Niger</option>
                                                <option value="Ogun">Ogun</option>
                                                <option value="Ondo">Ondo</option>
                                                <option value="Osun">Osun</option>
                                                <option value="Oyo">Oyo</option>
                                                <option value="Plateau">Plateau</option>
                                                <option value="Rivers">Rivers</option>
                                                <option value="Sokoto">Sokoto</option>
                                                <option value="Taraba">Taraba</option>
                                                <option value="Yobe">Yobe</option>
                                                <option value="Zamfara">Zamfara</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Full Address</label>
                                            <input class="form-control" type="text" placeholder="Full Residential Address">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Directions to Residence</label>
                                            <textarea class="form-control" placeholder="Directions to Residential Address" rows="1"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Spoken Languages</label>
                                            <textarea class="form-control" placeholder="Languages Spoken" rows="1"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Local Dialect</label>
                                            <input class="form-control" type="text" placeholder="Local Language">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Account Name</label>
                                            <input class="form-control" type="text" placeholder="Kelechi Kayode Aminu">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Account Number</label>
                                            <input class="form-control" type="text" placeholder="1234567890">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Bank Name</label>
                                            <input class="form-control" type="text" placeholder="Zenith Bank">
                                        </div>
                                    </div>

                                </div>

                                <div class="row align-items-center">

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-control-label">Clan Meeting</label>
                                            <textarea class="form-control" placeholder="Meeting Days, Time and Venue" rows="2"></textarea>
                                        </div>
                                    </div>
                                </div>

                                <h6>Family Details</h6>

                                <div class="row align-items-center">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Spouse Name (If Married)</label>
                                            <input class="form-control" type="text" placeholder="Spouse Name">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Spouse Occupation</label>
                                            <textarea class="form-control" placeholder="Spouse Occupation/Place of Work/Address and Phone Number" rows="1"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Children (If Any)</label>
                                            <textarea class="form-control" placeholder="Children Name and Age" rows="1"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Fathers Name and Occupation</label>
                                            <input class="form-control" type="text" placeholder="Fathers Name and Occupation">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Mothers Name and Occupation</label>
                                            <input class="form-control" type="text" placeholder="Mothers Name and Occupation">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">No of Siblings/No in Family</label>
                                            <input class="form-control" type="text" placeholder="No of Siblings/No in Family">
                                        </div>
                                    </div>

                                </div>

                                <div class="row align-items-center">

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-control-label">Siblings Names and Address</label>
                                            <textarea class="form-control" placeholder="Siblings Names and Address" rows="3"></textarea>
                                        </div>
                                    </div>

                                </div>

                                <h6>Work History 1</h6>

                                <div class="row align-items-center">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Company/Employer Name</label>
                                            <input class="form-control" type="text" placeholder="Company/Employer Name">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Contact number</label>
                                            <input class="form-control" type="text" placeholder="Contact Number">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-control-label">Address and Direction</label>
                                            <textarea class="form-control" placeholder="Address and Direction" rows="2"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-control-label">Reason for Leaving</label>
                                            <textarea class="form-control" placeholder="Reason for Leaving" rows="2"></textarea>
                                        </div>
                                    </div>

                                </div>

                                <h6>Work History 2</h6>

                                <div class="row align-items-center">

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Company/Employer Name</label>
                                            <input class="form-control" type="text" placeholder="Company/Employer Name">
                                        </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="form-control-label">Contact number</label>
                                            <input class="form-control" type="text" placeholder="Contact Number">
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-control-label">Address and Direction</label>
                                            <textarea class="form-control" placeholder="Address and Direction" rows="2"></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="form-control-label">Reason for Leaving</label>
                                            <textarea class="form-control" placeholder="Reason for Leaving" rows="2"></textarea>
                                        </div>
                                    </div>

                                </div>
                                <div class="pb-2 pt-2">
                                    <button type=submit name="corporate_employee_btn" class="btn btn-block btn-dark">Upload Employee Data</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>