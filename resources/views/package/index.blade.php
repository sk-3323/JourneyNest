@include('adminnav');

<main id="main" class="main">
    <a href="{{ route('package.create') }}" class="btn btn-primary my-5">Add Package</a>
    <div class="table-responsive">
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">Sr No.</th>
                    <th scope="col">Category</th>
                    <th scope="col">Package Name</th>
                    <th scope="col">Price</th>
                    <th scope="col">Discount</th>
                    <th scope="col">Image</th>
                    <th scope="col">Duration</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($data as $item)
                    <tr class="">
                        <td scope="row">{{ $loop->index + 1 }}</td>
                        <td>{{ $item->category }}</td>
                        <td>{{ $item->package_name }}</td>
                        <td>{{ $item->package_price }}</td>
                        <td>{{ $item->package_discount }} %</td>
                        <td><img src="{{ $item->package_pic }}" width="100" height="100" alt=""
                                class="rou"></td>
                        <td>{{ $item->duration }} Days</td>

                        <td>
                            <form action="{{ route('package.destroy', $item->_id) }}" onsubmit="confirmDelete(event)"
                                method="POST">
                                <a href="{{ route('package.show', $item->_id) }}" class="btn btn-info">Show</a>
                                <a href="{{ route('package.edit', $item->_id) }}" class="btn btn-warning">Edit</a>
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger ms-2" type="submit">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $data->links() }}
    </div>
</main>
@include('adminfooter');
