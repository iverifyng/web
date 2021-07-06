<?php
$page = 'Account';
include "./components/header.php";
include "./components/userstats.php";
include "./components/navbar.php";
?>
    
    <?php include "./components/userprofile.php"; ?>

        <?php
        $select_query = "SELECT * FROM users WHERE id ='".$_SESSION['id']."'";
        $result = mysqli_query($conn, $select_query);
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
                $id = $row['id'];
                $securityKey = $row['securityKey'];
                $firstName = $row['firstName'];
                $lastName = $row['lastName'];
        ?>
    <div class="slice slice-sm">
        <div class=container>
            <div class="row justify-content-center">
                <div class=col-lg-9>
                    <div class=row>
                        <div class=col-lg-12>
                            <div class=card>
                                <div class=card-body>
                                    <div class="row row-grid align-items-center">
                                        <div class=col-lg-8>
                                            <div class="media align-items-center"><span class="avatar bg-danger text-white rounded-circle mr-3"><i data-feather=key></i></span>
                                                <div class=media-body>
                                                    <h5 class=mb-0>Security Key</h5>
                                                    <p class="text-muted lh-150 text-sm mb-0" id="myInput"><? echo $securityKey; ?></p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-auto flex-fill mt-4 mt-sm-0 text-sm-right d-none d-lg-block">
                                            <button onclick="clipboardCopy()" class="btn btn-sm btn-neutral rounded-pill">Copy Key</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <h5 class=mb-3>General information</h5>
                                <form>
                                    <div class=row>
                                        <div class=col-md-6>
                                            <div class=form-group>
                                                <label class=form-control-label>Contact Person First Name</label>
                                                <input class=form-control type=text placeholder="Enter your first name" value="<? echo $firstName; ?>" readonly>
                                            </div>
                                        </div>
                                        <div class=col-md-6>
                                            <div class=form-group><label class=form-control-label>Contact Person Last Name</label>
                                                <input class=form-control type=text placeholder="Also your last name" value="<? echo $lastName; ?>" readonly>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row align-items-center">
                                        <div class=col-md-6>
                                            <div class=form-group><label class=form-control-label>Birthday</label> <input type=text class=form-control data-toggle=date placeholder="Select your birth date"></div>
                                        </div>
                                        <div class=col-md-6>
                                            <div class=form-group><label class=form-control-label>Gender</label> <select class=custom-select><option disabled=disabled selected=selected>Select option</option><option value=1>Female</option><option value=2>Male</option><option value=2>Rather not say</option></select></div>
                                        </div>
                                    </div>
                                    <div class=row>
                                        <div class=col-md-6>
                                            <div class=form-group><label class=form-control-label>Email</label> <input class=form-control type=email placeholder=name@exmaple.com> <small class="form-text text-muted mt-2">This is the main email address that we'll send notifications.</small></div>
                                        </div>
                                        <div class=col-md-6>
                                            <div class=form-group><label class=form-control-label>Phone</label> <input class=form-control type=text placeholder="+40-777 245 549"></div>
                                        </div>
                                    </div>
                                    <div class=mt-3><button type=button class="btn btn-sm btn-primary">Save</button></div>
                                </form>
                            </div>
                            <hr>
                            <div>
                                <div class="page-inner-header mb-4">
                                    <h5 class=mb-1>Delete account</h5>
                                    <p class="text-muted mb-0">Once you delete your account, there is no going back. Please be certain.</p>
                                </div>
                                <div class=row>
                                    <div class=col-md-8><button type=button class="btn btn-danger" data-toggle=modal data-target=#modal_account_deactivate>Delete your account</button></div>
                                </div>
                                <div class="modal fade" id=modal_account_deactivate tabindex=-1 role=dialog aria-labelledby=modal_account_deactivate aria-hidden=true>
                                    <div class="modal-dialog modal-dialog-centered" role=document>
                                        <div class=modal-content>
                                            <div class=modal-body>
                                                <div class="pt-5 text-center">
                                                    <div class="icon text-danger"><i data-feather=user-x class=""></i></div>
                                                    <h4 class="h5 mt-5 mb-3">Extremely important</h4>
                                                    <p>We will immediately delete all of your personal data from our database. This action can not be undone. Are you sure you want to do this?</p>
                                                </div>
                                            </div>
                                            <div class=modal-footer><button type=button class="btn btn-sm btn-link text-danger btn-zoom--hover font-weight-600">Delete</button> <button type=button class="btn btn-sm btn-secondary" data-dismiss=modal>Cancel</button></div>
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
<?php
    }
}
?>
<?php include "./components/footer.php"; ?>