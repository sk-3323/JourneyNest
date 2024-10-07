@include('header');
<section class="mt-5">

    <div class="container">
        <div class="row" style="margin: 15vh 0">
            <div class="col-md-12">
                <h1>Detail of {{ $package->package_name }}</h1>
            </div>
            @if (Session::has('success'))
                <div class="alert alert-primary" role="alert">
                    {{ Session::get('success') }}
                </div>
            @endif
        </div>
        <div class="row mt-5 d-flex justify-content-center">
            <div class="col-md-7">
                <div class="imgContainer">
                    <img src="{{ $package->package_pic }}" alt="Pakcgae pic" class="img-fluid">

                </div>
            </div>
            <div class="col-md-5">
                <div class="textContainer d-flex flex-column justify-content-between align-items-start"
                    style="color: #013159;">
                    {{-- <div class="row">
                        <div class="col"> --}}

                    <h3>Name : </h3>
                    <span>{{ $package->package_name }}</span>
                    <h3>Description : </h3>
                    <span>{{ $package->package_desc }}</span>
                    <h3>Destination : </h3>
                    <span>{{ $package->category }}</span>
                    <h3>Detail Description : </h3>
                    <span>{{ $package->detail_desc }}</span>
                    {{-- </div>
                            <div class="col"> --}}

                    <h3>Duration : </h3>
                    <span>{{ $package->duration }} Days</span>

                    <h3>Price : </h3>
                    <span>{{ $package->package_price }} INR</span>
                    <h3>Discount: </h3>
                    <span>{{ $package->package_discount }}%</span>
                    {{-- </div> --}}
                </div>
                <a href="/addtocart/{{ $package->_id }}"><button class="btn btn-danger px-4 mt-4">Book</button></a>
            </div>
        </div>
    </div>
    </div>
</section>

@include('footer')
