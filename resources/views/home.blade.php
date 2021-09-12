@extends('layout')

@section('content')

<div class="container">
    <div class="row">
    <div class="col-lg-2">
      @livewire('category-list')
    </div>
      <div class="col-10">
      @livewire('products')  
      </div>  
    </div>
</div>
@endsection