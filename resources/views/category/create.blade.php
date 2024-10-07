@include('adminnav')
<main id="main" class="main">
    {{-- <div class="container-fluid"> --}}

    <div class="row">
        <h1>Add Destination</h1>
        <hr>
        <div class="col-md-6">
            <form action="{{ route('category.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="cat_name" class="form-label">Destination name</label>
                    <input type="text" class="form-control" id="cat_name" name="cat_name"
                        placeholder="Enter destination name">
                    <span class="text-danger">
                        @error('cat_name')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="mb-3">
                    <label for="cat_name" class="form-label">Destination image</label>
                    <input type="file" class="form-control" id="cat_pic" name="cat_pic">
                    <span class="text-danger">
                        @error('cat_pic')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <button type="submit" class="btn btn-primary">Add Destination</button>
                <a href="/category"><button type="button" class="btn btn-info">
                        Back</button></a>
            </form>
        </div>
        {{-- </div> --}}
    </div>
</main>
@include('adminfooter')
