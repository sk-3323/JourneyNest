@include('adminnav');

<main class="main" id="main">

    <h1>Add Package</h1>

    <form action="{{ route('package.store') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="" class="form-label">Package Name</label>
            <input type="text" name="package_name" class="form-control" id="">
            <span class="text-danger">
                @error('package_name')
                    {{ $message }}
                @enderror
            </span>
            <br>

            <label for="" class="form-label">Package Description</label>
            <input type="text" name="package_desc" class="form-control" id="">
            <span class="text-danger">
                @error('package_desc')
                    {{ $message }}
                @enderror
            </span>
            <br>
            <div class="row">
                <div class="col"><label for="" class="form-label">Package Price</label>
                    <input type="text" name="package_price" class="form-control" id="">
                    <span class="text-danger">
                        @error('package_price')
                            {{ $message }}
                        @enderror
                    </span>

                </div>
                <div class="col"><label for="" class="form-label">Discount</label>
                    <input type="text" name="package_discount" class="form-control" id="">
                    <span class="text-danger">
                        @error('package_discount')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
            </div>
            <br>

            <label for="" class="form-label">Package Pic</label>
            <input type="file" class="form-control" name="package_pic" id="ppic" placeholder="" />
            <span class="text-danger">
                @error('package_pic')
                    {{ $message }}
                @enderror
            </span>
            <br>
            <div class="row">
                <div class="col">
                    <label for="" class="form-label">Category</label>
                    <select name="category" id="" class="form-control">
                        @foreach ($categories as $item)
                            <option value="{{ $item->cat_name }}">{{ $item->cat_name }}</option>
                        @endforeach
                    </select>
                    <span class="text-danger">
                        @error('category')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="col"><label for="" class="form-label">Duration</label>
                    <input type="text" name="duration" class="form-control" id="">
                    <span class="text-danger">
                        @error('duration')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="col"><label for="" class="form-label">Route</label>
                    <input type="text" name="route" class="form-control" id="">
                    <span class="text-danger">
                        @error('route')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
            </div>
            <br>
            <label for="" class="form-label">Detail</label>
            <input type="text" name="detail_desc" class="form-control" id="">
            <span class="text-danger">
                @error('detail_desc')
                    {{ $message }}
                @enderror
            </span>
            <br>




        <small id="helpId" class="text-muted">Help Text</small>

        </div>

        <button type="submit" class="btn btn-success">Add</button>
        <a href="/package" class="btn btn-danger">Back</a>


    </form>

</main>

@include('adminfooter')
