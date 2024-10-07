@include('adminnav');

<main class="main" id="main">

    <h1>Update {{ $package->package_name }} package</h1>

    <form action="{{ route('package.update', $package->_id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('put')
        <div class="mb-3">
            <label for="" class="form-label">Package Name</label>
            <input type="text" name="package_name" class="form-control" id=""
                value="{{ $package->package_name }}">
            <span class="text-danger">
                @error('package_name')
                    {{ $message }}
                @enderror
            </span>
            <br>

            <label for="" class="form-label">Package Description</label>
            <input type="text" name="package_desc" class="form-control" id=""
                value="{{ $package->package_desc }}">
            <span class="text-danger">
                @error('package_desc')
                    {{ $message }}
                @enderror
            </span>
            <br>
            <div class="row">
                <div class="col"><label for="" class="form-label">Package Price</label>
                    <input type="text" name="package_price" class="form-control" id=""
                        value="{{ $package->package_price }}">
                    <span class="text-danger">
                        @error('package_price')
                            {{ $message }}
                        @enderror
                    </span>

                </div>
                <div class="col"><label for="" class="form-label">Discount</label>
                    <input type="text" name="package_discount" class="form-control" id=""
                        value="{{ $package->package_discount }}">
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
                    <select name="category" id="" class="form-select">
                        @foreach ($categories as $item)
                            <option value="{{ $item->cat_name }}" selected="{{ $package->category }}">
                                {{ $item->cat_name }}</option>
                        @endforeach
                    </select>
                    <span class="text-danger">
                        @error('category')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="col"><label for="" class="form-label">Duration</label>
                    <input type="text" name="duration" class="form-control" id=""
                        value="{{ $package->duration }}">
                    <span class="text-danger">
                        @error('duration')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
                <div class="col"><label for="" class="form-label">Route</label>
                    <input type="text" name="route" class="form-control" id=""
                        value="{{ $package->route }}">
                    <span class="text-danger">
                        @error('route')
                            {{ $message }}
                        @enderror
                    </span>
                </div>
            </div>
            <br>
            <label for="" class="form-label">Detail</label>
            <input type="text" name="detail_desc" class="form-control" id=""
                value="{{ $package->detail_desc }}">
            <span class="text-danger">
                @error('detail_desc')
                    {{ $message }}
                @enderror
            </span>
            <br>




            <small id="helpId" class="text-muted">Help Text</small>

        </div>

        <button type="submit" class="btn btn-success">Update</button>
        <a href="/package" class="btn btn-danger">Back</a>


    </form>

</main>

@include('adminfooter')
