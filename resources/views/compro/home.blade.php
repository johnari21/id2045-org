@extends('layouts.app')

@section('content')
<section class="hero-section hero-section-full-height">
    <div class="container-fluid">
        <div class="row">

            <div class="col-lg-12 col-12 p-0">
                <div id="hero-slide" class="carousel carousel-fade slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="images/slide/slide-1.jpg" class="carousel-image img-fluid" alt="...">

                            <div class="carousel-caption d-flex flex-column justify-content-end">
                                <h1>KAMUS Peduli</h1>

                                <p>Berbagi Kasih, Membangun Masa Depan</p>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <img src="images/slide/slide-2.jpg" class="carousel-image img-fluid" alt="...">

                            <div class="carousel-caption d-flex flex-column justify-content-end">
                                <h1>Misi KAMI</h1>

                                <p>Aksi nyata untuk menciptakan perubahan</p>
                            </div>
                        </div>

                        <div class="carousel-item">
                            <img src="images/slide/slide-3.jpg" class="carousel-image img-fluid" alt="...">

                            <div class="carousel-caption d-flex flex-column justify-content-end">
                                <h1>Bergabunglah</h1>

                                <p>Bersama Kita Bisa Membuat Perbedaan</p>
                            </div>
                        </div>
                    </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#hero-slide" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>

                    <button class="carousel-control-next" type="button" data-bs-target="#hero-slide" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="section-padding" id="layanan">
    <div class="container">
        <div class="row">

            <div class="col-lg-10 col-12 text-center mx-auto">
                <h2 class="mb-5">Welcome to ID2045</h2>
            </div>

            <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0">
                <div class="featured-block d-flex justify-content-center align-items-center">
                    <a href="donate.html" class="d-block">
                        <img src="images/icons/hands.png" class="featured-block-image img-fluid" alt="">

                        <p class="featured-block-text">Bantuan <strong>Sosial</strong></p>
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0 mb-md-4">
                <div class="featured-block d-flex justify-content-center align-items-center">
                    <a href="donate.html" class="d-block">
                        <img src="images/icons/scholarship.png" class="featured-block-image img-fluid" alt="">

                        <p class="featured-block-text">Beasiswa<strong></strong></p>
                    </a>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0 mb-md-4">
                <div class="featured-block d-flex justify-content-center align-items-center">
                    <a href="donate.html" class="d-block">
                        <img src="images/icons/receive.png" class="featured-block-image img-fluid" alt="">

                        <p class="featured-block-text">Kesehatan<strong></strong></p>
                    </a>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="section-padding section-bg" id="about">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-12 mb-5 mb-lg-0">
                <img src="images/group-people-volunteering-foodbank-poor-people.jpg" class="custom-text-box-image img-fluid" alt="">
            </div>

            <div class="col-lg-6 col-12">
                <div class="custom-text-box">
                    <h2 class="mb-2">Kamus Peduli</h2>

                    <h5 class="mb-3">Komunitas Anak Muda Untuk Sesama​</h5>

                    <!-- <p class="mb-0">Merupakan perkumpulan anak muda yang memiliki kepedulian terhadap sesama yang bertujuan untuk memperjuangkan keadilan social dan ekonomi bagi masyarakat dengan menjadi jembatan langsung kebijakan kebijakan pemerintah agar program tersebut dapat tepat sasaran.</p> -->
                </div>

                <div class="row">
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="custom-text-box mb-lg-0">
                            <h5 class="mb-3">Visi</h5>

                            <p>Memperjuangkan Keadilan Sosial Ekonomi Bagi Masyarakat Indonesia.​</p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="custom-text-box mb-lg-0">
                            <h5 class="mb-3">Misi</h5>

                            <p><b>PEDULI</b></p>

                            <ul class="custom-list mt-2">
                                <li class="custom-list-item d-flex">
                                    <i class="bi-check custom-text-box-icon me-2"></i>
                                    P . Pengoptimalan program – program pemerintah​
                                </li>

                                <li class="custom-list-item d-flex">
                                    <i class="bi-check custom-text-box-icon me-2"></i>
                                    E . Ekonomi kreatif untuk mensejahterakan masyarakat​
                                </li>

                                <li class="custom-list-item d-flex">
                                    <i class="bi-check custom-text-box-icon me-2"></i>
                                    D . Digitalisasi dalam proses dan langkah – langkah nya​
                                </li>

                                <li class="custom-list-item d-flex">
                                    <i class="bi-check custom-text-box-icon me-2"></i>
                                    U . UMKM sebagai kegiatan peningkatan ekonomi masyarakat​
                                </li>

                                <li class="custom-list-item d-flex">
                                    <i class="bi-check custom-text-box-icon me-2"></i>
                                    L . Lingkungan yang adil secara social dan ekonomi​
                                </li>

                                <li class="custom-list-item d-flex">
                                    <i class="bi-check custom-text-box-icon me-2"></i>
                                    I . Indonesia tanpa kesenjangan sosial ekonomi​
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>

<!-- <section class="about-section section-padding">
    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-md-5 col-12">
                <img src="images/portrait-volunteer-who-organized-donations-charity.jpg" class="about-image ms-lg-auto bg-light shadow-lg img-fluid" alt="">
            </div>

            <div class="col-lg-5 col-md-7 col-12">
                <div class="custom-text-block">
                    <h2 class="mb-0">Sandy Chan</h2>

                    <p class="text-muted mb-lg-4 mb-md-4">Founding Partner</p>

                    <p>Lorem Ipsum dolor sit amet, consectetur adipsicing kengan omeg kohm tokito Professional
                        charity theme based</p>

                    <p>Sed leo nisl, posuere at molestie ac, suscipit auctor mauris. Etiam quis metus</p>

                    <ul class="social-icon mt-4">
                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-twitter"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-facebook"></a>
                        </li>

                        <li class="social-icon-item">
                            <a href="#" class="social-icon-link bi-instagram"></a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
    </div>
</section> -->

<section class="volunteer-section section-padding" id="section_4">
    <div class="container">
        <div class="row">

            <div class="col-12 mx-auto">
                <div class="custom-block-body text-center">
                    <h4 class="text-white mt-lg-3 mb-lg-3">Tentang KAMUS Peduli</h4>

                    <p class="text-white">Merupakan perkumpulan anak muda yang memiliki kepedulian terhadap sesama yang bertujuan untuk memperjuangkan keadilan social dan ekonomi bagi masyarakat dengan menjadi jembatan langsung kebijakan kebijakan pemerintah agar program tersebut dapat tepat sasaran.</p>

                </div>
            </div>

        </div>
    </div>
</section>

<section class="cta-section section-padding section-bg">
    <div class="container">
        <div class="row justify-content-center align-items-center">

            <div class="col-lg-5 col-12 ms-auto">
                <h2 class="mb-0">Membangun Harapan, <br> Mewujudkan Bersama.</h2>
            </div>

            <div class="col-lg-5 col-12">
                <a href="#" class="me-4">Ayuk Bergabung</a>

                <a href="#layanan" class="custom-btn btn smoothscroll">Bersama Kami</a>
            </div>

        </div>
    </div>
</section>

<section class="contact-section section-padding" id="contact">
    <div class="container">
        <div class="row">

            <div class="col-lg-4 col-12 ms-auto mb-5 mb-lg-0">
                <div class="contact-info-wrap">
                    <h2>Get in touch</h2>

                    <div class="contact-info">
                        <h5 class="mb-3">Contact Infomation</h5>

                        <p class="d-flex mb-2">
                            <i class="bi-geo-alt me-2"></i>
                            Jl. Kendal No.1, RT.10/RW.6, Dukuh Atas, Menteng, Kec. Menteng, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10310
                        </p>

                        <p class="d-flex mb-2">
                            <i class="bi-telephone me-2"></i>

                            <a href="tel: 628111234566">
                                628111234566
                            </a>
                        </p>

                        <p class="d-flex">
                            <i class="bi-envelope me-2"></i>

                            <a href="mailto:halo.id2045@gmail.com">
                                halo.id2045@gmail.com
                            </a>
                        </p>
                    </div>
                </div>
            </div>

            <div class="col-lg-5 col-12 mx-auto">
                <form class="custom-form contact-form" action="#" method="post" role="form">
                    <h2>Contact form</h2>

                    <p class="mb-4">Or, you can just send an email:
                        <a href="#">halo.id2045@gmail.com</a>
                    </p>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-12">
                            <input type="text" name="first-name" id="first-name" class="form-control" placeholder="Nama Depan" required>
                        </div>

                        <div class="col-lg-6 col-md-6 col-12">
                            <input type="text" name="last-name" id="last-name" class="form-control" placeholder="Nama Belakang" required>
                        </div>
                    </div>

                    <input type="email" name="email" id="email" pattern="[^ @]*@[^ @]*" class="form-control" placeholder="Email" required>

                    <textarea name="message" rows="5" class="form-control" id="message" placeholder="Tanya Kami"></textarea>

                    <button type="submit" class="form-control">Send Message</button>
                </form>
            </div>

        </div>
    </div>
</section>
@endsection