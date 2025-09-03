{{-- resources/views/admin/pages/dashboard.blade.php --}}
@extends('admin.layouts.master')

@section('title', 'Dashboard')

@section('content')
    <div class="app-content-header">
        <div class="container-fluid">
            <h1 class="mb-2">Dashboard</h1>
        </div>
    </div>
    <div class="app-content">
        <div class="container-fluid">
            <div class="row">
                <!-- Small boxes -->
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-info">
                        <div class="inner">
                            <h3>150</h3>
                            <p>New Orders</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-shopping-cart"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-success">
                        <div class="inner">
                            <h3>53%</h3>
                            <p>Bounce Rate</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-chart-line"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-warning">
                        <div class="inner">
                            <h3>44</h3>
                            <p>User Registrations</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-user-plus"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-6">
                    <div class="small-box bg-danger">
                        <div class="inner">
                            <h3>65</h3>
                            <p>Unique Visitors</p>
                        </div>
                        <div class="icon">
                            <i class="fas fa-users"></i>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Chart row -->
            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">Sales Overview</div>
                        <div class="card-body">
                            <canvas id="salesChart" height="120"></canvas>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-header">User Growth</div>
                        <div class="card-body">
                            <canvas id="userChart" height="120"></canvas>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Table Example -->
            <div class="row mt-4">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">Latest Transactions</div>
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>User</th>
                                        <th>Amount</th>
                                        <th>Status</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>#001</td>
                                        <td>John Doe</td>
                                        <td>$250</td>
                                        <td><span class="badge bg-success">Paid</span></td>
                                        <td>2025-08-25</td>
                                    </tr>
                                    <tr>
                                        <td>#002</td>
                                        <td>Jane Smith</td>
                                        <td>$100</td>
                                        <td><span class="badge bg-warning">Pending</span></td>
                                        <td>2025-08-27</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@push('scripts')
    <script>
        const ctx1 = document.getElementById('salesChart');
        new Chart(ctx1, {
            type: 'line',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                datasets: [{
                    label: 'Sales',
                    data: [120, 150, 180, 90, 200, 170],
                    borderColor: 'rgba(75, 192, 192, 1)',
                    fill: false
                }]
            }
        });

        const ctx2 = document.getElementById('userChart');
        new Chart(ctx2, {
            type: 'bar',
            data: {
                labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
                datasets: [{
                    label: 'Users',
                    data: [30, 50, 70, 90, 110, 150],
                    backgroundColor: 'rgba(54, 162, 235, 0.7)'
                }]
            }
        });
    </script>
@endpush
