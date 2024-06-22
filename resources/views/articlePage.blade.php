@extends('layout.index')

@section('container')   

@if ($post->count() > 0)
<div class="title d-flex align-items-center me-3 mb-3" style="padding-top: 90px">
    <h4 class="ms-3" style="width: 20%">Semua Artikel</h4>
    <div class="bg-dark w-100" style="height: 6px"></div>
</div>
    <div class="container row row-cols-4 g-3 m-auto">
        @foreach ($post as $data)
            <div class="col">
                <div class="card h-100">
                    <img src="{{ asset('images/foto1.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">{{ $data->title }}</h5>
                    <p class="card-text">{{ $data->desc }}</p>
                    <a href="#" class="btn btn-primary mt-auto">Lihat Selengkapnya!</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="title d-flex align-items-center me-3 mb-3" style="padding-top: 20px">
        <h4 class="ms-3" style="width: 20%">Bagian Obat Obatan</h4>
        <div class="bg-dark w-100" style="height: 6px"></div>
    </div>
    <div class="container row row-cols-4 m-auto gap-2" >
        @foreach ($obat as $data)
            <div class="col">
                <div class="card h-100">
                    <img src="{{ asset('images/foto1.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">{{ $data->title }}</h5>
                    <p class="card-text">{{ $data->desc }}</p>
                    <a href="#" class="btn btn-primary mt-auto">Lihat Selengkapnya!</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="title d-flex align-items-center me-3 mb-3" style="padding-top: 20px">
        <h4 class="ms-3" style="width: 20%">Bagian P3K!</h4>
        <div class="bg-dark w-100" style="height: 6px"></div>
    </div>
    <div class="container row row-cols-4 m-auto g-3">
        @foreach ($p3k as $data)
            <div class="col">
                <div class="card h-100">
                    <img src="{{ asset('images/foto1.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">{{ $data->title }}</h5>
                    <p class="card-text">{{ $data->desc }}</p>
                    <a href="#" class="btn btn-primary mt-auto">Lihat Selengkapnya!</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <div class="title d-flex align-items-center me-3 mb-3" style="padding-top: 20px">
        <h4 class="ms-3" style="width: 20%">Bagian PMR</h4>
        <div class="bg-dark w-100" style="height: 6px"></div>
    </div>
    <div class="container row row-cols-4 m-auto g-3">
        @foreach ($pmr as $data)
            <div class="col">
                <div class="card h-100">
                    <img src="{{ asset('images/foto1.jpg') }}" class="card-img-top" alt="...">
                    <div class="card-body">
                    <h5 class="card-title">{{ $data->title }}</h5>
                    <p class="card-text">{{ $data->desc }}</p>
                    <a href="#" class="btn btn-primary mt-auto">Lihat Selengkapnya!</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@else
<h5 class="text-center"  style="padding-top: 90px">Sorry, we don't have any content right now</h5>
    
@endif
@endsection
