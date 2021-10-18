<?php echo $this->extend('layout/template'); ?>

<?php echo $this->section('content'); ?>

<div class="wa" style="position: fixed; z-index: 20; bottom: 0px; left: 15px; font-size: 40px;"> <a href=""> <i class="fab fa-whatsapp-square" style="color: rgb(20, 131, 20);"></i> </a></div>

<!-- Azka & Azzahra -->

<div class="container-fluid" style="background-color: #1f2b41; ">
    <div class="row p-2">
        <div class="col text-white"></div>
        <ul class="nav justify-content-end">
            <li class="nav-item">
                <a class="nav-link text-white" aria-current="page" href="#"><i class="fas fa-envelope text-white"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#"><i class="fab fa-facebook-f text-white"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#"><i class="fab fa-twitter text-white"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#"><i class="fab fa-youtube text-white"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="#"><i class="fab fa-instagram text-white"></i></a>
            </li>
            <li class="nav-item"></li>
            <a class="nav-link text-white btn-success" href="/admin/register"> <strong>Daftar Sekarang</strong></a>
            </li>
        </ul>
    </div>
</div>
</div>

<div class="navbar navbar-expand-lg container-fluid p-3 bg-white sticky-top navbar-light">
    <img src="/img/logo.jpg" alt="" style="padding-left: 20px;">
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item dropdown">
                <a class="nav-link" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <Strong>Halaman Utama</Strong>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" style="padding-left: 2em;" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <Strong>Profile</Strong>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" style="padding-left: 2em;" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <Strong>Keunggulan</Strong>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" style="padding-left: 2em;" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <Strong>Akademik</Strong>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" style="padding-left: 2em;" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <Strong>Kemahasiswaan</Strong>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link" style="padding-left: 2em;" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <Strong>Kerja Sama</Strong>
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Action</a></li>
                    <li><a class="dropdown-item" href="#">Another action</a></li>
                    <li>
                        <hr class="dropdown-divider">
                    </li>
                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" style="padding-left: 2em; opacity: 0.5;" href="#"><i class="fas fa-search text-black"></i></a>
            </li>
        </ul>
    </div>
</div>

<!-- Azzahra -->

<div class="container-fluid">
    <div class="row">
        <div class="col">
            <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="/img/slide_2.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="/img/slide_4.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="/img/slide_5.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </div>
</div>

<!-- Azka -->

<div class="container p-6">
    <div class="row p-4">
        <div class="col -md p-2">
            <img src="/img/fotokaka.jpeg" class="d-block w-100" alt="...">
        </div>
        <div class="col -md p-2">
            <div class="card bg-dark text-white -md" style="border: 0px;">
                <img src="/img/fotokaka.jpeg" class="card-img" style="opacity:0.5;" alt="...">
                <div class="card-img-overlay">
                    <br>
                    <h5 class="card-title" style="font-size: 30px;"> <strong> Ayo Daftar Sekarang </strong></h5>
                    <br>
                    <p class="card-text" style="font-size: 18px; color:#51be78;"> <strong> Pendaftaran Mahasiswa Baru T.A. 2021/2022 dimulai tanggal 10 November 2020 </strong></p>
                    <br>
                    <p class="card-text" style="font-size: 18px; color: #c1d3ff;"> <strong> Kuliah di Kampus ICT Terbaik di Bali Nusra yang semua Program Studinya sudah Terakreditasi B-BAN PT dan International ISO 9001:2015 </strong></p>
                    <br>
                    <div class="row row-cols-auto">
                        <div class="col"><a href="/pages/register"><button type="button" class="btn btn-success"> <strong> Daftar Sekarang </strong></button> </a></div>
                        <div class="col"><button type="button" class="btn btn-success"> <strong> Info Pendaftaran </strong></button></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Azzahra -->

<div class="container-fluid bg-dark">
    <div class="row p-4">
        <div class="col -md p-2">
            <div class="bg-dark text-white">
                <img src="/img/1.png" class="d-block w-30" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Sistem Informasi</h5>
                    <p class="card-text">Membentuk Individu yang memiliki keahlian di bidang komputer yang mampu menganalisis, merancang, membangun serta mengoperasikan sistem yang berfokus langsung terhadap kebutuhan bisnis, manajemen serta kontennya.</p>
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col -md p-2">
            <div class="bg-dark text-white">
                <img src="/img/2.png" class="d-block w-30" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Sistem Komputer</h5>
                    <p class="card-text">Membentuk Individu yang memiliki keahlian di bidang komputer yang mampu merancang, membangun serta mengoperasikan komputer serta hardware yang berfokus langsung terhadap kebutuhan teknis khusus yang diataranya Networking & Cyber Security dan Robotics & Embedded System.</p>
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col -md p-2">
            <div class="bg-dark text-white">
                <img src="/img/3.png" class="d-block w-30" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Teknologi Informasi</h5>
                    <p class="card-text">Membentuk individu yang memiliki kemampuan di bidang ilmu teknologi informasi dan komputer untuk perencanaan, penerapan, dan pengelolaan perangkat lunak dan perangkat keras serta manajemen keamanan TI dan Tata kelola Teknologi Informasi (IT Governance) untuk kebutuhan dunia bisnis dan industri.</p>
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col -md p-2">
            <div class="bg-dark text-white">
                <img src="/img/4.png" class="d-block w-30" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Manajemen Informatika</h5>
                    <p class="card-text">Membentuk Individu yang memiliki keahlian di bidang komputer yang mampu mengelola, mengoperasikan serta mengimplementasikan teknologi terhadap kebutuhan perusahaan.</p>
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
    </div>
    <div class="row p-4">
        <div class="col -md p-2">
            <div class="bg-dark text-white">
                <img src="/img/5.png" class="d-block" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Bisnis Digital</h5>
                    <p class="card-text">Menjadikan peserta didik memahami dan mampu mengimplementasikan pengelolaan bisnis berbasis digital dengan mengadopsi trend perkembangan terkini di sektor industri e commerce global.</p>
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col -md p-2">
            <div class="bg-dark text-white">
                <img src="/img/6.png" class="d-block" alt="...">
                <div class="card-body">
                    <h5 class="card-title">International Dual Degree</h5>
                    <p class="card-text">Membentuk individu yang kompeten dalam Teknologi Informasi berstandard dunia dengan pengakuan dari HELP University</p>
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
        <div class="col -md p-2">
            <div class="bg-dark text-white">
                <img src="/img/7.png" class="d-block" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Binus Dual Degree</h5>
                    <p class="card-text">Membentuk Individu yang memiliki keahlian di bidang komputer yang mampu menganalisis, merancang serta mengimplementasikan sistem sesuai dengan perkembangan terkini bisnis digital</p>
                    <a href="#" class="btn btn-primary">Learn More</a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Azka -->

<div class="container">
    <div class="row">
        <div class="col">
            <iframe frameborder="0" scrolling="no" marginheight="0" marginwidth="0" width="100%" height="590" type="text/html" src="https://www.youtube.com/embed/X8csfIwTZYY?autoplay=0&fs=0&iv_load_policy=3&showinfo=0&rel=0&cc_load_policy=0&start=0&end=0&origin=https://youtubeembedcode.com">
                <div><small><a href="https://youtubeembedcode.com/nl/">youtubeembedcode.com/nl/</a></small></div>
                <div><small><a href="https://kasinoutanspelpaus.nu/">kasinoutanspelpaus.nu</a></small></div>
            </iframe>
        </div>
    </div>
</div>

<!-- Azka & Azzahra -->

<div class="container-fluid p-3">
    <div class="row ">
        <div class="col">
            <div class="card bg-light text-white ">
                <img src="/img/bg-itb.jpg" class="card-img" style="filter:opacity(20%);" alt="...">
                <div class="card-img-overlay text-black">
                    <br><br><br>
                    <img src="/img/logo-itb.png" class="mx-auto d-block" alt="">
                    <br>
                    <h3 class="card-title text-center">Institut Teknologi dan Bisnis STIKOM Bali</h3>
                    <br><br>
                    <p class="card-text" style="font-size: 17px;">Berawal dari bertemunya para pemerhati, pencinta dan praktisi pendidikan yakni Prof. Dr. Made Bandem, MA., (saat itu Rektor ISI Jogjakarta), Dr. Dadang Hermawan (praktisi pendidikan), Drs. Ida Bagus Dharmadiaksa, M.Si., Ak. (Dosen) dan Drs. Satria Dharma (praktisi pendidikan) pada tahun 2.000 yang begitu menaruh perhatian atas pesat dan dinamisnya perkembangan teknologi informasi dan komunikasi (TIK) di dunia termasuk di Indonesia dan Bali, namun di lain pihak perguruan tinggi bidang TIK sampai dengan jenjang sarjana belum ada.</p>
                    <p class="card-text" style="font-size: 17px;">Maka pada tanggal 20 Mei 2001, berdirilah Yayasan Widya Dharma Shanti yang akan menjadi Badan Penyenggara Perguruan Tinggi Swasta dan selanjutnya diajukanlah ijin pendirian Institut Teknologi dan Bisnis (ITB) STIKOM Bali kepada Direktorat Jenderal Pendidikan Tinggi Kementerian Pendidikan Nasional.
                        Dengan berbagai usaha dan lika liku pengurusan ijin serta doa, maka pada tanggal 10 Agustus 2002 keluarlah ijin dimaksud dengan nomor 157/D/O/2002 dengan 2 jurusan / program studi yakni Sistem Komputer (jenjang S1) dan Manajemen Informatika (jenjang D3) lalu pada tahun 2009 ada tambahan program studi baru yakni Sistem Infomasi (jenjang S1).</p>
                    <p class="card-text" style="font-size: 17px;">Saat ini, Institut Teknologi dan Bisnis (ITB) STIKOM Bali sudah menjadi perguruan tinggi bertaraf internasional yang sangat dipercaya oleh masyarakat, terbukti dengan jumlah mahasiswa yang sedang kuliah tidak kurang dari 6.000 orang dan alumni yang mencapai hampir 4.000 orang (tahun 2015). Selain itu berbagai kerjasama dalam bidang tri dharma perguruan tinggi telah dilakukan dengan berbagai pihak baik instansi pemerintah, instansi/perusahaan swasta, BUMN, BUMD, Perguruan Tinggi baik dalam maupun luar negeri.</p>
                </div>
            </div>

            <!-- Azka -->

            <div class="container-fluid" style="margin-bottom: 50px;">
                <div class="row">
                    <div class="col-md-8 col-xs-12">
                        <h3 style="color: #1f2b41; padding-top: 50px;"> <Strong>News & Update ---------------------------------</Strong> </h3>
                        <a href="#" style="color: green; text-decoration: none;">Read All News</a>
                        <div class="row" style="padding-top: 20px;">
                            <div class="col">
                                <div class="jumbotron">
                                    <p class="lead" style="opacity: 0.5; font-size: 15px;">9 OCTOBER 2021 <br> / edwar, fauzan, ichawan, joko, mcos, santoso, ukmumcos</p>
                                    <h4> <strong> <a href="https://www.stikom-bali.ac.id/id/pengabdian-masyarakat-ukm-mcos-berbagi-ilmu-digital-marketing-dan-sembako/" style="text-decoration: none; color: #1f2b41;">Pengabdian Masyarakat UKM MCOS: Berbagi Ilmu Digital Marketing dan Sembako</a> </strong></h4>
                                    <p class="lead">
                                        <a class="btn btn-success btn-lg" style="margin-top: 10px;" href="#" role="button">Read more</a>
                                    </p>
                                </div>
                            </div>
                            <div class="col">
                                <div class="list-group">
                                    <a href="https://www.stikom-bali.ac.id/id/himaprodi-ti-terbentuk/" class="list-group-item list-group-item-action flex-column align-items-start">
                                        <div class="d-flex w-100 justify-content-between">
                                            <p class="lead" style="opacity: 0.5; font-size: 15px;">9 OCTOBER 2021</p>
                                        </div>
                                        <h6 class="mb-1"> <strong> HIMAPRODI TI TERBENTUK </strong></h6>
                                    </a>
                                    <a href="https://www.stikom-bali.ac.id/id/rangsang-kreativitas-pkm-adakan-workshop-write-your-idea-get-your-achievement/" class="list-group-item list-group-item-action flex-column align-items-start">
                                        <div class="d-flex w-100 justify-content-between">
                                            <p class="lead" style="opacity: 0.5; font-size: 15px;">4 October 2021 / lestia, pkm, putri, utari</p>
                                        </div>
                                        <h6 class="mb-1"> <strong> Rangsang Kreativitas, PKM Adakan Workshop “Write Your Idea, Get Your Achievement” </strong></h6>
                                    </a>
                                    <a href="https://www.stikom-bali.ac.id/id/u2m-gelar-pengabdian-masyarakat-untuk-umkm-go-digital/" class="list-group-item list-group-item-action flex-column align-items-start">
                                        <div class="d-flex w-100 justify-content-between">
                                            <p class="lead" style="opacity: 0.5; font-size: 15px;">4 October 2021 <br> / bintang, digital, panji, u2m</p>
                                        </div>
                                        <h6 class="mb-1"> <strong> U2M Gelar Pengabdian Masyarakat Untuk UMKM Go Digital </strong></h6>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-xs-12">
                        <div class="card bg-light" style="border: none;">
                            <img src="/img/logo-bagian-7.jpg" class="card-img" alt="..." style="height: 560px; filter:opacity(20%);">
                            <div class="card-img-overlay p-5">
                                <h5 class="card-title" style="font-size: 30px; padding-bottom: 20px;"> <strong> <i class="fas fa-link"></i>&nbsp; Quick Links </strong></h5>
                                <p class="card-text" style="font-size: 16px; border-bottom: 1px solid black; padding-bottom: 14px;"> <strong> Penerimaan Siswa Baru </strong> </p>
                                <p class="card-text" style="font-size: 16px; border-bottom: 1px solid black; padding-bottom: 14px;"> <strong> E-Learning ITB STIKOM Bali </strong> </p>
                                <p class="card-text" style="font-size: 16px; border-bottom: 1px solid black; padding-bottom: 14px;"> <strong> Online Learning ITB STIKOM Bali </strong> </p>
                                <p class="card-text" style="font-size: 16px; border-bottom: 1px solid black; padding-bottom: 14px;"> <strong> Sistem Informasi Online - SION </strong> </p>
                                <p class="card-text" style="font-size: 16px; border-bottom: 1px solid black; padding-bottom: 14px;"> <strong> Sistem Informasi Dosen (SID) </strong> </p>
                                <p class="card-text" style="font-size: 16px; border-bottom: 1px solid black; padding-bottom: 14px;"> <strong> E-Reserach ITB STIKOM Bali </strong> </p>
                                <p class="card-text" style="font-size: 16px; border-bottom: 1px solid black; padding-bottom: 14px;"> <strong> Digital Library ITB STIKOM Bali </strong> </p>
                                <p class="card-text" style="font-size: 16px; border-bottom: 1px solid black; padding-bottom: 14px;"> <strong> Career Center ITB STIKOM Bali </strong> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Azka -->

            <div class="container-fluid">
                <div class="row">
                    <div class="col">
                        <h3 style="color: #1f2b41; padding-top: 50px;"> <Strong>Upcoming Events ---------------------------------</Strong> </h3>
                        <div class="row row-cols-auto" style="padding-top: 30px;">
                            <div class="col" style="font-family: 'Bebas Neue', cursive; border-bottom: 3px solid #50bd77;"><strong>
                                    <h2 style="color: #50bd77;">05</h2>
                                    <p>SEP</p>
                                </strong></div>
                            <div class="col"><strong><a href="#" style="text-decoration: none; color: #1f2b41; font-size: 20px;">Pengabdian Masyarakat UKM MCOS: Berbagi Ilmu Digital Marketing dan Sembako</a></strong>
                                <p style="padding-top: 15px;"><i class="far fa-clock"></i>
                                    <font style="color: #50bd77;">8:00 am - 5:00 pm</font>
                                </p>
                            </div>
                        </div>
                        <div class="row row-cols-auto" style="padding-top: 30px;">
                            <div class="col" style="font-family: 'Bebas Neue', cursive; border-bottom: 3px solid #50bd77;"><strong>
                                    <h2 style="color: #50bd77;">07</h2>
                                    <p>JUN</p>
                                </strong></div>
                            <div class="col"><strong><a href="#" style="text-decoration: none; color: #1f2b41; font-size: 20px;">SPEKTAKULER…, FASTTEKNO 2021 DIIKUTI 672 PESERTA DARI SELURUH INDONESIA</a></strong>
                                <p style="padding-top: 15px;"><i class="far fa-clock"></i>
                                    <font style="color: #50bd77;">8:00 am - 5:00 pm</font>
                                </p>
                            </div>
                        </div>
                        <div class="row row-cols-auto" style="padding-top: 30px;">
                            <div class="col" style="font-family: 'Bebas Neue', cursive; border-bottom: 3px solid #50bd77;"><strong>
                                    <h2 style="color: #50bd77;">04</h2>
                                    <p>MAY</p>
                                </strong></div>
                            <div class="col"><strong><a href="#" style="text-decoration: none; color: #1f2b41; font-size: 20px;">PASKAMRAS Gelar Pelatdas dan Lantik Anggota Baru di Garden Stone Bali</a></strong>
                                <p style="padding-top: 15px;"><i class="far fa-clock"></i>
                                    <font style="color: #50bd77;">8:00 am - 5:00 pm</font>
                                </p>
                            </div>
                        </div>
                        <br><br>
                        <button type="button" class="btn btn-success"><strong>Lihat Semua Kegiatan</strong></button>
                    </div>
                </div>
            </div>
            <br><br>

            <!-- Azka -->

            <div class="container-fluid" style="box-shadow: -4px -4px 10px rgb(211, 208, 208);">
                <div class="row" style="padding-top: 40px; padding-bottom: 10px;">
                    <div class="col">
                        <div class="card mb-3" style="max-width: 540px; border: none;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="/img/logo-kemendikbud.png" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title" style="color: #1f2b41; font-size: 17px;"> <strong> Kemendikbud </strong> </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-3" style="max-width: 540px; border: none;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="/img/logo-kemenristek.png" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title" style="color: #1f2b41; font-size: 17px;"> <strong> Kemenristek/BRIN </strong> </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-3" style="max-width: 540px; border: none;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="/img/logo-helpuniversity.png" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title" style="color: #1f2b41; font-size: 17px;"> <strong> HELP University </strong> </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card mb-3" style="max-width: 540px; border: none;">
                            <div class="row g-0">
                                <div class="col-md-4">
                                    <img src="/img/logo-binus.png" class="img-fluid rounded-start" alt="...">
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title" style="color: #1f2b41; font-size: 17px;"> <strong> BINUS University </strong> </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Azka dan Azzahra -->

            <div class="container-fluid bg-dark" style="padding-bottom: 70px;">
                <div class="row p-3">
                    <div class="col" style="margin-top: 50px;">
                        <img src="/img/logo-itb2.png" class="card-img" alt="...">
                    </div>
                    <div class="col text-white " style="margin-top: 50px;">
                        <p style="border-bottom: 3px solid green; padding-bottom: 7px; font-size: 20px;"> <strong> Alamat Kampus </strong></p>
                        <p class="card-text" style="opacity: 0.5;">Kampus Renon:
                            Jl. Raya Puputan No. 86 Renon – Denpasar
                            Telp: (0361) 244445
                        </p>
                        <p class="card-text" style="opacity: 0.5;">
                            Kampus Jimbaran :
                            Jl. Raya Kampus Udayana Jimbaran Bali
                            Telp : (0361) 8953537 081288778840</p>

                        <p class="card-text" style="opacity: 0.5;"> Kampus Abiansemal :
                            Jl. Janger Dauh Yeh Cani Kec. Abiansemal Kabupaten Badung, Bali
                            Telp : 0856-3700-803</p>
                    </div>
                    <div class="col text-white " style="margin-top: 50px;">
                        <p style="border-bottom: 3px solid green; padding-bottom: 7px; font-size: 20px;"> <strong> ITB STIKOM Bali Grup</strong></p>
                        <p class="card-text" style="opacity: 0.5;">Sekolah Tinggi Teknologi Bandung
                            Politeknik Nasional Denpasar
                            Politeknik Ganesha Guru
                            Bisma Informatika
                            Lembaga Pendidikan Bali Asia
                            SMK TI Bali Global
                            BPRS FAJAR SEJAHTERA</p>
                    </div>
                    <div class="col text-white " style="margin-top: 50px;">
                        <p style="border-bottom: 3px solid green; padding-bottom: 7px; font-size: 20px;"> <strong> Bergabunglah Bersama Kami </strong></p>

                        <p class="card-text" style="opacity: 0.5;">Facebook Page ITB STIKOM Bali
                            Twitter ITB STIKOM Bali
                            Channel Youtube ITB STIKOM Bali
                            Instagram ITB STIKOM Bali</p>
                    </div>
                </div>
            </div>
            <?php echo $this->endSection(); ?>