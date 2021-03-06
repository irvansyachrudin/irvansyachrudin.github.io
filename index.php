<!doctype html>
<html lang="en" id="home">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="referrer" content="origin">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" class="rel">
    <title>Irvan Syachrudin's Portfolio</title>
</head>

<!-- navbar -->
<nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
    <div class="d-flex flex-grow-1">
        <span class="w-100 d-md-none d-block">
            <!-- hidden spacer to center brand on mobile --></span>
        <a class="navbar-brand page-scroll" href="#home">
            Irvan Syachrudin
        </a>
        <div class="w-100 text-right">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavbar7">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </div>
    <div class="collapse navbar-collapse flex-grow-1 text-right" id="myNavbar7">
        <ul class="navbar-nav ml-auto flex-nowrap smooth-scroll list-unstyled">
            <li class="nav-item">
                <a data-scroll href="#about" class="nav-link m-1 menu-item page-scroll">About</a>
            </li>
            <li data-scroll class="nav-item">
                <a href="#portfolio" class="nav-link m-1 menu-item page-scroll">Portfolio</a>
            </li>
            <li data-scroll class="nav-item">
                <a href="#contact" class="nav-link m-1 menu-item page-scroll">Contact</a>
            </li>
        </ul>
    </div>
</nav>


<!-- akhir navbar -->

<body>
    <!-- Jumbotron -->
    <div class="jumbotron text-center">
        <img src="img/foto.png" class="rounded-circle img-thumbnail">
        <h1>Irvan Syachrudin</h1>
        <p>Web Developer | Data Analyst</p>
    </div>
    <!-- akhir Jumbotron -->

    <!-- about -->
    <section class="about" id="about">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2 class="text-center">About</h2>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 offset-md-2">

                    <table class="table pKiri">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col" colspan="3">Profile</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Nama</td>
                                <td>:</td>
                                <td>Irvan Syachrudin</td>
                            </tr>
                            <tr>
                                <td>TTL</td>
                                <td>:</td>
                                <td>Surabaya, 29 Mei 1997</td>
                            </tr>
                            <tr>
                                <td>Jenis Kelamin</td>
                                <td>:</td>
                                <td>Laki-Laki</td>
                            </tr>
                            <tr>
                                <td>Jurusan</td>
                                <td>:</td>
                                <td>Teknik Informatika</td>
                            </tr>
                            <tr>
                                <td>IPK</td>
                                <td>:</td>
                                <td>3,64</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
                <div class="col-md-4 mb-5">
                    <table class="table pKanan text-right">
                        <thead class=" thead-light">
                            <tr>
                                <th scope="col" colspan="3" class="mr-3">Education</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>SDS Halimah Surabaya (2003 - 2009)</td>
                            </tr>
                            <tr>
                                <td>SMPN 41 Surabaya (2009 - 2012)</td>
                            </tr>
                            <tr>
                                <td>SMKN 2 Surabaya - Rekayasa Perangkat Lunak (2012 - 2015)</td>
                            </tr>
                            <tr>
                                <td>Universitas Trunojoyo - Teknik Informatika (2015 - 2019)</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!-- akhir about -->

    <!-- portfolio -->
    <section class="portfolio" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="text-center">Portfolio</h2>
                    <hr>
                </div>
            </div>
            <div class="row mb">
                <div class="col-md-4 mb-5">
                    <a href="">
                        <img src="img/azindo.png" class="img-thumbnail">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="img/puncakjaya.png">
                        <img src="img/puncakjaya.png" class="img-thumbnail">
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="img/skripsi.png">
                        <img src="img/skripsi.png" class="img-thumbnail">
                    </a>
                </div>

            </div>

        </div>
    </section>
    <!-- akhir portfolio -->

    <!-- contact -->
    <section class="contact" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2>Contact</h2>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-8 offset-2">
                    <form action="https://formsubmit.co/irvansyachrudin97@gmail.com" method="POST">
                        <div class="form-group">
                            <label for="nama">Nama</label>
                            <input type="text" name="name" class="form-control" placeholder="Masukkan Nama">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" name="email" class="form-control" placeholder="Masukkan Email">
                        </div>
                        <div class="form-group">
                            <label for="notelp">No Telp</label>
                            <input type="tel" name="tel" class="form-control" placeholder="Masukkan No Telpon">
                        </div>
                        <div class="form-group">
                            <label for="pesan">Pesan</label>
                            <textarea class="form-control" name="message" id="" cols="30" rows="10" placeholder="Masukkan Pesan"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- akhir contact -->

    <!-- footer -->
    <footer>
        <div class="container text-center">
            <div class="row">
                <div class="col-sm-12">
                    <p> <i class="glyphicon glyphicon-copyright-mark"></i> copyright 2019 | build by. <a href="">IrvanSyachrudin</a></p>
                </div>
            </div>
        </div>
    </footer>
    <!-- akhir footer -->
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"> -->
    <!-- </script> -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js">
    </script>
    <script src="https://cdn.jsdelivr.net/gh/cferdinandi/smooth-scroll@15.0.0/dist/smooth-scroll.polyfills.min.js"></script>
    <script src="js/script.js"></script>
</body>

</html>