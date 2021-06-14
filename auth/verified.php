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
    <meta http-equiv="refresh" content="5;url=dashboard" />
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

<section>
    <div class="container text-center pt-10">
        <div class="row">
            <div class="col-sm-12 col-lg-12 col-xl-12 py-6 py-lg-0">
                <div class="row justify-content-center">
                    <div class="col-11 col-lg-10 col-xl-7">
                        <div class="text-center">
                            <div class="svg-container">
                                <svg class="ft-green-tick" xmlns="http://www.w3.org/2000/svg" height="100" width="100" viewBox="0 0 48 48" aria-hidden="true">
                                    <circle class="circle" fill="#5bb543" cx="24" cy="24" r="22"/>
                                    <path class="tick" fill="none" stroke="#FFF" stroke-width="6" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" d="M14 27l5.917 4.917L34 17"/>
                                </svg>
                            </div>
                            <div class="mb-4 pt-5">
                                <h6 class="h3 mb-1">Email Verified</h6>
                                <p class="text-muted mb-0">You're being redirected....</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<script src=../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js></script>
<script src=../assets/libs/svg-injector/dist/svg-injector.min.js></script>
<script src=../assets/libs/feather-icons/dist/feather.min.js></script>
<script src=../assets/libs/in-view/dist/in-view.min.js></script>
<script src=../assets/libs/sticky-kit/dist/sticky-kit.min.js></script>
<script src=../assets/libs/imagesloaded/imagesloaded.pkgd.min.js></script>
<script src=../assets/js/main.js></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script>
    feather.replace({
        width: "1em",
        height: "1em"
    })
</script>

</body>

</html>