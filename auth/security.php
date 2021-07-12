<?php
$page = 'Account';
$page1 = 'Security';
include "./components/header.php";
include "./components/userstats.php";
include "./components/navbar.php";
?>

    <?php include "./components/userprofile.php"; ?>

    <div class="slice slice-sm bg-section-secondary">
        <div class=container>
            <div class="row justify-content-center">
                <div class=col-lg-9>
                    <div class=row>
                        <div class=col-lg-12>
                            <form>
                                <h5 class=mb-4>Change password</h5>
                                <div class=row>
                                    <div class=col-md-6>
                                        <div class=form-group><label class=form-control-label>Old password</label> <input class=form-control type=password></div>
                                    </div>
                                </div>
                                <div class=row>
                                    <div class=col-md-6>
                                        <div class=form-group><label class=form-control-label>New password</label> <input class=form-control type=password></div>
                                    </div>
                                    <div class=col-md-6>
                                        <div class=form-group><label class=form-control-label>Confirm password</label> <input class=form-control type=password></div>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <button type=button class="btn btn-dark">Update</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php include "./components/footer.php"; ?>