<?php
include "infomodal.php";
include "verification-modal.php"
?>

        <!--<div class="modal modal-fluid fade" id="staticBackdrop" tabindex="-1" data-backdrop="static" role="dialog" aria-labelledby="modal_1" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="row justify-content-center">
                            <div class="col-lg-8 text-center py-3">
                                <h6 class="h3">Hello <? echo $_SESSION['firstName']; ?><br>Welcome to the tribe👏</h6>
                                <p class="lead text-muted">
                                     This is your dashboard.<br>Thanks for being a part of our success story, you will be up and running soon, please call or e-mail us to meet your needs.
                                </p>
                            </div>
                        </div>
                        <div class="row justify-content-center py-3">
                            <div class="col-lg-6 mb-3 text-center">
                                <div class="">
                                    <img src="../assets/img/svg/icons/Contact.svg" class="img-fluid img-center svg-inject">
                                </div>
                                <h6 class="h5 py-2">+234 809 066 6745</a></h6>
                            </div>
                            <div class="col-lg-6 mb-3 text-center">
                                <div class="">
                                    <img src="../assets/img/svg/icons/Compose_email.svg" class="img-fluid img-center svg-inject">
                                </div>
                                <h6 class="h4 py-2"><a href="mailto:info@iverify.ng">info@iverify.ng</a></h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
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