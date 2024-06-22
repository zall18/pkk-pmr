@extends('layout.index')

@section('container')
    
    <div id="banner" class="">
        <div id="banner-content" class="d-flex flex-column justify-content-center align-items-center">
            <img src="{{ asset('/images/pmr-removebg.png') }}" alt="" srcset="" class="mb-4">
            <h1 class="text-white">PMR</h1>
            <h2 class="text-white">SMK YPC TASIKMALAYA</h2>
            <button class="mt-3">Lihat tentang kami!</button>
        </div>
        <div id="cover"></div>
        <img src="{{ asset('/images/foto1.jpg') }}" alt="" srcset="">
    </div>
    <div class="container">
        <div class="information mt-5">
            <div id="cover-pmr" style="width: 100%; height: 60vh; background-color: var(--red); opacity: 0.5; z-index: 0" class="position-absolute"></div>
            <img src="{{ asset('/images/foto1.jpg') }}" alt="" srcset="" class="position-absolute" style="z-index: -1">
            <div class="information-pmr" class="" style="z-index: 2">
                <h1 class="fs-1 mb-5">APA SIH PMR ITU?</h1>
                <p>Palang Merah Remaja (PMR) merupakan bagian dari Gerakan Palang Merah atau Bulan Sabit Merah yang melibatkan remaja dalam kegiatan kemanusiaan. Ini adalah sebuah organisasi di banyak negara yang mengajak remaja untuk terlibat dalam penyuluhan kesehatan, pertolongan pertama, bantuan bencana, serta kegiatan sosial dan kemanusiaan lainnya. PMR bertujuan untuk mengembangkan kepemimpinan, keterampilan sosial, dan nilai-nilai kemanusiaan di kalangan generasi muda sambil memberikan kontribusi positif bagi masyarakat.</p>
            </div>
        </div>
        <h1 class="my-5">Belajar Bersama!</h1>
        {{-- @dd($artikel) --}}
        @if ($artikel->count() > 0)
            <div id="recent-news">
                <div class="row row-cols-lg-4 g-4 ">
                    @foreach ($artikel as $data)
                        
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
            </div>
        @else

            <h5 class="text-center">Sorry, we don't have any content right now</h5>

        @endif
    </div>
    <footer style="width: 100%; height: 60px; background-color: var(--red);" class="mt-5 d-flex text-white justify-content-around align-items-center">
        <p>Palang Merah Remaja</p>
        <img src="{{ asset('/images/pmr-removebg.png') }}" alt="" srcset="" width="50px" height="50px">
        <p>SMK YPC TASIKMALAYA</p>
    </footer>
@endsection