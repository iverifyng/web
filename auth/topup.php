<?php
$page = 'Topup';
include "./components/header.php";
include "./components/userstats.php";
include "./components/navbar.php";
include "./components/walletbalance.php";
?>

    <section class="bg-section-secondary pb-5">
        <div class=container>
            <div class="row justify-content-center">
                <div class=col-lg-9>
                    <div class=mb-5>
                        <div class=row>
                            <div class=col-md-6>
                                <div class=swiper-js-container>
                                    <div class="card bg-dark border-0">
                                        <div class=card-body>
                                            <div class="swiper-container swiper-fade">
                                                <div class=swiper-wrapper>
                                                    <div class=swiper-slide>
                                                        <div class="row justify-content-between align-items-center">
                                                            <div class=col><img src=../assets/img/svg/icons/Bank.svg alt="Image placeholder" class="rounded-sm" style="height: 26px; padding: 5px; background-color: white;"></div>
                                                            <div class=col-auto><span class="badge badge-white">Bank Transfer</span></div>
                                                        </div>
                                                        <div class=my-4>
                                                            <span class="text-light">
                                                                1. Topup with the minimum of ₦1,000.<br>
                                                                2. Upload proof of payment.
                                                            </span>
                                                        </div>
                                                        <div class=row>
                                                            <div class=col><button type=button class="btn btn-block btn-warning text-dark" data-toggle="modal" data-target="#providusBank">Providus</button></div>
                                                            <div class=col>
                                                                <button type=button class="btn btn-block btn-danger" data-toggle="modal" data-target="#zenithBank">Zenith</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class=col-md-6>
                                <div class=swiper-js-container>
                                    <div class="card bg-primary border-0">
                                        <div class=card-body>
                                            <div class="swiper-container swiper-fade">
                                                <div class=swiper-wrapper>
                                                    <div class=swiper-slide>
                                                        <div class="row justify-content-between align-items-center">
                                                            <div class=col>
                                                                <img src=../assets/img/svg/cards/mastercard.svg alt="Image placeholder" class="rounded-sm" style="height: 26px;">
                                                                <img src=../assets/img/svg/cards/visa.svg alt="Image placeholder" class="rounded-sm" style="height: 26px;">
                                                            </div>
                                                            <div class=col-auto><span class="badge badge-warning text-dark">Online Payment</span></div>
                                                        </div>
                                                        <div class=my-4>
                                                            <span class="text-light">
                                                                1. Enter the amount in the text box below.<br>
                                                                2. Click on the Topup button to make payment.
                                                            </span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row align-items-center">
                                                <div class=col-12>
                                                    <form>
                                                        <div class="form-row align-items-center">
                                                            <div class="col-7">
                                                                <div class="form-group mb-0">
                                                                    <div class="input-group input-group-merge"><input type=number class="form-control form-control-prepend border-0" placeholder=Amount aria-label="Topup Amount" value=1000>
                                                                        <div class=input-group-prepend><span class="input-group-text border-0"><i>₦</i></span></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-5"><button type=submit class="btn btn-block btn-primary">Save</button></div>
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
                    <hr class=my-5>
                    <div>
                        <h5 class=mb-4>Topup history</h5>
                        <div class=table-responsive>
                            <table class="table align-items-center">
                                <thead>
                                <tr>
                                    <th scope=col>Description</th>
                                    <th scope=col>Date</th>
                                    <th scope=col>Amount</th>
                                    <th scope=col>Balance</th>
                                    <th scope=col>Status</th>
                                    <th></th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <th scope=row><span class=client>Apple Inc</span></th>
                                    <td class=order><span class=date>10/09/2018</span></td>
                                    <td><span class="value text-sm mb-0">$1.274,89</span></td>
                                    <td><span class="taxes text-sm mb-0">$1.115,45</span></td>
                                    <td><span class="badge badge-danger">Failed</span></td>
                                    <td>
                                        <div class="actions text-right ml-3"><a href=# class="action-item mr-2" data-toggle=tooltip title=Edit><i data-feather=edit-2></i> </a><a href=# class="action-item mr-2" data-toggle=tooltip title=Invoice><i data-feather=file-text></i></a>
                                            <div class=dropdown><a href=# class=action-item role=button data-toggle=dropdown aria-haspopup=true data-expanded=false><i data-feather=more-vertical></i></a>
                                                <div class="dropdown-menu dropdown-menu-right"><a href=#! class=dropdown-item>Action </a><a href=#! class=dropdown-item>Another action </a><a href=#! class=dropdown-item>Something else here</a></div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope=row><span class=client>Apple Inc</span></th>
                                    <td class=order><span class=date>10/09/2018</span></td>
                                    <td><span class="value text-sm mb-0">$1.274,89</span></td>
                                    <td><span class="taxes text-sm mb-0">$1.115,45</span></td>
                                    <td><span class="badge badge-success">Success</span></td>
                                    <td>
                                        <div class="actions text-right ml-3"><a href=# class="action-item mr-2" data-toggle=tooltip title=Edit><i data-feather=edit-2></i> </a><a href=# class="action-item mr-2" data-toggle=tooltip title=Invoice><i data-feather=file-text></i></a>
                                            <div class=dropdown><a href=# class=action-item role=button data-toggle=dropdown aria-haspopup=true data-expanded=false><i data-feather=more-vertical></i></a>
                                                <div class="dropdown-menu dropdown-menu-right"><a href=#! class=dropdown-item>Action </a><a href=#! class=dropdown-item>Another action </a><a href=#! class=dropdown-item>Something else here</a></div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <th scope=row><span class=client>Apple Inc</span></th>
                                    <td class=order><span class=date>10/09/2018</span></td>
                                    <td><span class="value text-sm mb-0">$1.274,89</span></td>
                                    <td><span class="taxes text-sm mb-0">$1.115,45</span></td>
                                    <td><span class="badge badge-info">Pending</span></td>
                                    <td>
                                        <div class="actions text-right ml-3"><a href=# class="action-item mr-2" data-toggle=tooltip title=Edit><i data-feather=edit-2></i> </a><a href=# class="action-item mr-2" data-toggle=tooltip title=Invoice><i data-feather=file-text></i></a>
                                            <div class=dropdown><a href=# class=action-item role=button data-toggle=dropdown aria-haspopup=true data-expanded=false><i data-feather=more-vertical></i></a>
                                                <div class="dropdown-menu dropdown-menu-right"><a href=#! class=dropdown-item>Action </a><a href=#! class=dropdown-item>Another action </a><a href=#! class=dropdown-item>Something else here</a></div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include "./components/footer.php"; ?>