<?php
require_once "../controllers/account.php";
$_SESSION['notify'];
?>
<!DOCTYPE html>
<html lang=en>
<meta http-equiv="content-type" content="text/html;charset=utf-8" />

<head>
    <meta charset=utf-8>
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
</head>

<body>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PTNXN8X"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <!--<div class=preloader>
        <div class="spinner-border text-dark" role=status><span class=sr-only>Loading...</span></div>
    </div>-->
    <button onclick="goBack()" class="btn btn-white btn-icon-only rounded-circle position-absolute zindex-101 left-4 top-4 d-none d-lg-inline-flex" data-toggle=tooltip data-placement=right title="Go back"><span class=btn-inner--icon><i data-feather=arrow-left></i></span></button>
    <section>
        <div class="bg-dark position-absolute h-100 top-0 left-0 zindex-100 col-lg-6 col-xl-6 zindex-100 d-none d-lg-flex flex-column justify-content-end" data-bg-size=cover data-bg-position=center>
            <div class="mask bg-gradient-dark opacity-8">
                <img src="../assets/img/backgrounds/signupbg2.jpg" alt="Image" class="img-as-bg">
            </div>
            <div class="row position-relative zindex-110 p-5">
                <div class="col-md-8 text-center mx-auto"><span class="badge badge-dark badge-pill">Great Move</span>
                    <h5 class="h5 text-white mt-3">Join the iverify Tribe😇</h5>
                </div>
            </div>
        </div>
        <div class="container-fluid d-flex flex-column">
            <div class="row align-items-center justify-content-center justify-content-lg-end min-vh-100">
                <div class="col-sm-7 col-lg-6 col-xl-6 py-6 py-lg-0">
                    <div class="row justify-content-center">
                        <div class="col-11 col-lg-10 col-xl-7">
                            <div>
                                <div class=mb-4>
                                    <h6 class="h3 mb-1">Create your account</h6>
                                    <p class="text-muted mb-0">Gain access to freedom.</p>
                                </div><span class=clearfix></span>
                                <!-- personal form-->
                                <div class="form-group btn-group btn-group-toggle" data-toggle="buttons" style="inline-size: -webkit-fill-available;">
                                    <label class="btn showbtn btn-soft-dark active">
                                        <input type="radio" name="accountType" checked> Personal
                                    </label>
                                    <label class="btn hidebtn btn-soft-success">
                                        <input type="radio" name="accountType" id="#corporateButton"> Corporate
                                    </label>
                                </div>
                                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" id="hideshowForm">
                                    <div class=form-group" style="display: none">
                                        <label class=form-control-label>Account Type</label>
                                        <div class="input-group input-group-merge">
                                            <input type=text class="form-control form-control-prepend" required name="accountType" value="Personal">
                                            <div class=input-group-prepend><span class=input-group-text><i data-feather=briefcase></i></span></div>
                                        </div>
                                    </div>
                                    <div class=form-group>
                                        <label class=form-control-label>First Name</label>
                                        <div class="input-group">
                                            <div class=input-group-prepend>
                                                <span class=input-group-text>
                                                    <i data-feather=user></i>
                                                </span>
                                            </div>
                                            <input type=text class="form-control form-control-prepend" required name="firstName" placeholder="John">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class=form-control-label>Last Name</label>
                                        <div class="input-group">
                                            <div class=input-group-prepend>
                                                <span class=input-group-text>
                                                    <i data-feather=user></i>
                                                </span>
                                            </div>
                                            <input type=text class="form-control form-control-prepend" required name="lastName" placeholder="Doe">
                                        </div>
                                    </div>
                                    <div class=form-group>
                                        <label class=form-control-label>Email address</label>
                                        <div class="input-group">
                                            <div class=input-group-prepend>
                                                <span class=input-group-text>
                                                    <i data-feather=at-sign></i>
                                                </span>
                                            </div>
                                            <input type=email class="form-control form-control-prepend" required name="email" placeholder=johndoe@example.com>
                                        </div>
                                    </div>
                                    <div class="form-group mb-0">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div><label class=form-control-label>Password</label></div>
                                            <div class=mb-2><a href=# class="small text-muted text-underline--dashed border-dark" data-toggle=password-text data-target=#input-password>Show password</a></div>
                                        </div>
                                        <div class=input-group>
                                            <div class=input-group-prepend><span class=input-group-text><i data-feather=key></i></span></div>
                                            <input type=password class=form-control name="password" id=input-password placeholder=Password></div>
                                    </div>
                                    <div class=my-4>
                                        <div class="custom-control custom-checkbox mb-3">
                                            <input type=checkbox required class=custom-control-input id=check-terms>
                                            <label class=custom-control-label for=check-terms>I agree to the <a href=../terms>terms and conditions</a></label>
                                        </div>
                                    </div>
                                    <div class=mt-4>
                                        <button class="btn btn-block btn-dark" name="signup_btn" type="submit" class="btn btn-block btn-dark" onclick="this.classList.toggle('button--loading')">
                                            <span class="button__text">Create my account</span>
                                        </button>
                                    </div>
                                </form>
                                <!-- Corporate form-->
                                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="POST" id="showhideForm" style="display: none">
                                    <div class=form-group style="display: none">
                                        <label class=form-control-label>Account Type</label>
                                        <div class="input-group input-group-merge">
                                            <input type=text class="form-control form-control-prepend" required name="accountType" value="Corporate">
                                            <div class=input-group-prepend><span class=input-group-text><i data-feather=briefcase></i></span></div>
                                        </div>
                                    </div>
                                    <div class=form-group>
                                        <label class=form-control-label>Company Name</label>
                                        <div class="input-group">
                                            <div class=input-group-prepend>
                                                <span class=input-group-text>
                                                    <i data-feather=briefcase></i>
                                                </span>
                                            </div>
                                            <input type=text class="form-control form-control-prepend" required name="companyName" placeholder="Example Agency Limited">
                                        </div>
                                    </div>
                                    <div class=form-group>
                                        <label class=form-control-label>Email address</label>
                                        <div class="input-group">
                                            <div class=input-group-prepend>
                                                <span class=input-group-text>
                                                    <i data-feather=at-sign></i>
                                                </span>
                                            </div>
                                            <input type=email class="form-control form-control-prepend" required name="email" placeholder=johndoe@example.com>
                                        </div>
                                    </div>
                                    <div class="form-group mb-0">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div><label class=form-control-label>Password</label></div>
                                            <div class=mb-2><a href=# class="small text-muted text-underline--dashed border-dark" data-toggle=password-text data-target=#input-password>Show password</a></div>
                                        </div>
                                        <div class=input-group>
                                            <div class=input-group-prepend><span class=input-group-text><i data-feather=key></i></span></div>
                                            <input type=password class=form-control name="password" id=input-password placeholder=Password></div>
                                    </div>
                                    <div class=my-4>
                                        <div class="custom-control custom-checkbox mb-3">
                                            <input type=checkbox required class=custom-control-input id=check-terms-corporate>
                                            <label class=custom-control-label for=check-terms-corporate>I agree to the <a href=../terms>terms and conditions</a></label>
                                        </div>
                                    </div>
                                    <div class=mt-4>
                                        <button class="btn btn-block btn-dark" name="signup_btn" type="submit" class="btn btn-block btn-dark" onclick="this.classList.toggle('button--loading')">
                                            <span class="button__text">Create my account</span>
                                        </button>
                                    </div>
                                </form>
                                <div class=mt-4><small>Already have an account?</small> <a href=login class="small font-weight-bold">Sign in</a></div>
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
    <script src="../assets/js/app.js"></script>
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
            });
        </script>
        <?php
        unset($_SESSION['success_message']);
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
    <script>
        $(document).ready(function(){
            $('.showbtn').click(function(){
                $('#showhideForm').hide(500);
                $('#hideshowForm').show(500);
            });
            $('.hidebtn').click(function(){
                $('#showhideForm').show(500);
                $('#hideshowForm').hide(500);
            });
        });
    </script>
    
</body>

</html>