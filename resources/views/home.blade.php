@include('header')
<div class="hero-wrap js-fullheight" style="background-image: url('/images/bg_5.jpg');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-center" data-scrollax-parent="true">
            <div class="col-md-7 ftco-animate">
                <span class="subheading">Welcome to Pacific</span>
                <h1 class="mb-4">Discover Your Favorite Place with Us</h1>
                <p class="caps">Travel to the any corner of the world, without going around in circles</p>
            </div>
            <a href="https://vimeo.com/45830194"
                class="icon-video popup-vimeo d-flex align-items-center justify-content-center mb-4">
                <span class="fa fa-play"></span>
            </a>
        </div>
    </div>
</div>

<section class="ftco-section ftco-no-pb ftco-no-pt">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="ftco-search d-flex justify-content-center">
                    <div class="row">
                        <div class="col-md-12 nav-link-wrap">
                            <div class="nav nav-pills text-center" id="v-pills-tab" role="tablist"
                                aria-orientation="vertical">
                                <a class="nav-link active mr-md-1" id="v-pills-1-tab" data-toggle="pill"
                                    href="#v-pills-1" role="tab" aria-controls="v-pills-1"
                                    aria-selected="true">Search Destination</a>


                            </div>
                        </div>
                        <div class="col-md-12 tab-wrap">

                            <div class="tab-content" id="v-pills-tabContent">

                                <div class="tab-pane fade show active" id="v-pills-1" role="tabpanel"
                                    aria-labelledby="v-pills-nextgen-tab">
                                    <form action="/search" method="POST" class="search-property-1">
                                        @csrf
                                        <div class="row no-gutters">
                                            <div class="col-md d-flex">
                                                <div class="form-group p-4 border-0">
                                                    <label for="">Place</label>
                                                    <div class="form-field">
                                                        <div class="icon"><span class="fa fa-search"></span>
                                                        </div>
                                                        <input type="text" class="form-control" name="search"
                                                            placeholder="Search place">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md d-flex">
                                                <div class="form-group d-flex w-100 border-0">
                                                    <div class="form-field w-100 align-items-center d-flex">
                                                        <input type="submit" value="Search"
                                                            class="align-self-stretch form-control btn btn-primary">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</section>
<div class="container">
    <h1>Destinations</h1>
    <div class="row d-flex justify-content-between align-items-center gap-4 flex-wrap">
        @foreach ($dests as $item)
            <div class="card p-4 my-4">
                <img class="card-img-top" src="{{ $item->cat_pic }}" alt="Title" style="height:200px;width:300px;" />
                <div class="card-body">
                    <h4 class="card-title"><b>{{ $item->cat_name }}</b></h4>
                </div>
                <a href="/displaydestinations/{{ $item->cat_name }}" class="btn btn-outline-info">Discover</a>
            </div>
        @endforeach
    </div>
</div>

<div class="container mt-5">
    <h1>Discover Packages</h1>
    <div class="row d-flex justify-content-around align-items-center gap-4 flex-wrap">
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

@include('footer')
