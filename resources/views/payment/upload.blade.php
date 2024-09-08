@extends('layouts.base')

@section('title', 'Pembayaran')

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
            <h1 class="text-white">Pembayaran</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="/" style="color: #feb900">Laman Utama</a></li>
                    <li><a href="{{ route('booking.index') }}" style="color: #feb900">Servis > Senarai Tempahan</a></li>
                    <li class="current">Pembayaran</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <!-- Section -->
    <section style="background: #f6f9ff;">

        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12 text-center">
                    <div class="multisteps-form mb-5">
                        <!--progress bar-->
                        <div class="row">
                            <div class="col-12 col-lg-8 mx-auto my-5">
                                <div class="multisteps-form__progress">
                                    <button class="multisteps-form__progress-btn js-active " type="button" title="Sekarang"
                                        style="color: #feb900">
                                        <span style="color: darkgrey">Bayaran Pertama</span>
                                    </button>
                                    <button class="multisteps-form__progress-btn" type="button" title="Maklumat"
                                        style="color: #feb900">
                                        <span style="color: darkgrey">Bayaran Kedua</span>
                                    </button>
                                    <button class="multisteps-form__progress-btn" type="button" title="Alamat"
                                        style="color: #feb900">
                                        <span style="color: darkgrey">Invois</span>
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
                                                <h4 class="font-weight-normal m-4">Pembayaran Pertama</h4>
                                                <p>Pembayaran pertama adalah sebanyak <b>RM 210.00</b>. <br>
                                                    Selepas membuat pembayaran, sila muat naik resit sebagai bukti
                                                    pembayaran.</p>
                                            </div>
                                        </div>
                                        <div class="multisteps-form__content p-5">
                                            <div class="row mt-3">
                                                <div class="col-md-12 mt-4 mt-md-0 text-center">
                                                    <h6><strong>Nama Bank: </strong> Maybank </h6>
                                                    <h6><strong>No Akaun: </strong> <span
                                                            class="float-right">78656788895432</span></h6>
                                                    <h6><strong>Rujukan: </strong> Bayaran Pertama </h6>

                                                </div>
                                            </div>

                                            <div class="row mt-3">
                                                <div class="col-md-12 mt-4 mt-md-0 text-start">
                                                    <label>Muat Naik Resit</label>
                                                    <div action="/file-upload" class="form-control dropzone dz-clickable"
                                                        id="productImg">
                                                        <div class="dz-default dz-message"><button class="dz-button"
                                                                type="button">Drop files here to upload</button></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="button-row d-flex mt-4">
                                                <button class="btn btn-warning ms-auto mb-0 js-btn-next text-black"
                                                    type="button">Hantar</button>
                                            </div>

                                        </div>

                                    </div>
                                    <!--single form panel-->
                                    <div class="card multisteps-form__panel p-3 border-radius-xl bg-white"
                                        data-animation="FadeIn">
                                        <div class="row text-center">
                                            <div class="col-10 mx-auto">
                                                <h4 class="font-weight-normal m-4">Pembayaran Kedua</h4>
                                                <p>Pembayaran kedua adalah sebanyak <b>RM 210.00</b>. <br>
                                                    Selepas membuat pembayaran, sila muat naik resit sebagai bukti
                                                    pembayaran.</p>
                                            </div>
                                        </div>
                                        <div class="multisteps-form__content p-5">
                                            <div class="row mt-3">
                                                <div class="col-md-12 mt-4 mt-md-0 text-center">
                                                    <h6><strong>Nama Bank: </strong> Maybank </h6>
                                                    <h6><strong>No Akaun: </strong> <span
                                                            class="float-right">78656788895432</span></h6>
                                                    <h6><strong>Rujukan: </strong> Bayaran Kedua </h6>

                                                </div>
                                            </div>

                                            <div class="row mt-3">
                                                <div class="col-md-12 mt-4 mt-md-0 text-start">
                                                    <label>Muat Naik Resit</label>
                                                    <div action="/file-upload" class="form-control dropzone dz-clickable"
                                                        id="productImg">
                                                        <div class="dz-default dz-message"><button class="dz-button"
                                                                type="button">Drop files here to upload</button></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="button-row d-flex mt-4">
                                                <button class="btn btn-warning ms-auto mb-0 js-btn-next text-black"
                                                    type="button" >Hantar</button>
                                            </div>
                                        </div>
                                    </div>

                                    <!--single form panel-->
                                    <div class="card multisteps-form__panel p-3 border-radius-xl bg-white"
                                        data-animation="FadeIn">
                                        <div class="row text-center">
                                            <div class="col-10 mx-auto">
                                                <h4 class="font-weight-normal m-4">Invois</h4>
                                                <p>Tekan butang <b>Invois</b> untuk menglihat maklumat invois.
                                                </p>
                                            </div>
                                        </div>

                                        <div class="multisteps-form__content p-3">
                                            <div class="row">
                                                <div class="col-md-12 mt-0 mt-md-0 d-flex justify-content-center">
                                                    <img src="https://i.postimg.cc/qM8N6S7L/Invoice-bro.png"
                                                         style="width:400px;" alt="invoice">
                                                </div>

                                                <div class="justify-content-center">
                                                    <a href="{{ route('invoice.show') }}" class="btn btn-outline-dark btn-lg ms-auto mb-0">Papar Invois</a>
                                                </div>

                                            </div>

                                        </div>
                                        <div class="button-row d-flex mt-4">
                                            <a href="{{ route('booking.index') }}" class="btn btn-warning ms-auto mb-0 js-btn-next text-black">Selesai</a>
                                        </div>
                                    </div>
                            </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>

    </section>


    <!--   Core JS Files   -->
    <script src="../../../assets/js/core/popper.min.js"></script>
    <script src="../../../assets/js/core/bootstrap.min.js"></script>
    <script src="../../../assets/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="../../../assets/js/plugins/smooth-scrollbar.min.js"></script>
    <script src="../../../assets/js/plugins/datatables.js"></script>
    <script src="../../../assets/js/plugins/choices.min.js"></script>
    <script src="../../../assets/js/plugins/dropzone.min.js"></script>
    <script src="../../../assets/js/plugins/quill.min.js"></script>
    <script src="../../../assets/js/plugins/multistep-form.js"></script>

    <!-- Kanban scripts -->
    <script src="../../assets/js/plugins/dragula/dragula.min.js"></script>
    <script src="../../assets/js/plugins/jkanban/jkanban.js"></script>
    <script src="../../assets/js/plugins/multistep-form.js"></script>
    <script src="../../assets/js/plugins/choices.min.js"></script>
    <script src="../../assets/js/plugins/sweetalert.min.js"></script>


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
    <script src="../../../assets/js/soft-ui-dashboard.min.js?v=1.0.3"></script>


@endsection
