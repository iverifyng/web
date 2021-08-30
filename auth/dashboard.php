<?php
$page = 'Dashboard';
include "../config/db.php";
include "./components/header.php";
include "./components/navbar.php";
include "./components/walletbalance.php";
require_once "../controllers/query.php";
require_once "../controllers/promo.php";

$select_query = "SELECT * FROM pricelist";
$result = mysqli_query($conn, $select_query);
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $corporateEmployee = $row['corporateEmployee'];
        $domesticEmployee = $row['domesticEmployee'];
        $tenantVerification = $row['tenantVerification'];
        $propertyVerification = $row['propertyVerification'];
        $employeeLite = $row['employeeLite'];
        $companyVerification = $row['companyVerification'];
        $certificateVerification = $row['certificateVerification'];
        $creditCheck = $row['creditCheck'];
        $guarantorVerification = $row['guarantorVerification'];
    }
}
?>
    <section class="bg-section-secondary pb-5">
        <div class=container>
            <div class=row>
                <div class=col-md-12>
                    <div class="row mx-n2">
                        <div class="col-sm-6 col-lg-4 px-2">
                            <div class="card mb-3">
                                <div class="card-header pb-3">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div><span class=h6></span></div>
                                        <div class=text-right>
                                            <div class="actions mr-n2">
                                                <button type=button class="action-item text-dark" data-toggle="modal" data-target="#employeeLite" data-toggle="tooltip" data-placement="top" title="Features">
                                                    <i data-feather=alert-circle></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body pt-0">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <div class="icon icon-sm">
                                                <img alt="Image placeholder" src=../assets/img/svg/identity.jpeg class=svg-inject style=width:100px;height:100px>
                                            </div>
                                        </div>
                                        <div class=text-right>
                                            <a href="identity-verification" class="btn btn-xs btn-neutral btn-icon">
                                                <span class=btn-inner--icon><i data-feather=plus></i></span>
                                                <span class="btn-inner--text ml-1">View All</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class=mt-3>
                                        <h6 class=mb-0>Identity Verification <span class="text-sm text-muted">(ID Checks)</span></h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 px-2">
                            <div class="card mb-3">
                                <div class="card-header pb-3">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div><span class=h6></span></div>
                                        <div class=text-right>
                                            <div class="actions d-flex mr-n2">
                                                ₦<?php echo number_format($companyVerification, 0, '.', ','); ?>
                                                <button type=button class="action-item text-dark" data-toggle="modal" data-target="#companyModal" data-toggle="tooltip" data-placement="top" title="Features">
                                                    <i data-feather=alert-circle></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body pt-0">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <div class="icon icon-sm">
                                                <img alt="Image placeholder" src=../assets/img/svg/cac_logo.jpg class=svg-inject style=width:100px;height:100px>
                                            </div>
                                        </div>
                                        <div class=text-right>
                                            <button type=button class="btn btn-xs btn-neutral btn-icon"><span class=btn-inner--icon><i data-feather=plus></i></span> <span class="btn-inner--text ml-1">Verify</span></button>
                                        </div>
                                    </div>
                                    <div class=mt-3>
                                        <h6 class=mb-0>Company Verification</h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 px-2">
                            <div class="card mb-3">
                                <div class="card-header pb-3">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div><span class=h6></span></div>
                                        <div class=text-right>
                                            <div class="actions d-flex mr-n2">
                                                ₦<?php echo number_format($certificateVerification, 0, '.', ','); ?>
                                                <button type=button class="text-dark action-item" data-toggle="modal" data-target="#certificateModal" data-toggle="tooltip" data-placement="top" title="Features">
                                                    <i data-feather=alert-circle></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body pt-0">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <div class="icon icon-sm">
                                                <img alt="Image placeholder" src=../assets/img/svg/certificate.png class=svg-inject style=width:100px;height:100px>
                                            </div>
                                        </div>
                                        <div class=text-right>
                                            <a href="certificate-verification" class="btn btn-xs btn-neutral btn-icon">
                                                <span class=btn-inner--icon><i data-feather=plus></i></span>
                                                <span class="btn-inner--text ml-1">Verify</span>
                                            </a>
                                        </div>
                                    </div>
                                    <div class=mt-3>
                                        <h6 class=mb-0>Certificate Verification</h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 px-2">
                            <div class="card mb-3">
                                <div class="card-header pb-3">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div><span class=h6></span></div>
                                        <div class=text-right>
                                            <div class="actions d-flex mr-n2">
                                                ₦<?php echo number_format($corporateEmployee, 0, '.', ','); ?>
                                                <button type=button class="action-item text-dark" data-toggle="modal" data-target="#employeeComplete" data-toggle="tooltip" data-placement="top" title="Features">
                                                    <i data-feather=alert-circle></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body pt-0">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <div class="icon icon-sm">
                                                <img alt="Image placeholder" src=../assets/img/svg/employee.svg class=svg-inject style=width:100px;height:100px>
                                            </div>
                                        </div>
                                        <div class=text-right>
                                            <button data-toggle="modal" data-target="#employeeSelect" type=button class="btn btn-xs btn-neutral btn-icon">
                                                <span class=btn-inner--icon><i data-feather=plus></i></span>
                                                <span class="btn-inner--text ml-1">Verify</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class=mt-3>
                                        <h6 class=mb-0>Employee Unlimited</span></h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 px-2">
                            <div class="card mb-3">
                                <div class="card-header pb-3">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div><span class=h6></span></div>
                                        <div class=text-right>
                                            <div class="actions d-flex mr-n2">
                                                ₦<?php echo number_format($employeeLite, 0, '.', ','); ?>
                                                <button type=button class="action-item text-dark" data-toggle="modal" data-target="#employeeLite" data-toggle="tooltip" data-placement="top" title="Features">
                                                    <i data-feather=alert-circle></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body pt-0">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <div class="icon icon-sm">
                                                <img alt="Image placeholder" src=../assets/img/svg/employeelite.svg class=svg-inject style=width:100px;height:100px>
                                            </div>
                                        </div>
                                        <div class=text-right>
                                            <button type=button class="btn btn-xs btn-neutral btn-icon"><span class=btn-inner--icon><i data-feather=plus></i></span> <span class="btn-inner--text ml-1">Verify</span></button>
                                        </div>
                                    </div>
                                    <div class=mt-3>
                                        <h6 class=mb-0>Employee Lite</h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 px-2">
                            <div class="card mb-3">
                                <div class="card-header pb-3">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div><span class=h6></span></div>
                                        <div class=text-right>
                                            <div class="actions d-flex mr-n2">
                                                ₦<?php echo number_format($guarantorVerification, 0, '.', ','); ?>
                                                <button type=button class="action-item text-dark" data-toggle="modal" data-target="#guarantorModal" data-toggle="tooltip" data-placement="top" title="Features">
                                                    <i data-feather=alert-circle></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body pt-0">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <div class="icon icon-sm">
                                                <img alt="Image placeholder" src=../assets/img/svg/guarantor.svg class=svg-inject style=width:100px;height:100px>
                                            </div>
                                        </div>
                                        <div class=text-right>
                                            <button data-toggle="modal" data-dismiss="modal" data-target="#guarantorVerification" class="btn btn-xs btn-neutral btn-icon">
                                                <span class=btn-inner--icon><i data-feather=plus></i></span>
                                                <span class="btn-inner--text ml-1">Verify</span>
                                            </button>
                                        </div>
                                    </div>
                                    <div class=mt-3>
                                        <h6 class=mb-0>Guarantor Verification</h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 px-2">
                            <div class="card mb-3">
                                <div class="card-header pb-3">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div><span class=h6></span></div>
                                        <div class=text-right>
                                            <div class="actions d-flex mr-n2">
                                                ₦<?php echo number_format($propertyVerification, 0, '.', ','); ?>
                                                <button type=button class="action-item text-dark" data-toggle="modal" data-target="#propertyModal" data-toggle="tooltip" data-placement="top" title="Features">
                                                    <i data-feather=alert-circle></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body pt-0">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <div class="icon icon-sm">
                                                <img alt="Image placeholder" src=../assets/img/svg/property.svg class=svg-inject style=width:100px;height:100px>
                                            </div>
                                        </div>
                                        <div class=text-right>
                                            <button type=button class="btn btn-xs btn-neutral btn-icon"><span class=btn-inner--icon><i data-feather=plus></i></span> <span class="btn-inner--text ml-1">Verify</span></button>
                                        </div>
                                    </div>
                                    <div class=mt-3>
                                        <h6 class=mb-0>Property Verification</h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 px-2">
                            <div class="card mb-3">
                                <div class="card-header pb-3">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div><span class=h6></span></div>
                                        <div class=text-right>
                                            <div class="actions d-flex mr-n2">
                                                ₦<?php echo number_format($tenantVerification, 0, '.', ','); ?>
                                                <button type=button class="action-item text-dark" data-toggle="modal" data-target="#tenantModal" data-toggle="tooltip" data-placement="top" title="Features">
                                                    <i data-feather=alert-circle></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body pt-0">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <div class="icon icon-sm">
                                                <img alt="Image placeholder" src=../assets/img/svg/tenant.svg class=svg-inject style=width:100px;height:100px>
                                            </div>
                                        </div>
                                        <div class=text-right>
                                            <button type=button class="btn btn-xs btn-neutral btn-icon"><span class=btn-inner--icon><i data-feather=plus></i></span> <span class="btn-inner--text ml-1">Verify</span></button>
                                        </div>
                                    </div>
                                    <div class=mt-3>
                                        <h6 class=mb-0>Tenant Verification</h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 px-2">
                            <div class="card mb-3">
                                <div class="card-header pb-3">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div><span class=h6></span></div>
                                        <div class=text-right>
                                            <div class="actions d-flex mr-n2">
                                                ₦<?php echo number_format($creditCheck, 0, '.', ','); ?>
                                                <button type=button class="action-item text-dark" data-toggle="modal" data-target="#tenantModal" data-toggle="tooltip" data-placement="top" title="Features">
                                                    <i data-feather=alert-circle></i>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body pt-0">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <div class="icon icon-sm">
                                                <img alt="Image placeholder" src=../assets/img/svg/credit-card.svg class=svg-inject style=width:100px;height:100px>
                                            </div>
                                        </div>
                                        <div class=text-right>
                                            <button type=button class="btn btn-xs btn-neutral btn-icon"><span class=btn-inner--icon><i data-feather=plus></i></span> <span class="btn-inner--text ml-1">Verify</span></button>
                                        </div>
                                    </div>
                                    <div class=mt-3>
                                        <h6 class=mb-0>Credit Check</h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="modal modal-fluid fade" id="staticBackdrop" tabindex="-1" data-backdrop="static" role="dialog" aria-labelledby="modal_1" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row justify-content-center">
                            <div class="col-lg-8 text-center py-3">
                                <h6 class="h3">Hello <? echo $_SESSION['firstName']; ?><? echo $_SESSION['companyName']; ?><br><small>You stand a chance to win a free employee verification👏</small></h6>
                                <p class="lead text-muted">
                                     Click on the button below<br> to tell us why you should win a free employee verification.<br>
                                     Follow us on LinkedIn & Instagram <b class="text-dark">@iverify.ng</b>.
                                </p>
                                <button data-toggle="modal" data-dismiss="modal" data-target="#promoModal" class="btn btn-dark">Tell us why</button><button class="btn btn-danger" data-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

<?php include "./components/footer.php"; ?>