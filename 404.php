<?php
include "./components/header.php";
?>
    <button onclick="goBack()" class="btn btn-neutral btn-icon-only rounded-circle position-absolute left-4 top-4 d-none d-lg-inline-flex" data-toggle=tooltip data-placement=right title="Go back"><span class=btn-inner--icon><i data-feather=arrow-left></i></span></button>
    
    <section class="vh-100 d-flex align-items-center">
        <div class="bg-danger position-absolute h-100 top-0 right-0 zindex-110 col-lg-6 col-xl-6 zindex-100 d-none d-lg-flex flex-column justify-content-end rounded-bottom-left" data-bg-size=cover data-bg-position=center><img src=./assets/img/404.jpg alt=Image class="img-as-bg rounded-bottom-left"></div>
        <div class=container-fluid>
            <div class="row align-items-center">
                <div class="col-sm-7 col-lg-6 col-xl-6 mx-auto ml-lg-0">
                    <div class="row justify-content-center">
                        <div class="col-11 col-lg-10 col-xl-6 py-5">
                            <h1 class="display-1 mb-3 font-weight-800 text-danger">404</h1>
                            <p class="lead text-lg mb-5">Sorry, the page you are looking for could not be found.</p>
                            <a href="\" class="btn btn-dark btn-icon hover-translate-y-n3"><span class=btn-inner--icon><i data-feather=home></i></span> <span class=btn-inner--text>Return home</span></a></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

        <script src=assets/libs/jquery/dist/jquery.min.js></script>
        <script src=assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js></script>
        <script src=assets/libs/svg-injector/dist/svg-injector.min.js></script>
        <script src=assets/libs/feather-icons/dist/feather.min.js></script>
        <script src=assets/libs/in-view/dist/in-view.min.js></script>
        <script src=assets/libs/sticky-kit/dist/sticky-kit.min.js></script>
        <script src=assets/libs/imagesloaded/imagesloaded.pkgd.min.js></script>
        <script src=assets/libs/typed.js/lib/typed.min.js></script>
        <script src=assets/libs/%40fancyapps/fancybox/dist/jquery.fancybox.min.js></script>
        <script src=assets/libs/bootstrap-notify/bootstrap-notify.min.js></script>
        <script src=assets/libs/autosize/dist/autosize.min.js></script>
        <script src=www.google.com/recaptcha/api.js></script>
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDODKndJ8udk9xrwV_9KZwzziQOgsAR3Ew"></script>
        <script src=assets/js/main.js></script>
        <script src="//code.tidio.co/61g5gupoqdk3g2ijdnidwr43jufdto0x.js"></script>
        <script>
        function goBack() {
            window.history.back();
        }
        </script>
        <script>
            feather.replace({
                width: "1em",
                height: "1em"
            })
        </script>
</body>

</html>