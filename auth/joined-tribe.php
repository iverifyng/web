<?php
session_start();

if (!isset($_SESSION['email'])) {
    header('location: login');
}
if (isset($_GET['close'])) {
    session_destroy();
    unset($_SESSION['email']);
    header("location: logout");
}
?>
<!DOCTYPE html>
<html lang=en>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset=utf-8>
    <meta http-equiv="refresh" content="13;url=login" />
    <meta name=viewport content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <meta name=description content="iVerify provides verification and screening solutions to the corporate and private sectors through a unified, standardized, ethical data verification and referencing model.">
    <meta name=author content="ThankGod Okoro">
    <meta property="og:url" content="https://www.iverify.ng"/>
    <meta property="og:type" content="website"/>
    <meta property="og:title" content="iVerify&trade; :: Verification, Due Diligence, Certificarte Verification, Fraud Detection"/>
    <meta name="og:description" content="iVerify provides verification and screening solutions to the corporate and private sectors through a unified, standardized, ethical data verification and referencing model.">
    <meta name="keywords" content="Verification,iVerify.ng,Verify me,iVerify,Identity Verification,Due Diligence,Certificate Verification,Property Verification,Tenant Verification,Employee Verification,Domestic Staff Verification,Company Verification,Family Research,Document Verification,Verification in Nigeria">
    <!-- Favicon -->
    <link rel="shortcut icon" href="https://i.imgur.com/muLDDf6.png"/>
    <title>Get Started :: iVerify&trade;</title>
    <style>
        @keyframes hidePreloader {
            0% {
                width: 100%;
                height: 100%
            }
            100% {
                width: 0;
                height: 0
            }
        }

        body>div.preloader {
            position: fixed;
            background: #fff;
            width: 100%;
            height: 100%;
            z-index: 1071;
            opacity: 0;
            transition: opacity .5s ease;
            overflow: hidden;
            pointer-events: none;
            display: flex;
            align-items: center;
            justify-content: center
        }

        body:not(.loaded)>div.preloader {
            opacity: 1
        }

        body:not(.loaded) {
            overflow: hidden
        }

        body.loaded>div.preloader {
            animation: hidePreloader .5s linear .5s forwards
        }
    </style>
    <script>
        window.addEventListener("load", function() {
            setTimeout(function() {
                document.querySelector("body").classList.add("loaded")
            }, 300)
        })
    </script>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-PTNXN8X');</script>
    <!-- End Google Tag Manager -->
    <link rel=stylesheet href=../assets/libs/%40fancyapps/fancybox/dist/jquery.fancybox.min.css>
    <link rel=stylesheet href=../assets/libs/%40fortawesome/fontawesome-free/css/all.min.css>
    <link rel=stylesheet href=../assets/css/main.css id=stylesheet>
    <link rel="stylesheet" href="https://codepen.io/InaCarine/pen/2b6aab4a41ed640d0846b431d509e663">
    <style>
        @supports (animation: grow .5s cubic-bezier(.25, .25, .25, 1) forwards) {
            .tick {
                stroke-opacity: 0;
                stroke-dasharray: 29px;
                stroke-dashoffset: 29px;
                animation: draw .5s cubic-bezier(.25, .25, .25, 1) forwards;
                animation-delay: .6s
            }

            .circle {
                fill-opacity: 0;
                stroke: #219a00;
                stroke-width: 16px;
                transform-origin: center;
                transform: scale(0);
                animation: grow 1s cubic-bezier(.25, .25, .25, 1.25) forwards;
            }
        }

        @keyframes grow {
            60% {
                transform: scale(.8);
                stroke-width: 4px;
                fill-opacity: 0;
            }
            100% {
                transform: scale(.9);
                stroke-width: 8px;
                fill-opacity: 1;
                fill: #219a00;
            }
        }

        @keyframes draw {
            0%, 100% { stroke-opacity: 1; }
            100% { stroke-dashoffset: 0; }
        }

    </style>
</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PTNXN8X"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div class=preloader>
    <div class="spinner-border text-primary" role=status><span class=sr-only>Loading...</span></div>
</div>
<button onclick="goBack()" class="btn btn-white btn-icon-only rounded-circle position-absolute zindex-101 left-4 top-4 d-none d-lg-inline-flex" data-toggle=tooltip data-placement=right title="Go back"><span class=btn-inner--icon><i data-feather=arrow-left></i></span></button>
<section>
    <div class="bg-primary position-absolute h-100 top-0 left-0 zindex-100 col-lg-6 col-xl-6 zindex-100 d-none d-lg-flex flex-column justify-content-end" data-bg-size=cover data-bg-position=center>
        <div class="mask bg-gradient-dark opacity-8">
            <img src="../assets/img/backgrounds/signupbg1.jpg" alt="Image" class="img-as-bg">
        </div>
        <div class="row position-relative zindex-110 p-5">
            <div class="col-md-8 text-center mx-auto"><span class="badge badge-success badge-pill">You made it!</span>
                <h5 class="h5 text-white mt-3">Welcome to the iverify tribe😇</h5>
            </div>
        </div>
    </div>
    <div class="container-fluid d-flex flex-column">
        <div class="row align-items-center justify-content-center justify-content-lg-end min-vh-100">
            <div class="col-sm-7 col-lg-6 col-xl-6 py-6 py-lg-0">
                <div class="row justify-content-center">
                    <div class="col-11 col-lg-10 col-xl-7">
                        <div class="text-center">
                            <div class="svg-container">
                                <svg class="ft-green-tick" xmlns="http://www.w3.org/2000/svg" height="100" width="100" viewBox="0 0 48 48" aria-hidden="true">
                                    <circle class="circle" fill="#5bb543" cx="24" cy="24" r="22"/>
                                    <path class="tick" fill="none" stroke="#FFF" stroke-width="6" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M14 27l5.917 4.917L34 17"/>
                                </svg>
                            </div>
                            <div class=mb-4>
                                <h6 class="h3 mb-1">Welcome to the tribe👏</h6>
                                <p class="text-muted mb-0">An email with a verification link has been sent to your email (<?php echo $_SESSION['email']; ?>)</p>
                                <hr class="mb-2 mt-2">
                                <p class="text-muted mb-3">Please verify your email<br>
                                    to gain access to secured a future.</p>
                                <form method="get">
                                    <button class="btn btn-dark" name="close" type="submit">Close</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src=../assets/libs/jquery/dist/jquery.min.js></script>
<script src=../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js></script>
<script src=../assets/libs/svg-injector/dist/svg-injector.min.js></script>
<script src=../assets/libs/feather-icons/dist/feather.min.js></script>
<script src=../assets/libs/in-view/dist/in-view.min.js></script>
<script src=../assets/libs/sticky-kit/dist/sticky-kit.min.js></script>
<script src=../assets/libs/imagesloaded/imagesloaded.pkgd.min.js></script>
<script src=../assets/js/main.js></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
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
            timer: 4000
        });
    </script>
    <?php
    unset($_SESSION['message']);
}
?>
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