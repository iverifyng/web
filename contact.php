<?php
include "./components/header.php";
include "./components/navbar.php";
?>
    <section class="slice py-6 pt-lg-7 pb-lg-8 bg-gradient-primary">
        <div class="container d-flex align-items-center text-center text-lg-left">
            <div class="col px-0">
                <div class="row row-grid align-items-center">
                    <div class=col-lg-6>
                        <h1 class="h1 text-white text-center text-lg-left my-4"><strong>We’re happy to help!</strong></h1>
                        <p class="lead text-white text-center text-lg-left opacity-8">Our team is happy to answer all your questions ASAP,<br>Do you have general enquiries or need support? Please hit the button below.</p>
                        <div class="mt-5 text-center text-lg-left"><a href=#sct-form-contact data-scroll-to class="btn btn-white btn-lg btn-icon"><span class=btn-inner--icon><i data-feather=edit-2></i> </span><span class=btn-inner--text>Write a message</span></a></div>
                        <div class="d-flex align-items-center justify-content-center justify-content-lg-left mt-5">
                            <div class="col-auto text-sm text-white pl-0 pr-4">Trusted by:</div>
                            <div class="client-group col">
                                <div class=row>
                                    <div class="client col-3 py-3"><img alt="Image placeholder" src=./assets/img/clients/svg/accessbank_white.svg></div>
                                    <div class="client col-3 py-3"><img alt="Image placeholder" src=./assets/img/clients/svg/fidelitybank_white.svg></div>
                                    <div class="client col-3 py-3"><img alt="Image placeholder" src=./assets/img/clients/svg/zenithbank_white.svg></div>
                                    <div class="client col-3 py-3"><img alt="Image placeholder" src=./assets/img/clients/svg/whitesoul_white.svg></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape-container shape-line shape-position-bottom"><svg width=2560px height=100px preserveAspectRatio=none x=0px y=0px viewBox="0 0 2560 100" style="enable-background:new 0 0 2560 100" xml:space=preserve class=""><polygon points="2560 0 2560 100 0 100"></polygon></svg></div>
    </section>
    <section class="slice slice-lg">
        <div class=container>
            <div class=row>
                <div class=col-lg-4>
                    <div class="card text-center hover-translate-y-n10 hover-shadow-lg">
                        <div class="px-5 pb-5 pt-5">
                            <div class=py-4>
                                <div class="icon text-warning icon-sm mx-auto"><i data-feather=phone-call></i></div>
                            </div>
                            <h5 class="">Sales</h5>
                            <p class="mt-2 mb-0">Ready to work with us to get your organization secured?</p>
                            <div class=mt-4><a href="mailto:sales@iverify.ng" class=link-underline-warning>sales@iverify.ng</a></div>
                        </div>
                    </div>
                </div>
                <div class=col-lg-4>
                    <div class="card text-center hover-translate-y-n10 hover-shadow-lg">
                        <div class="px-5 pb-5 pt-5">
                            <div class=py-4>
                                <div class="icon text-warning icon-sm mx-auto"><i data-feather=settings></i></div>
                            </div>
                            <h5 class="">Support</h5>
                            <p class="mt-2 mb-0">Need general support or information about our services?</p>
                            <div class=mt-4><a href="mailto:support@iverify.ng" class=link-underline-warning>support@iverify.ng</a></div>
                        </div>
                    </div>
                </div>
                <div class=col-lg-4>
                    <div class="card text-center hover-translate-y-n10 hover-shadow-lg">
                        <div class="px-5 pb-5 pt-5">
                            <div class=py-4>
                                <div class="icon text-warning icon-sm mx-auto"><i data-feather=users></i></div>
                            </div>
                            <h5 class="">Careers</h5>
                            <p class="mt-2 mb-0">Have any question around joining our team? Say hello.</p>
                            <div class=mt-4><a href="mailto:careers@iverify.ng" class=link-underline-warning>careers@iverify.ng</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="slice slice-lg">
        <div class=container>
            <div class="row row-grid justify-content-between align-items-center">
                <div class=col-lg-5>
                    <h3>The Brunswick Courts<br>7/9 Adebisi Oyenola Street Idado Estate, Lekki Epe express way Lagos, Nigeria.</h3>
                    <p class="lead my-4">Email: <a href="mailto:info@iverify.ng">info@iverify.ng</a><br>Tel: +234 809 066 6746 | +234 809 066 6745</p>
                    <p>Want to share any feedback with us, report a technical issue or just ask us a question? Fill free to contact us and we will get back to you shortly.</p>
                </div>
                <div class=col-lg-6>
                    <div id=map-custom class="map-canvas rounded-left" data-lat=6.440411 data-lng=3.521588 data-color=#29209c style=height:600px></div>
                </div>
            </div>
        </div>
    </section>

    <section class="slice slice-lg bg-section-secondary" id=sct-form-contact>
        <div class="container position-relative zindex-100">
            <div class="row justify-content-center mb-5">
                <div class="col-lg-6 text-center">
                    <h3>Contact us</h3>
                    <p class=lh-190>If there's something we can help you with, jut let us know. We'll be more than happy to offer you our help, enter your question below for instant responses.</p>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class=col-lg-6>
                    <div class="alert alert-danger text-center" id="error-message" style="display: none;">
                        Error sending message!
                    </div>
                    <div class="alert alert-success text-center" id="success-message" style="display: none;">
                        Message sent successfully!
                    </div>
                    <center>
                    <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem; display: none;" id="spinner" role="status">
                        <span class="sr-only">Loading...</span>
                    </div>
                    </center>
                    <form id="contact-form" onClick="return false;">
                        <div class=form-group>
                            <input class="form-control form-control-lg" name="fullName" type=text placeholder="Your name" required>
                        </div>
                        <div class=form-group>
                            <input class="form-control form-control-lg" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" type=email placeholder=email@example.com required>
                        </div>
                        <div class=form-group>
                            <input class="form-control form-control-lg" name="phoneNum" type=text placeholder=+234-801-234-5678 required>
                        </div>
                        <div class=form-group>
                            <textarea class="form-control form-control-lg" name="comment" data-toggle=autosize placeholder="Tell us a few words ..." rows=3 required></textarea></div>
                        <div class=text-center>
                            <button type=reset class="btn-reset d-none"></button>
                            <button name="contact" id="contact" class="btn btn-block btn-lg btn-primary mt-4">Send your message</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    
<?php
include "./components/footer.php";
?>