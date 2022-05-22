<?php include_once('header.php'); ?>

<div class="container my-5">
    <div class="col-md-12">
        <div class="justify-content-center">
            <div class="row">
                <h2>Contact us</h2>
                <p>Do you have any questions? Please do not hesitate
                    to contact us
                    directly. Our team will come back to you within
                    a matter of hours to help you.</p>
                <div class="col-md-9 mb-md-0 mb-5">
                    <form id="contact-form" name="contact-form" action="sendemail.php" method="POST">
                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" id="name" name="name" class="form-control mb-3"
                                        placeholder="Enter your Name">
                                </div>
                            </div>
                            <!--Grid column-->

                            <!--Grid column-->
                            <div class="col-md-6">
                                <div class="md-form mb-0">
                                    <input type="text" id="email" placeholder="Enter your Email" name="email"
                                        class="form-control mb-3">

                                </div>
                            </div>
                            <!--Grid column-->

                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">
                            <div class="col-md-12">
                                <div class="md-form mb-0">
                                    <input type="text" id="subject" placeholder="Enter Subject" name="subject"
                                        class="form-control mb-3">

                                </div>
                            </div>
                        </div>
                        <!--Grid row-->

                        <!--Grid row-->
                        <div class="row">

                            <!--Grid column-->
                            <div class="col-md-12">

                                <div class="md-form">
                                    <textarea type="text" id="message" placeholder="Enter your Message" name="message"
                                        rows="2" class="form-control md-textarea mb-3"></textarea>

                                </div>

                            </div>
                        </div>
                        <!--Grid row-->

                    </form>

                    <div class="text-center text-md-left">
                        <a class="btn btn-primary">Send</a>
                    </div>
                    <div class="status"></div>
                </div>
                <!--Grid column-->

            </div>
        </div>
    </div>
    <div class="col-md-3"></div>
</div>