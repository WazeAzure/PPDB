<!DOCTYPE html>
<html>
    <?php include 'head-template.php'?>
    <link rel="stylesheet" type="text/css" href="media/css/user_dashboard.css">
    </head>
    <body>
        <div class="wrapper">
        <?php include 'header-template.php'?>
        <main>
            <div class="main container">
                <div class="card">
                    <div class="card-header">
                        <h3>SELAMAT! ANDA DINYATAKAN LULUS SELEKSI DAERAH PPDB SMA PRADITA DIRGANTARA TA 2022/2023 & BERHAK MENGIKUTI SELEKSI PUSAT</h3>
                        <img id="logo-pradita" src="media/image/Logo-PD-1-300x297.png">
                    </div>
                    <div class="card-body">
                        <div class="card-body-left">
                            <!-- <img class="img-fluid" src="<?php echo "data:image/jpeg;base64,".base64_encode($row['Gambar'])?>"/> -->
                            <img class="img-fluid" src="<?php echo "media/image/".$row['Gambar']?>">
                        </div>
                        <div class="card-body-right">
                            <p class="h3 color-yellow">NISN: <?php echo $row['NISN']?></p>
                            <h3 class="display-3 card-title bold"><?php echo $row['Nama']?></h3>
                            <p class="card-text">Calon Siswa SMA Pradita Dirgantara TA 2022/2023</p>
                            <div class="card-body-right-bottom">
                                <div class="row">
                                    <p class="color-yellow h4">Tanggal Lahir</p>
                                    <p><?php echo $row['TTL'];?></p>
                                </div>
                                <div class="row">
                                    <p class="color-yellow h4">SMP Asal</p>
                                    <p><?php echo $row['Sekolah'];?></p>
                                </div> 
                                <div class="row">
                                    <p class="color-yellow h4">Lanud Asal</p>
                                    <p><?php echo $row['Asal_Lanud'];?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer justify-content-center">
                        <p>Silahkan Melakukan Pendaftaran Ulang Melalui Link Berikut</p>
                        <a href="https://sma.praditadirgantara.sch.id"><button class="btn btn-primary">Pendaftaran Ulang</button></a>
                    </div>
                </div>
            </div>
        </main>
        <?php include 'footer-template.php'?>
        </div>
    </body>
</html>
