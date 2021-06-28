<?php
$page = 'Proof of Payment';
include "./components/header.php";
include "./components/userstats.php";
include "./components/navbar.php";
include "./components/walletbalance.php";
require_once "../controllers/query.php";
?>
    <section class="bg-section-secondary pb-5">
        <div class=container>
            <div class="row justify-content-center">
                <div class=col-lg-9>
                    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6" style="display: none">
                                <div class="form-group">
                                    <label class="form-control-label">User ID</label>
                                    <input class="form-control" type="number" readonly name="userId" value="<?php echo $_SESSION['id']; ?>">
                                </div>
                            </div>
                            <div class="col-md-6" style="display: none">
                                <div class="form-group">
                                    <label class="form-control-label">First Name:</label>
                                    <input class="form-control" type="text" readonly name="firstName" value="<?php echo $_SESSION['firstName']; ?>">
                                </div>
                            </div>
                            <div class="col-md-6" style="display: none">
                                <div class="form-group">
                                    <label class="form-control-label">Last Name:</label>
                                    <input class="form-control" type="text" readonly name="lastName" value="<?php echo $_SESSION['lastName']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label">Sender's Account Name</label>
                                    <input class="form-control" type="text" name="sendersAccName" placeholder="Kelechi Kayode Aminu">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label">Sender's Account Number</label>
                                    <input class="form-control" type="text" name="sendersBank" placeholder="Providus Bank">
                                </div>
                            </div>
                        </div>
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label">Deposited Amount</label>
                                    <div class="input-group input-group-merge">
                                        <input type=number class="form-control form-control-prepend" name="amount" placeholder=5100 aria-label="Topup Amount">
                                        <div class=input-group-prepend><span class="input-group-text"><i>₦</i></span></div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label class="form-control-label">Upload Proof of Payment</label>
                                    <input type="file" name="proof" id="file-1" class="custom-input-file" data-multiple-caption="{count} files selected" />
                                    <label for="file-1">
                                        <i data-feather="upload"></i>
                                        <span>Choose a file…</span>
                                    </label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 text-center">
                                <div class="form-group">
                                    <button type="submit" class="btn btn-block btn-primary btn-icon" name="pop_btn">
                                        <span class="btn-inner--icon">
                                            <i data-feather="send"></i>
                                        </span>
                                        <span class="btn-inner--text">Send Proof of Payment</span>
                                    </button>
                                    <small class="form-text text-muted mt-2">Account will be topped up once payment has be confirmed.</small>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>



<?php include "./components/footer.php"; ?>