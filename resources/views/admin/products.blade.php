@extends('admin.base')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="col-1 my-3">
                <blockquote class="blockquote">manage products</blockquote>
            </div>
        </div>
    </div>
    <div class="row">
        <table class="table">
            <tr>
                <th>id</th>
                <th>p_title</th>
                <th>brand</th>
                <th>price</th>
                <th>discount_price</th>
                <th>category</th>
                <th>image</th>
            </tr>
            @foreach ($products as $item )
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->p_title}}</td>
                <td>{{$item->brand}}</td>
                <td>{{$item->price}}</td>
                <td>{{$item->discount_price}}</td>
                <td>{{$item->category}}</td>
                <td>{{$item->image}}</td>
                <td>
                    <div class="dropdown">
                        <button type="button" class="btn btn-primary" data-toggle="dropdown-menu" data-bs-toggle="dropdown">Action</button>
                        <div class="dropdown-menu">
                            <a href=""class="dropdown-item"><i class="bi bi-eye"></i></a>
                            <a href=""class="dropdown-item"><i class="bi bi-pencil-square"></i></a>
                            <form action="{{route('admin.product.delete',['id'=>$item->id])}}" method="POST">
                                @method("delete")@csrf
                                <input type="hidden">
                            <button type="submit" class="dropdown-item"><i class="bi bi-trash"></i>Delete</button>
                            </form>
                        </div>
                    </div>
                </td>
            </tr>
                
            @endforeach
        </table>
    </div>
</div>
@endsection