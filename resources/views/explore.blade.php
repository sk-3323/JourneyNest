@include('header')
<section>

    <div class="container" style="margin-top: 20vh">
        <h1>Discover Packages</h1>
        <div class="row d-flex justify-content-between align-items-center flex-wrap">
            @foreach ($package as $item)
                <div class="card p-4 my-4">
                    <img class="card-img-top" src="{{ $item->package_pic }}" alt="Title"
                        style="height:200px;width:300px;" />
                    <div class="card-body">

                        <h4 class="card-title"><b>{{ $item->package_name }} </b></h4>

                        <h6>{{ $item->package_desc }}</h6>
                        <h6>{{ $item->package_price }} INR</h6>
                        <h6>{{ $item->package_discount }} % Discount</h6>
                    </div>
                    <a href="/showpackage/{{ $item->_id }}" class="btn btn-outline-info">Discover</a>
                </div>
            @endforeach
        </div>
    </div>
</section>
@include('footer')
