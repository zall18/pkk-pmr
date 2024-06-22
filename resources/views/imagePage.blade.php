@extends('layout.index')

@section('container')

    <style>
        .video-container {
            position: relative;
        }

        .video-text {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            padding: 10px;
            display: none;
        }

        .video-container:hover .video-text {
            display: block;
        }   
    </style>


@if ($post->count() > 0)
    <div class="title d-flex align-items-center me-3 mb-3" style="padding-top: 90px">
        <h4 class="ms-3" style="width: 20%">Semua Artikel</h4>
        <div class="bg-dark w-100" style="height: 6px"></div>
    </div>
    <div class="container">
        <div class="row row-cols-lg-4 g-3">
            <div class="col">
                <div class="video-container">
                    <a href="">
                    <img src="{{ asset('images/foto4.jpg') }}" alt="" srcset="" class="image-fluid rounded">
                    </a>
                    <div class="video-text">Your text here</div>
                </div>
            </div>
        </div>
    </div>
@else
<h5 class="text-center"  style="padding-top: 90px">Sorry, we don't have any content right now</h5>
    
@endif
@endsection