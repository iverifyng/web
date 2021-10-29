<?php
$page = 'Records';
include "./components/header.php";
include "./components/userstats.php";
include "./components/navbar.php";
include "./components/walletbalance.php";
require_once "../controllers/query.php";
?>

    <section class="bg-section-secondary">
    <div class=container>
            <div class="row mx-n2">
                <div class="col-lg-4 col-sm-6 px-2">
                    <div class=card>
                        <div class="card-body text-center">
                            <div class=mb-3>
                                <div class="icon icon-shape icon-md bg-primary text-white"><i class="fas fa-wallet"></i></div>
                            </div>
                            <h5 class="h3 font-weight-bolder mb-1">₦0</h5><span class="d-block text-sm text-muted font-weight-bold">Wallet Balance</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 px-2">
                    <div class=card>
                        <div class="card-body text-center">
                            <div class=mb-3>
                                <div class="icon icon-shape icon-md bg-danger text-white"><i class="fas fa-cash-register"></i></div>
                            </div>
                            <h5 class="h3 font-weight-bolder mb-1">0</h5><span class="d-block text-sm text-muted font-weight-bold">Total Search(s)</span></div>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6 px-2">
                    <div class=card>
                        <div class="card-body text-center">
                            <div class=mb-3>
                                <div class="icon icon-shape icon-md bg-success text-white"><i class="fas fa-receipt"></i></div>
                            </div>
                            <?php
                            $countInvoices = mysqli_query($conn, "SELECT id FROM wallet_topup WHERE userID='".$_SESSION['id']."'");
                            echo "<h5 class=\"h3 font-weight-bolder mb-1\">" .mysqli_num_rows($countInvoices). "</h5>";
                            ?>
                            <span class="d-block text-sm text-muted font-weight-bold">Payment Invoice(s)</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=container>
            <div class="row align-items-center mb-4">
                <div class=col>
                    <h1 class="h4 mb-0">Verification History</h1>
                </div>
            </div>
            <div class=row>
                <div class=col-md-12>
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
                            $select_query = "SELECT * FROM corp_employee_search WHERE userID='$userID'";
                            $result = mysqli_query($conn, $select_query);
                            if (mysqli_num_rows($result) > 0) {
                                // output data of each row
                                while($row = mysqli_fetch_assoc($result)) {
                                    $id = $row['id'];
                                    $userID = $row['userID'];
                                    $searchRef = $row['searchRef'];
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
                                    echo "<td class=\"budget\">" .$searchRef. "</td>";
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
                                echo "<td><p>No Verification Request Yet!</p></td>";
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
    </section>

<?php include "./components/footer.php"; ?>