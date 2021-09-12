@extends('admin.base')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-12">
        <button type="button" class="btn btn-success float-end" data-bs-toggle="modal" data-bs-target="#insert">Add</button>
        <div class="modal fade"id="insert">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <form action="{{route('admin.category.insert')}}" method="POST" class="d-flex">
                            @csrf
                                <input type="text" name="title" class="form-control">
                                <input type="submit" class="btn btn-success">

                        </form>
                    </div>
                </div>
            </div>
        </div>
        </div>
        <table class="table">
            <tr>
                <th>id</th>
                <th>title</th>
                <th>action</th>
            </tr>
            @foreach ($categories as $item )
            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->title}}</td>
                
                <td>
                    <div class="dropdown">
                        <button type="button" class="btn btn-primary" data-bs-toggle="dropdown">Action</button>
                        <div class="dropdown-menu">
                            <a href=""class="dropdown-item">edit</a>
                            <a href=""class="dropdown-item">view</a>
                            <form action="{{route('admin.category.delete',['id'=>$item->id])}}" method="POST">
                                @csrf
                                @method('delete')
                            <button type="submit" class="dropdown">delete</button>
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