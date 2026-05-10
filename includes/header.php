<!-- header -->
<header class="">
    <div class="contain-fluid">
        <div class="logo">
            <a href="">
                <img src="images/logo.png" alt="">
            </a>
        </div>
        <div class="toggle"><span></span></div>
        <nav class="ease" nav="">
            <ul id="nav">
                <li class="">
                    <a href="index.php" class="<?= ($page == 'index' || $page == '') ? 'active' : '' ?>">Home</a>
                </li>
                <li class="">
                    <a href="about.php" class="<?= ($page == 'about') ? 'active' : '' ?>">About Us</a>
                </li>
                <li class="">
                    <a href="employer.php" class="<?= ($page == 'employer') ? 'active' : '' ?>">Employer</a>
                </li>

                <li class="">
                    <a href="career.php" class="<?= ($page == 'career') ? 'active' : '' ?>">Career
                    </a>
                </li>
                <li class="">
                    <a href="contact.php" class="<?= ($page == 'contact') ? 'active' : '' ?>">Contact us</a>
                </li>

            </ul>
            <!-- <div class="cta">

                <a href="contact.php" class="webBtn">Apply
                    Now</a>

            </div> -->
        </nav>
        <div class="clearfix"></div>
    </div>
</header>