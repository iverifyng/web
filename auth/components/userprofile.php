<section class="pt-5 bg-section-secondary">
    <div class=container>
        <div class="row justify-content-center">
            <div class=col-lg-9>
                <div class="row align-items-center">
                    <div class=col-auto><img alt="Image placeholder" src=../assets/img/svg/icons/usericon.svg class="avatar avatar-xl rounded-circle"></div>
                    <div class="col ml-n3 ml-md-n2">
                        <h2 class=mb-0><b><?php echo $_SESSION['firstName']; ?></b> <?php echo $_SESSION['lastName']; ?></h2>
                        <span class="text-muted d-block"><?php echo $_SESSION['accountType']; ?> Account</span>
                    </div>
                </div>
                <div class=mt-4>
                    <ul class="nav nav-tabs overflow-x">
                        <li class=nav-item><a href="account" class="nav-link <?php if($page1=='Profile'){echo 'active';}?>">Profile</a></li>
                        <li class=nav-item><a href=security class="nav-link <?php if($page1=='Security'){echo 'active';}?>">Security</a></li>
                        <li class=nav-item><a href=# class=nav-link>Notifications</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
