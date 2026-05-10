<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contact United Recuritment</title>
    <?php include_once('includes/site-master.php') ?>
</head>

<body>
    <?php include_once('includes/header.php') ?>

    <main>
        <!-- =========================banner=================== -->
        <section class="sub_banner">
            <div class="contain">
                <div class="content">
                    <h1>Application Form</h1>
                    <p><a href="">Home</a> / Application Form</p>
                </div>
            </div>
        </section>
        <!-- ===========application-form====== -->
        <section class="application-form">
            <div class="shape">
                <img src="images/shape-3.png" alt="">
            </div>
            <div class="shape-1">
                <img src="images/01.png" alt="">
            </div>
            <div class="contain">
                <div class="inner">
                    <form action="">
                        <h2>Submit <strong>Your</strong> Application</h2>
                        <div class="row">
                            <h4>Personal Details</h4>
                            <div class="col-md-6">
                                <div class="txtGrp">
                                    <label for="first-name" class="">
                                        First Name
                                        <abbr class="required">*</abbr>
                                    </label>
                                    <input type="text" id="fname" class="input-text">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="txtGrp">
                                    <label for="Last-name" class="">
                                        Last Name
                                        <abbr class="required">*</abbr>
                                    </label>
                                    <input type="text" id="lname" class="input-text">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="txtGrp">
                                    <label for="email" class="">
                                        Email
                                        <abbr class="required">*</abbr>
                                    </label>
                                    <input type="email" id="email" class="input-text">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="txtGrp">
                                    <label for="phone" class="">
                                        Phone
                                        <abbr class="required">*</abbr>
                                    </label>
                                    <input type="text" id="phone" class="input-text">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <label for="country" class="">
                                    Country
                                    <abbr class="required">*</abbr>
                                </label>
                                <div class="txtGrp">
                                    <select name="driver-country" id="driver-country" class="input-text">
                                        <option value="">Select a country…</option>
                                        <option value="AM">America</option>
                                        <option value="PK">Pkistan</option>
                                        <option value="IN">India</option>
                                        <option value="BN">Bangladaish</option>
                                        <option value="CH">China</option>
                                        <option value="AQ">Antarctica</option>
                                        <option value="Al">Algeria</option>
                                        <option value="AF">Afghanistan</option>
                                        <option value="DZ">Albania</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="txtGrp">
                                    <label for="address" class="">
                                        Street Address
                                        <abbr class="required">*</abbr>
                                    </label>
                                    <input type="text" class="input-text">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="txtGrp">
                                    <label for="zip" class="">
                                        Post Code / Zip
                                        <abbr class="required">*</abbr>
                                    </label>
                                    <input type="text" class="input-text">

                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="txtGrp">
                                    <label for="city" class="">
                                        Town / City
                                        <abbr class="required">*</abbr>
                                    </label>
                                    <input type="text" class="input-text">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <h4>Additional Information</h4>
                            </div>
                            <div class="col-md-12">
                                <div class="txtGrp">
                                    <textarea id="message" placeholder="Notes" class="input-text txtArea"></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <button type="button" class="uploadImg">
                                    Upload Resume
                                    <i class="fa fa-cloud-upload" aria-hidden="true"></i>
                                </button>
                                <input type="file" class="uploadFile">
                            </div>
                            <div class="col-md-12">
                                <label for="" class="">
                                    Optional
                                    <abbr class="required">*</abbr>
                                </label>
                                <button type="button" class="uploadImg">
                                    Cover Letter
                                    <i class="fa fa-cloud-upload" aria-hidden="true"></i>
                                </button>
                                <input type="file" class="uploadFile">
                            </div>
                            <div class="col-md-12">
                                <div class="txtGrp text-center">
                                    <button class="webBtn">Submit Your Application</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </section>
    </main>
    <?php include_once('includes/footer.php') ?>
    <?php include_once('includes/commonjs.php') ?>
</body>

</html>