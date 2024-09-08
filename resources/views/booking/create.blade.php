@extends('layouts.base')

@section('title', 'Tempah Sekarang')

@section('content')


    <!-- Nucleo Icons -->
    <link href="../../assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="../../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
    <link href="../../assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link id="pagestyle" href="../../assets/css/soft-ui-dashboard.css?v=1.0.3" rel="stylesheet" />

    <!-- Page Title -->
    <div class="page-title" data-aos="fade" style="background-image: url({{ asset('assets/img/page-title-bg.jpg') }});">
        <div class="container position-relative">
            <h1 class="text-white">Tempah Sekarang</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="/" style="color: #feb900">Laman Utama</a></li>
                    <li class="current">Servis > Tempah Sekarang</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <!-- Starter Section Section -->
    <section id="starter-section" class="starter-section section" style="background: #f6f9ff;">

        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12 text-center">
                    {{-- <h3 class="mt-5">Build Your Profile</h3>
                    <h5 class="text-secondary font-weight-normal">This information will let us know more about you.</h5> --}}
                    <div class="multisteps-form mb-5">
                        <!--progress bar-->
                        <div class="row">
                            <div class="col-12 col-lg-8 mx-auto my-5">
                                <div class="multisteps-form__progress">
                                    <button class="multisteps-form__progress-btn js-active " type="button" title="Sekarang"
                                        style="color: #feb900">
                                        <span style="color: darkgrey">Servis</span>
                                    </button>
                                    <button class="multisteps-form__progress-btn" type="button" title="Maklumat"
                                        style="color: #feb900">
                                        <span style="color: darkgrey">Maklumat</span>
                                    </button>
                                    <button class="multisteps-form__progress-btn" type="button" title="Alamat"
                                        style="color: #feb900">
                                        <span style="color: darkgrey">Alamat</span>
                                    </button>
                                    <button class="multisteps-form__progress-btn" type="button" title="Ringkasan"
                                        style="color: #feb900">
                                        <span style="color: darkgrey">Ringkasan</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <!--form panels-->
                        <div class="row">
                            <div class="col-12 col-lg-8 m-auto">
                                <form class="multisteps-form__form">
                                    <!--single form panel-->
                                    <div class="card multisteps-form__panel p-3 border-radius-xl bg-white js-active"
                                        data-animation="FadeIn">
                                        <div class="row text-center">
                                            <div class="col-10 mx-auto">
                                                <h4 class="font-weight-normal">Senarai Servis</h4>
                                                <p>Sila pilih servis yang anda kehendaki</p>
                                            </div>
                                        </div>
                                        <div class="multisteps-form__content">
                                            <div class="row mt-4">
                                                <div class="col ms-auto">
                                                    <input type="checkbox" class="btn-check" id="btncheck6" name="option">
                                                    <label class="btn btn-lg btn-outline-secondary border-2 px-6 py-5"
                                                        for="btncheck6">
                                                        <i class="fas fa-wrench" class="text-dark" width="20px"
                                                            height="20px" viewBox="0 0 40 40" version="1.1"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink"></i>
                                                    </label>
                                                    <h6>Paip</h6>
                                                </div>

                                                <div class="col-sm-4">
                                                    <input type="checkbox" class="btn-check" id="btncheck2" name="option">
                                                    <label class="btn btn-lg btn-outline-secondary border-2 px-6 py-5"
                                                        for="btncheck2">
                                                        <i class="fas fa-solid fas fa-bolt" class="text-dark" width="20px"
                                                            height="20px" viewBox="0 0 40 40" version="1.1"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink"></i>
                                                    </label>
                                                    <h6>Elektrik</h6>
                                                </div>
                                                <div class="col-sm-4">
                                                    <input type="checkbox" class="btn-check" id="btncheck3" name="option">
                                                    <label class="btn btn-lg btn-outline-secondary border-2 px-6 py-5"
                                                        for="btncheck3">
                                                        <i class="fas fa-solid fas fa-paint-roller" class="text-dark" width="20px"
                                                        height="20px" viewBox="0 0 40 40" version="1.1"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink"></i>
                                                    </label>
                                                    <h6>Cat</h6>
                                                </div>
                                                <div class="col-sm-4">
                                                    <input type="checkbox" class="btn-check" id="btncheck4"
                                                        name="option">
                                                    <label class="btn btn-lg btn-outline-secondary border-2 px-6 py-5"
                                                        for="btncheck4">
                                                        <i class="fas fa-solid fas fa-shield-alt" class="text-dark" width="20px"
                                                        height="20px" viewBox="0 0 40 40" version="1.1"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink"></i>
                                                    </label>
                                                    <h6>Bumbung</h6>
                                                </div>
                                                <div class="col-sm-4">
                                                    <input type="checkbox" class="btn-check" id="btncheck5"
                                                        name="option">
                                                    <label class="btn btn-lg btn-outline-secondary border-2 px-6 py-5"
                                                        for="btncheck5">
                                                        <i class="fas fa-solid fas fa-tools" class="text-dark" width="20px"
                                                            height="20px" viewBox="0 0 40 40" version="1.1"
                                                            xmlns="http://www.w3.org/2000/svg"
                                                            xmlns:xlink="http://www.w3.org/1999/xlink"></i>
                                                    </label>
                                                    <h6>Mengimpal</h6>
                                                </div>
                                                <div class="col-sm-4">
                                                    <input type="checkbox" class="btn-check" id="btncheck6"
                                                        name="option">
                                                    <label class="btn btn-lg btn-outline-secondary border-2 px-6 py-5"
                                                        for="btncheck6">
                                                        <i class="fas fa-solid fas fa-door-open" class="text-dark" width="20px"
                                                        height="20px" viewBox="0 0 40 40" version="1.1"
                                                        xmlns="http://www.w3.org/2000/svg"
                                                        xmlns:xlink="http://www.w3.org/1999/xlink"></i>
                                                    </label>
                                                    <h6>Memasang Pintu</h6>
                                                </div>

                                            </div>
                                            <div class="button-row d-flex mt-4">
                                                <button class="btn btn-warning ms-auto mb-0 js-btn-next text-black"
                                                    type="button" title="Next">Seterusnya</button>
                                            </div>

                                        </div>

                                    </div>
                                    <!--single form panel-->
                                    <div class="card multisteps-form__panel p-3 border-radius-xl bg-white"
                                        data-animation="FadeIn">
                                        <div class="row text-center">
                                            <div class="col-10 mx-auto">
                                                <h4 class="font-weight-normal">Maklumat Kerosakkan</h4>
                                                <p>Sila nyatakan maklumat kerosakkan yang dialami oleh anda</p>
                                            </div>
                                        </div>
                                        <div class="multisteps-form__content">
                                            <div class="row mt-3">
                                                <div class="col-md-6 mt-4 mt-md-0 text-start">
                                                    <label>Tarikh Pilihan</label>
                                                    <input type="date" class="multisteps-form__input form-control"
                                                        placeholder="">
                                                </div>

                                                <div class="col-md-6 mt-md-0 text-start">
                                                    <label>Masa Pilihan</label>
                                                    <input type="time" class="multisteps-form__input form-control"
                                                        placeholder="">
                                                </div>
                                            </div>

                                            <div class="row mt-3">
                                                <div class="col-md-6 mt-4 mt-md-0 text-start">
                                                    <label>Tarikh Alternatif</label>
                                                    <input type="date" class="multisteps-form__input form-control"
                                                        placeholder="">
                                                </div>

                                                <div class="col-md-6 mt-md-0 text-start">
                                                    <label>Masa Alternatif</label>
                                                    <input type="time" class="multisteps-form__input form-control"
                                                        placeholder="">
                                                </div>
                                            </div>

                                            <div class="row mt-3">
                                                <div class="col-md-12 mt-4 mt-md-0 text-start">
                                                    <label>Bukti Kerosakkan</label>
                                                    <input type="file" class="multisteps-form__input form-control"
                                                        placeholder="">
                                                </div>
                                            </div>

                                            <div class="row mt-3">
                                                <div class="col-md-12 mt-4 mt-md-0 text-start">
                                                    <label>Catatan</label>
                                                    <textarea class="multisteps-form__input form-control" rows="3"></textarea>
                                                </div>
                                            </div>

                                            <div class="button-row d-flex mt-4">
                                                <button class="btn bg-gradient-light mb-0 js-btn-prev" type="button"
                                                    title="Kembali">Kembali</button>
                                                <button class="btn btn-warning ms-auto mb-0 js-btn-next text-black"
                                                    type="button" type="button" title="Next">Seterusnya</button>
                                            </div>
                                        </div>
                                    </div>
                                    <!--single form panel-->
                                    <div class="card multisteps-form__panel p-3 border-radius-xl bg-white"
                                        data-animation="FadeIn">
                                        <div class="row text-center">
                                            <div class="col-10 mx-auto">
                                                <h4 class="font-weight-normal">Alamat Rumah</h4>
                                                <p>Nyatakan maklumat mengenai alamat rumah anda</p>
                                            </div>
                                        </div>
                                        <div class="multisteps-form__content">
                                            <div class="row mt-3">
                                                <div class="col-md-12 mt-4 mt-md-0 text-start">
                                                    <label>Alamat Baris 1</label>
                                                    <input type="text" class="multisteps-form__input form-control"
                                                        placeholder="76, Jalan Pak Samad">
                                                </div>
                                            </div>

                                            <div class="row mt-3">
                                                <div class="col-md-12 mt-4 mt-md-0 text-start">
                                                    <label>Alamat Baris 2</label>
                                                    <input type="text" class="multisteps-form__input form-control"
                                                        placeholder="Taman Bahagia">
                                                </div>
                                            </div>

                                            <div class="row mt-3">
                                                <div class="col-md-6 mt-4 mt-md-0 text-start">
                                                    <label>Bandar</label>
                                                    <input type="text" class="multisteps-form__input form-control"
                                                        placeholder="Klang">
                                                </div>

                                                <div class="col-md-6 mt-md-0 text-start">
                                                    <label>Poskod</label>
                                                    <input type="number" class="multisteps-form__input form-control"
                                                        placeholder="42000">
                                                </div>
                                            </div>

                                        </div>
                                        <div class="button-row d-flex mt-4">
                                            <button class="btn bg-gradient-light mb-0 js-btn-prev" type="button"
                                                title="Prev">Kembali</button>
                                            <button class="btn btn-warning ms-auto mb-0 js-btn-next text-black"
                                                type="button" type="button" title="Next">Seterusnya</button>
                                        </div>
                                        {{-- <div class="row">
                                            <div class="button-row d-flex mt-4 col-12">
                                                <button class="btn bg-gradient-light mb-0 js-btn-prev" type="button"
                                                    title="Prev">Prev</button>
                                                <button class="btn btn-warning ms-auto mb-0 text-black" type="button"
                                                    title="Send">Send</button>
                                            </div>
                                        </div> --}}
                                    </div>

                                    <!--single form panel-->
                                    <div class="card multisteps-form__panel p-3 border-radius-xl bg-white"
                                        data-animation="FadeIn">
                                        <div class="row text-center">
                                            <div class="col-10 mx-auto">
                                                <h4 class="font-weight-normal">Ringkasan</h4>
                                                <p>Sila pastikan semua makulmat adalah tepat sebelum anda menekan butang
                                                    <b>Hantar</b></p>
                                            </div>
                                        </div>

                                        <div class="multisteps-form__content">
                                            <div class="row mt-3">
                                                <div class="col-md-12 mt-4 mt-md-0 text-start">
                                                    <label>Servis</label>
                                                    <input type="text" class="multisteps-form__input form-control"
                                                        placeholder="Elektrik" disabled>
                                                </div>
                                            </div>

                                            <div class="row mt-3">
                                                <div class="col-md-6 mt-4 mt-md-0 text-start">
                                                    <label>Tarikh Pilihan</label>
                                                    <input type="text" class="multisteps-form__input form-control"
                                                        placeholder="25/4/2024" disabled>
                                                </div>

                                                <div class="col-md-6 mt-md-0 text-start">
                                                    <label>Masa Pilihan</label>
                                                    <input type="text" class="multisteps-form__input form-control"
                                                        placeholder="2:30 PM" disabled>
                                                </div>
                                            </div>

                                            <div class="row mt-3">
                                                <div class="col-md-6 mt-4 mt-md-0 text-start">
                                                    <label>Tarikh Alternatif</label>
                                                    <input type="text" class="multisteps-form__input form-control"
                                                        placeholder="27/4/2024" disabled>
                                                </div>

                                                <div class="col-md-6 mt-md-0 text-start">
                                                    <label>Masa Alternatif</label>
                                                    <input type="text" class="multisteps-form__input form-control"
                                                        placeholder="12:00 PM" disabled>
                                                </div>
                                            </div>

                                            <div class="row mt-3">
                                                <div class="col-md-12 mt-4 mt-md-0 text-start">
                                                    <label>Alamat Baris 1</label>
                                                    <input type="text" class="multisteps-form__input form-control"
                                                        placeholder="76, Jalan Pak Samad" disabled>
                                                </div>
                                            </div>

                                            <div class="row mt-3">
                                                <div class="col-md-12 mt-4 mt-md-0 text-start">
                                                    <label>Alamat Baris 2</label>
                                                    <input type="text" class="multisteps-form__input form-control"
                                                        placeholder="Taman Bahagia" disabled>
                                                </div>
                                            </div>

                                            <div class="row mt-3">
                                                <div class="col-md-6 mt-4 mt-md-0 text-start">
                                                    <label>Bandar</label>
                                                    <input type="text" class="multisteps-form__input form-control"
                                                        placeholder="Klang" disabled>
                                                </div>

                                                <div class="col-md-6 mt-md-0 text-start">
                                                    <label>Poskod</label>
                                                    <input type="number" class="multisteps-form__input form-control"
                                                        placeholder="42000" disabled>
                                                </div>
                                            </div>

                                            <div class="row mt-3">
                                                <div class="col-md-12 mt-4 mt-md-0 text-end">
                                                    <p style="color:dimgray;">Anggaran harga</p>
                                                    <h4><b>RM 350.00</b></h4>
                                                </div>
                                            </div>



                                        </div>

                                        <div class="row">
                                            <div class="button-row d-flex mt-4 col-12">
                                                <button class="btn bg-gradient-light mb-0 js-btn-prev" type="button"
                                                    title="Kembali">Kembali</button>
                                                <a href="{{ route('booking.index') }}"
                                                    class="btn btn-warning ms-auto mb-0 js-btn-next text-black">Hantar</a>
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>

        </div>

    </section>

    <!--   Core JS Files   -->
    <script src="../../assets/js/core/popper.min.js"></script>
    <script src="../../assets/js/core/bootstrap.min.js"></script>
    <script src="../../assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../../assets/js/plugins/smooth-scrollbar.min.js"></script>
    <!-- Kanban scripts -->
    <script src="../../assets/js/plugins/dragula/dragula.min.js"></script>
    <script src="../../assets/js/plugins/jkanban/jkanban.js"></script>
    <script src="../../assets/js/plugins/multistep-form.js"></script>
    <script src="../../assets/js/plugins/choices.min.js"></script>


    <script>
        var win = navigator.platform.indexOf('Win') > -1;
        if (win && document.querySelector('#sidenav-scrollbar')) {
            var options = {
                damping: '0.5'
            }
            Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
        }
    </script>
    <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
    <script src="../../assets/js/soft-ui-dashboard.min.js?v=1.0.3"></script>

@endsection
