<section class="slice py-5 bg-section-secondary">
    <div class=container>
        <div class="row align-items-center">
            <div class=col>
                <h1 class="h5 mb-0"><? echo $page; ?></h1>
            </div>
            <div class=col-auto>
                <button type=button class="btn btn-sm btn-dark btn-icon">
                    <span class=btn-inner--icon><i class="fas fa-wallet"></i>&#160;Wallet Balance:</span> ₦<?php echo  $_SESSION['wallet']; ?>
                </button>
            </div>
        </div>
    </div>
</section>
