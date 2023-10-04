@extends('./dashboard.master')
@section('title' , 'add to gallery')
@section('content')
<section class="add-partener  w-100">
    <div class="container">
        <h2 class= ''>Add To Gallery</h2>
        <div class="row w-100 ">
            <div class="col-lg-6">
                <div class="">
                   
                    <div class="">
                        <form method="POST" action="{{route('dashboard.gallery.store')}}" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group mb-3">
                                <label for="name"> Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{old('name')?old('name'):''}}" >
                                @error('name')
                                    <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                           <div class="form-floating mb-3">
                         <textarea class="form-control " placeholder="Leave a description here"  value="{{old('description')?old('description'):''}}"
                          id="floatingTextarea" name="description"></textarea>
                         <label for="floatingTextarea">Description</label>
                          @error('description')
                                    <small class="text-danger">{{$message}}</small>
                                @enderror
                           </div>
                            <div class="form-group mb-3">
                                <label for="logo"> Image</label>
                                <input type="file" class="form-control" id="logo" name="image"  value="{{old('image')?old('image'):''}}">
                                 @error('image')
                                    <small class="text-danger">{{$message}}</small>
                                @enderror
                            </div>
                          
                            <button type="submit" class="btn ">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection('content')