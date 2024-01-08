@extends('layouts.admin')

@section('header', 'Home')

@section('content')
    <div class="content-wrapper">
        <div class="container-xxl flex-grow-1 container-p-y">
            <div class="row mt-4 justify-content-center mb-5">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="card shadow border-3 border-primary border-end-0 border-top-0  border-bottom-0 position-relative"
                        style="width: 16rem;">
                        <div class="card-body">
                            <h5 class="card-title">Total anggota</h5>
                            <p class="card-text">{{ $total_anggota }}</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="card shadow border-3 border-warning border-end-0 border-top-0  border-bottom-0 card-item position-relative"
                        style="width: 16rem;">
                        <div class="card-body">
                            <h5 class="card-title">Total Buku</h5>
                            <p class="card-text">{{ $total_buku }}</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="card shadow border-3 border-danger border-end-0 border-top-0  border-bottom-0 card-item position-relative"
                        style="width: 16rem;">
                        <div class="card-body">
                            <h5 class="card-title">Total peminjam</h5>
                            <p class="card-text">{{ $total_peminjam }}</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="card shadow border-3 border-info border-end-0 border-top-0  border-bottom-0 card-item position-relative"
                        style="width: 16rem;">
                        <div class="card-body">
                            <h5 class="card-title">Total penerbit</h5>
                            <p class="card-text">{{ $total_penerbit }}</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row d-flex justify-content-center">
                <div class="col-md-5 shadow-sm bg-white position-relative">
                    <h5 class="card-header m-0 me-2 pb-3">Total Revenue</h5>

                    {{-- Filter tahun --}}
                    {{-- <div class="dropdown position-absolute  top-0 end-0 m-4">
            <button
              class="btn btn-sm btn-outline-primary dropdown-toggle"
              type="button"
              id="growthReportId"
              data-bs-toggle="dropdown"
              aria-haspopup="true"
              aria-expanded="false"
            >
              2022
            </button>
            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="growthReportId">
              <a class="dropdown-item" href="javascript:void(0);">2021</a>
              <a class="dropdown-item" href="javascript:void(0);">2020</a>
              <a class="dropdown-item" href="javascript:void(0);">2019</a>
            </div>
          </div> --}}
                    <canvas id="barChart"
                        style="min-height: 250px; height: 250px; max-height: 270px; max-width: 100%;"></canvas>
                </div>
                <div class="col-md-7">
                    <!-- DONUT CHART -->
                    <div class="card card-danger">
                        <h5 class="card-header m-0 me-2 pb-3">Grafik Penerbit</h5>


                        <div class="card-body">
                            <canvas id="donutChart"
                                style="min-height: 250px; height: 250px; max-height: 270px; max-width: 100%;"></canvas>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
            <div class="row d-flex justify-content-center mt-3">
                <div class="col-md-7">
                    <!-- DONUT CHART -->
                    <div class="card card-danger">
                        <h5 class="card-header m-0 me-2 pb-3">Grafik Katalog</h5>
                        <div class="card-body">
                            <canvas id="bookGraphic"
                                style="min-height: 250px; height: 250px; max-height: 270px; max-width: 100%;"></canvas>
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card -->
                </div>
            </div>
        </div>
    </div>
@endsection
@push('script')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

    <script>
        var label_donut = '{!! json_encode($label_donut) !!}'
        var data_donut = '{!! json_encode($data_donut) !!}'
        var data_bar = '{!! json_encode($data_bar) !!}'
        var label_book = '{!! json_encode($label_book) !!}'
        var data_book = '{!! json_encode($data_book) !!}'

        const ctx = document.getElementById('donutChart');

        new Chart(ctx, {
            type: 'doughnut',
            data: {
                labels: JSON.parse(label_donut),
                datasets: [{
                    label: 'Jumlah',
                    data: JSON.parse(data_donut),
                    backgroundColor: [
                        'red',
                        'green',
                        'blue',
                        'yellow',
                        'pink',
                        'purple',
                        'rgb(255, 99, 80)',
                        'rgb(54, 100, 235)',
                        'rgb(10, 205, 86)',
                        'rgb(255, 10, 86)',
                    ],
                    hoverOffset: 4
                }]
            },

        });

        const Bar = document.getElementById('barChart');

        new Chart(Bar, {
            type: 'bar',
            data: {
                labels: ['January', 'Ferruary', 'March', 'April', 'May', 'June', 'July', 'August', 'September',
                    'October', 'November', 'December'
                ],
                datasets: JSON.parse(data_bar)
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });

        const dataBook = document.getElementById('bookGraphic');

        new Chart(dataBook, {
            type: 'polarArea',

            data: {
                labels: JSON.parse(label_book),
                datasets: [{
                    label: 'Jumlah',
                    data: JSON.parse(data_book),
                    backgroundColor: [
                        'rgb(255, 99, 132)',
                        'rgb(75, 192, 192)',
                        'rgb(255, 205, 86)',
                        'rgb(201, 203, 207)',
                        'rgb(54, 162, 235)'
                    ]
                }]
            },


            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                }
            }
        });
    </script>
@endpush
