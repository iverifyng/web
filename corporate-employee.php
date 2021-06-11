<?php
include "./components/header.php";
include "./components/navbar.php";
?>

<section class="slice py-5">
    <div class=container>
        <div class="row row-grid align-items-center">
            <div class="col-12 col-md-5 col-lg-6 order-md-2">
                <figure class=w-100><img alt="Image placeholder" src=./assets/img/svg/corporatem.gif class="img-fluid mw-md-120"></figure>
            </div>
            <div class="col-12 col-md-7 col-lg-6 order-md-1 pr-md-5">
                <h1 class="display-4 text-center text-md-left mb-3">Corporate Employee <strong class=text-primary>Verification</strong></h1>
                <p class="lead text-center text-md-left text-muted">
                    Outsource and leverage our comprehensive employee verification solutions to make good hiring decisions, set the structure, culture and values of your home or workplace and comply with the CBN tier 3 KYC requirements
                    <ul>
                        <li>Residential address</li>
                        <li>Previous work history</li>
                        <li>Guarantor’s residential address</li>
                        <li>Guarantor’s work address</li>
                        <li>Visuals</li>
                    </ul>
                </p>
                <div class="text-center text-md-left mt-5">
                    <a href=auth/signup class="btn btn-primary btn-icon"><span class=btn-inner--text>Get started</span>
                        <span class=btn-inner--icon> <i data-feather=arrow-right></i> </span>
                    </a>
                </div>
        </div>
    </div>
</section>

<?php
include "./components/bigcta.php";
include "./components/testimonials.php";
include "./components/footer.php";
?>
