@extends('layouts.base')

@section('title', 'Invois')

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
            <h1 class="text-white">Invois</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="/" style="color: #feb900">Laman Utama</a></li>
                    <li><a href="{{ route('booking.index') }}" style="color: #feb900">Servis > Senarai Tempahan</a></li>
                    <li class="current">Papar Invois</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <!-- Section -->
    <section style="background: #f6f9ff;">

        <div class="container-fluid py-4" style="width: 800px; padding:10px;">

            <div class="row">
                <div class="col-12">
                    <div class="card p-4">
                        <div class="card-body">

                            <!-- Quotation Logo-->
                            {{-- <div class="clearfix">
                               
                                <div class="float-right text-center">
                                    <h4 class="m-0 d-print-none">Sebut Harga</h4>
                                </div>
                            </div> --}}

                            <!-- Quotation Detail-->
                            <div class="row mt-4">
                                <div class="col-8">
                                    {{-- <p><b>Yusof Abdullah</b></p> --}}
                                    <address>
                                        <b>Yusof Abdullah</b> <br>
                                        64, Lebuh Pendamar Indah 1<br>
                                        Taman Pendamar Indah<br>
                                        42000 Pelabuhan Klang, Selangor<br>
                                        <abbr title="Phone">Tel No:</abbr> (+60) 10-5235987
                                    </address>
                                </div>

                                <div class="col-4 mt-4">
                                    <h3 class="sitename">HandyHome<span style="color: #feb900">.</span></h3>
                                </div>
                            </div>

                            <!-- Horizontal line -->
                            <hr>

                            <!-- end row -->

                            <div class="row mt-4">
                                <div class="col-sm-7">
                                    {{-- <h6>Kepada</h6> --}}
                                    {{-- <p><b>Lynne K. Higby</b></p> --}}
                                    <address>
                                        <b>Lynne K. Higby</b> <br>
                                        795 Folsom Ave, Suite 600<br>
                                        San Francisco, CA 94107<br>
                                        <abbr title="Phone">P:</abbr> (123) 456-7890
                                    </address>
                                </div> <!-- end col-->

                                <div class="col-sm-5">
                                    <div class="mt-3 float-sm-right">
                                        <p><strong>Tarikh Invois: </strong> Ogos 12, 2023</p>
                                        <p><strong>No. Invois: </strong> <span class="float-right">#123456</span></p>
                                    </div>
                                </div> <!-- end col-->

                            </div>
                            <!-- end row -->

                            <div class="row">
                                <div class="col-12">
                                    <div class="table-responsive">
                                        <table class="table text-right">
                                            <thead class="bg-default">
                                                <tr>
                                                    <th scope="col" class="pe-2 text-start ps-2">#</th>
                                                    <th scope="col" class="pe-2">Skop kerja</th>
                                                    <th scope="col" class="pe-2">Kuantiti</th>
                                                    <th scope="col" class="pe-2" colspan="2">Harga seunit</th>
                                                    <th scope="col" class="pe-2">Jumlah</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td class="text-start">1</td>
                                                    <td class="ps-4">Pintu bilik air</td>
                                                    <td class="ps-4">3</td>
                                                    <td class="ps-4" colspan="2">RM 90</td>
                                                    <td class="ps-4">RM 270</td>
                                                </tr>
                                                <tr>
                                                    <td class="text-start">2</td>
                                                    <td class="ps-4">Upah kerja (3 hari x 50)</td>
                                                    <td class="ps-4"></td>
                                                    <td class="ps-4" colspan="2"></td>
                                                    <td class="ps-4">RM 150</td>
                                                </tr>

                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th></th>
                                                    <th></th>
                                                    <th></th>
                                                    <th class="h5 ps-4" colspan="2">Jumlah</th>
                                                    <th colspan="1" class="text-right h5 ps-4">RM 420</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div><!-- end table-responsive-->
                                </div> <!-- end col -->
                            </div>
                            <!-- end row -->
{{-- 
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="clearfix pt-3">
                                        <h6 class="text-muted">Nota:</h6>
                                        <small>
                                            Bayaran pertama hendaklah dilakukan selepas anda setuju menerima 
                                            sebut harga ini.
                                            Jumlah bayaran pertama adalah 50% dari harga keseluruhan.
                                            <i>cth: harga keseluruhan RM 200, bayaran pertama = RM 100 dan
                                                 bayaran kedua = RM 100.</i>   
                                        </small>
                                    </div>
                                </div> <!-- end col -->
                              
                            </div> --}}
                            <!-- end row-->

                            <div class="button-row d-flex mt-4">
                                <a href="javascript:window.print()" class="btn btn-secondary  ms-auto mb-0 text-black"><i class="mdi mdi-printer"></i> Cetak</a>
                            </div>

                            <!-- end buttons -->
                        </div> <!-- end card-body-->
                    </div> <!-- end card -->
                </div> <!-- end col-->
            </div>
            <!-- end row -->

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
