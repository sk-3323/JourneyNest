@include('adminnav')
<main id="main" class="main">
    <div class="container">
        <button>
            <a href="{{ route('category.create') }}" class="btn2 my-5"><span class="spn2">Add Destination +
                </span></a>
        </button>
        <div class="table-responsive">
            @if (Session::get('success'))
            @endif
            <table class="table table-primary">
                <thead>
                    <tr>
                        <th scope="col">Sr. No.</th>
                        <th scope="col">Destination Name</th>
                        <th scope="col">Destination Pic</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $item->cat_name }}</td>
                            @if (file_exists(public_path($item->cat_pic)))
                                <td><img src="{{ $item->cat_pic }}" class="img-fluid" height="100" width="100">
                                </td>
                            @else
                                <td><img src="/img_upload/no-image.jpg" class="img-fluid" height="100" width="100">
                                </td>
                            @endif
                            <td>
                                <form action="{{ route('category.destroy', $item->_id) }}"
                                    onsubmit="confirmDelete(event)" method="POST">
                                    <a href="{{ route('category.edit', $item->_id) }}" class="btn btn-warning">Edit</a>
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

    </div>
</main>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.12.4/dist/sweetalert2.all.min.js
                "></script>
<script>
    function confirmDelete(event) {
        event.preventDefault();
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: true,
            confirmButtonColor: "#3085d6",
            cancelButtonColor: "#d33",
            confirmButtonText: "Yes, delete it!"
        }).then((result) => {
            if (result.isConfirmed) {
                event.target.submit(); // Submit the form after confirmation
            }
        });
    }
</script>
@include('adminfooter')
