<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <!-- font awesome 5 -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <!-- Css Aos -->
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <!-- carousel -->
    <link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
    <link rel="stylesheet" href="{{asset('css/style_carousel.css')}}">
    <link rel="shortcut icon" href="{{asset('logo/logo-biru.png')}}" />


	<title>Dwi Achmad Tax Consulting</title>
    <style>
    .custom-section {
    background: linear-gradient(rgba(1,58,99, 0.78), rgba(1,42,74, 0.78)), url("{{asset('img/bg-home.jpg')}}");
    background-size: cover;
    background-repeat: no-repeat;
    color: #fff;
    padding-top:50px;
  }
    </style>

  </head>
  <body>
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-real">
        <div class="container">
            <a class="navbar-brand" href="{{ route('welcome')}}"><img src="{{asset('logo/logo.png')}}" width="48" alt="" srcset=""></a>
            @if(auth()->check())
                <a class="nav-link text-white" href="{{ route('home') }}">Dashboard Admin</a>
            @endif
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="{{ route('welcome')}}">HOME</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#profile">PROFILE</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#jasa">JASA</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#portfolio">PORTOFOLIO</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#peraturan">PERATURAN PERPAJAKAN</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#artikel">ARTIKEL</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="#footer">HUBUNGI KAMI</a>
                </li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="home" class="mt-3 py-5">
      <div class="container mt-5 py-5">
        <div class="row">
            <div class="col-md-8">
                <img src="{{asset('img/artikel/'.$artikel->img)}}" class="img-fluid w-100" alt="" srcset="">
                <h3 class="mt-5">{{$artikel->judul}}</h3>
                {!! $artikel->isi !!}
            </div>
            <div class="col-md-4">
                <h5 class="mb-4">Baca Artikel Lainnya</h5>
                @forelse($lains as $lain)
                <div class="card mb-3" style="max-width: 540px;">
                    <div class="row no-gutters">
                        <div class="col-lg-5">
                            <img src="{{ asset('img/artikel/'.$lain->img) }}" alt="" class="img-fluid h-100">
                        </div>
                        <div class="col-lg-7">
                            <div class="card-body">
                                <h5 style="font-size: 12px; display: -webkit-box; -webkit-line-clamp: 2; -webkit-box-orient: vertical; overflow: hidden; text-overflow: ellipsis;">
                                    {{ $lain->judul }}
                                </h5>
                                <p style="font-size: 12px; white-space: nowrap; overflow: hidden; text-overflow: ellipsis;">{{ $lain->deskripsi }}</p>
                                <div class="d-flex align-items-center">
                                    @if(trim($lain->isi) == '' || $lain->isi === null)
                                        <p class="mb-0 mr-2"><a href="{{ $lain->link }}" target="_blank" class="btn btn-sm btn-warning" style="font-size: 10px">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
                                    @else
                                        <p class="mb-0 mr-2"><a href="{{ route('detail_artikel', ['id' => $lain->id]) }}" class="btn btn-sm btn-warning" style="font-size: 10px">Read More <span class="ion-ios-arrow-round-forward"></span></a></p>
                                    @endif
                                    <span style="font-size: 12px">{{ \Carbon\Carbon::parse($lain->updated_at)->format('j M Y') }}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                @empty
                <p class="text-center">Tidak Ada Artikel</p>
                @endforelse
            </div>
        </div>
      </div>
    </section>
    <section class="bg-footer text-white py-5" id="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-lg-4 my-3">
                    <img src="{{asset('logo/logo.png')}}" width="64" alt="" srcset="">
                    <p class="mt-3 mb-0"><b>Dwi Achmad Tax Consulting</b></p>
                    <p class="mt-0">Tax Consultans, Financial Advisory, Management Consultans, and Tax Academy</p>
                </div>
                <div class="col-md-4 col-lg-3 my-3">
                    <h5 class="mb-3">Ikuti Kami</h5>
                    <a href="" class="text-white"><i class="fab fa-facebook fa-2x mr-3"></i></a>
                    <a href="" class="text-white"><i class="fab fa-instagram fa-2x mr-3"></i></a>
                    <a href="" class="text-white"><i class="fab fa-youtube fa-2x mr-3"></i></a>
                </div>
                <div class="col-md-12 col-lg-5 my-3">
                    <h5 class="mb-3">Hubungi Kami</h5>
                    <form action="{{route('hubungi_kami.store')}}" method="POST" id="hubungi_kami">
                    @csrf
                        <div class="form-group">
                            <input type="text" name="nama" value="{{ old('nama') }}" class="form-control @error('nama') is-invalid @enderror" id="nama" aria-describedby="emailHelp" placeholder="Masukkan nama" >
                            @error('nama')
                                <small class="text-warning">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" value="{{ old('email') }}" class="form-control @error('email') is-invalid @enderror" id="email" aria-describedby="emailHelp" placeholder="Masukkan email">
                            @error('email')
                                <small class="text-warning">{{$message}}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <textarea class="form-control @error('pesan') is-invalid @enderror" name="pesan" id="exampleFormControlTextarea1" rows="3" placeholder="Tulis pesan Anda di sini...">{{ old('pesan') }}</textarea>
                            @error('pesan')
                                <small class="text-warning">{{$message}}</small>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-sm btn-warning float-right">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <div class="fixed-bottomk">
        <button class="btn btn-warning rounded-circle py-3 px-3 floating">
        <a href="https://wa.me/message/JZ72P5I6ZQIQB1" class="text-white" target="_blank"><i class="fas fa-headset" style="font-size:36px"></i></a>
        </button>
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>

    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/popper.js')}}"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js" integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous"></script>
    -->
  </body>
</html>