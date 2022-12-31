<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
        crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css"   />
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand d-lg-none" href="#">
                <img src="./img/GU_Monogram_Logo_Design_By_Vectorseller___TheHungryJPEG-removebg-preview.png"
                    alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mx-auto">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#berita1">Hot news</a>
                    </li>
                    <a class="navbar-brand d-none d-lg-block" href="#">
                        <img src="./img/GU_Monogram_Logo_Design_By_Vectorseller___TheHungryJPEG-removebg-preview.png"
                            alt="logo">
                    </a>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Berita Viral</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Berita terbaru</a>
                    </li>
                    <div class="dropdown">
                        <button class="btn btn-dark dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                          Login
                        </button>
                        <div class="dropdown-menu">
                            <form class="px-4 py-3">
                              <div class="mb-3">
                                <label for="exampleDropdownFormEmail1" class="form-label">Username</label>
                                <input type="email" class="form-control" id="exampleDropdownFormEmail1" placeholder="username">
                              </div>
                              <div class="mb-3">
                                <label for="exampleDropdownFormPassword1" class="form-label">Password</label>
                                <input type="password" class="form-control" id="exampleDropdownFormPassword1" placeholder="Password">
                              </div>
                              <button type="submit" class="btn btn-primary">Sign in</button>
                            </form>
                          </div>
                      </div>
                </ul>
            </div>
        </div>
    </nav>
    <!-- content -->
    <div class="container mt-3 d-flex justify-content-center align-items-center">
        <div id="carouselExampleCaptions" class="carousel slide w-50" data-bs-ride="false">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active img-fluid">
                    <img src="./img/misa-malam-natal-di-gpib-immanuel-berlangsung-khidmat-5_169.jpeg"
                        class="d-block w-100 img-fluid" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>First slide label</h5>
                        <p>Some representative placeholder content for the first slide.</p>
                    </div>
                </div>
                <div class="carousel-item img-fluid">
                    <img src="./img/pt-transjakarta-mengadakan-pemberian-reward-atau-penghargaan-bertajuk-operator-awards-2022-dok-transjakarta_169.jpeg"
                        class="d-block w-100 img-fluid" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Second slide label</h5>
                        <p>Some representative placeholder content for the second slide.</p>
                    </div>
                </div>
                <div class="carousel-item img-fluid">
                    <img src="./img/warga-asyik-main-ski-di-jalanan-saat-as-dihantam-badai-salju-4_169.jpeg"
                        class="d-block w-100 img-fl" alt="...">
                    <div class="carousel-caption d-none d-md-block">
                        <h5>Third slide label</h5>
                        <p>Some representative placeholder content for the third slide.</p>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev tombol" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next tombol" type="button" data-bs-target="#carouselExampleCaptions"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- content 1 -->
    <section id="berita1">
        <div class="container">
            <div class="row text-center">
                <div class="col p-2">
                    <h2>Hot News</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-3">
                    <div class="card" style="width: 24rem;">
                        <img src="./img/misa-malam-natal-di-gpib-immanuel-berlangsung-khidmat-5_169.jpeg"
                            class="card-img" alt="ronaldo nangis">
                        <div class="card-body">
                            <h5 class="card-title">Misa Natal Selesai, Jemaat Tinggalkan Gereja Katedral Jakarta
                            </h5>
                            <p class="card-text">Humas Keuskupan Agung Jakarta dan Gereja Katedral Susyana Suwadie
                                mengatakan malam misa kali dibagi menjadi tiga sesi.</p>
                            <a href="#" class="btn btn-primary">Baca Berita.</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card" style="width: 24rem;">
                        <div class="card-body">
                            <h5 class="card-title">Badai Musim Dingin di Amerika Serikat, 15 Orang Tewas</h5>
                            <p class="card-text">badai musim dingin merobohkan sejumlah kabel listrik. Akibatnya
                                listrik
                                1,4 juta rumah di AS sempat padam kemarin.</p>
                            <a href="#" class="btn btn-primary">Baca Berita.</a>
                        </div>
                        <img src="./img/warga-asyik-main-ski-di-jalanan-saat-as-dihantam-badai-salju-4_169.jpeg"
                            class="card-img-bottom" alt="ronaldo nangis">
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card" style="width: 24rem;">
                        <img src="./img/pt-transjakarta-mengadakan-pemberian-reward-atau-penghargaan-bertajuk-operator-awards-2022-dok-transjakarta_169.jpeg"
                            class="card-img-top" alt="ronaldo nangis">
                        <div class="card-body">
                            <h5 class="card-title">TransJ Beri Penghargaan ke Operator-Sopir Paling Aman hingga
                                Inovatif
                            </h5>
                            <p class="card-text">PT TransJakarta (transJ) mengadakan pemberian reward atau
                                penghargaanbertajuk 'Operator Awards 2022'.</p>
                            <a href="#" class="btn btn-primary">Baca berita.</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <div class="container section mt-4">
        <div class="section-title">
            <span>Analysis & Prediction</span>
        </div>
        <div class="row">
            <div class="card" style="width: 18rem;">
                <img src="img/misa-malam-natal-di-gpib-immanuel-berlangsung-khidmat-5_169.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
            <div class="card" style="width: 18rem;">
                <img src="img/misa-malam-natal-di-gpib-immanuel-berlangsung-khidmat-5_169.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
            <div class="card" style="width: 18rem;">
                <img src="img/misa-malam-natal-di-gpib-immanuel-berlangsung-khidmat-5_169.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
            <div class="card" style="width: 18rem;">
                <img src="img/misa-malam-natal-di-gpib-immanuel-berlangsung-khidmat-5_169.jpeg" class="card-img-top" alt="...">
                <div class="card-body">
                  <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                </div>
              </div>
<!-- content 2 -->

</html>