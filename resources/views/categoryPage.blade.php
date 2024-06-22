@extends('layout.index')

@section('container')
    
    <h3 class="text-center mb-4" style="padding-top: 90px">All Category</h3>

    <div class="list-group text-center">
        @foreach ($data as $item)
            <a href="#" class="list-group-item list-group-item-action ">{{ $item->title }}</a>
        @endforeach        
    </div>

@endsection