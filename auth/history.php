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
            </div>
            <div class="row mx-n2">
                <div class="col-lg-3 col-sm-6 px-2">
                    <div class=card>
                        <div class="card-body text-center">
                            <div class=mb-3>
                                <div class="icon icon-shape icon-md bg-primary text-white"><i class="fas fa-wallet"></i></div>
                            </div>
                            <h5 class="h3 font-weight-bolder mb-1">₦25,370.00</h5><span class="d-block text-sm text-muted font-weight-bold">Wallet Balance</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 px-2">
                    <div class=card>
                        <div class="card-body text-center">
                            <div class=mb-3>
                                <div class="icon icon-shape icon-md bg-danger text-white"><i class="fas fa-cash-register"></i></div>
                            </div>
                            <h5 class="h3 font-weight-bolder mb-1">₦5,370.00</h5><span class="d-block text-sm text-muted font-weight-bold">Today's Income <i data-feather=chevron-down class=text-danger></i></span></div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 px-2">
                    <div class=card>
                        <div class="card-body text-center">
                            <div class=mb-3>
                                <div class="icon icon-shape icon-md bg-warning text-white"><i class="fas fa-shopping-basket"></i></div>
                            </div>
                            <h5 class="h3 font-weight-bolder mb-1">₦2,370.00</h5><span class="d-block text-sm text-muted font-weight-bold">Spendings <i data-feather=chevron-down class=text-danger></i></span></div>
                    </div>
                </div>
                <div class="col-lg-3 col-sm-6 px-2">
                    <div class=card>
                        <div class="card-body text-center">
                            <div class=mb-3>
                                <div class="icon icon-shape icon-md bg-success text-white"><i class="fas fa-receipt"></i></div>
                            </div>
                            <h5 class="h3 font-weight-bolder mb-1">863</h5><span class="d-block text-sm text-muted font-weight-bold">Today's Orders <i data-feather=chevron-up class=text-success></i></span></div>
                    </div>
                </div>
            </div>
        </div>
        <div class=container>
            <div class=row>
                <div class=col-md-12>
                    <div class="row mx-n2">
                        <div class="col-sm-6 col-lg-4 px-2">
                            <div class="card mb-3">
                                <div class="card-header pb-3"></div>
                                <div class="card-body pt-0">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <div class="icon icon-sm">
                                                <img alt="Image placeholder" src=../assets/img/svg/coat_of_arm.svg class=svg-inject style=width:100px;height:100px>
                                            </div>
                                        </div>
                                        <div class=text-right>
                                            <button type=button class="btn btn-xs btn-neutral btn-icon"><span class=btn-inner--icon><i data-feather=plus></i></span> <span class="btn-inner--text ml-1">Verify</span></button>
                                        </div>
                                    </div>
                                    <div class=mt-3>
                                        <h6 class=mb-0>Nation Identity Number <span class="text-sm text-muted">(NIN)</span></h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 px-2">
                            <div class="card mb-3">
                                <div class="card-header pb-3"></div>
                                <div class="card-body pt-0">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <div class="icon icon-sm">
                                                <img alt="Image placeholder" src=../assets/img/svg/nimc.jpg class=svg-inject style=width:100px;height:100px>
                                            </div>
                                        </div>
                                        <div class=text-right>
                                            <button type=button class="btn btn-xs btn-neutral btn-icon"><span class=btn-inner--icon><i data-feather=plus></i></span> <span class="btn-inner--text ml-1">Verify</span></button>
                                        </div>
                                    </div>
                                    <div class=mt-3>
                                        <h6 class=mb-0>Nation Identity MGT <span class="text-sm text-muted">(NIMC Slip)</span></h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 px-2">
                            <div class="card mb-3">
                                <div class="card-header pb-3"></div>
                                <div class="card-body pt-0">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <div class="icon icon-sm">
                                                <img alt="Image placeholder" src=../assets/img/svg/inec.png class=svg-inject style=width:100px;height:100px>
                                            </div>
                                        </div>
                                        <div class=text-right>
                                            <button type=button class="btn btn-xs btn-neutral btn-icon"><span class=btn-inner--icon><i data-feather=plus></i></span> <span class="btn-inner--text ml-1">Verify</span></button>
                                        </div>
                                    </div>
                                    <div class=mt-3>
                                        <h6 class=mb-0>Voters Identity Card</h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 px-2">
                            <div class="card mb-3">
                                <div class="card-header pb-3"></div>
                                <div class="card-body pt-0">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <div class="icon icon-sm">
                                                <img alt="Image placeholder" src=../assets/img/svg/firs_logo.jpg class=svg-inject style=width:130px;height:100px>
                                            </div>
                                        </div>
                                        <div class=text-right>
                                            <button type=button class="btn btn-xs btn-neutral btn-icon"><span class=btn-inner--icon><i data-feather=plus></i></span> <span class="btn-inner--text ml-1">Verify</span></button>
                                        </div>
                                    </div>
                                    <div class=mt-3>
                                        <h6 class=mb-0>TIN Verification</h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 px-2">
                            <div class="card mb-3">
                                <div class="card-header pb-3"></div>
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
                                        <h6 class=mb-0>CAC Verification</h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 px-2">
                            <div class="card mb-3">
                                <div class="card-header pb-3"></div>
                                <div class="card-body pt-0">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <div class="icon icon-sm">
                                                <img alt="Image placeholder" src=../assets/img/svg/coat_of_arm.jpg class=svg-inject style=width:140px;height:100px>
                                            </div>
                                        </div>
                                        <div class=text-right>
                                            <button type=button class="btn btn-xs btn-neutral btn-icon"><span class=btn-inner--icon><i data-feather=plus></i></span> <span class="btn-inner--text ml-1">Verify</span></button>
                                        </div>
                                    </div>
                                    <div class=mt-3>
                                        <h6 class=mb-0>International Passport</h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 px-2">
                            <div class="card mb-3">
                                <div class="card-header pb-3"></div>
                                <div class="card-body pt-0">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <div class="icon icon-sm">
                                                <img alt="Image placeholder" src=../assets/img/svg/frsc1.jpeg class=svg-inject style=width:150px;height:100px>
                                            </div>
                                        </div>
                                        <div class=text-right>
                                            <button type=button class="btn btn-xs btn-neutral btn-icon"><span class=btn-inner--icon><i data-feather=plus></i></span> <span class="btn-inner--text ml-1">Verify</span></button>
                                        </div>
                                    </div>
                                    <div class=mt-3>
                                        <h6 class=mb-0>Drivers License</h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 px-2">
                            <div class="card mb-3">
                                <div class="card-header pb-3"></div>
                                <div class="card-body pt-0">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <div class="icon icon-sm">
                                                <img alt="Image placeholder" src=../assets/img/svg/bvn.png class=svg-inject style=width:120px;height:100px>
                                            </div>
                                        </div>
                                        <div class=text-right>
                                            <button type=button class="btn btn-xs btn-neutral btn-icon"><span class=btn-inner--icon><i data-feather=plus></i></span> <span class="btn-inner--text ml-1">Verify</span></button>
                                        </div>
                                    </div>
                                    <div class=mt-3>
                                        <h6 class=mb-0>Bank Verification Number <span class="text-sm text-muted">(BVN)</span></h6>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-6 col-lg-4 px-2">
                            <div class="card mb-3">
                                <div class="card-header pb-3"></div>
                                <div class="card-body pt-0">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <div class="icon icon-sm">
                                                <img alt="Image placeholder" src=../assets/img/svg/coat_of_arm.svg class=svg-inject style=width:100px;height:100px>
                                            </div>
                                        </div>
                                        <div class=text-right>
                                            <button type=button class="btn btn-xs btn-neutral btn-icon"><span class=btn-inner--icon><i data-feather=plus></i></span> <span class="btn-inner--text ml-1">Verify</span></button>
                                        </div>
                                    </div>
                                    <div class=mt-3>
                                        <h6 class=mb-0>Nation Identity Number <span class="text-sm text-muted">(NIN)</span></h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </div>
        </div>
    </section>
        <script src=../assets/libs/jquery/dist/jquery.min.js></script>
        <script src=../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js></script>
        <script src=../assets/libs/svg-injector/dist/svg-injector.min.js></script>
        <script src=../assets/libs/feather-icons/dist/feather.min.js></script>
        <script src=../assets/libs/in-view/dist/in-view.min.js></script>
        <script src=../assets/libs/sticky-kit/dist/sticky-kit.min.js></script>
        <script src=../assets/libs/imagesloaded/imagesloaded.pkgd.min.js></script>
        <script src=../assets/libs/apexcharts/dist/apexcharts.min.js></script>
        <script src=../assets/libs/progressbar.js/dist/progressbar.min.js></script>
        <script src=../assets/js/main.js></script>
        <script>
            feather.replace({
                width: "1em",
                height: "1em"
            })
        </script>
        <script>
            ! function(e, t, a, n, g) {
                e[n] = e[n] || [], e[n].push({
                    "gtm.start": (new Date).getTime(),
                    event: "gtm.js"
                });
                var m = t.getElementsByTagName(a)[0],
                    r = t.createElement(a);
                r.async = !0, r.src = "../www.googletagmanager.com/gtm4c6a.js?id=GTM-MF4DZVH", m.parentNode.insertBefore(r, m)
            }(window, document, "script", "dataLayer")
        </script>
</body>

</html>