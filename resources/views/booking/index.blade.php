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
            <h1 class="text-white">Senarai Tempahan</h1>
            <nav class="breadcrumbs">
                <ol>
                    <li><a href="/" style="color: #feb900">Laman Utama</a></li>
                    <li class="current">Servis > Senarai Tempahan</li>
                </ol>
            </nav>
        </div>
    </div><!-- End Page Title -->

    <!-- Starter Section Section -->
    <section id="starter-section" class="starter-section section" style="background: #f6f9ff;">

        <div class="container-fluid py-4">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <!-- Card header -->
                        <div class="card-header pb-0">
                            <div class="d-lg-flex">
                                <div>
                                    <h3 class="mb-0">Senarai Tempah Servis</h3>
                                    {{-- <p class="text-sm mb-0">
                                        A lightweight, extendable, dependency-free javascript HTML table plugin.
                                    </p> --}}
                                </div>

                            </div>
                        </div>
                        <div class="card-body px-0 pb-0">
                            <div class="table-responsive">
                                <table class="table table-flush" id="products-list">
                                    <thead class="thead-light">
                                        <tr>
                                            <th>Servis</th>
                                            <th>Catatan</th>
                                            <th>Tarikh</th>
                                            <th>Sebut Harga</th>
                                            <th>Bayaran</th>
                                            <th>Status</th>
                                            <th>Tindakan</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>Baiki Paip</td>
                                            <td>2 batang paip bocor</td>
                                            <td>25/4/2024</td>
                                            <td>
                                                <span class="badge badge-dark badge-sm">Tidak Tersedia</span>
                                            </td>
                                            <td>
                                                <span class="badge badge-dark badge-sm">Tidak Tersedia</span>
                                            </td>
                                            <td>
                                                <span class="badge badge-warning badge-sm">Hantar</span>
                                            </td>
                                            <td class="text-sm">
                                                <a href="{{ route('booking.show') }}" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Papar">
                                                    <i class="fas fa-eye text-dark"></i>
                                                </a>
                                                <a href="{{ route('booking.edit') }}" class="mx-3"
                                                    data-bs-toggle="tooltip" data-bs-original-title="Kemaskini">
                                                    <i class="fas fa-user-edit text-dark"></i>
                                                </a>

                                                <a href="javascript:;" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Padam"
                                                    onclick="soft.showSwal('warning-message-and-confirmation')">
                                                    <i class="fas fa-trash text-dark"></i>
                                                </a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Baiki Paip</td>
                                            <td>2 batang paip bocor</td>
                                            <td>25/4/2024</td>
                                            <td>
                                                <span class="badge badge-dark badge-sm">Tidak Tersedia</span>
                                            </td>
                                            <td>
                                                <span class="badge badge-dark badge-sm">Tidak Tersedia</span>
                                            </td>
                                            <td>
                                                <span class="badge badge-danger badge-sm">Gagal</span>
                                            </td>
                                            <td class="text-sm">
                                                
                                            </td>
                                        </tr>
                                        
                                        <tr>
                                            <td>Memasang Pintu</td>
                                            <td>Ingin menukar 3 pintu bilik air</td>
                                            <td>05/08/2023</td>
                                            <td>
                                                <a href="{{ route('quotation.show') }}"
                                                    class="btn btn-sm btn-outline-dark ms-2 px-3  mb-0">Papar</a>
                                            </td>
                                            <td>
                                                <span class="badge badge-dark badge-sm">Tidak Tersedia</span>
                                            </td>
                                            <td>
                                                <span class="badge badge-success badge-sm">Lulus</span>
                                            </td>
                                            <td class="text-sm">
                                                <a href="{{ route('booking.show') }}" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Papar">
                                                    <i class="fas fa-eye text-dark"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="mx-3 disabled-link"
                                                    data-bs-toggle="tooltip" data-bs-original-title="Kemaskini">
                                                    <i class="fas fa-user-edit text-secondary"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="disabled-link" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Padam   ">
                                                    <i class="fas fa-trash text-secondary"></i>
                                                </a>

                                                </a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Memasang Pintu</td>
                                            <td>Ingin menukar 3 pintu bilik air</td>
                                            <td>05/08/2023</td>
                                            <td>
                                                <span class="badge badge-dark badge-sm">Tidak Tersedia</span>
                                            </td>
                                            <td>
                                                <span class="badge badge-dark badge-sm">Tidak Tersedia</span>
                                            </td>
                                            <td>
                                                <span class="badge badge-danger badge-sm">Tolak</span>
                                            </td>
                                            <td class="text-sm">
                                                <a href="{{ route('booking.show') }}" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Papar">
                                                    <i class="fas fa-eye text-dark"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="mx-3 disabled-link"
                                                    data-bs-toggle="tooltip" data-bs-original-title="Kemaskini">
                                                    <i class="fas fa-user-edit text-secondary"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="disabled-link" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Padam   ">
                                                    <i class="fas fa-trash text-secondary"></i>
                                                </a>

                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Bumbung</td>
                                            <td>Atap bocor</td>
                                            <td>31/07/2023</td>
                                            <td>
                                                <a href="{{ route('quotation.show') }}"
                                                    class="btn btn-sm btn-outline-dark ms-2 px-3  mb-0">Papar</a>
                                            </td>
                                            <td>
                                                <a href="{{ route('payment.upload') }}"
                                                    class="btn btn-sm btn-outline-danger ms-2 px-3  mb-0">Papar</a>
                                            </td>
                                            <td>
                                                <span class="badge badge-danger badge-sm">Belum Bayar</span>
                                            </td>
                                            <td class="text-sm">
                                                <a href="{{ route('booking.show') }}" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Papar">
                                                    <i class="fas fa-eye text-dark"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="mx-3 disabled-link"
                                                    data-bs-toggle="tooltip" data-bs-original-title="Kemaskini">
                                                    <i class="fas fa-user-edit text-secondary"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="disabled-link" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Padam   ">
                                                    <i class="fas fa-trash text-secondary"></i>
                                                </a>

                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Bumbung</td>
                                            <td>Atap bocor</td>
                                            <td>31/07/2023</td>
                                            <td>
                                                <a href="{{ route('quotation.show') }}"
                                                    class="btn btn-sm btn-outline-dark ms-2 px-3  mb-0">Papar</a>
                                            </td>
                                            <td>
                                                <a href="{{ route('payment.upload') }}" 
                                                    class="btn btn-sm btn-outline-danger ms-2 px-3  mb-0 disabled-link">Papar</a>
                                            </td>
                                            <td>
                                                <span class="badge badge-warning badge-sm">Disemak</span>
                                            </td>
                                            <td class="text-sm">
                                                <a href="{{ route('booking.show') }}" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Papar">
                                                    <i class="fas fa-eye text-dark"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="mx-3 disabled-link"
                                                    data-bs-toggle="tooltip" data-bs-original-title="Kemaskini">
                                                    <i class="fas fa-user-edit text-secondary"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="disabled-link" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Padam   ">
                                                    <i class="fas fa-trash text-secondary"></i>
                                                </a>

                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Bumbung</td>
                                            <td>Atap bocor</td>
                                            <td>31/07/2023</td>
                                            <td>
                                                <a href="{{ route('quotation.show') }}"
                                                    class="btn btn-sm btn-outline-dark ms-2 px-3  mb-0">Papar</a>
                                            </td>
                                            <td>
                                                <a href="{{ route('payment.upload') }}" 
                                                    class="btn btn-sm btn-outline-success ms-2 px-3  mb-0 disabled-link">Sudah Bayar</a>
                                            </td>
                                            <td>
                                                <span class="badge badge-dark badge-sm">Kerja dalam proses</span>
                                            </td>
                                            <td class="text-sm">
                                                <a href="{{ route('booking.show') }}" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Papar">
                                                    <i class="fas fa-eye text-dark"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="mx-3 disabled-link"
                                                    data-bs-toggle="tooltip" data-bs-original-title="Kemaskini">
                                                    <i class="fas fa-user-edit text-secondary"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="disabled-link" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Padam   ">
                                                    <i class="fas fa-trash text-secondary"></i>
                                                </a>

                                                </a>
                                            </td>
                                        </tr>

                                        <tr>
                                            <td>Bumbung</td>
                                            <td>Atap bocor</td>
                                            <td>31/07/2023</td>
                                            <td>
                                                <a href="{{ route('quotation.show') }}"
                                                    class="btn btn-sm btn-outline-dark ms-2 px-3  mb-0">Papar</a>
                                            </td>
                                            <td>
                                                <a href="{{ route('payment.upload') }}"
                                                    class="btn btn-sm btn-outline-danger ms-2 px-3  mb-0">Papar</a>
                                            </td>
                                            <td>
                                                <span class="badge badge-danger badge-sm">Belum Bayar</span>
                                            </td>
                                            <td class="text-sm">
                                                <a href="{{ route('booking.show') }}" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Papar">
                                                    <i class="fas fa-eye text-dark"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="mx-3 disabled-link"
                                                    data-bs-toggle="tooltip" data-bs-original-title="Kemaskini">
                                                    <i class="fas fa-user-edit text-secondary"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="disabled-link" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Padam   ">
                                                    <i class="fas fa-trash text-secondary"></i>
                                                </a>

                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Bumbung</td>
                                            <td>Atap bocor</td>
                                            <td>31/07/2023</td>
                                            <td>
                                                <a href="{{ route('quotation.show') }}"
                                                    class="btn btn-sm btn-outline-dark ms-2 px-3  mb-0">Papar</a>
                                            </td>
                                            <td>
                                                <a href="{{ route('payment.upload') }}" 
                                                    class="btn btn-sm btn-outline-danger ms-2 px-3  mb-0 disabled-link">Papar</a>
                                            </td>
                                            <td>
                                                <span class="badge badge-warning badge-sm">Disemak</span>
                                            </td>
                                            <td class="text-sm">
                                                <a href="{{ route('booking.show') }}" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Papar">
                                                    <i class="fas fa-eye text-dark"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="mx-3 disabled-link"
                                                    data-bs-toggle="tooltip" data-bs-original-title="Kemaskini">
                                                    <i class="fas fa-user-edit text-secondary"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="disabled-link" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Padam   ">
                                                    <i class="fas fa-trash text-secondary"></i>
                                                </a>

                                                </a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Bumbung</td>
                                            <td>Atap bocor</td>
                                            <td>31/07/2023</td>
                                            <td>
                                                <a href="{{ route('quotation.show') }}"
                                                    class="btn btn-sm btn-outline-dark ms-2 px-3  mb-0">Papar</a>
                                            </td>
                                            <td>
                                                <a href="{{ route('invoice.show') }}" 
                                                    class="btn btn-sm btn-outline-success ms-2 px-3  mb-0">Papar</a>
                                            </td>
                                            <td>
                                                <span class="badge badge-success badge-sm">Selesai</span>
                                            </td>
                                            <td class="text-sm">
                                                <a href="{{ route('booking.show') }}" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Papar">
                                                    <i class="fas fa-eye text-dark"></i>
                                                </a>
                                                <a href="javascript:void(0);" class="mx-3 disabled-link"
                                                    data-bs-toggle="tooltip" data-bs-original-title="Kemaskini">
                                                    <i class="fas fa-user-edit text-secondary"></i>
                                                </a>
                                                <a href="javascript:;" data-bs-toggle="tooltip"
                                                    data-bs-original-title="Padam"
                                                    onclick="soft.showSwal('warning-message-and-confirmation')">
                                                    <i class="fas fa-trash text-dark"></i>
                                                </a>

                                                </a>
                                            </td>
                                        </tr>


                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>Servis</th>
                                            <th>Catatan</th>
                                            <th>Tarikh</th>
                                            <th>Sebut Harga</th>
                                            <th>Bayaran</th>
                                            <th>Status</th>
                                            <th>Tindakan</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
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

    <!-- Kanban scripts -->
    <script src="../../assets/js/plugins/dragula/dragula.min.js"></script>
    <script src="../../assets/js/plugins/jkanban/jkanban.js"></script>
    <script src="../../assets/js/plugins/multistep-form.js"></script>
    <script src="../../assets/js/plugins/choices.min.js"></script>
    <script src="../../assets/js/plugins/sweetalert.min.js"></script>

    <script>
        $(function() {
            $('[data-bs-toggle="tooltip"]').tooltip()
        })
    </script>

    <script>
        if (document.getElementById('products-list')) {
            const dataTableSearch = new simpleDatatables.DataTable("#products-list", {
                searchable: true,
                fixedHeight: false,
                perPage: 7
            });

            document.querySelectorAll(".export").forEach(function(el) {
                el.addEventListener("click", function(e) {
                    var type = el.dataset.type;

                    var data = {
                        type: type,
                        filename: "soft-ui-" + type,
                    };

                    if (type === "csv") {
                        data.columnDelimiter = "|";
                    }

                    dataTableSearch.export(data);
                });
            });
        };
    </script>
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
