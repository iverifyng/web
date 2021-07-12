<?php
$page = 'Topup';
include "./components/header.php";
include "./components/navbar.php";
include "./components/walletbalance.php";
require_once "../controllers/query.php";
require_once "../controllers/pay.php";
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
                                                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                                                        <div class="form-row align-items-center">
                                                            <div class="col-7">
                                                                <div class="form-group mb-0">
                                                                    <div class="input-group input-group-merge">
                                                                        <input class="form-control" type="hidden" name="email" value="<?php echo $_SESSION['email']; ?>" readonly>
                                                                        <input class="form-control" type="hidden" name="name" value="<?php echo $_SESSION['firstName']; ?> <?php echo $_SESSION['lastName']; ?>" readonly>
                                                                        <input type=number name="amount" class="form-control form-control-prepend border-0" placeholder=Amount aria-label="Topup Amount">
                                                                        <div class=input-group-prepend><span class="input-group-text border-0"><i>₦</i></span></div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-5">
                                                                <button type="submit" name="pay" class="btn btn-block btn-primary">Topup</button>
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
                    <hr class=my-5>
                    <div>
                        <h5 class=mb-4>Topup history</h5>
                        <div class="table-responsive">
                            <table id="datatables-basic" class="table table-striped" style="width:100%">
                                <thead>
                                <tr>
                                    <th>Transaction Ref.</th>
                                    <th>Amount</th>
                                    <th>Mode of Payment</th>
                                    <th>date</th>
                                    <th>Status</th>
                                    <th class="text-right">Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                <?php
                                $select_query = "SELECT * FROM wallet_topup INNER JOIN users ON wallet_topup.userID = users.id";
                                $result = mysqli_query($conn, $select_query);
                                if (mysqli_num_rows($result) > 0) {
                                    // output data of each row
                                    while($row = mysqli_fetch_assoc($result)) {
                                        $id = $row['id'];
                                        $userID = $row['userID'];
                                        $transRef = $row['transRef'];
                                        $amount = $row['amount'];
                                        $sendersAccName = $row['sendersAccName'];
                                        $sendersBank  = $row['sendersBank'];
                                        $paymentType = $row['paymentType'];
                                        $dateDeposited = $row['dateDeposited'];
                                        $paymentStatus = $row['paymentStatus'];
                                        switch ($paymentStatus) {
                                            case "Pending";
                                                $class  = 'badge-warning';
                                                break;
                                            case "Successful";
                                                $class  = 'badge-success';
                                                break;
                                            case "Failed";
                                                $class  = 'badge-danger';
                                                break;
                                            default:
                                                $class  = '';
                                        }

                                        echo "<tr>";
                                        echo "<td class=\"budget\">" .$transRef. "</td>";
                                        echo "<td class=\"budget\">" ."₦".$amount. "</td>";
                                        echo "<td class=\"budget\">" .$paymentType. "</td>";
                                        echo "<td class=\"budget\">" .date("d(D) M Y", strtotime($dateDeposited)). "</td>";
                                        echo "<td>" ."<span class=\"badge $class\">$paymentStatus</span> </span>". "</td>";

                                        echo "<td class='text-right'>"
                                            ."<div class=\"actions text-right ml-3\">
                                                <a href=# class=\"action-item mr-2\" data-toggle=tooltip title='Payment Invoice'><i data-feather=file-text></i></a>
                                              </div>".
                                            "</td >";
                                        "</tr>";
                                    }
                                }else {
                                    echo "<td><p>No Topup Yet!</p></td>";
                                }
                                ?>
                                </tbody>
                                <tfoot>
                                <tr>
                                    <th>Transaction Ref.</th>
                                    <th>Amount</th>
                                    <th>Mode of Payment</th>
                                    <th>date</th>
                                    <th>Status</th>
                                    <th class="text-right">Action</th>
                                </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include "./components/footer.php"; ?>