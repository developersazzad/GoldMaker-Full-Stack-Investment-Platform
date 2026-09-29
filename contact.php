<?php
 include("header.php");
 ?>

    <!-- ================> Page header start here <================== -->
    <section class="page-header bg--cover" style="background-image: linear-gradient(30deg,#0000004f,#00000073),url(assets/images/header/bg.jpg);background-size: cover;background-repeat: no-repeat;">
        <div class="container">
            <div class="page-header__content text-center">
                <h3 class="text-uppercase">Contact Us</h3>
                <nav style="--bs-breadcrumb-divider: '-';" aria-label="breadcrumb">
                    <ol class="breadcrumb justify-content-center mb-0">
                        <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Contact</li>
                    </ol>
                </nav>
            </div>
        </div>
    </section>
    <!-- ================> Page header end here <================== -->



    <!-- ================> info section start here <================== -->
    <div class="info padding-top padding-bottom">
        <div class="container">
            <div class="info__wrapper">
                <div class="row justify-content-center g-4">
                    <div class="col-lg-4 col-md-6">
                        <div class="info__item">
                            <div class="info__item-inner">
                                <div class="info__item-icon">
                                    <img src="assets/images/contact/01.png" alt="Location icon">
                                </div>
                                <div class="info__item-content">
                                    <h6>Office Address</h6>
                                    <p>1208 part Street Fifth Avenue</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="info__item">
                            <div class="info__item-inner">
                                <div class="info__item-icon">
                                    <img src="assets/images/contact/02.png" alt="Phone icon">
                                </div>
                                <div class="info__item-content">
                                    <h6>Phone Number</h6>
                                    <a href="tel:+22698745622">+22698745622</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="info__item">
                            <div class="info__item-inner">
                                <div class="info__item-icon">
                                    <img src="assets/images/contact/03.png" alt="Email icon">
                                </div>
                                <div class="info__item-content">
                                    <h6>Send Email </h6>
                                    <a href="mailto:email@example.com">email@example.com</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ================> info section end here <================== -->



    <!-- ================> Contact section start here <================== -->
    <section class="contact padding-top padding-bottom">
        <div class="container">
            <div class="section-header">
                <div class="section-header__content">
                    <h3>Get In Touch</h3>
                    <p>We're Always Eaer To Hear From You!</p>
                </div>
            </div>
            <div class="contact__wrapper">
                <div class="row justify-content-center">
                    <div class="col-lg-10">
                        <form class="form" action="contact.php" method="post" id="contact-form">
                            <div class="row">
                                <div class="col-md-6">
                                    <input type="text" placeholder="Your Name*" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="email" placeholder="Your Email*" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="tel" placeholder="Your No*" required>
                                </div>
                                <div class="col-md-6">
                                    <input type="text" placeholder="Subject*" required>
                                </div>
                                <div class="col-12">
                                    <textarea placeholder="Your Message"></textarea>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="default-btn"><span>Send Your Message</span></button>
                            </div>
                        </form>
                    </div>
                </div>
                <p class="form-message text-center mt-4"></p>
            </div>
        </div>
    </section>
    <!-- ================> Contact section end here <================== -->


    <!-- ================> map section start here <================== -->
    <div class="map">
        <div class="container-fluid px-0">
            <div class="map__wrapper">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d387190.2799120522!2d-74.25987460306818!3d40.697670064076384!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1647360575411!5m2!1sen!2sbd"
                    allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
    <!-- ================> map section end here <================== -->
<?php
 include("footer.php");
 ?>
