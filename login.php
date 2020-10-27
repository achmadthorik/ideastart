<?php include "layout/head.php" ?>
<div style="margin-top: 5em;">
    <section id="appointment" class="appointment section-bg">

        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Selamat Datang</h2>

            </div>


            <form action="forms/appointment.php" method="post" role="form" class="php-email-form " data-aos="fade-up" data-aos-delay="100">


                <div class="d-flex justify-content-center">
                    <div class="col-md-6 form-group">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="email" data-msg="Please enter a valid email">
                        <div class="validate"></div>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="col-md-6 form-group">
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password" data-rule="minlen:8" data-msg="Please enter at least min 8 chars">
                        <div class="validate"></div>
                        <p>belum punya akun? <a href="register.php">Daftar</a>
                            <br><a href="register.php">Lupa Password</a>

                        </p>

                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <div class="col-md-6 form-group">
                        <button type="submit" class="btn btn-md btn-block ">Masuk</button>
                    </div>
                </div>



                <!--
                <div class="mb-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your appointment request has been sent successfully. Thank you!</div>
                </div>-->

            </form>

        </div>

    </section><!-- End Appointment Section -->
</div>
<?php include "layout/footer.php" ?>