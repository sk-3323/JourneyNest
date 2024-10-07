@include('header')
<section class="ftco-section ftco-no-pb ftco-no-pt" style="margin: 15vh 0">
    <main class="main" id="main mt-4">
        <div class="container mt-5">

            <h1>Booking</h1>
            <hr>
            <div class="container">

                <div class="row justify-content-between">
                    <div class="col-9">
                        @if (Session::has('success'))
                            <div class="alert alert-success w-100" role="alert">
                                {{ Session::get('success') }}
                            </div>
                        @endif
                        <table class="table table-striped">
                            <thead class="">
                                <tr>
                                    <th>
                                        Name
                                    </th>
                                    <th>
                                        Price
                                    </th>
                                    <th>
                                        Pic
                                    </th>
                                    <th>
                                        Total
                                    </th>
                                    <th>
                                        Remove
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @if ($data->count() === 0)
                                    <div class="alert alert-danger w-100" role="alert">
                                        Cart is empty
                                    </div>
                                @else
                                    @foreach ($data as $item)
                                        <tr>
                                            <td>{{ $item->pname }}</td>
                                            <td>{{ $item->price }}</td>
                                            <td><img src="{{ $item->pic }}" height="100" width="100" /></td>

                                            <td>{{ $item->total_amount }}</td>
                                            <td><a href="/removecart/{{ $item->_id }}"
                                                    class="btn btn-danger">Remove</a>
                                            </td>
                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>

                    <div class="col-3">
                        <div class="card">

                            <div class="card-body">
                                <h4 class="card-title">Address</h4>
                                <p class="card-text">{{ Str::upper($address) }}</p>
                            </div>
                        </div>

                        <div class="card mt-3">

                            <div class="card-body">
                                <p>*only COD Avaliable</p>
                                <p class="card-text">GST. 18%</p>
                                <h4 class="card-title">Total ₹ {{ $total_amount }}</h4>
                            </div>
                        </div>
                        @if (Session::has('success'))
                            <a href="/checkout" class="btn btn-primary mt-3">View Boking</a>
                        @endif
                        @if ($data->count() > 0)
                            <form action="/confirm" onsubmit="confirmDelete(e)">
                                @csrf
                                <button type="submit" class="btn btn-danger">Confirm Book</button>
                            </form>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </main>
</section>
@include('footer')
