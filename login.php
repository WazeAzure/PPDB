<!DOCTYPE html>
<html>
    <?php include 'head-template.php'?>
        <link rel="stylesheet" type="text/css" href="media/css/login.css">
    </head>
    <body>
        <?php include 'header-template.php'?>
        <main>
            <div class="main container">
                <div class="card align-items-center">
                    <h2 class="card-title">Hasil Seleksi PPDB 2022</h2>
                    <p class="text-muted">Masukkan Nomor Pendaftaran PPDB dan Tanggal Lahir</p>
                    <form METHOD="POST" ACTION="user_data.php">
                        <label for="user_no">NISN</label>
                        <div class="row">
                            <div class="form-group">
                                <input class="form-control" type="text" id="user_no" name="user_no" placeholder="0000">
                            </div>
                        </div>
                        <label for="user_ttl">Tanggal Lahir</label>
                        <div class="row">
                            <div class="form-group col-3">
                                <input class="form-control" type="text" id="user_ttl_dd" name="user_ttl_dd" placeholder="DD" pattern="[0-9]{1,2}">
                            </div>
                            <div class="form-group col-3">
                                <input class="form-control" type="text" id="user_ttl_mm" name="user_ttl_mm" placeholder="MM"pattern="[0-9]{1,2}">
                            </div>
                            <div class="form-group col-5">
                                <input class="form-control" type="text" id="user_ttl_yy" name="user_ttl_yy" placeholder="YYYY" pattern="[0-9]{4}">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-primary" name="submit">Lihat Hasil<span class="fa fa-search"></span></button>
                    </form>
                </div>
            </div>
        </main>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

        <?php include 'footer-template.php'?>
    </body>
</html>
