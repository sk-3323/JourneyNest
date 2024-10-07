@include('adminnav')
<main class="main" id=main>
    <div class="container-fluid" style="min-height: 75vh; width:100%;">
        <div class="row">
            <div class="col-md-12">
                <h1>Detail of {{ $package->package_name }}</h1>
            </div>
        </div>
        <div class="row mt-5 d-flex justify-content-center">
            <div class="col-md-6">
                <div class="imgContainer">
                    <img src="{{ $package->package_pic }}" alt="Pakcgae pic" class="img-fluid">
                </div>
            </div>
            <div class="col-md-6">
                <div class="textContainer d-flex flex-column justify-content-between align-items-start gap-3"
                    style="color: #013159;">
                    <h3>Name : {{ $package->package_name }}</h3>
                    <h3>Description : {{ $package->package_desc }}</h3>
                    <h3>Category : {{ $package->category }}</h3>
                    <h3>Duration: {{ $package->duration }} Days</h3>
                    <h3>Route : </h3>
                    <ul>
                        <li>Register</li>
                        <li>Choose plan</li>
                        <li>Purchase</li>
                        <li>Receive Product</li>
                    </ul>
                    <h3>Detail Description : {{ $package->detail_desc }}</h3>
                    <h3>Price : {{ $package->package_price }} INR</h3>
                    <h3>Discount : {{ $package->package_discount }}%</h3>
                </div>
            </div>
        </div>
</main>

@include('adminfooter')
