@extends('admin.base')

@section('content')
    <div class="container">
        <div class="col-lg-12">
            <form action="{{route('admin.product.insert')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="">title</label>
                    <input type="text" name="p_title" class="form-control">
                    @error('title')
                    <p class="text-danger small">{{$message}}</p>
                        
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="">brand</label>
                    <input type="text" name="brand" class="form-control">
                    @error('brand')
                    <p class="text-danger small">{{$message}}</p>
                        
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="">price</label>
                    <input type="text" name="price" class="form-control">
                    @error('price')
                    <p class="text-danger small">{{$message}}</p>
                        
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="">discount_price</label>
                    <input type="text" name="discount_price" class="form-control">
                    @error('discount_price')
                    <p class="text-danger small">{{$message}}</p>
                        
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="">category</label>
                    <select name="category" class="form-select">
        
                        <option value="">select category</option>
                        {{-- loop for category--}}
                        @foreach ($categories as $cat )
                        <option value="{{$cat->id}}">{{$cat->title}}</option>
                            
                        @endforeach

                    </select>
                    @error('category')
                    <p class="text-danger small">{{$message}}</p>
                        
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="">description</label>
                    <textarea name="description" rows="10" class="form-control">
                    @error('description')
                    <p class="text-danger small">{{$message}}</p>
                        
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="">image</label>
                    <input type="file"  name="image"class="form-file">
                    @error('image')
                    <p class="text-danger small">{{$message}}</p>
                        
                    @enderror
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-success">insert</button>
                </div>
            </form>
        </div>
    </div>
    @endsection