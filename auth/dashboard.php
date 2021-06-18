<?php
include "./components/header.php";
include "./components/userstats.php";
include "./components/navbar.php";
?>

    <section class="slice py-5 bg-section-secondary">
        <div class=container>
            <div class="row align-items-center mb-4">
                <div class=col>
                    <h1 class="h4 mb-0">Overview</h1>
                </div>
                <div class="">
                    <h5 class="h3 font-weight-bolder mb-1"><span class="text-sm text-muted font-weight-bold">Wallet Balance</span> ₦0</h5>
                </div>
            </div>
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
                                                <button type=button class=action-item data-toggle="modal" data-target="#employeeLite" data-toggle="tooltip" data-placement="top" title="Features">
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
                                            <div class="actions mr-n2">
                                                <button type=button class=action-item data-toggle="modal" data-target="#companyModal" data-toggle="tooltip" data-placement="top" title="Features">
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
                                            <div class="actions mr-n2">
                                                <button type=button class=action-item data-toggle="modal" data-target="#certificateModal" data-toggle="tooltip" data-placement="top" title="Features">
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
                                            <button type=button class="btn btn-xs btn-neutral btn-icon"><span class=btn-inner--icon><i data-feather=plus></i></span> <span class="btn-inner--text ml-1">Verify</span></button>
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
                                            <div class="actions mr-n2">
                                                <button type=button class=action-item data-toggle="modal" data-target="#employeeComplete" data-toggle="tooltip" data-placement="top" title="Features">
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
                                            <button type=button class="btn btn-xs btn-neutral btn-icon"><span class=btn-inner--icon><i data-feather=plus></i></span> <span class="btn-inner--text ml-1">Verify</span></button>
                                        </div>
                                    </div>
                                    <div class=mt-3>
                                        <h6 class=mb-0>Employee Complete</span></h6>
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
                                            <div class="actions mr-n2">
                                                <button type=button class=action-item data-toggle="modal" data-target="#employeeLite" data-toggle="tooltip" data-placement="top" title="Features">
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
                                            <div class="actions mr-n2">
                                                <button type=button class=action-item data-toggle="modal" data-target="#guarantorModal" data-toggle="tooltip" data-placement="top" title="Features">
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
                                            <button type=button class="btn btn-xs btn-neutral btn-icon"><span class=btn-inner--icon><i data-feather=plus></i></span> <span class="btn-inner--text ml-1">Verify</span></button>
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
                                            <div class="actions mr-n2">
                                                <button type=button class=action-item data-toggle="modal" data-target="#propertyModal" data-toggle="tooltip" data-placement="top" title="Features">
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
                                            <div class="actions mr-n2">
                                                <button type=button class=action-item data-toggle="modal" data-target="#tenantModal" data-toggle="tooltip" data-placement="top" title="Features">
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

                    </div>
                </div>
            </div>
        </div>
    </section>

<?php include "./components/footer.php"; ?>