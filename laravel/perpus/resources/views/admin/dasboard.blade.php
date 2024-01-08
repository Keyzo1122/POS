@extends('layouts.admin')

@section('header', 'Dashboard')

@section('content')
    <div class="row">
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
                <div class="inner">
                    <h3>{{ $books }}</h3>

                    <p>Total Buku</p>
                </div>
                <div class="icon">
                    <i class="fa fa-book"></i>
                </div>
                <a href="{{ url('book') }}" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <!-- ./col -->
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
                <div class="inner">
                    <h3>{{ $members }}</h3>

                    <p>Total Anggota</p>
                </div>
                <div class="icon">
                    <i class="fa fa-members"></i>
                </div>
                <a href="{{ url('member') }}" class="small-box-footer">More info <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-warning">
                <div class="inner">
                    <h3>{{ $publishers }}</h3>

                    <p>Total Penerbit</p>
                </div>
                <div class="icon">
                    <i class="fa fa-members"></i>
                </div>
                <a href="{{ url('publisher') }}" class="small-box-footer">More info <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
        <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-dager">
                <div class="inner">
                    <h3>{{ $transactions }}</h3>

                    <p>Data Peminjaman</p>
                </div>
                <div class="icon">
                    <i class="fa fa-members"></i>
                </div>
                <a href="{{ url('transaction') }}" class="small-box-footer">More info <i
                        class="fas fa-arrow-circle-right"></i></a>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header">
            <h3 class="card-title">
                <i class="fas fa-chart-pie mr-1"></i>
                Sales
            </h3>
            <div class="card-tools">
                <ul class="nav nav-pills ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#sales-chart" data-toggle="tab">Donut</a>
                    </li>
                </ul>
            </div>
        </div><!-- /.card-header -->
        <div class="card-body">
            <div class="tab-content p-0">
                <!-- Morris chart - Sales -->
                <div class="chart tab-pane active" id="revenue-chart" style="position: relative; height: 300px;">
                    <canvas id="revenue-chart-canvas" height="300" style="height: 300px;"></canvas>
                </div>
                <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;">
                    <canvas id="sales-chart-canvas" height="300" style="height: 300px;"></canvas>
                </div>
            </div>
        </div><!-- /.card-body -->
    </div>
    <!-- /.card -->
@endsection
<script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
<script src="{{ asset('assets/plugins/chart.js/Chart.min.js') }}"></script>
<script type="text/javascript">
    $(function () {
        var donutChartCanvas = $('#donutChart').get(0)
    })
</script>
