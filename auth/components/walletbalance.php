<section class="slice py-5 bg-section-secondary">
    <div class=container>
        <div class="row align-items-center">
            <div class=col>
                <h1 class="h5 mb-0"><? echo $page; ?></h1>
            </div>
            <div class=col-auto>
                <button type=button class="btn btn-sm btn-dark btn-icon">
                    <span class=btn-inner--icon>
                    <?php
                        $select_query = "SELECT * FROM users WHERE id ='".$_SESSION['id']."'";
                        $result = mysqli_query($conn, $select_query);
                        if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $wallet = $row['wallet'];
                        ?>
                        <i class="fas fa-wallet"></i>&#160;Wallet Balance:</span> ₦<?php echo number_format($wallet, 2, '.', ','); ?>
                    <?php }
                    }
                        ?>
                </button>
            </div>
        </div>
    </div>
</section>
