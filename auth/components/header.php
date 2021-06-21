<?php
//Connect Database
require_once "../config/db.php";
session_start();
if (!isset($_SESSION['email'])) {
    header('location: login');
}
if (isset($_GET['logout'])) {
    session_destroy();
    unset($_SESSION['email']);
    header("location: login");
}
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
    <title>Dashboard :: iVerify&trade;</title>
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
    <link rel="shortcut icon" href="https://i.imgur.com/muLDDf6.png"/>
    <link rel=stylesheet href=../assets/libs/%40fortawesome/fontawesome-free/css/all.min.css>
    <link rel=stylesheet href=../assets/css/main.css id=stylesheet>
</head>

<body class="bg-section-secondary">
    <!--<div class=preloader>
        <div class="spinner-border text-primary" role=status><span class=sr-only>Loading...</span></div>
    </div>-->