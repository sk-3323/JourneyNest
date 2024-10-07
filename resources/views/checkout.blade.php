@include('header')
<section class="ftco-section ftco-no-pb ftco-no-pt" style="margin: 15vh 0">
    <main class="main" id="main mt-4">
        <div class="container mt-5">

            <h1>Your Orders</h1>
            <hr>
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-12">

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
                                        Price
                                    </th>
                                    <th>
                                        GST
                                    </th>
                                    <th>
                                        Total Amount
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
                                            <td>{{ $item->price }}</td>
                                            <td>18%</td>
                                            <td>{{ $item->total_amount }}</td>

                                        </tr>
                                    @endforeach
                                @endif
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>
    </main>
</section>
@include('footer')
