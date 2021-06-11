<?php
include "./components/header.php";
include "./components/navbar.php";
?>

    <section class="slice py-5">
        <div class=container>
            <div class="row row-grid align-items-center">
                <div class="col-12 col-md-5 col-lg-6 order-md-2">
                    <figure class=w-100><img alt="Image placeholder" src=./assets/img/svg/tenantveri.gif class="img-fluid mw-md-120"></figure>
                </div>
                <div class="col-12 col-md-7 col-lg-6 order-md-1 pr-md-5">
                    <h1 class="display-4 text-center text-md-left mb-3">Tenant <strong class=text-primary>Verification</strong></h1>
                    <p class="lead text-center text-md-left text-muted">
                        We guarantee that our efficient services and Tenant verification solution ensure Landlords, property managers, real estate brokers and agents protect their rental income and minimize exposure to high-risk tenants.
                    <ul>
                        <li>Rental history</li>
                        <li>Previous residential address</li>
                        <li>Proof of work (for tenant and spouse if applicable)</li>
                        <li>Landlord’s recommendation</li>
                        <li>Guarantor’s consent</li>
                        <li>Guarantor’s work address</li>
                        <li>Guarantor’s residential address</li>
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