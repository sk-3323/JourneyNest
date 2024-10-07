@include('adminnav')

<main id="main" class="main">
    {{-- main contents --}}
    <section class="section dashboard">
        <div class="row">

            <!-- Left side columns -->
            <div class="col-lg-12">
                <div class="row">

                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card sales-card">

                            <div class="card-body">
                                <h5 class="card-title">Revenue</h5>

                                <div class="d-flex align-items-center">
                                    <div
                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-currency-rupee"></i>

                                    </div>
                                    <div class="ps-3">
                                        <h6>{{ $revenue }}</h6>
                                        <span class="text-success small pt-1 fw-bold">12%</span> <span
                                            class="text-muted small pt-2 ps-1">increase</span>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xxl-4 col-md-6">
                        <div class="card info-card revenue-card">

                            <div class="card-body">
                                <h5 class="card-title">Destinations</h5>

                                <div class="d-flex align-items-center">
                                    <div
                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        {{-- <i class="bi bi-boxes"></i> --}}
                                        <i class="bi bi-card-checklist"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{ $c_count }}</h6>

                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="col-xxl-4 col-xl-12">

                        <div class="card info-card customers-card">
                            <div class="card-body">
                                <h5 class="card-title">Package</h5>

                                <div class="d-flex align-items-center">
                                    <div
                                        class="rounded-circle d-flex align-items-center justify-content-center card-icon">
                                        <i class="bi bi-boxes"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{ $p_count }}</h6>

                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="col-xxl-4 col-xl-12">

                        <div class="card info-card customers-card">
                            <div class="card-body">
                                <h5 class="card-title">Booking</h5>

                                <div class="d-flex align-items-center">
                                    <div
                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-cart"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{ $o_count }}</h6>
                                        <span class="text-danger small pt-1 fw-bold">12%</span> <span
                                            class="text-muted small pt-2 ps-1">decrease</span>

                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>
                    <div class="col-xxl-4 col-xl-12">

                        <div class="card info-card customers-card">
                            <div class="card-body">
                                <h5 class="card-title">Users</h5>

                                <div class="d-flex align-items-center">
                                    <div
                                        class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                                        <i class="bi bi-people"></i>
                                    </div>
                                    <div class="ps-3">
                                        <h6>{{ $u_count }}</h6>
                                        <span class="text-danger small pt-1 fw-bold">12%</span> <span
                                            class="text-muted small pt-2 ps-1">decrease</span>

                                    </div>
                                </div>

                            </div>
                        </div>

                    </div>



                </div>

            </div>

            <div class="col-lg-12">
                <h1>Recent Orders</h1>
                <hr>
                <table class="table table-striped table-hover col-6">
                    <thead>
                        <tr>
                            <th>Sr No.</th>
                            <th>Username</th>
                            <th>Pic</th>
                            <th>Package name</th>
                            <th>Price</th>
                            <th>Total amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $item)
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                @foreach ($user as $i)
                                    @if ($item->uid == $i->_id)
                                        <td>{{ $i->username }}</td>
                                    @endif
                                @endforeach
                                <td><img src="{{ $item->pic }}" height="50" width="50" alt=""></td>
                                <td>{{ $item->pname }}</td>
                                <td>{{ $item->price }}</td>
                                <td>{{ $item->total_amount }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
    </section>
</main>

@include('adminfooter')
