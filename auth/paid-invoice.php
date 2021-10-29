<?php
$page = 'Topup';
include "./components/header.php";
include "./components/navbar.php";
include "./components/walletbalance.php";
require_once "../controllers/query.php";
?>

    <section class="bg-section-secondary pb-5">
        <div class=container>
            <div class="row justify-content-center">
                <div class=col-lg-9>
                    <div class="card" id="content">
                    <?php
                    $id = $_GET['id'];
                        $select_query = "SELECT * FROM wallet_topup WHERE id ='$id'";
                        $result = mysqli_query($conn, $select_query);
                        if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $proof = $row['proof'];
                        $sendersAccName = $row['sendersAccName'];
                        $sendersBank = $row['sendersBank'];
                        $amount = $row['amount'];
                        $transRef = $row['transRef'];
                        $paymentType = $row['paymentType'];
                        $paymentStatus = $row['paymentStatus'];
                        $dateDeposited = $row['dateDeposited'];
                        $date = strtotime($dateDeposited);
                        switch ($paymentStatus) {
                            case "Failed";
                                $class  = 'badge-danger';
                                break;
                            case "Successful";
                                $class  = 'badge-success';
                                break;
                            case "Pending";
                                $class  = 'badge-warning';
                                break;
                            default:
                                $class  = '';
                        }
                    ?>

                        <div class="card-body mt-3">
                            <div class="d-flex">
                                <div class="mx-3">
                                    <img alt="Chris Wood" src="https://i.imgur.com/vdpFo5m.png" class="img-responsive" width="108">
                                </div>
                                <div class="offset-md-7">
                                    <h4>THANK YOU!</h4>
                                </div>
                            </div>
                            <hr />
                            <div class="text-center mb-3">
                                <div class="mb-3">
                                    <img alt="Chris Wood" src="../assets/img/svg/bill.svg" class="img-responsive" width="80" height="80">
                                </div>
                                <h4 class="mb-n3">Transaction Reference.</h4>
                                <br /><strong><img src="../assets/img/barcode.png">&nbsp; <?php echo $transRef; ?></strong>
                                <div class="text-center text-muted mt-2">
                                    <p class="mb-0 mt-3"><b>Thank you for your payment!</b></p>
                                    <p class="mb-0">A successful payment was made for Wallet Topup.<br>See purchase details below:</p>
                                </div>
                            </div>
                            <div class="col-12 mx-auto">
                                <div class="card-body h-100">

                                    <hr />

                                    <div class="row">
                                        <div class="col-md-6 col-lg-6">
                                            <div class="d-flex align-items-start">
                                                <div class="flex-grow-1">
                                                    Paid Amount<br />
                                                    <strong>₦<?php echo number_format($amount, 2, '.', ','); ?></strong>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-6 text-right">
                                            <div class="d-flex align-items-start">
                                                <div class="flex-grow-1 text-end">
                                                    Mode of Payment<br />
                                                    <strong>
                                                        <?php echo $paymentType; if ($paymentType == null) {
                                                            echo "Not Available";
                                                        } ?>
                                                    </strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <hr />

                                    <div class="row">
                                        <div class="col-md-6 col-lg-6">
                                            <div class="d-flex align-items-start">
                                                <div class="flex-grow-1">
                                                    Payment Status<br />
                                                    <strong>
                                                        <?php echo "<span class=\"badge $class\">$paymentStatus</span>" ?>
                                                    </strong>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-6 col-lg-6 text-right">
                                            <div class="d-flex align-items-start">
                                                <div class="flex-grow-1 text-end">
                                                    Transaction Date<br />
                                                    <strong>
                                                    <?php echo date('j F Y', $date); ?> - <?php echo date('g:ia', $date); ?>
                                                    </strong>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <hr />

                                    <div class="text-center mt-5">
                                        <p><b>Need help? Got questions to ask?</b><br>
                                        Contact us our support team via: <a href="mailto:support@iverify.ng">support@iverify.ng</a></p>
                                    </div>
                                    <div id="editor"></div>
                                    <div class="row mt-4">
                                        <div class="text-center mx-auto">
                                            <button class="btn btn-dark btn-lg" id="cmd"><i class="fas fa-download"></i> Download Invoice </button>             
                                            <button class="btn btn-danger btn-lg" onclick="goBack()"><i class="fas fa-times-circle"></i> Go back</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <?php 
                        }
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php include "./components/footer.php"; ?>