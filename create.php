<?php include "layout/head.php" ?>
<div style="margin-top: 5em;">
    <section id="appointment" class="appointment section-bg">

        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Tambah Data</h2>

            </div>


            <form action="forms/appointment.php" method="post" role="form" class="php-email-form " data-aos="fade-up" data-aos-delay="100">

                <div class="form-group row">
                    <label for="judul" class="col-sm-2 col-form-label">Kategori</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="judul" name="judul" autofocus value="">
                        <div id="validationServer03Feedback" class="invalid-feedback">

                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="penulis" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="penulis" name="penulis" value="" placeholder="Nama Usaha">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="penerbit" class="col-sm-2 col-form-label">Pemilik</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="penerbit" name="penerbit" value="" placeholder="PT/CV/Pemilik">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="penerbit" class="col-sm-2 col-form-label">Jumlah</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="penerbit" name="penerbit" value="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="penerbit" class="col-sm-2 col-form-label">Alamat</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="penerbit" name="penerbit" value="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="penerbit" class="col-sm-2 col-form-label">Pemilik</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="penerbit" name="penerbit" value="">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="sampul" class="col-sm-2 col-form-label">Gambar</label>
                    <div class="col-sm-2">
                        <img src="/img/default.png" class="img-thumbnail img-preview">
                    </div>
                    <div class="col-sm-8">
                        <div class="custom-file">
                            <input type="file" class="custom-file-input" id="sampul" name="sampul" onchange="">
                            <div id="validationServer03Feedback" class="invalid-feedback">

                            </div>
                            <label class="custom-file-label" for="sampul">Pilih Gambar..</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-12">
                        <button type="submit" class="btn btn-primary btn-lg btn-block">Tambah Data</button>
                    </div>
                </div>
            </form>

        </div>

    </section><!-- End Appointment Section -->
</div>
<?php include "layout/footer.php" ?>