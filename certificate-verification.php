<?php
include "./components/header.php";
include "./components/navbar.php";
?>

    <section class="slice py-5">
        <div class=container>
            <div class="row row-grid align-items-center">
                <div class="col-12 col-md-5 col-lg-6 order-md-2">
                    <figure class=w-100><img alt="Image placeholder" src=./assets/img/svg/certificateveri.gif class="img-fluid mw-md-120"></figure>
                </div>
                <div class="col-12 col-md-7 col-lg-6 order-md-1 pr-md-5">
                    <h1 class="display-4 text-center text-md-left mb-3">Certificate <strong class=text-primary>Verification</strong></h1>
                    <p class="lead text-center text-md-left text-muted">
                        Evaluate academic, professional, and biodata certificates for employment, immigration, certifications, and admission purposes using our request tools.
                    <ul>
                        <li>First school living certificate</li>
                        <li>Waec certificate</li>
                        <li>Nysc certificate</li>
                        <li>University certificate</li>
                        <li>OND certificate</li>
                        <li>HND certificate</li>
                        <li>Professional certifications</li>
                        <li>Birth certificate</li>
                        <li>Marriage certificate</li>
                        <li>Transcripts</li>
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