@extends('home.layouts.main')

@section('container')
<!-- Slider Start -->
<section class="banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-md-12 col-xl-7">
                <div class="block">
                    <div class="divider mb-3"></div>
                    <span class="text-uppercase text-sm letter-spacing ">Solusi Booking Tempat</span>
                    <h1 class="mb-3 mt-3">Mudahkan mencari tempat dengan Aula.ku</h1>

                    <p class="mb-4 pr-5">A repudiandae ipsam labore ipsa voluptatum quidem quae laudantium quisquam aperiam maiores sunt fugit, deserunt rem suscipit placeat.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="features">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="card cari-aula" style="border-radius: 10px;">
                    <div class="card-header" style="font-size: 25px; font-weight: bold;">
                        Cari Aula Anda
                    </div>
                    <div class="card-body">
                        <form action="{{ url('/cari') }}" method="GET">
                            @csrf
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Lokasi Aula</label>
                                <select class="custom-select rounded-0" id="exampleSelectRounded0" name="kota">
                                    <option value="" selected></option>
                                    <?php
                                    // Loop untuk mengambil satu per satu.
                                    foreach ($tambah as $t) : ?>
                                        <option value="{{ $t }}">{{ $t }}</option>
                                    <?php endforeach; ?>
                                </select>
                            </div>
                            <div class="row">
                                <div class="col-5">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Hari Mulai</label>
                                        <select class="custom-select rounded-0" id="exampleSelectRounded0" name="hari">
                                            <option value="" selected></option>
                                            <?php
                                            // Loop untuk mengambil satu per satu.
                                            foreach ($hari as $h) : ?>
                                                <option value="{{ $h }}">{{ $h }}</option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-5">
                                    <div class="mb-3">
                                        <label for="exampleInputEmail1" class="form-label">Jam Mulai</label>
                                        <select class="custom-select rounded-0" id="exampleSelectRounded0" name="jam">
                                            <option value="" selected></option>
                                            <?php
                                            // Loop untuk mengambil satu per satu.
                                            foreach ($jam as $j) : ?>
                                                <option value="{{ $j }}">{{ $j }}</option>
                                            <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="col" style="margin-top: 30px;">
                                    <button type="submit" class="btn btn-primary">Submit</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<section class="section service gray-bg" style="margin-top: -40px;">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="service-item mb-4">
                    <div class="icon d-flex align-items-center">
                        <i class="icofont-search-2 text-lg"></i>
                        <h4 class="mt-3 mb-3">Memudahkan anda mencari aula</h4>
                    </div>

                    <div class="content">
                        <p class="mb-4">Tersedia Ruang Meeting, Paket Meeting, Kantor, Coworking Space, Ruang Acara yang dapat Anda pilih.</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="service-item mb-4">
                    <div class="icon d-flex align-items-center">
                        <i class="icofont-users-alt-2 text-lg"></i>
                        <h4 class="mt-3 mb-3">Membantu menyewakan properti anda</h4>
                    </div>
                    <div class="content">
                        <p class="mb-4">Seluruh harga sewa yang tercantum adalah harga final tanpa biaya tambahan lainnya dan dijamin harga terbaik</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-6 col-sm-6">
                <div class="service-item mb-4">
                    <div class="icon d-flex align-items-center">
                        <i class="icofont-pay text-lg"></i>
                        <h4 class="mt-3 mb-3">Sewa tempat lebih praktis</h4>
                    </div>
                    <div class="content">
                        <p class="mb-4">Anda dapat melakukan pemesanan 24/7 tanpa perlu melakukan konfirmasi tambahan.</p>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>
<!-- Main jQuery -->
<script src="../../plugins/jquery/jquery.js"></script>
<!-- Bootstrap 4.3.2 -->
<script src="../../plugins/bootstrap/js/popper.js"></script>
<script src="../../plugins/bootstrap/js/bootstrap.min.js"></script>
<script src="../../plugins/counterup/jquery.easing.js"></script>
<!-- Slick Slider -->
<script src="../../plugins/slick-carousel/slick/slick.min.js"></script>
<!-- Counterup -->
<script src="../../plugins/counterup/jquery.waypoints.min.js"></script>

<script src="../../plugins/shuffle/shuffle.min.js"></script>
<script src="../../plugins/counterup/jquery.counterup.min.js"></script>
<!-- Google Map -->
<script src="../../plugins/google-map/map.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAkeLMlsiwzp6b3Gnaxd86lvakimwGA6UA&callback=initMap"></script>

<script src="../../js/script.js"></script>
<script src="../../js/contact.js"></script>

</body>

</html>
@endsection