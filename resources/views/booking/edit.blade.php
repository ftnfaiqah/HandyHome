@extends('layouts.base')

@section('title', 'Tempahan')

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
            <h1 class="text-white">Kemaskini Maklumat Servis</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="/" style="color: #feb900">Laman Utama</a></li>
                    <li><a href="{{ route('booking.index') }}" style="color: #feb900">Servis > Sejarah</a></li>
                    <li class="current">Kemaskini</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <!-- Starter Section Section -->
    <section style="background: #f6f9ff;">

        <div class="container center-container">
            <div class="row justify-content-center w-100">
                <div class="card m-4 medium-card">
                    <div class="card-header pb-0 p-3">
                        <h3>Maklumat Servis</h3>
                    </div>
                    <div class="card-body p-4">
                        <form>
                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label>Servis</label>
                                        <input type="text" class="form-control form-control-lg"
                                            id="exampleFormControlInput1" placeholder="Elektrik">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label>Tarikh Pilihan</label>
                                        <input class="form-control form-control-lg" placeholder="25/4/2024" type="text">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Masa Pilihan</label>
                                        <input class="form-control form-control-lg" placeholder="2:30 PM" type="text">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label>Tarikh Alternatif</label>
                                        <input class="form-control form-control-lg" placeholder="27/4/2024" type="text">
                                    </div>
                                </div>
                                <div class="col">
                                    <div class="form-group">
                                        <label>Masa Alternatif</label>
                                        <input class="form-control form-control-lg" placeholder="12:00 PM" type="text">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label>Alamat Baris 1</label>
                                        <input type="text" class="form-control form-control-lg"
                                            placeholder="76, Jalan Pak Samad">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label>Alamat Baris 2</label>
                                        <input type="text" class="form-control form-control-lg"
                                            placeholder="Taman Bahagia">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label>Bandar</label>
                                        <input type="text" class="form-control form-control-lg" placeholder="Klang"
                                            >
                                    </div>
                                </div>

                                <div class="col">
                                    <div class="form-group">
                                        <label>Poskod</label>
                                        <input type="number" class="form-control form-control-lg" placeholder="42000">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <label>Bukti Kerosakkan</label>
                                    <input type="file" class="form-control form-control-lg" placeholder="paip.jpg">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <div class="form-group">
                                        <label>Catatan</label>
                                        <textarea class="form-control form-control-lgorm-control" rows="3" placeholder="2 batang paip bocor"></textarea>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="button-row d-flex mt-4 col-12">
                                    <button  onclick="window.location.href='{{ route('booking.index') }}'" class="btn bg-gradient-light mb-0 js-btn-prev" type="button"
                                        title="Kembali">Kembali</button>
                                    <button onclick="window.location.href='{{ route('booking.index') }}'" class="btn btn-warning ms-auto mb-0 text-black" type="button"
                                        title="Simpan">Simpan</button>
                                </div>
                            </div> 

                        </form>


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

    <!-- Kanban scripts -->
    <script src="../../assets/js/plugins/dragula/dragula.min.js"></script>
    <script src="../../assets/js/plugins/jkanban/jkanban.js"></script>
    <script src="../../assets/js/plugins/multistep-form.js"></script>
    <script src="../../assets/js/plugins/choices.min.js"></script>

    <!-- Kanban scripts -->
    <script src="../../../assets/js/plugins/dragula/dragula.min.js"></script>
    <script src="../../../assets/js/plugins/jkanban/jkanban.js"></script>
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
