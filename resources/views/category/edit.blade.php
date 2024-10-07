@include('adminnav')
<main id="main" class="main">
    <div class="row">
        <h1>Update Destination ({{ $category->cat_name }})</h1>
        <hr>
        <div class="col-md-6">
            <form action="{{ route('category.update', $category->_id) }}" method="POST" enctype="multipart/form-data"
                onsubmit="updateMsg()">
                @csrf
                @method('PUT')
                <div class="mb-3">
                    <label for="cat_name" class="form-label">Destination Name</label>
                    <input type="text" class="form-control" id="cat_name" name="cat_name"
                        value="{{ $category->cat_name }}" placeholder="Enter category name">
                    <span class="text-danger">
                        @error('cat_name')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="mb-3">
                    <label for="cat_name" class="form-label">Destination Image</label>
                    <input type="file" class="form-control" id="cat_pic" name="cat_pic"
                        value="{{ $category->cat_pic }}">
                    <span class="text-danger">
                        @error('cat_pic')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <button type="submit" class="btn btn-primary">Update Destination</button>
                <a href="/category"><button type="button" class="btn btn-info">
                        Back</button></a>
            </form>
        </div>
    </div>
</main>
@include('adminfooter')
