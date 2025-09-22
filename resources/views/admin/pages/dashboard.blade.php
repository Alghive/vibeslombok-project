{{-- resources/views/admin/pages/dashboard.blade.php --}}
@extends('admin.layouts.master')

@section('title', 'Dashboard')

@section('content')
    
<div class="row">
    <div class="col-lg-3 col-6">
        <div class="small-box bg-lightblue">
            <div class="inner">
                <h3>50</h3>
                <p class="text-capitalize">User Terdaftar</p>
            </div>
            <div class="icon">
                <i class="fas fa-users"></i>
            </div>
            <a href="" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <div class="col-lg-3 col-6">
        <div class="small-box bg-maroon">
            <div class="inner">
                <h3>20</h3>
                <p class="text-capitalize">Daftar Mobil</p>
            </div>
            <div class="icon">
                <i class="fas fa-car"></i>
            </div>
            <a href="" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <div class="col-lg-3 col-6">
        <div class="small-box bg-secondary">
            <div class="inner">
                <h3>9</h3>
                <p class="text-capitalize">Daftar Paket Wisata</p>
            </div>
            <div class="icon">
                <i class="fas fa-map-marked-alt"></i>
            </div>
            <a href="" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>

    <div class="col-lg-3 col-6">
        <div class="small-box bg-olive">
            <div class="inner">
                <h3>10</h3>
                <p class="text-capitalize">Daftar Blog</p>
            </div>
            <div class="icon">
                <i class="fas fa-blog"></i>
            </div>
            <a href="" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
        </div>
    </div>


    <div class="col-md-4">
        <div class="info-box mb-3 bg-light">
            <span class="info-box-icon" style="background-color: #C6E7FF; border-radius: 10px;"><i class="fas fa-money-bill-wave text-lightblue"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Pendapatan Rental Mobil</span>
                <span class="info-box-number"><strong>Rp 800.000</strong></span>
            </div>
            <!-- /.info-box-content -->
        </div>
    </div>

    <div class="col-md-4">
        <div class="info-box mb-3 bg-light">
            <span class="info-box-icon" style="background-color: #C6E7FF; border-radius: 10px;"><i class="fas fa-money-bill-wave text-lightblue"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Pendapatan Paket Wisata</span>
                <span class="info-box-number"><strong>Rp 700.000</strong></span>
            </div>
            <!-- /.info-box-content -->
        </div>
    </div>
    <div class="col-md-4">
        <div class="info-box mb-3 bg-light">
            <span class="info-box-icon" style="background-color: #C6E7FF; border-radius: 10px;"><i class="fas fa-money-bill-wave text-lightblue"></i></span>

            <div class="info-box-content">
                <span class="info-box-text">Total Pendapatan</span>
                <span class="info-box-number"><strong>Rp 1.500.000</strong></span>
            </div>
            <!-- /.info-box-content -->
        </div>
    </div>

    {{-- Grafik --}}
    <div class="col-lg-6">
        <div class="card">
            <div class="card-header     ">
                <h3 class="card-title">Mobil Paling Banyak Disewa (Merk)</h3>
            </div>
            <div class="card-body">
                <canvas id="chartMobil"></canvas>
            </div>
        </div>
    </div>

    <div class="col-lg-6">
        <div class="card">
            <div class="card-header ">
                <h3 class="card-title">Paket Wisata Terlaris</h3>
            </div>
            <div class="card-body">
                <canvas id="chartWisata"></canvas>
            </div>
        </div>
    </div>
</div>



@endsection

@push('scripts')
<!-- Chart.js -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    // Data contoh Mobil
    const dataMobil = {
        labels: ['Toyota', 'Honda', 'Suzuki', 'Daihatsu', 'Mitsubishi'],
        datasets: [{
            label: 'Jumlah Penyewaan',
            data: [12, 19, 7, 15, 9],
            backgroundColor: [
                '#007bff', '#28a745', '#ffc107', '#dc3545', '#6c757d'
            ]
        }]
    };

    const configMobil = {
        type: 'bar',
        data: dataMobil,
        options: {
            responsive: true,
            plugins: {
                legend: { display: false },
                title: { display: true, text: 'Mobil Paling Banyak Disewa' }
            }
        }
    };

    new Chart(
        document.getElementById('chartMobil'),
        configMobil
    );

    // Data contoh Paket Wisata
    const dataWisata = {
        labels: ['Gili Trawangan', 'Rinjani Trekking', 'Senggigi Beach', 'Pink Beach', 'Tetebatu'],
        datasets: [{
            label: 'Jumlah Pemesanan',
            data: [25, 10, 15, 8, 12],
            backgroundColor: [
                '#17a2b8', '#6610f2', '#fd7e14', '#20c997', '#e83e8c'
            ]
        }]
    };

    const configWisata = {
        type: 'bar',
        data: dataWisata,
        options: {
            responsive: true,
            plugins: {
                legend: { display: false },
                title: { display: true, text: 'Paket Wisata Terlaris' }
            }
        }
    };

    new Chart(
        document.getElementById('chartWisata'),
        configWisata
    );
</script>
@endpush
