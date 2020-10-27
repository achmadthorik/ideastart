<?php include "layout/head.php" ?>
<div style="margin-top: 5em;">
    <section id="appointment" class="appointment section-bg">

        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Daftar Sekarang</h2>
                <p>Daftarkan Diri Anda Untuk Bergabung</p>
            </div>

            <form action="forms/appointment.php" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
                <div class="form-row">
                    <div class="col-md-4 form-group">
                        <input type="text" name="name" class="form-control" id="name" placeholder="Nama Lengkap" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                        <div class="validate"></div>
                    </div>
                    <div class="col-md-4 form-group">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email" data-rule="email" data-msg="Please enter a valid email">
                        <div class="validate"></div>
                    </div>
                    <div class="col-md-4 form-group">
                        <input type="tel" class="form-control" name="phone" id="phone" placeholder="Telpon" data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                        <div class="validate"></div>
                    </div>
                </div>
                <div class="form-row">
                    <div class="col-md-4 form-group">
                        <input type="password" name="password" class="form-control" id="password" placeholder="Password" data-rule="minlen:8" data-msg="Please enter at least min 8 chars">
                        <div class="validate"></div>
                    </div>
                    <div class="col-md-4 form-group">
                        <input type="password" name="confirm_password" class="form-control" id="confirm_password" placeholder="Confirm Password" data-rule="minlen:8" data-msg="Please enter at least min 8 chars">
                        <div class="validate"></div>
                    </div>
                    <div class="col-md-4 form-group">
                        <select name="doctor" id="doctor" class="form-control">
                            <option value="">Pilih Daftar</option>
                            <option value="Doctor 1">Pemilik Usaha</option>
                            <option value="Doctor 2">Pemilik Modal</option>
                        </select>
                        <div class="validate"></div>
                    </div>
                </div>
                <div class="mb-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your appointment request has been sent successfully. Thank you!</div>
                </div>
                <div class="text-center"><button type="submit" class="btn btn-md md-4">Daftar</button></div>
            </form>

        </div>

    </section><!-- End Appointment Section -->
</div>
<?php include "layout/footer.php" ?>