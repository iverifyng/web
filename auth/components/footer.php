<?php
include "infomodal.php";
include "verification-modal.php"
?>


        <div class="modal modal-fluid fade" id="promoModal" tabindex="-1" data-backdrop="static" role="dialog" aria-labelledby="modal_1" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row justify-content-center">
                            <div class="col-lg-8 text-center py-3">
                                <h6 class="h3">Hello <? echo $_SESSION['firstName']; ?><? echo $_SESSION['companyName']; ?><br><small>tell us why you should win</small></h6>
                                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST">
                                    <div class="row">
                                        <div class="mb-3 col-md-6" style="display: none;">
                                            <label class="form-label" for="id">ID</label>
                                            <input type="text" class="form-control form-control-lg" name="userID" value="<?php echo $id; ?>" readonly>
                                        </div>
                                        <div class="mb-3 col-md-6" style="display: none;">
                                            <label class="form-label" for="userFullName">Full Name</label>
                                            <input type="text" class="form-control form-control-lg" name="userFullName" value="<?php echo $_SESSION['firstName']; ?> <?php echo $_SESSION['lastName']; ?><?php echo $_SESSION['companyName']; ?>" readonly>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="mb-3 col-md-12">
                                            <textarea class="form-control" rows="4" name="reason" placeholder="Tell us why you should win a free employee verification."></textarea>
                                        </div>
                                    </div>

                                    <div class="d-grid mt-3">
                                        <button type="submit" name="promo_btn" class="btn btn-info" onclick="this.classList.toggle('button--loading')">
                                            <span class="button__text">Submit</span>
                                        </button>
                                        <button class="btn btn-danger" data-dismiss="modal">Close</button>
                                    </div>
                                </form>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

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
        <script src=../assets/js/app.js></script>
        <script src=../assets/js/pay.js></script>
        <script src="https://checkout.flutterwave.com/v3.js"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
        <script src="//cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>

        <script>
            feather.replace({
                width: "1em",
                height: "1em"
            })
        </script>
        <?php
        if (isset($_SESSION['message']))
        {
            ?>
            <script>
                swal({
                    title: "<?php echo $_SESSION['message_title']; ?>",
                    text: "<?php echo $_SESSION['message']; ?>",
                    icon: "error",
                    buttons: false,
                    timer: 5000
                });
            </script>
            <?php
            unset($_SESSION['message']);
        }
        ?>

        <?php
        if (isset($_SESSION['message_promo']))
        {
            ?>
            <script>
                swal({
                    title: "<?php echo $_SESSION['message_title_promo']; ?>",
                    text: "<?php echo $_SESSION['message_promo']; ?>",
                    icon: "error",
                    buttons: false,
                    timer: 5000
                }).then(function() {
                    window.location = "../auth/topup";
                });
            </script>
            <?php
            unset($_SESSION['message_promo']);
        }
        ?>

        <?php
        if (isset($_SESSION['success_message']))
        {
            ?>
            <script>
                swal({
                    title: "<?php echo $_SESSION['success_message_title']; ?>",
                    text: "<?php echo $_SESSION['success_message']; ?>",
                    icon: "success",
                    buttons: false,
                    timer: 4000
                }).then(function() {
                    window.location = "../auth/dashboard";
                });
            </script>
            <?php
            unset($_SESSION['success_message']);
        }
        ?>
        

        <?php
        if (isset($_SESSION['success_message_promo']))
        {
            ?>
            <script>
                swal({
                    title: "<?php echo $_SESSION['success_message_title_promo']; ?>",
                    text: "<?php echo $_SESSION['success_message_promo']; ?>",
                    icon: "success",
                    buttons: false,
                    timer: 4000
                }).then(function() {
                    window.location = "../auth/topup";
                });
            </script>
            <?php
            unset($_SESSION['success_message_promo']);
        }
        ?>

        <?php
        if (isset($_SESSION['pop_success_message']))
        {
            ?>
            <script>
                swal({
                    title: "<?php echo $_SESSION['pop_success_message_title']; ?>",
                    text: "<?php echo $_SESSION['pop_success_message']; ?>",
                    icon: "success",
                    buttons: false,
                    timer: 4000
                }).then(function() {
                    window.location = "../auth/topup";
                });
            </script>
            <?php
            unset($_SESSION['pop_success_message']);
        }
        ?>
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
        <script type="text/javascript">
            $(document).ready(function(){
                $("#staticBackdrop").modal('show');
            });
        </script>
</body>

</html>